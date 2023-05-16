<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
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
            'latest_news' => $this->latest_news(),
            'top' => get_field('top'),
            'intro' => get_field('intro'),
            'newsletter' => get_field('newsletter'),
            'banner' => get_field('courage_score_banner'),
            'voter_guide' => get_field('voter_guide'),
            'institute' => get_field('institute'),
            'featured_action' => get_field('featured_action'),
        ];
    }

    public function latest_news() {
        $featured_action = get_field('featured_action');
	    $args = array(
            'post_type' => 'post',
            //'cat' => -1, // No Press Releases
	    	'posts_per_page' => 3,
            'post_not_in' => array($featured_action->ID),
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}
