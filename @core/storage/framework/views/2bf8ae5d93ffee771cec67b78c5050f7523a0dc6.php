<style>
    .header-style-01.navbar-variant-01 .navbar-area.nav-style-01 {
        background-color: transparent;
    }

    .navbar-area.nav-style-01 .nav-container .logo-wrapper img {
        max-height: 60px;
    }
</style>


<div class="header-style-01 navbar-variant-01">
    <nav class="navbar navbar-area nav-absolute navbar-expand-lg nav-style-01">
        <div class="container-fluid nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo-wrapper">
                    <a href="<?php echo e(url('/')); ?>" class="logo">
                        <?php if(!empty(filter_static_option_value('site_white_logo', $global_static_field_data))): ?>
                            <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_white_logo', $global_static_field_data)); ?>

                        <?php else: ?>
                            <h2 class="site-title">
                                <?php echo e(filter_static_option_value('site_' . $user_select_lang_slug . '_title', $global_static_field_data)); ?>

                            </h2>
                        <?php endif; ?>
                    </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                <ul class="navbar-nav">
                    <?php echo render_frontend_menu($primary_menu); ?>

                    <?php if(!empty(filter_static_option_value('language_select_option', $global_static_field_data))): ?>
                        <li>
                            <select id="langchange">
                                <?php $__currentLoopData = $all_language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($user_select_lang_slug == $lang->slug): ?> selected <?php endif; ?>
                                        value="<?php echo e($lang->slug); ?>" class="lang-option">
                                        <?php echo e(explode('(', $lang->name)[0] ?? $lang->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH E:\xampp\htdocs\penchtiger.org\@core\resources\views/frontend/partials/navbar-variant/navbar-01.blade.php ENDPATH**/ ?>