<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                <?php if(check_page_permission('admin_manage')): ?>
                    <div class="col-md-3 mt-5 mb-3">
                        <div class="card text-dark mb-3">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.new.user')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($total_admin); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Admin')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(check_page_permission_by_string('Blogs Manage')): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card text-dark  mb-3">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.blog.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-comments"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($blog_count); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Blogs')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(check_page_permission_by_string('News Manage')): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card text-dark  mb-3">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.news.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-comments"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($news_count); ?></span>
                                    <h4 class="title"><?php echo e(__('Total News')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(check_page_permission_by_string('Tenders Manage')): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card text-dark  mb-3">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.tender.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-comments"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($tender_count); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Tenders')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(check_page_permission_by_string('Documents Manage')): ?>
                    <div class="col-md-3 mt-md-5 mb-3">
                        <div class="card text-dark  mb-3">
                            <div class="dsh-box-style">
                                <a href="<?php echo e(route('admin.document.new')); ?>" class="add-new"><i class="ti-plus"></i></a>
                                <div class="icon">
                                    <i class="ti-comments"></i>
                                </div>
                                <div class="content">
                                    <span class="total"><?php echo e($tender_count); ?></span>
                                    <h4 class="title"><?php echo e(__('Total Documents')); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                
                </div>
            </div>
        </div>

        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\penchtiger.org\@core\resources\views/backend/admin-home.blade.php ENDPATH**/ ?>