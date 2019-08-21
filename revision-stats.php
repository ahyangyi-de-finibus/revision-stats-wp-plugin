<?php
/*
* Plugin Name: Revision Stats
* Description: Include revision stats with shortcode [revision_stats]
* Version: 1.0.2
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_revision_stats() {
    $dir = plugin_dir_url( __FILE__ );

    wp_enqueue_style("revision_stats", $dir . "/" . "styles.d5290cc6a5c35922a51d.css");
    return "<revision-stats></revision-stats>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/runtime-es5.c8ae985b640079ae0993.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills-es5.6edbdb9a7de91e0784c7.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/main-es5.019f209d3784078fec88.js\"></script>";
}

add_shortcode('revision_stats', 'add_revision_stats');
?>
