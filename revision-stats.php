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

wp_enqueue_style("revision_stats", $dir . "/" . "styles.d33ff9b795c1f5d07a02.css");
return "<revision-stats></revision-stats>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/runtime.4ccf67c919f9077afc3e.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.d1c7bf4a2ae7c3435f95.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/main.45005b10be1254935cb6.js\"></script>";
}
add_shortcode('revision_stats', 'add_revision_stats');
?>
