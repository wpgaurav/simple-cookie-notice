<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gauravtiwari.org
 * @since             1.0.0
 * @package           Dynamic_Month_Year_Into_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Dynamic Month & Year into Posts
 * Plugin URI:        https://gauravtiwari.org/snippet/dynamic-month-year/
 * Description:       Insert dynamic year, month, dates, days, next and previous dates into content and meta using shortcodes. Use this plugin to boost your site’s SEO, automate your affiliate marketing, automatically updating blogging lists, offer dynamic coupon expiries and more, just by using these variables anywhere.
 * Version:           1.2.9
 * Author:            Gaurav Tiwari
 * Author URI:        https://gauravtiwari.org
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dynamic-month-year-into-posts
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
define( 'DYNAMIC_MONTH_YEAR_INTO_POSTS_VERSION', '1.2.9' );

// Registering shortcodes
add_shortcode( 'year' , 'rmd_current_year' );
    function rmd_current_year() {
    $year = date_i18n("Y");
    return "$year";
}
add_shortcode( 'month' , 'rmd_current_month' );
    function rmd_current_month() {
    $month = date_i18n("F");
    return "$month";
}
add_shortcode( 'cmonth' , 'rmd_current_caps_month' );
    function rmd_current_caps_month() {
    $ucmonth = date_i18n("F");
    $cmonth = ucfirst($ucmonth);
    return "$cmonth";
}
add_shortcode( 'mon' , 'rmd_current_mon' );
    function rmd_current_mon() {
    $mon = date_i18n("M");
    return "$mon";
}
add_shortcode( 'cmon' , 'rmd_current_caps_mon' );
    function rmd_current_caps_mon() {
    $ucmon = date_i18n("M");
    $cmon = ucfirst($ucmon);
    return "$cmon";
}
add_shortcode( 'mm' , 'rmd_current_mm' );
    function rmd_current_mm() {
    $mm = date_i18n("m");
    return "$mm";
}
add_shortcode( 'mn' , 'rmd_current_mn' );
    function rmd_current_mn() {
    $mn = date_i18n("n");
    return "$mn";
}
add_shortcode( 'nmonth' , 'rmd_next_month' );
    function rmd_next_month() {
    // $nxtm = strtotime("next month");
    $nmonth = date_i18n('F', mktime(0, 0, 0, date('n') + 1, 1));
    return "$nmonth";
}
add_shortcode( 'cnmonth' , 'rmd_next_caps_month' );
    function rmd_next_caps_month() {
    // $nxtm11 = strtotime("next month");
    $nmonth11 = date_i18n('F', mktime(0, 0, 0, date('n') + 1, 1));
    $cnmonth = ucfirst($nmonth11);
    return "$cnmonth";
}
add_shortcode( 'pmonth' , 'rmd_prev_month' );
    function rmd_prev_month() {
    $pvsm = strtotime("previous month");
    $pmonth = date_i18n("F",$pvsm);
    return "$pmonth";
}
add_shortcode( 'cpmonth' , 'rmd_prev_caps_month' );
    function rmd_prev_caps_month() {
    $pvsm11 = strtotime("previous month");
    $pmonth11 = date_i18n("F",$pvsm11);
    $cpmonth = ucfirst($pmonth11);
    return "$cpmonth";
}
add_shortcode( 'nmon' , 'rmd_next_month_short' );
    function rmd_next_month_short() {
    // $nxtm1 = strtotime("next month");
    $nmon = date_i18n('M', mktime(0, 0, 0, date('n') + 1, 1));
    return "$nmon";
}
add_shortcode( 'cnmon' , 'rmd_next_month_short_caps' );
    function rmd_next_month_short_caps() {
    // $nxtm13 = strtotime("next month");
    $nmon13 = date_i18n('M', mktime(0, 0, 0, date('n') + 1, 1));
    $cnmon = ucfirst($nmon13);
    return "$cnmon";
}
add_shortcode( 'pmon' , 'rmd_prev_month_short' );
    function rmd_prev_month_short() {
    $pvsm1 = strtotime("previous month");
    $pmon = date_i18n("M",$pvsm1);
    return "$pmon";
}
add_shortcode( 'cpmon' , 'rmd_prev_month_short_caps' );
    function rmd_prev_month_short_caps() {
    $pvsm13 = strtotime("previous month");
    $pmon13 = date_i18n("M",$pvsm13);
    $cpmon = ucfirst($pmon13);
    return "$cpmon";
}
add_shortcode( 'date' , 'rmd_current_date' );
    function rmd_current_date() {
    $date = date_i18n("F j, Y");
    return "$date";
}
add_shortcode( 'monthyear' , 'rmd_monthyear' );
    function rmd_monthyear() {
    $monthyear1 = date_i18n("F Y");
    $monthyear = ucfirst($monthyear1);
    return "$monthyear";
}
add_shortcode( 'nyear' , 'rmd_next_year' );
    function rmd_next_year() {
    $currentyear1 = date_i18n("Y");
    $nyear = $currentyear1 + 1;
    return "$nyear";
}
add_shortcode( 'nnyear' , 'rmd_next_next_year' );
    function rmd_next_next_year() {
    $currentyear11 = date_i18n("Y");
    $nnyear = $currentyear11 + 2;
    return "$nnyear";
}
add_shortcode( 'pyear' , 'rmd_previous_year' );
    function rmd_previous_year() {
    $currentyear2 = date_i18n("Y");
    $pyear = $currentyear2 - 1;
    return "$pyear";
}
add_shortcode( 'ppyear' , 'rmd_previous_previous_year' );
    function rmd_previous_previous_year() {
    $currentyear22 = date_i18n("Y");
    $ppyear = $currentyear22 - 2;
    return "$ppyear";
}
add_shortcode( 'dt' , 'rmd_current_dt' );
    function rmd_current_dt() {
    $dt = date_i18n("j");
    return "$dt";
}
add_shortcode( 'weekday' , 'rmd_current_weekday' );
    function rmd_current_weekday() {
    $weekday = date_i18n("l");
    return "$weekday";
}
add_shortcode( 'wd' , 'rmd_current_wd' );
    function rmd_current_wd() {
    $wd = date_i18n("D");
    return "$wd";
}

