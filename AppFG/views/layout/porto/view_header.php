<?php
defined('BASEPATH') or exit('No direct script access allowed');
$error_message = '';
$success_message = '';
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <base hef="<?php echo base_url(); ?>">
    <?php
        $class_name = '';
		$segment_2 = 0;
		$segment_3 = 0;
		$class_name = $this->router->fetch_class();
		$method = $this->router->fetch_method();
		$segment_1 = $this->uri->segment('1');
		$segment_2 = $this->uri->segment('2');
		$segment_3 = $this->uri->segment('3');
    
        // echo $class_name.$method .'-'.$segment_1 .'-'.$segment_2 .'-'.$segment_3;
        // exit;
		
		$data['setting'] = $this->Model_common->all_setting();

		$text_color = !empty($data['setting']['front_end_color']) ? 'style="color:#' . $data['setting']['front_end_color'] . ' !important"' : '';
		$background_color = !empty($data['setting']['front_end_background_color']) ? 'style="background-color:#' . $data['setting']['front_end_background_color'] . ' !important"' : '';

		
		if ($class_name == 'shop') {
            echo '<meta name="description" content="IRISPICTURE">';
            echo '<meta name="keywords" content="irisshot, irispohoto, irispicture">';
            echo '<title>SHOP</title>';
        } else if ($class_name.'_'.$method == 'product_index') {
            echo '<meta name="description" content="' . strip_tags($product['meta_description']) . '">';
            echo '<meta name="keywords" content="' . strip_tags($product['meta_keyword']) . '">';
            echo '<title>' . strip_tags($product['meta_title']) . '</title>'; 
        } else if ($class_name.'_'.$method == 'product_category') {
            echo '<meta name="description" content="' . strip_tags($category['meta_description']) . '">';
            echo '<meta name="keywords" content="' . strip_tags($category['meta_keyword']) . '">';
            echo '<title>' . strip_tags($category['meta_title']) . '</title>'; 
        } else if ($class_name == 'home') {
            echo '<meta name="description" content="' . $page_home['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $page_home['meta_keyword'] . '">';
            echo '<title>' . $page_home['title'] . '</title>';
        } else if ($class_name == 'about') {
            echo '<meta name="description" content="' . $page_about['md_about'] . '">';
            echo '<meta name="keywords" content="' . $page_about['mk_about'] . '">';
            echo '<title>' . $page_about['mt_about'] . '</title>';
        } else if ($class_name == 'job') {
            echo '<meta name="description" content="' . $page_job['md_job'] . '">';
            echo '<meta name="keywords" content="' . $page_job['mk_job'] . '">';
            echo '<title>' . $page_job['mt_job'] . '</title>';
        } else if ($class_name == 'impressum') {
            echo '<meta name="description" content="' . $page_impressum['md_impressum'] . '">';
            echo '<meta name="keywords" content="' . $page_impressum['mk_impressum'] . '">';
            echo '<title>' . $page_impressum['mt_impressum'] . '</title>';
        } else if ($class_name == 'datenschutz') {
            echo '<meta name="description" content="' . $page_datenschutz['md_datenschutz'] . '">';
            echo '<meta name="keywords" content="' . $page_datenschutz['mk_datenschutz'] . '">';
            echo '<title>' . $page_datenschutz['mt_datenschutz'] . '</title>';
        } else if ($class_name == 'faq') {
            echo '<meta name="description" content="' . $page_faq['md_faq'] . '">';
            echo '<meta name="keywords" content="' . $page_faq['mk_faq'] . '">';
            echo '<title>' . $page_faq['mt_faq'] . '</title>';
        } else if ($class_name == 'team') {
            echo '<meta name="description" content="' . $page_team['md_team'] . '">';
            echo '<meta name="keywords" content="' . $page_team['mk_team'] . '">';
            echo '<title>' . $page_team['mt_team'] . '</title>';
        } else if ($class_name == 'team_member') {
            $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
            echo '<meta name="description" content="' . $single_team_member['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $single_team_member['meta_keyword'] . '">';
            echo '<title>' . $single_team_member['meta_title'] . '</title>';
        } else if ($class_name == 'portfolio') {
            echo '<meta name="description" content="' . $page_portfolio['md_portfolio'] . '">';
            echo '<meta name="keywords" content="' . $page_portfolio['mk_portfolio'] . '">';
            echo '<title>' . $page_portfolio['mt_portfolio'] . '</title>';
        } else if ($class_name == 'testimonial') {
            echo '<meta name="description" content="' . $page_testimonial['md_testimonial'] . '">';
            echo '<meta name="keywords" content="' . $page_testimonial['mk_testimonial'] . '">';
            echo '<title>' . $page_testimonial['mt_testimonial'] . '</title>';
        } else if ($class_name == 'contact') {
            echo '<meta name="description" content="' . $page_contact['md_contact'] . '">';
            echo '<meta name="keywords" content="' . $page_contact['mk_contact'] . '">';
            echo '<title>' . $page_contact['mt_contact'] . '</title>';
        } else if ($class_name == 'search') {
            echo '<meta name="description" content="' . $page_search['md_search'] . '">';
            echo '<meta name="keywords" content="' . $page_search['mk_search'] . '">';
            echo '<title>' . $page_search['mt_search'] . '</title>';
        } else if ($class_name == 'terms-and-conditions') {
            echo '<meta name="description" content="' . $page_term['md_term'] . '">';
            echo '<meta name="keywords" content="' . $page_term['mk_term'] . '">';
            echo '<title>' . $page_term['mt_term'] . '</title>';
        } else if ($class_name == 'privacy-policy') {
            echo '<meta name="description" content="' . $page_privacy['md_privacy'] . '">';
            echo '<meta name="keywords" content="' . $page_privacy['mk_privacy'] . '">';
            echo '<title>' . $page_privacy['mt_privacy'] . '</title>';
        } else if ($class_name == 'pricing') {
            echo '<meta name="description" content="' . $page_pricing['md_pricing'] . '">';
            echo '<meta name="keywords" content="' . $page_pricing['mk_pricing'] . '">';
            echo '<title>' . $page_pricing['mt_pricing'] . '</title>';
        } else if ($class_name == 'photo_gallery') {
            echo '<meta name="description" content="' . $page_photo_gallery['md_photo_gallery'] . '">';
            echo '<meta name="keywords" content="' . $page_photo_gallery['mk_photo_gallery'] . '">';
            echo '<title>' . $page_photo_gallery['mt_photo_gallery'] . '</title>';
        } else if ($class_name == 'service') {
            if ($segment_3 == 0) {
                echo '<meta name="description" content="' . $page_service['md_service'] . '">';
                echo '<meta name="keywords" content="' . $page_service['mk_service'] . '">';
                echo '<title>' . $page_service['mt_service'] . '</title>';
            } else {
                $single_service = $this->Model_service->service_detail($segment_3);
                echo '<meta name="description" content="' . $single_service['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $single_service['meta_keyword'] . '">';
                echo '<title>' . $single_service['meta_title'] . '</title>';
            }
        } else if ($class_name == 'category') {
            $single_category = $this->Model_category->category_by_id($segment_2);
            echo '<meta name="description" content="' . $single_category['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $single_category['meta_keyword'] . '">';
            echo '<title>' . $single_category['meta_title'] . '</title>';
        } else if ($class_name == 'news') {
            if ($segment_3 == 0) {
                echo '<meta name="description" content="' . $page_news['md_news'] . '">';
                echo '<meta name="keywords" content="' . $page_news['mk_news'] . '">';
                echo '<title>' . $page_news['mt_news'] . '</title>';
            } else {
                $news_single_item = $this->Model_news->news_detail($segment_3);
                echo '<meta name="description" content="' . $news_single_item['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $news_single_item['meta_keyword'] . '">';
                echo '<title>' . $news_single_item['meta_title'] . '</title>';
                $og_id = $news_single_item['news_id'];
                $og_photo = $news_single_item['photo'];
                $og_title = $news_single_item['news_title'];
                $og_description = $news_single_item['news_content_short'];
                echo '<meta property="og:title" content="' . $og_title . '">';
                echo '<meta property="og:type" content="website">';
                echo '<meta property="og:url" content="' . base_url() . 'news/view/' . $og_id . '">';
                echo '<meta property="og:description" content="' . $og_description . '">';
                echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
            }
        } else if ($class_name == 'event') {
            if ($segment_3 == 0) {
                echo '<meta name="description" content="' . $page_event['md_event'] . '">';
                echo '<meta name="keywords" content="' . $page_event['mk_event'] . '">';
                echo '<title>' . $page_event['mt_event'] . '</title>';
            } else {
                $event_single_item = $this->Model_event->event_detail($segment_3);
                echo '<meta name="description" content="' . $event_single_item['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $event_single_item['meta_keyword'] . '">';
                echo '<title>' . $event_single_item['meta_title'] . '</title>';
                $og_id = $event_single_item['event_id'];
                $og_photo = $event_single_item['photo'];
                $og_title = $event_single_item['event_title'];
                $og_description = $event_single_item['event_content_short'];
                echo '<meta property="og:title" content="' . $og_title . '">';
                echo '<meta property="og:type" content="website">';
                echo '<meta property="og:url" content="' . base_url() . 'event/view/' . $og_id . '">';
                echo '<meta property="og:description" content="' . $og_description . '">';
                echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
            }
        } else {
            echo '<meta name="description" content="Dein Irisfoto - Iris Fotografie / IRISPICTURE">';
            echo '<meta name="keywords" content="iris shot, iris pohoto, irispicture">';
            echo '<title>Dein Irisfoto - Iris Fotografie / IRISPICTURE</title>';
        }
    ?>
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/magnific-popup.min.css">


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/skins/skin-corporate-1.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/modernizr/modernizr.min.js"></script>

    <!--==============================
    	CSS File End
	============================== -->
    <?php echo $setting['frontend_head'];?>
</head>

<body data-plugin-page-transition>
    <div class="body">
        <div class="notice-top-bar bg-primary" data-sticky-start-at="180">
            <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
                <span class="close">
                    <span></span>
                    <span></span>
                </span>
            </button>
            <div class="container">
                <div class="row justify-content-center py-2">
                    <div class="col-9 col-md-12 text-center">
                        <h2 class="font-weight-semibold text-3 mb-0">
                            <?php echo $this->lang->line("header_slogan"); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" class="header-effect" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': '', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0 box-shadow-none">
                <div class="header-container header-container-md container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="<?php echo base_url('home'); ?>">
                                        <img alt="Irispartner" width="186" height="100%" data-sticky-width="186" data-sticky-height="31" data-sticky-top="0" src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-dark header-nav-bottom-line-effect-1 order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('home'); ?>"><?php echo $this->lang->line("homepage"); ?></a></li>
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('shop'); ?>"><?php echo $this->lang->line("shop"); ?></a></li>
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('photo-gallery'); ?>"><?php echo $this->lang->line("photo_gallery"); ?></a></li>
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('partner'); ?>">Partner </a></li>
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line("about"); ?></a></li>
                                                <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('contact'); ?>"><?php echo $this->lang->line("contact"); ?></a></li>
                                                <?php if (base_url() === 'https://irispicture.com/') : ?>
                                                    <li><a class="dropdown-item dropdown-toggle" href="<?php echo base_url('franchise'); ?>"><?php echo $this->lang->line("become_a_franchise"); ?></a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>


                                </div>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-cart d-inline-flex">
                                        <select class="mx-2 border-0" onchange="location = this.value;">
                                            <option value="<?php echo base_url('language/site/de'); ?>" <?php echo $this->session->userdata('site_language') === 'de' ? 'selected' : '';?>>
                                                DE
                                            </option>
                                            <option value="<?php echo base_url('language/site/en'); ?>" <?php echo $this->session->userdata('site_language') === 'en' ? 'selected' : '';?>>
                                                EN
                                            </option>
                                            <option value="<?php echo base_url('language/site/be'); ?>" <?php echo $this->session->userdata('site_language') === 'be' ? 'selected' : '';?>>
                                                BE
                                            </option>
                                            <option value="<?php echo base_url('language/site/nl'); ?>" <?php echo $this->session->userdata('site_language') === 'nl' ? 'selected' : '';?>>
                                                NL
                                            </option>
                                        </select>

                                        <?php if (base_url(uri_string()) === base_url("home") || base_url(uri_string()) === base_url("shop")) : ?>
                                        <?php endif; ?>
                                            <a href="<?php echo base_url('shop/cart'); ?>">
                                                <img src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img">
                                                <span class="cart-info">
                                                    <span class="cart-qty" id="cart_item_amounts"><?php echo $this->cart->total_items(); ?></span>
                                                </span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--========================
Header Area End
========================-->