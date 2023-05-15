@extends('backend.admin-master')

@section('site-title')
    {{ __('Edit Category') }}
@endsection

@push('css')
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
                    <!-- right column -->
                    <div class="col-md-8 offset-md-2">
                        <!-- Horizontal Form -->
                        <div class="card card-info">
                            <div class="card-header bg-dark text-white">
                                <h3 class="card-title mb-0">{{ __('Edit Category') }}</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form action="{{ route('admin.subcategory.update', $category->id) }}" method="POST"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputCategory" hidden>{{ __('Category ID') }}</label>
                                        <input type="text" class="form-control" id="id" name="id" value="{{ $category->parent_id }}"
                                            placeholder="{{ __('Enter Category ID') }}" autocomplete="off" hidden>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCategory">{{ __('Category Name') }}</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}"
                                            placeholder="{{ __('Enter Category Name') }}" autocomplete="off">
                                        {{-- @if ($errors->any())
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif --}}
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-dark">
                                    <button type="submit" class="btn btn-info">{{ __('Update Category') }}</button>
                                    {{-- <a href="#" class="btn btn-warning">{{ __('Back') }}</a> --}}
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('js')
@endpush
