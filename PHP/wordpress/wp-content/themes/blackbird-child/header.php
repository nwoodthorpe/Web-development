<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>
            <?php wp_title('&#124;', true, 'right'); ?>
        </title> 
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>	
    </head>				
    <body <?php body_class(); ?> >
        <!--Start Main Contenter -->
        <div class="main-container">
            <!--start Header wrapper-->
            <div class="header-wrapper">
                <div class="container_24">
                    <div class="grid_24">
                        <div class="header">                        
                            <div class="grid_16 alpha">
                                <div class="logo"> <a href="<?php echo home_url(); ?>">
                                        <?php if (blackbird_get_option('blackbird_logo') != '') { ?>                                    
                                            <img src="<?php echo blackbird_get_option('blackbird_logo'); ?>" class="alignleft"alt="<?php bloginfo('name'); ?>" />  
                                        <?php } ?>
                                        <div class="text">    
                                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="grid_8 omega">
                                <div class="header-info">
                                    <?php if (blackbird_get_option('blackbird_topright_cell') != '') { ?>
                                        <p class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/call-us.png"  class="call-us" />&nbsp; <?php echo stripslashes(blackbird_get_option('blackbird_topright_cell')); ?></p>
                                    <?php } else { ?>
                                        <p class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/call-us.png"  class="call-us" />&nbsp;Call Us (111) 234 - 5678</p>
                                    <?php } ?>
                                    <?php if (blackbird_get_option('blackbird_topright_text') != '') { ?>
                                        <p><?php echo stripslashes(blackbird_get_option('blackbird_topright_text')); ?></p>
                                    <?php } else { ?>
                                        <p><?php _e('21/B, London Campus, British Road, Birmingham, UK', 'black-bird'); ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header wrapper-->
            <div class="clear"></div>
            <!--start Menu wrapper-->
            <div class="menu_wrapper">
                <div class="container_24">
                    <div class="grid_24">                            
                        <div class="grid_16 alpha">
                            <div id="MainNav">
                                <a href="#" class="mobile_nav closed"><?php _e('Pages Navigation Menu', 'black-bird'); ?><span></span></a>
                                <?php blackbird_nav(); ?> 
                            </div></div>
                        <div class="grid_8 omega">
                            <div class="top-search">

                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Menu wrapper-->
            <div class="clear"></div>
            <!--start Page Container-->
            <div class="page-content-container">
                <div class="container_24">
                    <div class="grid_24">