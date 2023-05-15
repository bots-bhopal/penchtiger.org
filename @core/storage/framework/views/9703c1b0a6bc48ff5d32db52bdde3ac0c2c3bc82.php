<style>
    .top-bar-inner ul li a, #langchange {
        color: #fff;
    }
    
    .industry-single-what-we-cover-item::-webkit-scrollbar {
        width: 5px;
    }
    
    .industry-single-what-we-cover-item {
      scrollbar-width: thin;
      scrollbar-color: #90A4AE #CFD8DC;
    }
    
    .industry-single-what-we-cover-item::-webkit-scrollbar-track {
      background: #CFD8DC;
    }
    
    .industry-single-what-we-cover-item::-webkit-scrollbar-thumb {
      background-color: #EF7F1A ;
      border-radius: 0px;
      border: 3px solid #EF7F1A;
    }

    .scroll-bar{
        overflow-y: auto!important;
    }

    .scroll-bar::-webkit-scrollbar {
        width: 6px;
    }

    .scroll-bar::-webkit-scrollbar-thumb {
        background-color: #EF7F1A;
        border-radius: 50px;
        border: 3px solid #EF7F1A;
    }

    .scroll-bar::-webkit-scrollbar-track {
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

<?php
$home_page_variant = $home_page ?? get_static_option('home_page_variant');
?>
<div class="navbar-variant-03">
    <div class="industry-support-wrap">
        <div class="container">
            <div class="row justify-content-end banner-position">
                <div class="col-lg-10 pt-2">
                    <div class="industry-support-inner-wrap">
                        <div class="left-content">
                            <img src="<?php echo e(asset('assets/uploads/pench-banner.png')); ?>" alt="pench-tiger-reserve-banner">
                            
                        </div>
                        <div class="right-content">
                            <ul class="industry-top-right-list">
                                
                                <?php if(!empty(get_static_option('language_select_option'))): ?>
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
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-style-03  header-variant-<?php echo e($home_page_variant); ?>">
        <nav class="navbar navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <?php if(!empty(filter_static_option_value('site_logo', $global_static_field_data))): ?>
                                <?php echo render_image_markup_by_attachment_id(filter_static_option_value('site_logo', $global_static_field_data)); ?>

                            <?php else: ?>
                                <h2 class="site-title">
                                    <?php echo e(filter_static_option_value('site_' . $user_select_lang_slug . '_title', $global_static_field_data)); ?>

                                </h2>
                            <?php endif; ?>
                        </a>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <?php echo render_frontend_menu($primary_menu); ?>

                    </ul>
                </div>
                
            </div>
        </nav>
    </div>
</div>


    <div class="header-slider-one global-carousel-init banner-top-box logistic-dots" data-loop="true" data-desktopitem="1"
        data-mobileitem="1" data-tabletitem="1" data-nav="true" data-autoplay="true">
        <?php
            $all_bg_image_fields = filter_static_option_value('home_page_07_header_section_bg_image', $static_field_data);
            $all_bg_image_fields = !empty($all_bg_image_fields) ? unserialize($all_bg_image_fields) : [];
            $all_button_one_url_fields = filter_static_option_value('home_page_07_header_section_button_one_url', $static_field_data);
            $all_button_one_url_fields = !empty($all_button_one_url_fields) ? unserialize($all_button_one_url_fields) : [];
            
            $all_button_one_icon_fields = filter_static_option_value('home_page_07_header_section_button_one_icon', $static_field_data);
            $all_button_one_icon_fields = !empty($all_button_one_icon_fields) ? unserialize($all_button_one_icon_fields) : [];
            
            $all_description_fields = filter_static_option_value('home_page_07_' . $user_select_lang_slug . '_header_section_description', $static_field_data);
            $all_description_fields = !empty($all_description_fields) ? unserialize($all_description_fields) : [];
            $all_btn_one_text_fields = filter_static_option_value('home_page_07_' . $user_select_lang_slug . '_header_section_button_one_text', $static_field_data);
            $all_btn_one_text_fields = !empty($all_btn_one_text_fields) ? unserialize($all_btn_one_text_fields) : [];
            $all_title_fields = filter_static_option_value('home_page_07_' . $user_select_lang_slug . '_header_section_title', $static_field_data);
            $all_title_fields = !empty($all_title_fields) ? unserialize($all_title_fields) : [];
        ?>
        <?php $__currentLoopData = $all_bg_image_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $image_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="header-area style-04 header-bg-04 industry-home" <?php echo render_background_image_markup_by_attachment_id($image_field); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-inner industry-home">
                                <?php if(isset($all_title_fields[$index])): ?>
                                    <h1 class="title"><?php echo e($all_title_fields[$index]); ?></h1>
                                <?php endif; ?>
                                <?php if(isset($all_description_fields[$index])): ?>
                                    <p class="description"><?php echo e($all_description_fields[$index]); ?></p>
                                <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<?php if(!empty(filter_static_option_value('home_page_about_us_section_status', $static_field_data))): ?>
    <div class="industry-about-area padding-top-0 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-wrap">
                        <img src="<?php echo e(asset('assets/frontend/img/shape/07.png')); ?>" class="shape" alt="about">
                        <div class="vertical-image">
                            <?php echo render_image_markup_by_attachment_id(filter_static_option_value('industry_about_section_left_image', $static_field_data), '', 'full'); ?>

                        </div>
                        <div class="industry-video-wrap">
                            <?php echo render_image_markup_by_attachment_id(filter_static_option_value('industry_about_section_video_background_image', $static_field_data), '', 'full'); ?>

                            <div class="hover">
                                <a href="<?php echo e(filter_static_option_value('industry_about_section_video_url', $static_field_data)); ?>"
                                    class="mfp-iframe  vdo-btn"><i class="fas fa-play"></i></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area margin-top-40">
                        <span
                            class="subtitle"><?php echo e(filter_static_option_value('industry_about_section_' . $user_select_lang_slug . '_subtitle', $static_field_data)); ?></span>
                        <h4 class="title">
                            <?php echo e(filter_static_option_value('industry_about_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h4>
                        <div class="description"><?php echo filter_static_option_value('industry_about_section_' . $user_select_lang_slug . '_description', $static_field_data); ?></div>
                        <div class="btn-wrapper">
                            <a href="<?php echo e(filter_static_option_value('industry_about_section_button_one_url', $static_field_data)); ?>"
                                class="industry-btn black"><?php echo e(filter_static_option_value('industry_about_section_' . $user_select_lang_slug . '_button_one_text', $static_field_data)); ?>

                                <i class="<?php echo e(filter_static_option_value('industry_about_section_button_one_icon', $static_field_data)); ?>"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(!empty(filter_static_option_value('home_page_service_section_status', $static_field_data))): ?>
    <div class="industry-what-we-offer-area padding-top-0 padding-bottom-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title desktop-center margin-bottom-60 industry-home">
                        <span class="subtitle"><?php echo e(filter_static_option_value('industry_what_we_offer_section_' . $user_select_lang_slug . '_subtitle', $static_field_data)); ?></span>
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('industry_what_we_offer_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $all_service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="industry-single-what-we-cover-item margin-bottom-30">
                            <?php if($data->icon_type == 'icon' || $data->icon_type == ''): ?>
                                <div class="icon">
                                    <i class="<?php echo e($data->icon); ?>"></i>
                                </div>
                            <?php else: ?>
                                <div class="img-icon">
                                    <?php echo render_image_markup_by_attachment_id($data->img_icon); ?>

                                </div>
                            <?php endif; ?>
                            <div class="content">
                                <h4 class="title">
                                    
                                    <?php echo e($data->title); ?>

                                </h4>
                                <p><?php echo e($data->excerpt); ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>




<?php if(!empty(filter_static_option_value('home_page_links_comments_section_status', $static_field_data))): ?>
    <div class="estimate-area-wrap cleaning-home">
        <div class="top-part padding-top-60">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 mb-sm-5">
                        
                        <div class="card" style="height: 520px;">
                            <div class="card-header text-white" style="background-color: #EF7F1A!important;">
                                <span class="glyphicon glyphicon-list-alt"></span><b>
                                    <?php 
                                       $category='Category Not Availabel'; 
                                    ?>

                                    <?php $__currentLoopData = $notices_tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($category): ?>
                                        <?php echo e($category->parent->name ?? $category); ?>

                                    <?php endif; ?>
                                </b>
                                
                            </div>
                            <div class="card-body scroll-bar" style="overflow: hidden; padding: 0.8rem 1.25rem;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php $__empty_1 = true; $__currentLoopData = $notices_tenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <span class="badge badge-mix rounded-1" style="font-size: 14px;"><?php echo e($category->name); ?></span>
                                            <ul class="text-left">
                                            <?php $__currentLoopData = $category->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="news-item" style="padding: 4px 4px;">
                                                    <?php if($link->url): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/www.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e($link->url); ?>" target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'pdf'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'doc' || $link->file_extension == 'docx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>  
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'xls' || $link->file_extension == 'xlsx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <ul>
                                                <li class="news-item" style="padding: 4px 4px 0 4px;">
                                                    <h4 style="font-weight: 800; text-align: center; color:red;">
                                                        <?php echo e(__('Document or Link Not Availabel !!')); ?></h4>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #EF7F1A!important; color: #fff!important;">
                                <b>
                                    <a href="<?php echo e(route('frontend.notifications')); ?>">
                                        <?php echo e(get_static_option('link_page_btn_text_' . $user_select_lang_slug . '_show_more_btn_text')); ?>

                                    </a>
                                </b>

                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 mb-sm-5">
                        
                        <div class="card" style="height: 520px;">
                            <div class="card-header text-white" style="background-color: #EF7F1A!important;">
                                <span class="glyphicon glyphicon-list-alt"></span><b>
                                    <?php 
                                       $category='Category Not Availabel'; 
                                    ?>

                                    <?php $__currentLoopData = $documents_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($category): ?>
                                        <?php echo e($category->parent->name ?? $category); ?>

                                    <?php endif; ?>
                                </b>
                                
                            </div>
                            <div class="card-body scroll-bar" style="overflow: hidden; padding: 0.8rem 1.25rem;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php $__empty_1 = true; $__currentLoopData = $documents_links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <span class="badge badge-mix rounded-1" style="font-size: 14px;"><?php echo e($category->name); ?></span>
                                            <?php $__currentLoopData = $category->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ul class="text-left">
                                                <li class="news-item" style="padding: 4px 4px;">
                                                    <?php if($link->url): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/www.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e($link->url); ?>" target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'pdf'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'doc' || $link->file_extension == 'docx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>  
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'xls' || $link->file_extension == 'xlsx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <ul>
                                                <li class="news-item" style="padding: 4px 4px 0 4px;">
                                                    <h4 style="font-weight: 800; text-align: center; color:red;">
                                                        <?php echo e(__('Document or Link Not Availabel !!')); ?></h4>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #EF7F1A!important; color: #fff!important;">
                                <b>
                                    <a href="<?php echo e(route('frontend.links')); ?>">
                                        <?php echo e(get_static_option('link_page_btn_text_' . $user_select_lang_slug . '_show_more_btn_text')); ?>

                                    </a>
                                </b>

                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(!empty(filter_static_option_value('home_page_links_comments_section_status', $static_field_data))): ?>
    <div class="estimate-area-wrap cleaning-home">
        <div class="top-part padding-top-60">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 mb-sm-5">
                        
                        <div class="card" style="height: 520px;">
                            <div class="card-header text-white" style="background-color: #EF7F1A!important;">
                                <span class="glyphicon glyphicon-list-alt"></span><b>
                                    <?php 
                                       $category='Category Not Availabel'; 
                                    ?>

                                    <?php $__currentLoopData = $tcp_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if($category): ?>
                                        <?php echo e($category->parent->name ?? $category); ?>

                                    <?php endif; ?>
                                </b>
                                
                            </div>
                            <div class="card-body scroll-bar" style="overflow: hidden; padding: 0.8rem 1.25rem;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php $__empty_1 = true; $__currentLoopData = $tcp_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <span class="badge badge-mix rounded-1" style="font-size: 14px;"><?php echo e($category->name); ?></span>
                                            <?php $__currentLoopData = $category->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ul class="text-left">
                                                <li class="news-item" style="padding: 4px 4px;">
                                                    <?php if($link->url): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/www.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e($link->url); ?>" target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'pdf'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/pdf.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'doc' || $link->file_extension == 'docx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/word.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>  
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($link->file_extension == 'xls' || $link->file_extension == 'xlsx'): ?>
                                                        <img src="<?php echo e(asset('assets/frontend/img/excel.png')); ?>"
                                                            width="30" class="img-circle" />
                                                        <a href="<?php echo e(route('user.download', $link->original_filename)); ?>"
                                                            target="_blank"
                                                            style="color:#135e2a; font-weight: 800!important;"><?php echo e($link->title); ?></a>
                                                        <?php if($link->expired_at > Carbon\Carbon::now()->toDateTimeString()): ?>
                                                            <span class="badge badge-pill badge-danger">New</span>
                                                            <!-- <img src="<?php echo e(asset('assets/frontend/img/new.gif')); ?>"
                                                                class="img-circle" /> -->
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <ul>
                                                <li class="news-item" style="padding: 4px 4px 0 4px;">
                                                    <h4 style="font-weight: 800; text-align: center; color:red;">
                                                        <?php echo e(__('Document or Link Not Availabel !!')); ?></h4>
                                                </li>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #EF7F1A!important; color: #fff!important;">
                                <b>
                                    <a href="<?php echo e(route('frontend.tcps')); ?>">
                                        <?php echo e(get_static_option('link_page_btn_text_' . $user_select_lang_slug . '_show_more_btn_text')); ?>

                                    </a>
                                </b>

                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="estimate-form-wrapper" style="height: 520px;">
                            <h4 class="title text-white">
                                <?php echo e(filter_static_option_value('home_page_07_' . $user_select_lang_slug . '_estimate_area_form_title', $static_field_data)); ?>

                            </h4>
                            <form action="<?php echo e(route('frontend.estimate.message')); ?>" id="get_in_touch_form"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="error-message"></div>
                                <?php echo render_form_field_for_frontend(filter_static_option_value('estimate_form_fields', $static_field_data)); ?>

                                <div class="btn-wrapper">
                                    <button type="submit" id="get_in_touch_submit_btn"
                                        class="submit-btn cleaning-home"><?php echo e(filter_static_option_value('home_page_07_' . $user_select_lang_slug . '_estimate_area_form_button_text', $static_field_data)); ?></button>
                                    <div class="ajax-loading-wrap hide">
                                        <div class="sk-fading-circle">
                                            <div class="sk-circle1 sk-circle"></div>
                                            <div class="sk-circle2 sk-circle"></div>
                                            <div class="sk-circle3 sk-circle"></div>
                                            <div class="sk-circle4 sk-circle"></div>
                                            <div class="sk-circle5 sk-circle"></div>
                                            <div class="sk-circle6 sk-circle"></div>
                                            <div class="sk-circle7 sk-circle"></div>
                                            <div class="sk-circle8 sk-circle"></div>
                                            <div class="sk-circle9 sk-circle"></div>
                                            <div class="sk-circle10 sk-circle"></div>
                                            <div class="sk-circle11 sk-circle"></div>
                                            <div class="sk-circle12 sk-circle"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<?php endif; ?>


<?php if(!empty(filter_static_option_value('home_page_case_study_section_status', $static_field_data))): ?>
    <div class="industry-project-area padding-top-0 padding-bottom-0">
        <div class="container">
            <div class="row margin-top-60">
                <div class="col-lg-8">
                    <div class="section-title industry-home">
                        <span class="subtitle"><?php echo e(filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_subtitle', $static_field_data)); ?></span>
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project-carousel-nav"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="3"
                        data-mobileitem="1" data-tabletitem="1" data-dots="true" data-nav="true"
                        data-autoplay="true" data-margin="30" data-navcontainer=".project-carousel-nav">
                        <?php $__currentLoopData = $all_gallery_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-gallery-image">
                                <?php echo render_image_markup_by_attachment_id($data->image); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="btn-wrapper text-center mt-2">
                        <a href="<?php echo e(route('frontend.image.gallery')); ?>" class="industry-btn black"><?php echo e(filter_static_option_value('industry_project_section_' . $user_select_lang_slug . '_button_text', $static_field_data)); ?>

                            <i class="<?php echo e(filter_static_option_value('industry_about_section_button_one_icon', $static_field_data)); ?>"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>






<?php if(!empty(filter_static_option_value('home_page_latest_news_section_status', $static_field_data))): ?>
    <section class="blog-area padding-top-80 padding-bottom-80 bg-liteblue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 industry-home">
                        <span
                            class="subtitle"><?php echo e(filter_static_option_value('industry_news_area_section_' . $user_select_lang_slug . '_subtitle', $static_field_data)); ?></span>
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('industry_news_area_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-carosel-wrapper">
                        <div class="blog-grid-carousel global-carousel-init" data-loop="true" data-desktopitem="2"
                            data-mobileitem="1" data-tabletitem="1" data-nav="true" data-autoplay="true"
                            data-margin="30">
                            <?php $__currentLoopData = $all_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-blog-grid-01" <?php echo render_background_image_markup_by_attachment_id($data->image, 'large'); ?>>
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li>
                                                <a href="<?php echo e(route('frontend.news.single', $data->slug)); ?>"><i
                                                        class="far fa-clock"></i>
                                                    <?php echo e(date_format($data->created_at, 'd M Y')); ?>

                                                </a>
                                            </li>
                                        </ul>
                                        <h4 class="title"><a
                                                href="<?php echo e(route('frontend.news.single', $data->slug)); ?>"><?php echo e($data->title); ?></a>
                                        </h4>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="btn-wrapper text-center mt-2">
                        <a href="<?php echo e(route('frontend.news')); ?>" class="industry-btn black">
                            <?php echo e(filter_static_option_value('industry_news_area_section_' . $user_select_lang_slug . '_btn_text', $static_field_data)); ?>

                            <i class="<?php echo e(filter_static_option_value('industry_about_section_button_one_icon', $static_field_data)); ?>"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if(!empty(filter_static_option_value('home_page_blog_post_section_status', $static_field_data))): ?>
    <div class="industry-news-area padding-top-80 padding-bottom-80 industry-section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title desktop-center margin-bottom-60 industry-home">
                        <span
                            class="subtitle"><?php echo e(filter_static_option_value('industry_blog_area_section_' . $user_select_lang_slug . '_subtitle', $static_field_data)); ?></span>
                        <h2 class="title">
                            <?php echo e(filter_static_option_value('industry_blog_area_section_' . $user_select_lang_slug . '_title', $static_field_data)); ?>

                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-grid-carosel-wrapper">
                        <div class="global-carousel-init logistic-dots" data-loop="true" data-desktopitem="3"
                            data-mobileitem="1" data-tabletitem="2" data-dots="true" data-autoplay="true"
                            data-margin="30">
                            <?php $__currentLoopData = $all_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-portfolio-blog-grid industry-page">
                                    <div class="thumb">
                                        <?php echo render_image_markup_by_attachment_id($data->image, 'grid'); ?>

                                        <div class="time-wrap">
                                            <span class="date"><?php echo e(date_format($data->created_at, 'd')); ?></span>
                                            <span class="month"><?php echo e(date_format($data->created_at, 'M')); ?></span>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a
                                                href="<?php echo e(route('frontend.blog.single', $data->slug)); ?>"><?php echo e($data->title); ?></a>
                                        </h4>
                                        <p class="excerpt"><?php echo e(strip_tags($data->excerpt)); ?></p>
                                        <a class="readmore"
                                            href="<?php echo e(route('frontend.blog.single', $data->slug)); ?>"><?php echo e(filter_static_option_value('portfolio_news_section_' . $user_select_lang_slug . '_button_text', $static_field_data)); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="btn-wrapper text-center text-white mt-2">
                        <a href="<?php echo e(route('frontend.blog')); ?>" class="industry-btn black">
                            <?php echo e(filter_static_option_value('industry_blog_area_section_' . $user_select_lang_slug . '_btn_text', $static_field_data)); ?>

                            <i class="<?php echo e(filter_static_option_value('industry_about_section_button_one_icon', $static_field_data)); ?>"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#get_in_touch_submit_btn', function(e) {
                e.preventDefault();
                var myForm = document.getElementById('get_in_touch_form');
                var formData = new FormData(myForm);

                $.ajax({
                    type: "POST",
                    url: "<?php echo e(route('frontend.estimate.message')); ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                            .removeClass('hide').addClass('show');
                    },
                    success: function(data) {
                        var errMsgContainer = $('#get_in_touch_form').find('.error-message');
                        $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                            .removeClass('show').addClass('hide');
                        errMsgContainer.html('');

                        if (data.status == '400') {
                            errMsgContainer.append(
                                '<span class="text-dark" style="font-weight: 600;">' + data
                                .msg +
                                '</span>');
                        } else {
                            errMsgContainer.append(
                                '<span class="text-success" style="font-weight: 600;">' +
                                data.msg +
                                '</span>');
                        }
                    },
                    error: function(data) {
                        var error = data.responseJSON;
                        var errMsgContainer = $('#get_in_touch_form').find('.error-message');
                        errMsgContainer.html('');
                        $.each(error.errors, function(index, value) {
                            errMsgContainer.append(
                                '<span class="text-dark" style="font-weight: 600;">' +
                                value + '</span>');
                        });
                        $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                            .removeClass('show').addClass('hide');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH E:\xampp\htdocs\penchtiger.org\@core\resources\views/frontend/home-pages/home-07.blade.php ENDPATH**/ ?>