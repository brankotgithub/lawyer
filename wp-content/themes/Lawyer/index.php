<?php
get_header();
?>
<main>
    <?php
// includ lead-section
    get_template_part('/template-parts/lead-section');
    ?>

    <?php if (have_posts()) { ?>
        <section class="news-section">
            <div class="container">
                <?php while (have_posts()) {
                    the_post();
                    ?>
                    <article class="news-item mb-5 animation" data-animation="slide-top">
                        <div class="row justify-content-sm-between">
                            <div class="col-12 mb-4 col-md-7 mb-md-0 col-lg-6">
                                <div class="news-item-content">
                                    <h2>
                                        <a href="<?php echo the_permalink(); ?>">
        <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php echo the_permalink(); ?>" class="read-more text-uppercase text-primary">read more</a>

                                </div>
                            </div><!--.col left end-->

                            <div class="col-12 col-md-5">
                                <a class="d-block news-item-img" href="<?php echo the_permalink(); ?>">
        <?php the_post_thumbnail('news_list'); ?>
                                    <!--<img src="img/news/news-01.png" alt=""/>-->
                                </a>
                            </div>
                        </div>
                    </article><!--.news-item end-->
                    <?php }
                ?>


    <?php ?>
            </div><!--.container end-->
        </section><!--.news-section end-->       
<?php } else { ?>
        <section class="news-section">
            <div class="container">
                <div class="jumbotron"> 
                    <h3> there are no posts to show</h3>
                </div>    
            </div><!--.container end-->
        </section><!--.news-section end-->

        <?php
    }
    ?>



    <?php
// includ info section
    get_template_part('/template-parts/info-section');
    ?>

</main><!--main end-->
</main>

<?php
get_footer();
?>