<?php
/*
Plugin Name: Whale-Kit
Description: Three advanced widgets and three shortcodes. 1) WK_trem working with categories, post_tag or any taxonomies. Settings from function get_terms(). 2) WK_posts works with posts, pages and any other type of records. Settings from class WP_Query. 3) WK_pages – working pages, posts. The data received through the function get_pages(). Unlike WK_posts working with tree hierarchical data. Advanced Settings to display data and rules for constructing micro-patterns, see <a href="http://bugacms.com/wpEn/whale-kit">page plugin</a>. Russian page plugin <a href="http://bugacms.com/wpEn/whale-kit">Whale-Kit</a>
Author: Yuriy Stepanov (stur)
Plugin URI: http://bugacms.com/wpEn/whale-kit
Author URI: http://bugacms.com/
Version: 2.0
Tested up to: 5.8
Requires PHP: 5.4
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Network:   true
*/
define("WHALE_KIT_ENABLE", 1);
remove_filter( 'the_content', 'do_shortcode' );
add_filter( 'the_content', 'do_shortcode' , 0);
require_once ( dirname(__FILE__).'/wk-tree.php' );
require_once ( dirname(__FILE__).'/wk-terms.php' );
require_once ( dirname(__FILE__).'/wk-posts.php' );



// регистрация шоткодов, registration shortcode
function wk_terms($atts, $cont, $tag) {
    $wk_terms = new WK_terms;
    return $wk_terms->w($atts);
}
add_shortcode('wk_terms', 'wk_terms');

function wk_posts($atts) {
    $wk_posts = new WK_posts;
    return $wk_posts->w($atts);
}
add_shortcode('wk_posts', 'wk_posts');

function wk_pages($atts) {
    $wk_pages = new WK_pages;
    return $wk_pages->w($atts);
}
add_shortcode('wk_pages', 'wk_pages');




