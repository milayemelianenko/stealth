                <?php global $option_fields; ?>

                <footer class="footer">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="footer-left">
                                <div class="footer-left-top">
                                    <a href="<?php echo HOME_URL; ?>" title="Stealth" class="footer-logo">
                                        <?php 
                                            $logo = $option_fields['header_logo']; 
                                            $footer_logo = $option_fields['footer_logo']; 
                                        ?>
                                        <img src="<?php echo $logo ? $logo['url'] : THEME_DIR_URL.'/assets/img/stealth-logo.svg'; ?>" alt="Stealth-logo" class="img-responsive" width="472" height="102" />
                                    </a>
                                    <p><?php echo $option_fields['footer_text']; ?></p>
                                </div>
                                <div class="footer-left-bottom">
                                    <div class="footer-social">
                                        <?php if($option_fields['social_media_links']['instagram_link']){ ?>
                                            <a href="<?php echo $option_fields['social_media_links']['instagram_link']; ?>" target="_blank">
                                                <img src="<?php echo THEME_DIR_URL; ?>/assets/img/instagram.svg" alt="instagram" />
                                            </a>
                                        <?php } ?>
                                        <?php if($option_fields['social_media_links']['linkedin_link']){ ?>
                                            <a href="<?php echo $option_fields['social_media_links']['linkedin_link']; ?>" target="_blank">
                                                <img src="<?php echo THEME_DIR_URL; ?>/assets/img/linkedin.svg" alt="linkedin" />
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <a href="mailto:hello@stealth.design" class="hello-email">hello@stealth.design</a>
                                </div>
                            </div>
                            <div class="footer-right">
                                <div class="footer-right-top">
                                    <a href="<?php echo HOME_URL; ?>/start-a-project/" class="btn btn-white start-project-cta">Start a Project</a>
                                </div>
                                <?php /*<div class="footer-right-bottom">
                                    <div class="footer-bottom-nav">
                                        <?php 
                                            wp_nav_menu( array(
                                                'theme_location' => 'footer_menu'
                                            ) );
                                        ?>
                                    </div>
                                    <div class="headquarter-text">Proudly Headquartered in Dubai</div>
                                </div> */ ?>
                            </div>
                        </div>
                    </div>
                </footer>
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