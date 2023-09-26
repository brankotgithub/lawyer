<?php
get_header();
?>
<main>
    <?php
// includ lead-section
    get_template_part('/template-parts/lead-section');
    ?>

    <?php
// includ posts loop before we made the code from poosts loop was in   index page
    get_template_part('/template-parts/posts-loop');
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