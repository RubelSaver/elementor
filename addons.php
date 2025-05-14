<?php

/**
 * Plugin Name:   mztraining Addon
 * Description: mztraining support widgets for Elementor.
 * Version:     1.0.0
 * Author:      Example
 * Author URI:  https://example.xyz/
 * Text Domain: mz_training
 */

function mztraining_elementor_addon( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/mzslider.php' );
	require_once( __DIR__ . '/widgets/mztab.php' );
	require_once( __DIR__ . '/widgets/MzRefundTabs.php' );
	require_once( __DIR__ . '/widgets/MzTermsTab.php' );
	require_once( __DIR__ . '/widgets/mzNews.php' );
	require_once( __DIR__ . '/widgets/mzauthor.php' );
	require_once( __DIR__ . '/widgets/mzStory.php' );
	require_once( __DIR__ . '/widgets/mzcourseSearch.php' );
	require_once( __DIR__ . '/widgets/mzdefaultCat.php' );
	require_once( __DIR__ . '/widgets/mzAboutUs.php' );



	
	$widgets_manager->register( new \mz_about_us_addon() );
	$widgets_manager->register( new \mz_default_cat_Addon() );
	$widgets_manager->register( new \mz_custom_search_Addon() );
	$widgets_manager->register( new \mz_our_story_Addon() );
	$widgets_manager->register( new \mz_author_Addon() );
	$widgets_manager->register( new \Mz_News_Addon() );
	$widgets_manager->register( new \Mz_terms_tab_Addon() );
	$widgets_manager->register( new \Mz_refund_tab_Addon() );
	$widgets_manager->register( new \mz_slider_Addon() );
	$widgets_manager->register( new \mz_custom_tab_Addon() );

}
add_action( 'elementor/widgets/register', 'mztraining_elementor_addon' );
