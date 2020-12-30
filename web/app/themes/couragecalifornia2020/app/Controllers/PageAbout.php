<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageAbout extends Controller
{
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
    
    public function data(){
        $data = [];
		$data['top_illustration'] = get_field('top_illustration');
		$data['bottom_illustration'] = get_field('bottom_illustration');
		$data['jobs'] = get_field('jobs');
		$data['boards_of_director'] = get_field('boards_of_director');
		$data['accordeon'] = get_field('accordeon');

        return $data;
    }
}
