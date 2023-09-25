
<?php
get_header();
?>
<main>
    
    <?php
        if (have_posts()){
            
            while (have_posts()) {
                the_post();
    
                     $featureImage = get_the_post_thumbnail_url(get_the_ID(), 'full');?>
    
           <?php }
  
        }
    ?>
    
   <section class="lead-page-section news-page-section" style="background-image: url(<?php echo $featureImage; ?>)">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                            <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                                <p class="text-primary mb-4">
                                    
                                       <?php 
                                        $newsCategories = get_the_category(get_the_ID());
                                        /*echo '<pre>';
                                        var_dump ($newsCategories);
                                        echo '</pre>'; founding ID and name of category*/
                                        
                                     foreach ($newsCategories as $newsCategory) {?>
                                        <!--<span class="category text-uppercase">banking</span> span changed in a element<-->
                                        <a href="<?php echo get_category_link($newsCategory->term_id) ?>" class="category text-uppercase"><?php echo $newsCategory->name; ?></a>
                                        <?php  
                                     }
                                       ?> 
                                        
                                    </a>
                                    <span class="date-published"><?php echo the_date('j.m.y') ?></span>
                                </p>
                                <h1 class="lead-section-title mb-4">
                                    <?php echo the_title(); ?>
                                </h1>
                                <p class="lead-section-description">
                                    <?php echo the_excerpt(); ?>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>

            </section>

            <section class="news-single-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <article>
                                
                                
                                
                                <?php echo the_content(); ?>
                                
                                
                            </article>
                            
                            <article class="news-tags">
                                <p class="text-primary tag-title">Tags:</p>
                                
                                <div class="tags">
                                    <?php 
                                     $newsTags=get_the_tags(get_the_ID());
                                    /*echo '<pre>';
                                        var_dump ($newsTags);
                                        echo '</pre>'; */
                                    foreach ($newsTags as $newsTag) {?>
                                        <a href="<?php echo get_category_link($newsTag->term_id) ?>" class="btn btn-light text-primary px-4 py-2"><?php echo $newsTag->name; ?></a>
                                        
                                        <?php  
                                     }
                                       ?> 
                                    
                                    
                                   <!--<a href="#" class="btn btn-light text-primary px-4 py-2">banking</a>
                                    <a href="#" class="btn btn-light text-primary px-4 py-2">finance</a>
                                    <a href="#" class="btn btn-light text-primary px-4 py-2">employment</a>-->
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>



            



            <section class="info-section text-center">
                <div class="container">
                    <h2 class="text-primary mb-5">Lawyer- Attorneys at Law</h2>

                    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
                        <span class="fas fa-map-marker-alt"></span>
                        146 Douglas Dale Suite 343
                    </p>
                    <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
                        <span class="fas fa-phone-alt"></span>
                        <a href="tel:560-748-5959">560-748-5959</a>
                    </p>
                    <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
                        <span class="far fa-envelope"></span>
                        <a href="mailto:cullen_mueller@yahoo.com">cullen_mueller@yahoo.com</a>
                    </p>
                </div><!--.container end-->
            </section><!--.info end--> 
    </main>
    
    




<?php
get_footer();
?>