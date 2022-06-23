<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content white-text text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Contact Page -->
<div class="contact-page-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info-wp">
                    <?php the_content(); ?>
                    <div class="contact-link">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-link-box">
                                    <div class="icon">
                                        <img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/phone.png" alt="Phone Icon">
                                    </div>
                                    <div class="text">
                                        <?php
                                        $phone = get_field('phone', 'option');
                                        $val = array("(", ")", " ", "-", ".");
                                        $replace = array("", "", "", "", "");
                                        $phone_link = str_replace($val, $replace, $phone);
                                        ?>
                                        <span class="title">Phone</span>
                                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>"><span class="callus"><?php echo $phone; ?></span></a>
                                    </div>
                                </div>
                                <div class="contact-link-box">
                                    <div class="icon">
                                        <img width="15" height="15" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/paper-plane.png" alt="Mail Icon">
                                    </div>
                                    <div class="text">
                                        <span class="title">Email</span>
                                        <a href="mailto:<?php the_field('email', 'option'); ?>" title="Mail <?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-link-box address-box">
                                    <div class="icon">
                                        <img width="13" height="17" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/map-marker-alt.png" alt="Map Icon">
                                    </div>
                                    <div class="text">
                                        <span class="title">Address</span>
                                        <a href="<?php the_field('address_link', 'option'); ?>" target="_blank" title="<?php the_field('address', 'option'); ?>"><?php the_field('address', 'option'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social">
                        <p>Follow Us</p>
                        <ul>
                            <li><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" title="Follow on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" title="Follow on Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" title="Follow on Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-request-form-box">
                    <h2 class="h2-title">Contact Us</h2>
                    <?php echo do_shortcode('[contact-form-7 id="201" title="Contact Us"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Contact Page -->