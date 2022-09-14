<?php global $option_fields; ?>
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
    <link rel="stylesheet" href="<?php echo THEME_DIR_URL; ?>/style.css?v=1.108">
    <link rel="stylesheet" href="<?php echo THEME_DIR_URL; ?>/assets/css/responsive.css?v=1.108">

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
        <header class="header">
            <div class="container">
                <div class="header-inner">
                    <a href="<?php echo HOME_URL; ?>" title="Stealth" class="logo">
                        <?php 
                            $logo = $option_fields['header_logo']; 
                            $footer_logo = $option_fields['footer_logo']; 
                        ?>
                        <img src="<?php echo $logo ? $logo['url'] : THEME_DIR_URL.'/assets/img/stealth-logo.svg'; ?>" alt="Stealth-logo" class="img-responsive" width="472" height="102" />
                    </a>
                    <div class="header-right">
                        <?php if(!is_page_template('template-contact.php')){ ?>
                            <a href="<?php echo HOME_URL; ?>/start-a-project/" class="btn btn-white start-project-cta">Start a Project</a>
                        <?php } ?>
                        <a href="javascript:void(0)" class="mobile-menu-icon">
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
