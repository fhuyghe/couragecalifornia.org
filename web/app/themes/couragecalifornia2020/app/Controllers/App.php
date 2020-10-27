<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function copyright() {
        $all_posts = get_posts( 'post_status=publish&order=ASC' );
        $first_post = $all_posts[0];
        $first_date = $first_post->post_date_gmt;
        $copyright = 'Copyright &copy; ';
        if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
            $copyright .= date( 'Y' );
        } else {
            $copyright .= substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
        }
        $copyright .= ' ';
        $copyright .= get_bloginfo( 'name' );
        $copyright .= ' All rights reserved.';
        return $copyright;
    }
}
