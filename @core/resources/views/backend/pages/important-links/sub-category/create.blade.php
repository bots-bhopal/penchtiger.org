@extends('backend.admin-master')

@section('site-title')
    {{ __('Create Category') }}
@endsection

@push('css')
    <style>
        .website-url {
            display: none;
        }
    </style>
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="margin-top-40"></div>
                        <x-error-msg />
                        <x-flash-msg />
                    </div>

                    <!-- column -->
                    <div class="col-lg-8 offset-lg-2">
                        <!-- form start -->
                        <form action="{{ route('admin.subcategory.store') }}" method="POST" enctype="multipart/form-data"
                            class="form-horizontal">
                            @csrf
                            <!-- Horizontal Form -->
                            <div class="card card-info mb-5">
                                <div class="card-header bg-dark text-white">
                                    <h3 class="card-title mb-0">{{ __('Create Category') }}</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pb-3">
                                    <div class="form-group">
                                        <label for="inputCategory" class="col-form-label">{{ __('Category Name') }}</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="" placeholder="{{ __('Enter Category Name') }}" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">{{ __('Slug') }}</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="{{ __('Slug') }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Select Parent Category</label>
                                        <select name="category" id="category" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-dark">
                                    <button type="submit" class="btn btn-success float-left"><i
                                            class="nav-icon fas fa-upload" style="margin-right: 8px;"></i>ADD CATEGORY</button>
                                    {{-- <a href="#" class="btn btn-danger"><i class="nav-icon fas fa-arrow-circle-left"
                                            style="margin-right: 8px;"></i>BACK</a> --}}
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </form>
                        <!-- /.form end-->
                    </div>
                    <!--/.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('js')
    <script>
        $(function() {
            $("#url").on("click", function() {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            });
        });

        $(function() {
            $('#name').keyup(function(e) {
                $.get('{{ route('subcategory.slug.check') }}', {
                        'name': $(this).val()
                    },
                    function(data) {
                        $('#slug').val(data.slug);
                    }
                );
            });
        });
    </script>
@endpush
