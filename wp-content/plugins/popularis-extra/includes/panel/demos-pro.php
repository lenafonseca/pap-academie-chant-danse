<?php
/**
 * Demos
 *
 * @package Popularis_Extra_Demo_Import
 * @category Core
 * @author PopularisWP
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function popularis_pro_get_demos_data_extra($data) {

    // Demos url
    $url = 'https://populariswp.com/wp-content/uploads/demo-import/popularis-screens/';
    
    $extra = array(
                'popularis-pro-default' => array(
                    'demo_name' => 'Popularis PRO Default',
                    'categories' => array('WooCommerce', 'Business', 'Creative', 'Elementor'),
                    'xml_file' => $url . 'default/default-content.xml',
                    'theme_settings' => $url . 'default/default-customizer.dat',
                    'widgets_file' => $url . 'default/default-widgets.wie',
                    'screenshot' => $url . 'default/screenshot.jpg',
                    'demo_template' => 'popularis-pro-default',
                    'home_title' => 'Homepage',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-app' => array(
                    'demo_name' => 'Popularis PRO App',
                    'categories' => array('Business', 'One Page', 'App', 'Elementor'),
                    'xml_file' => $url . 'app/default-content.xml',
                    'theme_settings' => $url . 'app/default-customizer.dat',
                    'widgets_file' => $url . 'app/default-widgets.wie',
                    'screenshot' => $url . 'app/screenshot.jpg',
                    'demo_template' => 'popularis-pro-app',
                    'home_title' => 'Homepage App',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-woocommerce-1' => array(
                    'demo_name' => 'Popularis PRO WooCommerce #1',
                    'categories' => array('WooCommerce', 'Elementor'),
                    'xml_file' => $url . 'woocommerce-1/default-content.xml',
                    'theme_settings' => $url . 'woocommerce-1/default-customizer.dat',
                    'widgets_file' => $url . 'woocommerce-1/default-widgets.wie',
                    'screenshot' => $url . 'woocommerce-1/screenshot.jpg',
                    'demo_template' => 'popularis-pro-woocommerce-1',
                    'home_title' => 'Homepage Woocommerce #1',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-portfolio' => array(
                    'demo_name' => 'Popularis PRO Portfolio',
                    'categories' => array('Portfolio', 'One Page', 'Elementor'),
                    'xml_file' => $url . 'portfolio/default-content.xml',
                    'theme_settings' => $url . 'portfolio/default-customizer.dat',
                    'widgets_file' => $url . 'portfolio/default-widgets.wie',
                    'screenshot' => $url . 'portfolio/screenshot.jpg',
                    'demo_template' => 'popularis-pro-portfolio',
                    'home_title' => 'Homepage Portfolio',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-gym' => array(
                    'demo_name' => 'Popularis PRO Gym',
                    'categories' => array('Business', 'Creative', 'Gym', 'Elementor'),
                    'xml_file' => $url . 'gym/default-content.xml',
                    'theme_settings' => $url . 'gym/default-customizer.dat',
                    'widgets_file' => $url . 'gym/default-widgets.wie',
                    'screenshot' => $url . 'gym/screenshot.jpg',
                    'demo_template' => 'popularis-pro-gym',
                    'home_title' => 'Homepage Gym',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-creative' => array(
                    'demo_name' => 'Popularis PRO Creative',
                    'categories' => array('Business', 'Creative', 'Elementor'),
                    'xml_file' => $url . 'creative/default-content.xml',
                    'theme_settings' => $url . 'creative/default-customizer.dat',
                    'widgets_file' => $url . 'creative/default-widgets.wie',
                    'screenshot' => $url . 'creative/screenshot.jpg',
                    'demo_template' => 'popularis-pro-creative',
                    'home_title' => 'Homepage Creative',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-woocommerce-2' => array(
                    'demo_name' => 'Popularis PRO WooCommerce #2',
                    'categories' => array('WooCommerce', 'Elementor'),
                    'xml_file' => $url . 'woocommerce-2/default-content.xml',
                    'theme_settings' => $url . 'woocommerce-2/default-customizer.dat',
                    'widgets_file' => $url . 'woocommerce-2/default-widgets.wie',
                    'screenshot' => $url . 'woocommerce-2/screenshot.jpg',
                    'demo_template' => 'popularis-pro-woocommerce-2',
                    'home_title' => 'Homepage Woocommerce #2',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-plan' => array(
                    'demo_name' => 'Popularis PRO Plan',
                    'categories' => array('Business', 'Creative', 'Elementor'),
                    'xml_file' => $url . 'plan/default-content.xml',
                    'theme_settings' => $url . 'plan/default-customizer.dat',
                    'widgets_file' => $url . 'plan/default-widgets.wie',
                    'screenshot' => $url . 'plan/screenshot.jpg',
                    'demo_template' => 'popularis-pro-plan',
                    'home_title' => 'Homepage Plan',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-art' => array(
                    'demo_name' => 'Popularis PRO Art',
                    'categories' => array('Business', 'Creative', 'Elementor'),
                    'xml_file' => $url . 'art/default-content.xml',
                    'theme_settings' => $url . 'art/default-customizer.dat',
                    'widgets_file' => $url . 'art/default-widgets.wie',
                    'screenshot' => $url . 'art/screenshot.jpg',
                    'demo_template' => 'popularis-pro-art',
                    'home_title' => 'Homepage Art',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-traffic' => array(
                    'demo_name' => 'Popularis PRO Traffic',
                    'categories' => array('Business', 'Creative', 'Elementor'),
                    'xml_file' => $url . 'traffic/default-content.xml',
                    'theme_settings' => $url . 'traffic/default-customizer.dat',
                    'widgets_file' => $url . 'traffic/default-widgets.wie',
                    'screenshot' => $url . 'traffic/screenshot.jpg',
                    'demo_template' => 'popularis-pro-traffic',
                    'home_title' => 'Homepage Traffic',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-woocommerce-1' => array(
                    'demo_name' => 'Popularis PRO WooCommerce #1',
                    'categories' => array('WooCommerce', 'Elementor'),
                    'xml_file' => $url . 'woocommerce-1/default-content.xml',
                    'theme_settings' => $url . 'woocommerce-1/default-customizer.dat',
                    'widgets_file' => $url . 'woocommerce-1/default-widgets.wie',
                    'screenshot' => $url . 'woocommerce-1/screenshot.jpg',
                    'demo_template' => 'popularis-pro-woocommerce-1',
                    'home_title' => 'Homepage Woocommerce #1',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-woocommerce-3' => array(
                    'demo_name' => 'Popularis PRO WooCommerce #3',
                    'categories' => array('WooCommerce', 'Elementor'),
                    'xml_file' => $url . 'woocommerce-3/default-content.xml',
                    'theme_settings' => $url . 'woocommerce-3/default-customizer.dat',
                    'widgets_file' => $url . 'woocommerce-3/default-widgets.wie',
                    'screenshot' => $url . 'woocommerce-3/screenshot.jpg',
                    'demo_template' => 'popularis-pro-woocommerce-3',
                    'home_title' => 'Homepage Woocommerce #3',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-woocommerce-4' => array(
                    'demo_name' => 'Popularis PRO WooCommerce #4',
                    'categories' => array('WooCommerce', 'Elementor'),
                    'xml_file' => $url . 'woocommerce-4/default-content.xml',
                    'theme_settings' => $url . 'woocommerce-4/default-customizer.dat',
                    'widgets_file' => $url . 'woocommerce-4/default-widgets.wie',
                    'screenshot' => $url . 'woocommerce-4/screenshot.jpg',
                    'demo_template' => 'popularis-pro-woocommerce-4',
                    'home_title' => 'Homepage Woocommerce #4',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => true,
                    'woo_image_size' => '600',
                    'woo_thumb_size' => '300',
                    'woo_crop_width' => '1',
                    'woo_crop_height' => '1',
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                            array(
                                'slug' => 'woocommerce',
                                'init' => 'woocommerce/woocommerce.php',
                                'name' => 'WooCommerce',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-business' => array(
                    'demo_name' => 'Popularis PRO Business',
                    'categories' => array('Business', 'Elementor'),
                    'xml_file' => $url . 'business/default-content.xml',
                    'theme_settings' => $url . 'business/default-customizer.dat',
                    'widgets_file' => $url . 'business/default-widgets.wie',
                    'screenshot' => $url . 'business/screenshot.jpg',
                    'demo_template' => 'popularis-pro-business',
                    'home_title' => 'Homepage Business',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                'popularis-pro-agency' => array(
                    'demo_name' => 'Popularis PRO Agency',
                    'categories' => array('Business', 'Elementor'),
                    'xml_file' => $url . 'agency/default-content.xml',
                    'theme_settings' => $url . 'agency/default-customizer.dat',
                    'widgets_file' => $url . 'agency/default-widgets.wie',
                    'screenshot' => $url . 'agency/screenshot.jpg',
                    'demo_template' => 'popularis-pro-agency',
                    'home_title' => 'Homepage Agency',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                
                'popularis-pro-startup' => array(
                    'demo_name' => 'Popularis PRO Startup',
                    'categories' => array('Business', 'Creative', 'Portfolio', 'One Page', 'Elementor'),
                    'xml_file' => $url . 'startup/default-content.xml',
                    'theme_settings' => $url . 'startup/default-customizer.dat',
                    'widgets_file' => $url . 'startup/default-widgets.wie',
                    'screenshot' => $url . 'startup/screenshot.jpg',
                    'demo_template' => 'popularis-pro-startup',
                    'home_title' => 'Homepage Startup',
                    'blog_title' => 'Blog',
                    'posts_to_show' => '6',
                    'elementor_width' => '1140',
                    'is_shop' => false,
                    'required_plugins' => array(
                        'free' => array(
                            array(
                                'slug' => 'popularis-extra',
                                'init' => 'popularis-extra/popularis-extra.php',
                                'name' => 'Popularis Extra',
                            ),
                            array(
                                'slug' => 'elementor',
                                'init' => 'elementor/elementor.php',
                                'name' => 'Elementor',
                            ),
                        ),
                        'premium' => array( 
                            array(
                                'slug' => 'popularis-pro',
                                'init' => 'popularis-pro/popularis-pro.php',
                                'name' => 'Popularis PRO',
                            ),
                        ),
                    ),
                ),
                
                
    );
    // combine the two arrays
    $data = array_merge($data, $extra);
 
    return $data;
}

add_filter('popularis_demos_data', 'popularis_pro_get_demos_data_extra');
