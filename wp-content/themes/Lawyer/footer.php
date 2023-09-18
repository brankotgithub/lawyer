 <footer class="bg-white">
            <div class="container text-center d-sm-flex justify-content-sm-between align-items-sm-center">
                
               <?php 
               $menuLocations =get_nav_menu_locations();
               $socialMenuID = $menuLocations['social-menu'];// social-menu is key which we create in function.php
               $socialMenuItems = wp_get_nav_menu_items($socialMenuID);
               
               //var_dump($socialMenuItems);
               
               if ($socialMenuItems) {?>
                   <nav class="social mb-4 mb-sm-0 order-sm-last">
                       <?php 
                       foreach ($socialMenuItems as $socialItem) {
                            if ($socialItem->menu_item_parent==0){?>
                                <a href="<?php echo $socialItem->url ;?>" class="fab fa-<?php echo strtolower($socialItem->title) ; if($socialItem->title=="Facebook"){echo "-f";} ?>"></a>

                            
                        <?php   
                       }}
                       
                       ?>
                       </nav>
                <?php
               }
               ?>
                
                
                <!-- it was before customizing
                <nav class="social mb-4 mb-sm-0 order-sm-last">
                    <a href="https://facebook.com" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com" class="fab fa-twitter"></a>
                    <a href="https://instagram.com" class="fab fa-instagram"></a>
                </nav>
                -->
                <p class="copyright mb-0">Copyright &copy; <?php echo date ('Y');?> <a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></p>
            </div>
        </footer><!--footer end-->

        
        
<!--moved to function php
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!--font awesome icons
        <script src="https://kit.fontawesome.com/85bd05dd45.js"></script>
        
        
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        -->
        <?php
        // include default wordpress js files
        wp_footer();
?>
        
    </body>
</html>