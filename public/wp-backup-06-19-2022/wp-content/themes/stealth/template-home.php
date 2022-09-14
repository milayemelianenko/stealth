<?php
	/**
	Template Name: Template Home
	 */
	get_header(); 
	global $option_fields;
	$fields = get_fields();
?>

    <section class="stealth-home-hero">
        <div class="container">
            <div class="shh-inner">
                <div class="shh-description" data-aos="fade-up">
                    <?php echo $fields['hero_banner']['banner_description']; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="home-case-studies" data-aos="fade-up">
        <div class="home-case-studies-slider">
            <?php foreach ($fields['case_study_slider'] as $key => $slide) { ?>
                <div class="home-case-studies-slide" style="background-image: url(<?php echo $slide['background_image']['url']; ?>)">
                    <div class="container">
                        <div class="hcss-data">
                            <h3><?php echo $slide['title']; ?></h3>
                            <div class="hcss-logos">
                                <img src="<?php echo $slide['logo']['url']; ?>" alt="<?php echo $slide['logo']['url']; ?>" width="<?php echo $slide['logo']['width']; ?>" height="<?php echo $slide['logo']['height']; ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php /*<section class="home-partners-sec">
        <div class="container">
            <div class="hps-count-box">
                <?php foreach ($fields['numerical_section']['numerical_grids'] as $key => $grid) { ?>
                    <div class="hps-count-item">
                        <div class="hps-count-num"><?php echo $grid['number_or_icon'] == 'Number' ? $grid['numerical_value'] : '<img src="'.$grid['grid_icon']['url'].'" alt="'.$grid['grid_icon']['alt'].'" width="'.$grid['grid_icon']['width'].'" height="'.$grid['grid_icon']['height'].'" />'; ?></div>
                        <span class="hps-count-title-1"><?php echo $grid['title']; ?></span>
                        <span class="hps-count-title-2"><?php echo $grid['description']; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section> */ ?>

    <section class="clientelle-sec">
        <div class="container">
            <div class="clientelle-top">
                <div class="clientelle-top-left" data-aos="fade-up">
                    <?php echo $fields['clientele_section']['top_description']; ?>
                </div>
            </div>

            <div class="clientelle-list">
                <?php $cl_cnt = 0; foreach ($fields['clientele_section']['clientele_list'] as $key => $client) { $cl_cnt++; ?>
                    <div class="clientelle-list-item <?php echo $cl_cnt > 6 ? 'cli-hidden' : '' ?>" data-aos="fade-up">
                        <figure>
                            <img src="<?php echo $client['logo']['url']; ?>" alt="<?php echo $client['logo']['alt']; ?>" width="<?php echo $client['logo']['width']; ?>" height="<?php echo $client['logo']['height']; ?>" />
                        </figure>
                        <h4><?php echo $client['description']; ?></h4>
                    </div>
                <?php } ?>
            </div>
            <?php if($cl_cnt > 6){ ?>
                <div class="cl-more-cta-wrap">
                    <a href="javascript:void(0)" class="cl-more-cta" data-aos="zoom-in">see more</a>
                </div>
            <?php } ?>

            <div class="home-testimonials">
                <?php foreach ($fields['testimonials'] as $key => $testimonial) { ?>
                    <div class="ht-item">
                        <div class="ht-item-inner">
                            <div class="ht-description"><?php echo $testimonial['description']; ?></div>
                            <div class="ht-client">
                                <figure>
                                    <img src="<?php echo $testimonial['client_logo']['url']; ?>" alt="<?php echo $testimonial['client_logo']['alt']; ?>" width="<?php echo $testimonial['client_logo']['width']; ?>" height="<?php echo $testimonial['client_logo']['height']; ?>" />
                                </figure>
                                <div class="ht-client-info">
                                    <span class="ht-client-name"><?php echo $testimonial['client_name']; ?></span>
                                    <span class="ht-client-position"><?php echo $testimonial['client_position']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <?php /*<div class="clientelle-review-box">
                <div class="crb-left" data-aos="fade-up">
                    <figure>
                        <img src="<?php echo $fields['clientele_section']['testimonial']['client_image']['url']; ?>" alt="<?php echo $fields['clientele_section']['testimonial']['client_image']['alt']; ?>" width="<?php echo $fields['clientele_section']['testimonial']['client_image']['width']; ?>" height="<?php echo $fields['clientele_section']['testimonial']['client_image']['height']; ?>" class="img-responsive" />
                    </figure>
                    <div class="crb-data"><?php echo $fields['clientele_section']['testimonial']['description']; ?></div>
                </div>
                <div class="crb-right" data-aos="fade-up">
                    <a href="<?php echo HOME_URL; ?>/start-a-project/" class="btn btn-black">Start a Project</a>
                </div>
            </div> */ ?>
        </div>
    </section>

    <section class="home-capabilities-sec">
        <div class="container">
            <span class="hcs-title" data-aos="fade-up">capabilities</span>
            <div class="hcs-desc" data-aos="fade-up">
                <?php echo $fields['capabilities_section']['top_description']; ?>
            </div>

            <div class="capabilities-list" data-aos="fade-up">
                <?php foreach ($fields['capabilities_section']['capabilities'] as $key => $item) { ?>
                    <div class="capabilities-list-item">
                        <h4><?php echo $item['title']; ?></h4>
                        <?php echo $item['pointers']; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="home-engg-sec">
        <div class="container">
            <div class="home-engg-inner">
                <?php foreach ($fields['numerical_section']['numericals'] as $key => $grid) { ?>
                    <div class="hei-item">
                        <div class="hei-item-num">
                            <?php echo $grid['number_value_or_icon'] == 'Number' ? $grid['number_value'] : '<img src="'.$grid['icon']['url'].'" alt="'.$grid['icon']['alt'].'" width="'.$grid['icon']['width'].'" height="'.$grid['icon']['height'].'" />'; ?>
                        </div>
                        <div class="hei-item-info">
                            <h4><?php echo $grid['title']; ?></h4>
                            <p><?php echo $grid['description']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="how-we-do-sec">
        <div class="container">
            <div class="how-we-do-sec-inner">
                <div class="hwds-left" data-aos="fade-up">
                    <?php echo $fields['how_we_do_it_section']['left_content']; ?>
                </div>
                <div class="hwds-right">
                    <div class="hwds-list" data-aos="fade-up">
                        <?php foreach ($fields['how_we_do_it_section']['how_we_do_it'] as $key => $pointer) { ?>
                            <div class="hwds-list-item">
                                <h4><?php echo $pointer['title']; ?></h4>
                                <p><?php echo $pointer['description']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($fields['team_slider']){ ?>
        <section class="stealth-team-collage">
            <div class="home-team-slider">
                <?php foreach ($fields['team_slider'] as $key => $item) { ?>
                    <div class="home-team-slide">
                        <figure>
                            <img data-lazy="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>" width="<?php echo $item['width']; ?>" height="<?php echo $item['height']; ?>" />
                        </figure>
                    </div>
                <?php } ?>
            </div>
        </section>
    <?php } ?>
    

<?php get_footer(); ?>