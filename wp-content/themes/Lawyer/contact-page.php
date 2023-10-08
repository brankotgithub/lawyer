<?php
/*
 * Template Name: Contact Page
 */

get_header();
?>
<main>
    <?php
    $contactImageUrl = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <section class="lead-page-section contact-lead-section" style="background-image: url(<?php echo $contactImageUrl; ?>)">

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-5">
                    <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                        <h1 class="lead-section-title mb-4"><?php the_field('contact_title'); ?></h1>

                        <?php
                        get_template_part('/template-parts/contact-data');
                        ?>
                    </article>
                </div>
            </div>
        </div>

    </section>


    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <h2 class="text-center mb-5"><?php the_field('contact_form_title'); ?></h2>
                   
                    
                    <form class="contact-form" action="" method="post">
                        <?php the_field('contact_page_form'); ?> 
                    </form>
                </div>
            </div>
        </div>
    </section><!--.contact-section end-->

    <section class="contact-map">
        <div class="embed-responsive embed-responsive-21by9">
            <?php the_field('contact_page_map'); ?>
        </div>
    </section>
</main>






<?php
get_footer();
?>