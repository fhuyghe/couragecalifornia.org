<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'copyright' => $this->copyright(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function copyright() {
        $all_posts = get_posts( 'post_status=publish&order=ASC' );
        $first_post = $all_posts[0];
        $first_date = $first_post->post_date_gmt;
        $copyright = '&copy; ';
        if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
            $copyright .= date( 'Y' );
        } else {
            $copyright .= substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
        }
        $copyright .= ' ';
        $copyright .= get_bloginfo( 'name' );
        return $copyright;
    }
}
