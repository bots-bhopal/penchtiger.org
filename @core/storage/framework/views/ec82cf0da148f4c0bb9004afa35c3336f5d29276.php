<div class="single-what-we-cover-item-02 margin-bottom-30">
    <div class="single-what-img">
        <?php echo render_image_markup_by_attachment_id($service->image); ?>

    </div>
    <?php if($service->icon_type === 'icon' || $service->icon_type == ''): ?>
        <div class="icon-02 style-0<?php echo e($increment ?? ''); ?>">
            <i class="<?php echo e($service->icon); ?>"></i>
        </div>
    <?php else: ?>
        <div class="img-icon style-0<?php echo e($increment ?? ''); ?>">
            <?php echo render_image_markup_by_attachment_id($service->img_icon); ?>

        </div>
    <?php endif; ?>
    <div class="content">
        <a href="<?php echo e(route('frontend.services.single', $service->slug)); ?>">
            <h4 class="title"><?php echo e($service->title); ?></h4>
        </a>
        <p><?php echo e($service->excerpt); ?></p>
        <div class="btn-wrapper">
            <a href="<?php echo e(route('frontend.news.single', $news->slug)); ?>"
                class="boxed-btn reverse-color"><?php echo e(get_static_option('news_page_' . $user_select_lang_slug . '_read_more_btn_text')); ?></a>
        </div>
    </div>
</div>
<?php /**PATH /home/u376743586/domains/penchtiger.org/public_html/@core/resources/views/components/frontend/service/grid.blade.php ENDPATH**/ ?>