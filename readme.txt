=== Whale-Kit ===
Contributors: stur
Donate link: http://bugacms.com/wpEn/whale-kit
Tags: categories, taxonomies, posts, pages, shortcodes, get_terms, WP_Query, get_pages
Stable tag: 2.0
Tested up to: 5.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Three alternative to standard widget Categories, Recent Posts and Pages.
== Description ==
The plugin adds 3 shortcodes:
[wk_terms /] for displaying categories, tags, any other taxonomies, works through the WP_Term_Query class.
[wk_posts /] for displaying posts, pages and any other post types, WK_posts receives data through the WP_Query class
[wk_pages /] output of hierarchical structures of pages, posts and other types of posts, the data is obtained using the get_pages() function

Shortcodes pass all call parameters to the corresponding functions and receive the initial data set from them.
Explore the basic parameters of calling source functions by following the links.

[Whale Kit](http://bugacms.com/wpEn/whale-kit)
[Whale Kit - examples](http://bugacms.com/wpEn/whale-kit-examples/)
[Whale Kit - по русски](http://bugacms.com/wpRu/whale-kit)


== Installation ==

1. Unzip and upload folder `whale-kit` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can use short tags [wk_posts ...] or [wk_terms ...] or [wk_pages ...] in the text post or page.
4. You may need to format the SSC, give an example to collapse lists:
`
.widget_wk_post_widget  ul,
.widget_wk_pages_widget ul{ border-left: dotted 1px  #DEDEDE; }
.widget_wk_post_widget  ul.childs,
.widget_wk_pages_widget ul.childs{ border-left: dotted 1px  #DEDEDE; margin-left: 0.5em;}
li.page_item>a:before{ content:'-' }
li.page_has_children>a:before { content:'+ ' }
li.current_page_ancestor > a:before { content:'- ' }
li.current_page > a:after { content:' <' }
li.current_page>a {text-decoration: underline}


.widget_wk_terms_widget ul{ border-left: dotted 1px  #DEDEDE; padding-left: .2em }
.widget_wk_terms_widget  ul.childs {     margin-left: 0.5em; }
li.cat_item>a:before{ content:' ' }
li.cat_has_children>a:before { content:'+' }
li.current_cat > a:before { content:'-' }
li.current_cat > a {text-decoration: underline}
li.current_cat_ancestor  > a:before { content:'-' }
.widget_wk_terms_widget li sup { font-size: 9px; margin: -5px 0 0 5px; vertical-align:top !important; }
.widget_wk_terms_widget li a{ vertical-align:bottom !important; margin-top: 5px;}
`
add this code to a file style of the current theme or to include other way


== Frequently Asked Questions ==
= Show child categories from the category My_Category id:34 =
`[wk_terms child_of=34]`

= Show all categories and empty too =
`[wk_terms hide_empty=0]`

= Exclude a category 32 and all childs =
`[wk_terms exclude_tree=array(32)]`

= Sort categories by number of posts without hierarchy =
`[wk_terms orderby=count order=ASC show_count=1  hierarchical=0 /]`


= Collapse categories =
`[wk_terms collapse=1 hierarchical=1]`
The collapse of the inactive branches of the tree of categories.

= Display tags and specify the number of records =
`[wk_terms taxonomy=post_tag show_count=1]`

= Show category and set the font size depending on the number of entries in the category =
`[wk_terms show_count=1 size_of_count=1 smallest=8 largest=22 unit=px]`

= Show 5 records out of category id:56, exclude category id:23 =
`[wk_posts cat=56,-23 posts_per_page=5]`


= Show entries with thumbnail =
`[wk_posts meta_key=_thumbnail_id show_thumbnail=60?60 /]`


= Multiple Custom Field Handling =
`
[wk_posts
tax_query='array(
    "relation"=>"AND",
     array(
       "taxonomy" => "category",
       "field" => "id",
       "terms" => array(16)
     ),
     array(
        "taxonomy" => "post_tag",
        "field" => "slug",
        "terms" => array("test_wk")
     )
)'
/]
`

= Show child pages to 567 pages =
`[wk_pages child_of=567]`


= Collapse and sorting pages =
`[wk_pages collapse=1 sort_column=menu_order sort_order=ASC]`






== Screenshots ==
1. Add default widget-shortcode

2. Categories tree

3. Pages tree

4. Use as a shortcod


== Changelog ==

= 1.0 =
 * Start Projects
= 1.0.1 =
 * Fixed bug `division by zero`  in the calculation of the font size.
= 1.1.0 =
 WK_Pages added to work with hierarchical structures. Added ability to display thumbnails of records.
 = 2.0.0 =
Widgets removed, use default widget shortcode.
