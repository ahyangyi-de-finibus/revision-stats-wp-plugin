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

wp_enqueue_style("revision_stats", $dir . "/" . "styles.f18bf8bf76e6f4f89f0a.css");
return "<revision-stats></revision-stats>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/runtime.4ccf67c919f9077afc3e.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.f6ae3e8b63939c618130.js\"></script>" .
    "<script type=\"text/javascript\" src=\"" . $dir . "/main.3252d3a684acbd3296ff.js\"></script>";
}
add_shortcode('revision_stats', 'add_revision_stats');
?>
