<style>
    .card-box{
        height: 768px;
        overflow-y: auto;
    }

    .card-box::-webkit-scrollbar {
        width: 8px;
    }

    .card-box::-webkit-scrollbar-thumb {
        background-color: #EF7F1A;
        border-radius: 50px;
        border: 3px solid #EF7F1A;
    }

    .card-box::-webkit-scrollbar-track {
        background: #CFD8DC;
    }

    .badge-mix{
        background: #dc3545;
        background-image: linear-gradient(to right, rgba(0,85,10,1) 0%, rgba(0,139,65,1) 51%, rgba(0,85,10,1) 100%);
        color: #FFFFFF;
        transition: 0.5s!important;
        background-size: 200% auto;
        padding: 0.4em 0.4em!important;
    }

    .badge.badge-mix:hover{
        background-position: right center;
        color: #fff;
    }
</style>

@extends('frontend.frontend-page-master')
@section('site-title')
    @php 
        $category='Category Not Availabel'; 
    @endphp

    @foreach($notices_tenders as $category)  @endforeach

    @if($category)
        {{$category->parent->name ?? $category}}
    @endif
    {{-- get_static_option('link_page_' . $user_select_lang_slug . '_name') --}}
@endsection
@section('page-title')
    @if($category)
        {{$category->parent->name ?? $category}}
    @endif
    {{-- get_static_option('link_page_' . $user_select_lang_slug . '_name') --}}
@endsection
@section('page-meta-data')
    <meta name="description" content="{{ get_static_option('link_page_' . $user_select_lang_slug . '_meta_description') }}">
    <meta name="tags" content="{{ get_static_option('link_page_' . $user_select_lang_slug . '_meta_tags') }}">
    {!! render_og_meta_image_by_attachment_id(get_static_option('link_page_' . $user_select_lang_slug . '_meta_image')) !!}
@endsection
@section('content')
    <section class="blog-content-area padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="text-white mb-0">
                                @if($category)
                                    {{$category->parent->name ?? $category}}
                                @endif
                            </h4>
                        </div>
                        <div class="card-body card-box">
                            @forelse($notices_tenders as $category)
                                <span class="badge badge-mix rounded-1" style="font-size: 14px;">{{ $category->name }}</span>
                                @foreach($category->links as $link)
                                <ul class="text-left">
                                    <li class="news-item" style="padding: 4px 4px;">
                                        @if ($link->url)
                                            <img src="{{ asset('assets/frontend/img/www.png') }}"
                                                width="30" class="img-circle" />
                                            <a href="{{ $link->url }}" target="_blank"
                                                style="color:#135e2a; font-weight: 800!important;">{{ $link->title }}</a>
                                            @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                <span class="badge badge-pill badge-danger">New</span>
                                                <!-- <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                    class="img-circle" /> -->
                                            @endif
                                        @endif

                                        @if ($link->file_extension == 'pdf')
                                            <img src="{{ asset('assets/frontend/img/pdf.png') }}"
                                                width="30" class="img-circle" />
                                            <a href="{{ route('user.download', $link->original_filename) }}"
                                                target="_blank"
                                                style="color:#135e2a; font-weight: 800!important;">{{ $link->title }}</a>
                                            @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                <span class="badge badge-pill badge-danger">New</span>
                                                <!-- <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                    class="img-circle" /> -->
                                            @endif
                                        @endif

                                        @if ($link->file_extension == 'doc' || $link->file_extension == 'docx')
                                            <img src="{{ asset('assets/frontend/img/word.png') }}"
                                                width="30" class="img-circle" />
                                            <a href="{{ route('user.download', $link->original_filename) }}"
                                                target="_blank"
                                                style="color:#135e2a; font-weight: 800!important;">{{ $link->title }}</a>
                                            @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                <span class="badge badge-pill badge-danger">New</span>
                                                <!-- <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                    class="img-circle" /> -->
                                            @endif
                                        @endif

                                        @if ($link->file_extension == 'xls' || $link->file_extension == 'xlsx')
                                            <img src="{{ asset('assets/frontend/img/excel.png') }}"
                                                width="30" class="img-circle" />
                                            <a href="{{ route('user.download', $link->original_filename) }}"
                                                target="_blank"
                                                style="color:#135e2a; font-weight: 800!important;">{{ $link->title }}</a>
                                            @if ($link->expired_at > Carbon\Carbon::now()->toDateTimeString())
                                                <span class="badge badge-pill badge-danger">New</span>
                                                <!-- <img src="{{ asset('assets/frontend/img/new.gif') }}"
                                                    class="img-circle" /> -->
                                            @endif
                                        @endif
                                    </li>
                                </ul>
                                @endforeach
                            @empty
                                <ul>
                                    <li class="news-item" style="padding: 4px 4px 0 4px;">
                                        <h4 style="font-weight: 800; text-align: center; color:red;">
                                            {{ __('Document or Link Not Availabel !!') }}</h4>
                                    </li>
                                </ul>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
