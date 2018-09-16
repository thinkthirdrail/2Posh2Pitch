<?php

// Designedby Filter
function remove_footer_admin () {
    echo 'Designed & Developed By Thirdrail Creative';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Admin: Remove Admin Bar Items
function remove_admin_bar_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_logo');

// Hide ACF admin
// add_filter('acf/settings/show_admin', '__return_false');

// WordPress custom title script

function title_tag() {

// is the current page a tag archive page?
if (function_exists('is_tag') && is_tag()) {

	// if so, display this custom title
	echo 'Tag Archive for &quot;'.$tag.'&quot; - ';

// or, is the page an archive page?
} elseif (is_archive()) {

	// if so, display this custom title
	wp_title(''); echo ' Archive - ';

// or, is the page a search page?
} elseif (is_search()) {

	// if so, display this custom title
	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';

// or, is the page a single post or a literal page?
} elseif (!(is_404()) && (is_single()) || (is_page())) {

	// if so, display this custom title
	wp_title(''); echo ' - ';

// or, is the page an error page?
} elseif (is_404()) {

	// yep, you guessed it
	echo 'Not Found - ';

}
// finally, display the blog name for all page types
bloginfo('name');

}

?>
