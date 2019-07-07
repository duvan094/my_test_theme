<!DOCTYPE html>
<html>
  <head>
        <title>Jacob Duvander | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?>>

    </head>
    
    

    <body>
        <header>
            <div class="header-wrapper">
                <span>This is a header</span>
                <?php wp_nav_menu(array('theme_location => header-menu')) ?>
            </div>
        </header>

