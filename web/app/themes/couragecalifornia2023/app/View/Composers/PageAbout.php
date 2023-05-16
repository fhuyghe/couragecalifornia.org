<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageAbout extends Composer
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
            'jobs' => $this->jobs(),
            'staff' => $this->staff(),
            'mission' => get_field('mission'),
			'top_illustration' => get_field('top_illustration'),
			'jobsText' => get_field('jobs'),
			'boards' => get_field('boards_of_director'),
			'accordeon' => get_field('accordeon'),
        ];
    }

    public function staff() {
	    $args = array(
			'post_type' => 'staff',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
    
    public function jobs() {
	    $args = array(
			'post_type' => 'job',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}
