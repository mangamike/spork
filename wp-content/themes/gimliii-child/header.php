<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">       
    <?php wp_head(); ?>
</head>	
<body <?php body_class(); ?>>
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/header.png" height="200px" width="1175" class="custom-header-image" /></a>
        </div>
    </div>
    <?php if(has_nav_menu('primary')) : ?>
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only"><?php _e('Toggle navigation','gimliii');?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">

                </a>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-responsive-collapse">
               <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false, 
                        'menu_class'     => 'nav navbar-nav navbar-right menu'
               ));?>              
            </div><!-- /navbar-collapse -->
        </div>    
    </div>  
    <?php endif; ?>  
</div><!--/header-->
   
