<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-banner-content white-text text-center">
                    <h1 class="h1-title"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<?php
if (have_rows('pdf_list')) { ?>
    <!-- Start of Resources -->
    <section class="resource-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="resource-content">
                        <ul>
                            <?php
                                while (have_rows('pdf_list')) {
                                   the_row(); ?>
                                    <li>
                                        <a href="<?php the_sub_field('pdf_link'); ?>" target="_blank" title="<?php the_sub_field('pdf_title'); ?>"><?php the_sub_field('pdf_title'); ?></a>
                                    </li>
                                   <?php 
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Resources -->
    <?php 
}
?>