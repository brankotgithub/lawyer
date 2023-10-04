<?php
get_header();
?>


<main>
    <?php
    // includ lead-section
    get_template_part('/template-parts/lead-section');
    ?>   

    <?php
    // includ home page services
    get_template_part('/template-parts/home-page-services');
    ?>  

    <?php
    // includ home page services
    get_template_part('/template-parts/homepageMembers');
    ?> 


</main><!--main end-->

<?php
// includ info section
get_template_part('/template-parts/info-section');
?>



<?php
get_footer();
?>