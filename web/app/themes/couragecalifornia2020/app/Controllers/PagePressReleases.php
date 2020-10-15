<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PagePressReleases extends Controller
{
    public function releases() {
	    $args = array(
			'post_type' => 'press-release',
	    	'posts_per_page' => -1,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}
