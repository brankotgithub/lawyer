<?php
get_header();
?>


<main>
    <section class="error-page text-center mb-5 py-4">
        <div class="container">
            <h1 class="text-danger">
                404
            </h1>
            <p class="text-uppercase">
                oooops, sorry we can not find that page
            </p>
            <a class="btn btn-primary text-uppercase py-2 px-5 rounded-pill" href="<?php echo home_url() ?>">
                Back to home page.
            </a>
        </div>
        

    </section>



</main>

<?php
get_footer();
?>
