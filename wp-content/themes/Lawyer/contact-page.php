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
                    <h2 class="text-center mb-5">Please contact us using the form bellow</h2>

                    <form class="contact-form" action="" method="get">
                        <div class='form-group'>
                            <input type="text" name="name" value="" class="form-control" placeholder='Name and surname *'> 
                            <div class="error-msg"></div>
                        </div>
                        <div class='form-group'>
                            <input type="email" name="email" value="" class="form-control" placeholder='Email address *'> 
                            <div class="error-msg"></div>
                        </div>
                        <div class='form-group'>
                            <textarea name="message" placeholder="Enter your message *" class="form-control" rows='7'></textarea>
                            <div class="error-msg"></div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary px-5 py-3 rounded-pill text-uppercase" type="submit" name="send" value="true">send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!--.contact-section end-->

    <section class="contact-map">
        <div class="embed-responsive embed-responsive-21by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16018.572327114758!2d20.44038030784272!3d44.78671155305784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1569605872608!5m2!1sen!2srs" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
</main>






<?php
get_footer();
?>