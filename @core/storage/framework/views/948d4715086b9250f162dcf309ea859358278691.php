

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Create Category')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        .website-url {
            display: none;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="margin-top-40"></div>
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-msg','data' => []]); ?>
<?php $component->withName('error-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                         <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.flash-msg','data' => []]); ?>
<?php $component->withName('flash-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>

                    <!-- column -->
                    <div class="col-lg-8 offset-lg-2">
                        <!-- form start -->
                        <form action="<?php echo e(route('admin.subcategory.store')); ?>" method="POST" enctype="multipart/form-data"
                            class="form-horizontal">
                            <?php echo csrf_field(); ?>
                            <!-- Horizontal Form -->
                            <div class="card card-info mb-5">
                                <div class="card-header bg-dark text-white">
                                    <h3 class="card-title mb-0"><?php echo e(__('Create Category')); ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body pb-3">
                                    <div class="form-group">
                                        <label for="inputCategory" class="col-form-label"><?php echo e(__('Category Name')); ?></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="" placeholder="<?php echo e(__('Enter Category Name')); ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="slug"><?php echo e(__('Slug')); ?></label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="<?php echo e(__('Slug')); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Select Parent Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-dark">
                                    <button type="submit" class="btn btn-success float-left"><i
                                            class="nav-icon fas fa-upload" style="margin-right: 8px;"></i>ADD CATEGORY</button>
                                    
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        $(function() {
            $("#url").on("click", function() {
                $(".website-url").toggle(this.checked);
                $(".file-group").toggle(this.unchecked);
            });
        });

        $(function() {
            $('#name').keyup(function(e) {
                $.get('<?php echo e(route('subcategory.slug.check')); ?>', {
                        'name': $(this).val()
                    },
                    function(data) {
                        $('#slug').val(data.slug);
                    }
                );
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\penchtiger.org\@core\resources\views/backend/pages/important-links/sub-category/create.blade.php ENDPATH**/ ?>