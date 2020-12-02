<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageActions extends Controller
{
    public function actions() {
	    $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 10, 
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}
	
	public function categories(){
		return get_categories();
	}
}
