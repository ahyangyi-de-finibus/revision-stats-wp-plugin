<?php
/*
* Plugin Name: Revision Stats
* Description: Include revision stats with shortcode [revision_stats]
* Version: 1.0
* Author: Yi Yang
* Author URI: https://blog.ahyangyi.org
*/

function add_revision_stats() {
    $dir = plugin_dir_url( __FILE__ );

    wp_enqueue_style("revision_stats", $dir . "/" . "styles.4475941bb81c68bc6671.css");
    return "<revision-stats></revision-stats>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/runtime.95ba26ba764e20834375.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.cea9bfca28447a75b26b.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/main.c2a8bbff7c161be8b9c0.js\"></script>";
}

add_shortcode('revision_stats', 'add_revision_stats');
?>
