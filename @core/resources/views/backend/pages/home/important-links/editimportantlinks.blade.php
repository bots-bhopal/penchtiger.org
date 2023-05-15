@extends('backend.admin-master')

@section('site-title')
    {{ __('Important Documents Page') }}
@endsection

@push('css')
    <style>
        .website-url {
            display: none
        }
    </style>
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- form start -->
                <form action="{{ route('admin.home07.important.links.update', $links->id) }}" method="POST"
                    enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="margin-top-40"></div>
                            <x-error-msg />
                            <x-flash-msg />
                        </div>
                        <!-- left column -->
                        {{-- <div class="col-lg-7 col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">{{ __('Important Document or Links') }}</h4>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        @php $a=0; @endphp
                                        @foreach ($all_docs as $key => $data)
                                            <li class="nav-item">
                                                <a class="nav-link @if ($a == 0) active @endif"
                                                    data-toggle="tab" href="#slider_tab_{{ $key }}" role="tab"
                                                    aria-controls="home"
                                                    aria-selected="true">{{ get_language_by_slug($key) }}</a>
                                            </li>
                                            @php $a++; @endphp
                                        @endforeach
                                    </ul>
                                    <div class="tab-content margin-top-40">
                                        <div class="table-wrap table-responsive">
                                            <table class="table table-default" id="all_docs_table">
                                                <thead>
                                                    <th>{{ __('ID') }}</th>
                                                    <th>{{ __('Title') }}</th>
                                                    <th>{{ __('File Name') }}</th>
                                                    <th>{{ __('URL') }}</th>
                                                    <th>{{ __('Action') }}</th>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_docs as $key => $docs)
                                                        <tr>
                                                            <td>{{ $docs->id }}</td>
                                                            <td>{{ $docs->title }}</td>
                                                            <td>{{ $docs->original_filename }}</td>
                                                            <td>{{ $docs->url }}</td>
                                                            <td class="text-center">
                                                                <a href="#" class="btn btn-sm btn-primary mt-1"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Edit"
                                                                    style="font-size: 14px; font-weight: 500;"><i
                                                                        class="far fa-edit"></i> Edit</a>

                                                                <button type="button" class="btn btn-sm btn-danger mt-1"
                                                                    onclick="deleteTender({{ $docs->id }})"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete"
                                                                    style="font-size: 14px; font-weight: 500;"><i
                                                                        class="fa fa-trash-alt"></i> Delete</button>
                                                                <form id="delete-form-{{ $docs->id }}" action="#"
                                                                    method="POST" style="display: none;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                </form>

                                                                <a href="#" class="btn btn-sm btn-success mt-1"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Download"
                                                                    style="font-size: 14px; font-weight: 500;"><i
                                                                        class="fa fa-download"></i> Download</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card -->
                        </div> --}}
                        <!--/.col (left) -->

                        <!-- right column -->
                        <div class="col-lg-8 col-md-8 offset-lg-2 offset-md-2">
                            <!-- Horizontal Form -->
                            <div class="card card-info mt-5 mb-5">
                                <div class="card-header bg-dark text-white">
                                    <h3 class="card-title mb-0">EDIT IMPORTANT DOCUMENT</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pb-3">
                                    <div class="form-group">
                                        <label for="inputTitle" class="col-form-label">{{ __('Title') }}</label>

                                        <input type="title" class="form-control" id="title" name="title"
                                            value="{{ $links->title }}" placeholder="{{ __('Enter Title') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Select Categories</label>
                                        <select name="categories[]" id="category"
                                            class="form-control {{ $errors->any() && $errors->first('categories') ? 'is-invalid' : '' }}">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- @if ($links->original_filename)
                                        <div class="file-group">
                                            <div class="form-group">
                                                <label>Choose File</label>
                                                <input type="file" class="form-control-file col-12 pl-0" name="file">
                                            </div>
                                        </div>
                                    @endif --}}

                                    {{-- <div class="file-group">
                                        <div class="form-group">
                                            <label hidden>Old File</label>
                                            <input type="file" class="form-control-file col-12 pl-0" id="oldfile"
                                                name="oldfile" value="{{ $links->original_filename }}">
                                        </div>
                                    </div> --}}

                                    @if ($links->url)
                                        <div class="form-group url mb-0">
                                            <label for="url">Do you have a Website URL?</label>
                                            <input id="url" type="checkbox" name="url" value="1" />
                                        </div>
                                    @endif

                                    <div class="form-group website-url">
                                        <label for="inputUrl" class="col-form-label">{{ __('Normal URL') }}</label>

                                        <input type="url" class="form-control" id="customurl" name="customurl"
                                            value="{{ $links->url }}" placeholder="{{ __('https://www.example.com') }}"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-dark">
                                    <button type="submit" class="btn btn-success float-left"><i
                                            class="nav-icon fas fa-upload" style="margin-right: 8px;"></i>UPDATE</button>
                                    {{-- <a href="#" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left"
                                            style="margin-right: 8px;"></i>BACK</a> --}}
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </form>
                <!-- /.form end-->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $("#url").prop('checked', true);

            if ($('#url').is(':checked') == true) {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            }
        });

        $(function() {
            $("#url").on("click", function() {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            });
        });
    </script>
@endpush
