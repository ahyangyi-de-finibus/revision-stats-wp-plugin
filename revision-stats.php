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

    wp_enqueue_style("revision_stats", $dir . "/" . "styles.d5290cc6a5c35922a51d.css");
    return "<revision-stats></revision-stats>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/main.87adf438603d63ea79c9.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/polyfills.cea9bfca28447a75b26b.js\"></script>" .
        "<script type=\"text/javascript\" src=\"" . $dir . "/main.c2a8bbff7c161be8b9c0.js\"></script>";
}

add_shortcode('revision_stats', 'add_revision_stats');
?>
