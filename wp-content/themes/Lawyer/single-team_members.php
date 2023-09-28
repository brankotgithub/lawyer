

<?php
get_header();
?>

<main>


    <section class="team-single">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>    



                    <div class="team-single-header">
                        <h1 class="mb-4 animation" data-animation="slide-bottom" data-delay="0s"><?php the_title();?></h1>
                        <p class="team-member-position animation" data-animation="slide-bottom" data-delay="0.3s"><?php the_field ('members_field');?></p>
                    </div><!--.team-single-header end-->

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <article class="team-member-bio animation" data-animation="slide-right">
                               <?php the_content();?>
                            </article>
                        </div><!--.col end-->

                        <div class="col-12 col-lg-6 order-first order-lg-0 mb-4 mb-lg-0">
                            <figure class="mb-0 text-center animation" data-animation="slide-left">
                                <?php the_post_thumbnail('single_team'); ?>
                            </figure>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>



</main><!--main end-->

<?php
// includ info section
get_template_part('/template-parts/info-section');
?>



<?php
get_footer();
?>