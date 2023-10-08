<?php
/*
 * Template Name: Page for team
 */


get_header();
?>
<main>

    <?php
    // includ lead-section
    get_template_part('/template-parts/lead-section');
    ?>


    <section class="team-members">
        <div class="container">
            <h2 class="text-center mb-5">
                <?php
                if (have_posts()) {
                    the_post();
                    the_content();
                }
                ?></h2>


            <?php
            $arg = array(
                'posts_per_page' => -1,
                'post_type' => 'team_members',
                'order' => 'ASC',
                'orderby' => 'title' // It should be 'orderby' instead of 'orderBY'
            );

            $members = new WP_Query($arg);

            if ($members->have_posts()) {
                ?>
                <div class="row">
                    <?php
                    while ($members->have_posts()) {
                        $members->the_post();
                        ?> 
                        <div class="col-12 col-xm-6 col-md-4 col-lg-3 mb-4">
                            <article class="team-member">
                                <figure class="position-relative">
                                    <a href="<?php the_permalink(); ?>" class="d-block">
        <?php the_post_thumbnail('team_list'); ?> <!-- Closed the <img> tag here -->
                                    </a>
                                    <a href="<?php the_field('member_linkedin') ?>" class="fab fa-linkedin-in"></a>
                                </figure>
                                <h5>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p class="team-member-position"><?php the_field('members_field'); ?></p>
                            </article>
                        </div><!--.col member end-->
                        <?php
                    }
                    wp_reset_postdata();
                    ?> 
                </div><!--.row end-->
<?php } else { ?>
                <div class="jumbotron"> 
                    <h3>There are no posts to show</h3>
                </div>
            <?php }
            ?>



        </div><!--.row end-->
        </div><!--.container end-->
    </section><!--.team-members end-->


<?php
// includ info section
get_template_part('/template-parts/info-section');
?>
</main>

<?php
get_footer();
?>