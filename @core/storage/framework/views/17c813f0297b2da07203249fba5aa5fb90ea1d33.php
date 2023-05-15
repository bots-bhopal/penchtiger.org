<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Important Link Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
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
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Important Link Page Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.links.page.settings')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="nav-item nav-link <?php if($key == 0): ?> active <?php endif; ?>"
                                            data-toggle="tab" href="#nav-home-<?php echo e($lang->slug); ?>" role="tab"
                                            aria-selected="true"><?php echo e($lang->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                <?php $__currentLoopData = $all_languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane fade <?php if($key == 0): ?> show active <?php endif; ?>"
                                        id="nav-home-<?php echo e($lang->slug); ?>" role="tabpanel">
                                        <div class="form-group">
                                            <label
                                                for="link_page_<?php echo e($lang->slug); ?>_read_more_btn_text"><?php echo e(__('Enter Title Here')); ?></label>
                                            <input type="text" class="form-control"
                                                id="link_page_<?php echo e($lang->slug); ?>_read_more_btn_text"
                                                name="link_page_<?php echo e($lang->slug); ?>_read_more_btn_text"
                                                value="<?php echo e(get_static_option('link_page_' . $lang->slug . '_read_more_btn_text')); ?>"
                                                placeholder="<?php echo e(__('Enter Title Here')); ?>">
                                        </div>

                                        <div class="form-group">
                                            <label
                                            for="link_page_btn_text_<?php echo e($lang->slug); ?>_show_more_btn_text"><?php echo e(__('Enter Button Caption Here')); ?></label>
                                            <input type="text" class="form-control"
                                                id="link_page_btn_text_<?php echo e($lang->slug); ?>_show_more_btn_text"
                                                name="link_page_btn_text_<?php echo e($lang->slug); ?>_show_more_btn_text"
                                                value="<?php echo e(get_static_option('link_page_btn_text_' . $lang->slug . '_show_more_btn_text')); ?>"
                                                placeholder="<?php echo e(__('Enter Button Caption Here')); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            

                            <button type="submit"
                                class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Link Page Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\penchtiger.org\@core\resources\views/backend/pages/important-links/page-settings/setting.blade.php ENDPATH**/ ?>