// Adding support to native WP elements

add_filter( 'the_title', 'do_shortcode' );
add_filter( 'single_post_title', 'do_shortcode' );
add_filter( 'wp_title', 'do_shortcode' );
add_filter('the_excerpt', 'do_shortcode');

// Rank Math Support
add_filter( 'rank_math/frontend/title', function( $title ) {
    return do_shortcode( $title );
});
add_filter( 'rank_math/frontend/description', function( $description ) {
    return do_shortcode( $description );
});
// add_filter( 'rank_math/paper/auto_generated_description/apply_shortcode', '__return_true' );
add_filter( 'rank_math/product_description/apply_shortcode', '__return_true' );
add_filter( 'rank_math/frontend/breadcrumb/html', 'do_shortcode' );
/* In Beta — Open Graph Testing for Rank Math */
add_filter( 'rank_math/opengraph/facebook/og_title', function( $fbog ) {
    return do_shortcode( $fbog );
});
add_filter( 'rank_math/opengraph/facebook/og_description', function( $fbogdesc ) {
    return do_shortcode( $fbogdesc );
});
add_filter( 'rank_math/opengraph/twitter/title', function( $twtitle ) {
    return do_shortcode( $twtitle );
});
add_filter( 'rank_math/opengraph/twitter/description', function( $twdesc ) {
    return do_shortcode( $twdesc );
});
// Yoast SEO Support - not complete
add_filter( 'wpseo_title', 'do_shortcode' );
add_filter( 'wpseo_metadesc', 'do_shortcode' );
add_filter( 'wpseo_opengraph_title', 'do_shortcode' );
add_filter( 'wpseo_opengraph_desc', 'do_shortcode' );
// add_filter( 'wpseo_json_ld_output', 'do_shortcode' );
add_filter('wpseo_schema_webpage', function($data) {
    $data['name'] = do_shortcode($data['name']);
    return $data;
});

// SEOPress Support

add_filter( 'seopress_titles_title', 'do_shortcode'); // SEOPress Support
add_filter( 'seopress_titles_desc', 'do_shortcode'); // SEOPress Support

// Elementor Support - Should fix all rendering issues.
add_filter( 'elementor/widget/render_content', 'do_shortcode');

// Miscellaneous
add_filter( 'crp_title', 'do_shortcode'); // CRP Support
// add_filter( 'rank_math/snippet/breadcrumb', 'do_shortcode' ); @TODO

// Add Shortcodes
add_filter( 'plugin_action_links_dynamic-month-year-into-posts/dynamic-month-year-into-posts.php', 'dmyip_settings_link' );
function dmyip_settings_link( $links ) {
    // Create the link.
    $settings_link = "<a href='https://gauravtiwari.org/snippet/dynamic-month-year/#shortcodes'>" . __( 'List of Shortcodes' ) . '</a>';
    // Adds the link to the end of the array.
    array_push(
        $links,
        $settings_link
    );
    return $links;
}