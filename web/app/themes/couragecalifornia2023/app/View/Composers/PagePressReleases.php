<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PagePressReleases extends Composer
{
	/**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'releases' => $this->releases(),
        ];
    }
    public function releases() {
	    $args = array(
			'post_type' => 'press-release',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}
