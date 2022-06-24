<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="inner-banner-content white-text text-center">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Service -->
<section class="service-row main-services even sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="service-content">
                    <h3 class="h3-title"><?php the_field('service_title'); ?></h3>
                    <div class="service-text">
                        <?php the_field('service_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="service-img-wp">
                    <div class="service-img bg-img" style="background-image: url('<?php the_field('service_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Service -->

<!-- Start of Main Request Form -->
<div class="main-request-form-sec sec-1920">
    <section class="main-request-form bg-img" style="background-image: url('<?php the_field('request_a_quote_back_image'); ?>');">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <div class="main-request-form-box text-center">
                            <h3 class="h3-title"><?php the_field('request_a_quote_title'); ?></h3>
                            <?php echo do_shortcode('[contact-form-7 id="60" title="Service Form"]'); ?>
                        </div>
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
					if ($images) :
						foreach ($images as $image) : ?>
                            <div>
                                <div class="gallery-img-wp">
                                    <a data-fancybox="gallery1" title="<?php echo $image['name']; ?>" href="<?php echo esc_url($image['url']); ?>">
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
</div>
<!-- End of Main Request Form -->