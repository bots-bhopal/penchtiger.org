<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use App\Language;
use App\Link;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Create ImportantLinksCategory
        $all_docs = Link::orderBy('updated_at', 'DESC')->get();
        return view('backend.pages.important-links.index', compact('all_docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create ImportantLinksCategory
        $all_docs = Link::orderBy('updated_at', 'DESC')->get();
        $categories = SubCategory::all();
        // $categories = SubCategory::with(['parent' => function($query){
        //     $query->groupBy('id');
        // }])->get();
        // $categories = SubCategory::with('parent')->groupBy('id')->get();
        // $categories = SubCategory::with('parent')->get();
        // $dth = SubCategory::with('parent')->get();
        // $categories = $dth->mapToGroups(function ($item, $key) {
        //     return [$item->parent['name'] => $item];
        // })->toArray();
        // dd($categories);
        return view('backend.pages.important-links.create', compact(['categories', 'all_docs']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx|max:50000',
            // 'categories' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $title = $request->title;
            $url = $request->customurl;
            $file = $request->file('file');
            // $name = sha1(date('YmdHis') . Str::random(30));
            $fileSizeInByte = File::size($file);

            // Store File
            if (file_exists($file)) {
                $originalFile = basename($file->getClientOriginalName());
                $newFile = $file->getClientOriginalExtension();
                $file->storeAs('public/important_documents', $file->getClientOriginalName());
            } else {
                $originalFile = '';
                $newFile = '';
            }

            $upload = new Link();
            $upload->category_id = $request->categories;
            $upload->title = $title;
            $upload->original_filename = $originalFile;
            $upload->file_extension = $newFile;
            // $upload->filename = $newFile;
            $upload->file_size = $fileSizeInByte;
            $upload->url = $url;
            $upload->expired_at = Carbon::now()->addDays(10);
            $upload->save();

            $upload->categories()->attach([$request->categories => ['created_at' => now(), 'updated_at' => now()]]);

            return redirect()->back()->with([
                'msg' => __('New Document or Link Added...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $links = Link::find($id);
        $categories = SubCategory::all();
        return view('backend.pages.important-links.edit', compact(['links', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Update File
        $upload = Link::find($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'file' => 'mimes:pdf,doc,docx,xls,xlsx|max:50000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $title = $request->title;
            $url = $request->customurl;
            $update_at = $upload->updated_at;

            $upload->category_id = $request->categories;
            $upload->title = $title;
            $upload->url = $url;
            $upload->expired_at = Carbon::now()->addDays(10);
            $upload->update();

            $upload->categories()->sync([$request->categories => ['updated_at' => now()]]);

            return redirect()->route('admin.links')->with([
                'msg' => __('New Document or Link Updated...'),
                'type' => 'success'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Link::where('id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Document or Link Not Found !!');
        } else {
            $data->categories()->detach();
            Link::where('id', $id)->delete();
            $file = "/public/important_documents/" . $data->original_filename;

            if (Storage::exists($file)) {
                Storage::delete($file);
            }
        }

        return redirect()->back()->with([
            'msg' => __('Document or Link Deleted...'),
            'type' => 'success'
        ]);
    }

    public function links_page_settings()
    {
        $all_languages = Language::all();
        return view('backend.pages.important-links.page-settings.setting')->with(['all_languages' => $all_languages]);
    }

    public function update_links_page_settings(Request $request)
    {

        // $this->validate($request, [
        //     'link_page_recent_post_widget_items' => 'nullable|string|max:191',
        //     'link_page_btn_text' => 'nullable|string|max:191'
        // ]);

        $all_languages = Language::all();
        foreach ($all_languages as $lang) {
            $this->validate($request, [
                'link_page_' . $lang->slug . '_read_more_btn_text' => 'nullable|string',
                'link_page_btn_text_' . $lang->slug . '_show_more_btn_text' => 'nullable|string',
            ]);
            $read_more_btn_text = 'link_page_' . $lang->slug . '_read_more_btn_text';
            $show_more_btn_text = 'link_page_btn_text_' . $lang->slug . '_show_more_btn_text';
            update_static_option($read_more_btn_text, $request->$read_more_btn_text);
            update_static_option($show_more_btn_text, $request->$show_more_btn_text);
        }

        return redirect()->back()->with([
            'msg' => __('Settings Update Success...'),
            'type' => 'success'
        ]);
    }
}
