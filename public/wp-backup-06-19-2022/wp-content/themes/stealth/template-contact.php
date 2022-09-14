<?php
	/**
	Template Name: Template Contact
	*/
	global $option_fields;
    $fields = get_fields();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php wp_title('&raquo;', 'true', 'right'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Rufina&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo THEME_DIR_URL; ?>/style.css">
        <link rel="stylesheet" href="<?php echo THEME_DIR_URL; ?>/assets/css/responsive.css">

        <link rel="shortcut icon" type="image/x-icon" href="<?php echo THEME_DIR_URL; ?>/assets/img/favicon.png">
        <link rel="shortcut icon" href="<?php echo THEME_DIR_URL; ?>/assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo THEME_DIR_URL; ?>/assets/img/favicon.ico" type="image/x-icon">

        <?php wp_head(); ?>
        <?php 
            echo $option_fields['additional_css'] ? $option_fields['additional_css'] : ''; 
            echo $option_fields['header_scripts'] ? $option_fields['header_scripts'] : ''; 
        ?>
        <script type="text/javascript">
            var themedir_url = "<?php echo THEME_DIR_URL; ?>";
            var home_url = "<?php echo HOME_URL; ?>";
        </script>

    </head>
    <body <?php body_class(); ?>>
        <?php 
            echo $option_fields['after_body_scripts'] ? $option_fields['after_body_scripts'] : ''; 
        ?>
        <div class="wrapper">

        	<section class="contact-hero">
                <div class="container">
                    <div class="contact-logo">
                        <a href="<?php echo HOME_URL; ?>" title="Stealth" class="logo">
                            <?php 
                                $logo = $option_fields['header_logo']; 
                            ?>
                            <img src="<?php echo $logo ? $logo['url'] : THEME_DIR_URL.'/assets/img/stealth-logo.svg'; ?>" alt="Stealth-logo" class="img-responsive" width="472" height="102" />
                        </a>
                    </div>
                    <h1>Got a project we can partner up on?</h1>
                </div>
            </section>

            <section class="contact-main-sec">
                <div class="container">
                    <div class="contact-main">
                        <div class="contact-main-left">
                            <div class="contact-form-wrap">
                                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
                            </div>
                        </div>
                        <?php if($fields['client_testimonials']){ ?>
                            <div class="contact-main-right">
                                <div class="testimonials-sidebar">
                                    <div class="testimonials-slider">
                                        <?php foreach ($fields['client_testimonials'] as $key => $testimonial) { ?>
                                            <div class="testimonials-slide">
                                                <div class="t-quote">“</div>
                                                <h4><?php echo $testimonial['description']; ?></h4>
                                                <figure>
                                                    <img src="<?php echo $testimonial['client_photo']['url']; ?>" alt="<?php echo $testimonial['client_photo']['alt']; ?>" width="<?php echo $testimonial['client_photo']['width']; ?>" height="<?php echo $testimonial['client_photo']['height']; ?>" />
                                                </figure>
                                                <span class="t-client-name"><?php echo $testimonial['client_name']; ?></span>
                                                <span class="t-client-position"><?php echo $testimonial['client_position']; ?></span>
                                                <span class="t-client-company"><?php echo $testimonial['featured_text']; ?></span>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

        </div>
        <link rel="stylesheet" type="text/css" href="<?php echo THEME_DIR_URL; ?>/assets/css/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo THEME_DIR_URL; ?>/assets/css/aos.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo THEME_DIR_URL; ?>/assets/js/slick.min.js"></script>
        <script src="<?php echo THEME_DIR_URL; ?>/assets/js/aos.js"></script>
        <script type="text/javascript" src="<?php echo THEME_DIR_URL; ?>/assets/js/main.js"></script>

        <?php wp_footer(); ?>
        <?php echo $option_fields['footer_scripts'] ? $option_fields['footer_scripts'] : ''; ?>
    </body>
</html>