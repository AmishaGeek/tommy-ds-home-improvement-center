<!-- Start of Banner -->
<section class="main-banner bg-img sec-1920" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content text-center white-text">
                        <h3 class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('banner_sub_title'); ?></h3>
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('banner_title'); ?></h1>
                        <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php
							$phone = get_field('phone', 'option');
							$val = array("(", ")", " ", "-", ".");
							$replace = array("", "", "", "", "");
							$phone_link = str_replace($val, $replace, $phone);
							?>
                            <a href="tel:<?php echo $phone_link; ?>" class="sec-btn" title="Call <?php echo $phone; ?>">Call <span class="callus"> <?php echo $phone; ?></span></a>
                            <a href="<?php echo get_permalink(19); ?>" class="sec-btn outline-btn" title="Contact Us">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner -->

<!-- Start of About Us -->
<section class="about-us sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-img-wp">
                    <div class="about-img bg-img" style="background-image: url('<?php the_field('about_image'); ?>');"></div>
                </div>
            </div>
            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text white-text">
                        <?php the_field('about_content'); ?>
                        <h4><?php the_field('about_note'); ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Service -->
<div class="main-service-sec">
    <?php
	if (have_rows('services')) :
	$service_counter = 1;
		while (have_rows('services')) : the_row();
			if ($service_counter % 2 == 0) : ?>
                  <div class="service-row odd sec-1920">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <div class="service-img-wp">
                                    <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <div class="service-content">
                                    <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                    <div class="service-text white-text">
                                        <?php the_sub_field('service_content'); ?>
                                        <a href="<?php the_sub_field('page_link');  ?>" class="learn-more" title="<?php echo strip_tags(get_sub_field('service_title')); ?> Learn More">Learn More <span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            <?php else : ?>
                <div class="service-row even sec-1920">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <div class="service-content">
                                    <?php if ($service_counter == 1) { ?><span class="sub-title"><?php the_field('our_services_title'); ?></span><?php } ?>
                                    <h3 class="h3-title"><?php the_sub_field('service_title'); ?></h3>
                                    <div class="service-text">
                                        <?php the_sub_field('service_content'); ?>
                                        <a href="<?php the_sub_field('page_link');  ?>" class="learn-more" title="<?php echo strip_tags(get_sub_field('service_title')); ?> Learn More">Learn More <span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <div class="service-img-wp">
                                    <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('service_image'); ?>');"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	            <?php
			endif;
			$service_counter++;
		endwhile;
	endif; ?>
</div>
<!-- End of Service -->

<!-- Start of Request a quote -->
<section class="request-a-quote bg-img sec-1920" style="background-image: url('<?php the_field('request_a_quote_back_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center sec-title">
                        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('request_a_quote_title'); ?></h2>
                        <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('request_a_quote_sub_title'); ?></p>
                    </div>
                </div>
            </div>
            <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <?php
                if (have_rows('request_a_quote_steps')) :
                    while (have_rows('request_a_quote_steps')) : the_row();  
                        $step_img = get_sub_field('request_a_quote_step_image'); 
                        $step_link = get_sub_field('request_a_quote_step_link'); ?>
                        <div class="col-lg-4">
                            <div class="request-content text-center">
                                <span class="step">Step <?php echo get_row_index(); ?></span>
                                <span class="icon">
                                    <img width="<?php echo $step_img['width']; ?>" height="<?php echo $step_img['height'] ?>" src="<?php echo $step_img['url']; ?>" alt="<?php echo $step_img['alt']; ?>">
                                </span>
                                <h3><?php the_sub_field('request_a_quote_step_title'); ?></h3>
                                <a href="<?php echo $step_link['url']; ?>" title="<?php echo $step_link['title']; ?> " class="link" target="<?php echo $step_link['target']; ?>"><?php echo $step_link['title']; ?> <span></span></a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Request a quote -->

<!-- Start of Main Div Section -->
<div class="main-div-sec">
    <section class="fianance-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="finance-content">
                        <h2 class="h2-title"><?php the_field('financing_title'); ?></h2>
                        <p><?php the_field('financing_sub_title'); ?></p>
                        <a href="javascript:void(0);" title="Apply Now" class="sec-btn">Apply Now</a>
                    </div>
                </div>
                <div class="col-lg-7 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="finance-text white-text">
                        <?php the_field('financing_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="sec-title text-center">
                        <h2 class="h2-title"><?php the_field('gallery_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="gallery-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <?php
					$images = get_field('gallery_images');
                    $i = 0;
					if ($images) :
						foreach ($images as $image) : $i++;?>
                            <div>
                                <div class="gallery-img-wp">
                                    <a data-fancybox="gallery1" title="Gallery Img <?php echo $i; ?>" href="<?php echo esc_url($image['url']); ?>">
                                        <div class="gallery-img bg-img" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
                                    </a>
                                </div>
                            </div>
					        <?php 
						endforeach;
					endif;?>
            </div>
        </div>
    </section>
    <section class="news-letter-sec">
        <div class="container">
            <div class="news-letter-box bg-img" style="background-image: url('<?php the_field('news_letter_back_image'); ?>');">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-content text-center">
                            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('news_letter_title'); ?></h2>
                            <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('news_letter_sub_title'); ?></p>
                            <div class="news-form wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <?php echo do_shortcode('[mc4wp_form id="46"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End of Main Div Section -->

<!-- Start of Intagram -->
<section class="instagram-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="sec-title text-center">
                    <h2 class="h2-title"><?php the_field('instagram_feed_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="col-lg-12">
                <div class="instagram-content">
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Intagram -->