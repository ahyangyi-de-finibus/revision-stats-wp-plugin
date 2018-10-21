<?php
/*
* Plugin Name: Revision Stats
* Description: Include revision stats with shortcode [revision_stats]
* Version: 1.0
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_revision_stats(){
$dir = plugin_dir_url( __FILE__ );

wp_enqueue_style("revision_stats", $dir . "/" . "styles.e12c2598acce6741fd25.css");
return "<revision-stats></revision-stats>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/runtime.4ccf67c919f9077afc3e.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.f6ae3e8b63939c618130.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/main.f1157bf21cd4b076ba75.js\"></script>";
}
add_shortcode('revision_stats', 'add_revision_stats');
?>
