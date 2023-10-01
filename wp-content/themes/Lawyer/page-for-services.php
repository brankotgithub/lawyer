<?php
/*
 * Template Name: Page for services
 */


get_header();
?>
<main>

    <?php
    // includ lead-section
    get_template_part('/template-parts/lead-section');
    ?>


    <section class="service-section dark-service-section">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            endif;
            ?>

            <?php
            $arg = array(
            'post_per_page' => -1,
            'post_type' => 'our_services',
            'order' => 'ASC',
            'orderby' => 'date'
            ); 
            $services= new WP_Query($arg);

            if ($services->have_posts()) {
                ?>

                <div class="row justify-content-center">
                <?php
                while ($services->have_posts()) {
                    $services->the_post();
                    ?> 
                        <div class="col-12 col-md-6 col-lg-5">
                            <article class="service-item animation" data-animation="slide-top">
                                <a href="<?php the_permalink(); ?>" class="d-flex align-items-center mb-5">
                                    <figure class="mb-0">
                                        <img src="<?php the_field('service_icon'); ?>" alt="Service Icon"/><!-- image from Advance custom field plugin - we cool icon url-->
                                    </figure>
                                    <span class="text-uppercase h6 pl-4 text-white"><?php the_title(); ?></span>
                                </a>
                                <p class="service-item-description text-white pr-4">
        <?php the_field('service_description'); ?> 
                                </p>
                                <a class="read-more text-primary text-uppercase" href="<?php the_content(); ?>">read more</a>
                            </article><!--.service-item end-->
                        </div>
        <?php
    } // End while loop
    wp_reset_postdata(); // Reset the post data
    ?>
                </div><!--.row end-->
                <?php } // End if condition
                ?>

            


        </div><!--.container end-->
    </section><!--.service-section end-->


        <?php
// includ info section
        get_template_part('/template-parts/info-section');
        ?>
</main>

    <?php
    get_footer();
    ?>