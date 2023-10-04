<section class="service-section">
    <div class="container">
        <h2 class="text-center"><?php the_field('homepage_services_title') ?></h2>

        <?php
        $args = array(
            'posts_per_page' => -1, // Use 'posts_per_page' instead of 'post_per_page'
            'post_type' => 'our_services',
            'order' => 'ASC',
            'orderby' => 'date'
        );

        $homePageServices = new WP_Query($args);

        if ($homePageServices->have_posts()) {
            ?>
            <div class="row justify-content-center">
                <?php
                while ($homePageServices->have_posts()) {
                    $homePageServices->the_post();
                    ?>
                    <div class="col-12 col-md-6 col-lg-5">
                        <article class="service-item animation" data-animation="slide-top">
                            <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">
                                <figure class="mb-0">
                                    <img src="<?php the_field('service_icon'); ?>" alt="<?php the_title(); ?> Icon" />
                                </figure>
                                <span class="text-uppercase h6 pl-4"><?php the_title(); ?></span>
                            </a>
                        </article><!--.service-item end-->
                    </div>
                    <?php
                } // End while loop
                wp_reset_postdata(); // Reset the post data
                ?>
            </div><!--.row end-->
            <?php
        } else {
            ?>
            <div class="jumbotron">
                <h3>There are no services</h3>
            </div>
            <?php
        }
        ?>

    </div><!--.row end-->
</div><!--.container end-->
</section><!--.service-section end-->

