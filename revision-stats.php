<?php
/*
* Plugin Name: Revision Stats
* Description: Include revision stats with shortcode [revision_stats]
* Version: 1.0.1
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_revision_stats() {
    $dir = plugin_dir_url( __FILE__ );

    wp_enqueue_style("revision_stats", $dir . "/" . "styles.d5290cc6a5c35922a51d.css");
    return "<revision-stats></revision-stats>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/runtime.58db6607081ba1289d07.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.5d3fb9493999a51d6359.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/main.82506ea3242340975479.js\"></script>";
}

add_shortcode('revision_stats', 'add_revision_stats');
?>
