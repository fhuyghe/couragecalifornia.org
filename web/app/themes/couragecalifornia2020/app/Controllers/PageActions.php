<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageActions extends Controller
{

	public function latestaction() {
	    $args = array(
			'post_status' => array('publish'),
			'post_type' => 'post',
			'category_name' => 'action',
			'posts_per_page' => 1,
	    );
		$the_query = new WP_Query( $args );
	    return $the_query->posts;
	}

    public function actions() {
	    $args = array(
			'post_status' => array('publish'),
			'post_type' => 'post',
			'cat' => -1, // No Press Releases
			'posts_per_page' => 10, 
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}
	
	public function categories(){
		return get_categories();
	}
}
