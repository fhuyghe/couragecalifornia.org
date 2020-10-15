<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCareers extends Controller
{
    public function current_jobs() {
	    $args = array(
			'post_type' => 'job',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}
