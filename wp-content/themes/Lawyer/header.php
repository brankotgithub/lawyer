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
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/Frontend/img/logo.png" alt=""/>
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">
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
                        
                    </div>
                </nav>
            </div><!--.container end-->
        </header><!--header end-->

