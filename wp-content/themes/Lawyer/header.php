<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html <?php bloginfo('language'); ?>>
    <head>
        <title>
            <?php 
            bloginfo('name'); 
            wp_title(' | ', true, 'left');
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Branko Teodorovic>
        <meta name="description" content="Lawyer is a specialized commercial law firm based in Belgrade, Serbia, firmly committed to providing advice at the highest level and achieving lasting results for our clients.">
        <meta name="keywords" content="Lawyer, law, Belgrade, company, clients">


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/Frontend/apple-icon-144x144.png">


        <!--Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php bloginfo('name'); ?>">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/Frontend/android-icon-192x192.png">


        <!--CSS FILES -moved to function php + added style css from Lawyer in function file
        <link href="<?php /*echo get_template_directory_uri(); ?>/Frontend/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/Frontend/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); */?>/Frontend/css/theme.css" rel="stylesheet" type="text/css"/>
        -->

<?php
// include default wordpress style
wp_head();
?>

    </head>
    <body <?php body_class()?>
>


        <header class="fixed-top bg-white py-2 py-xl-4">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <?php 
                    if (has_custom_logo()){
                    the_custom_logo();}
                        else{?>
                             <a class="navbar-brand" href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/Frontend/img/logo.png" alt=""/>
                    </a>
                    <?php
                        } 
                    ?>
                    
                    
                   
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">
                        
                        <?php 
                            /* koristi se kada nemamo dobijenee menije sa definisanim klasama 
                             * i  mi tada pravimo css klase
                           wp_nav_menu(array(
                                'menu_location' => 'header-menu',
                                'menu_class' => 'navbar-nav ml-auto',
                                'container_class' => '',
                               
                               
                           ));
                        */
                        
                        ?>
                        <?php 
                            
                            $menuLocation =get_nav_menu_locations();
                            //var_dump($menuLocation);
                            $headerManuID =$menuLocation['header-menu'];
                            $topMenuItems =wp_get_nav_menu_items($headerManuID);
                            /*list of menu items parametars - searching for ID, perents ID.....
                             * echo '<pre>';
                            var_dump ($topMenuItems);
                            echo '</pre>';
                             *
                             */     
                            
                            if ($topMenuItems) {?>
                                
                                 <ul class="navbar-nav ml-auto">
                                    
                                     <?php                                     
                                        foreach ($topMenuItems as $topMenuItem) {
                                            
                                            //active class
                                                $activeClass = '';
                                                $activeClassSubMenu = '';
                                                if ($topMenuItem->url == get_permalink()) {
                                                    $activeClass = 'active';
                                                    
                                                }
                                            
                                            
                                            //top level menu
                                            
                                            if($topMenuItem->menu_item_parent==0) {
                                                
                                                //start second level menu 
                                                $topItemId = $topMenuItem->ID;
                                                $subMenuItems = array();
                                                    
                                                    foreach ($topMenuItems as $subMenuItem) {
                                                        
                                                        //active sub menu class
                                                                                    
                                                                                        if ($subMenuItem->url == get_permalink()) {
                                                                                           
                                                                                        $activeClassSubMenu = 'active';
                                                                                    } 
                                                                            
                                                        
                                                        //insert item in subMenu
                                                            if ($subMenuItem->menu_item_parent == $topItemId ) {
                                                                $subMenuItems[] = $subMenuItem;
                                                            }
                                                        
                                                    }
                                                
                                                
                                                ?>
                                            
                                                <li class="nav-item ">
                                                    <a class="nav-link  <?php echo $activeClass; ?>"  href="<?php echo $topMenuItem->url?>"> <?php echo $topMenuItem->title?> </a>
                                                
                                                    <?php
                                                               if (!empty($subMenuItems)) {?>
                                                                    
                                                                    <ul  >
                                                                        <?php
                                                                              foreach ($subMenuItems as $subItem) {
                                                                                  
                                                            
                                                                                  ?>
                                                                                                                                
                                                                        <li class="nav-item ">
                                                                            
                                                                            <a class="nav-link <?php echo $activeClassSubMenu?>"  href="<?php echo $subItem->url?>"> <?php echo $subItem->title?> </a>
                                                                        </li>                                                   
                                                                        
                                                                        
                                                                      
                                                                    </ul>
                                                             <?php  }
                                                    
                                                    ?>
                                                
                                                </li>
                                    <?php
                                    }}
                                
                            }}
                            ?>
                        
                        
                        
                        <!--
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="services.html">Services <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.html">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.html">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            
                        </ul>
                        -->
                    </div>
                </nav>
            </div><!--.container end-->
        </header><!--header end-->

