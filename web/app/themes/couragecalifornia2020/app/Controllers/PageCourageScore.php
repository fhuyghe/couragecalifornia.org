<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageCourageScore extends Controller
{
    public function data(){
        $data = [];
		$data['top_background'] = get_field('top_background');
		$data['methodology'] = get_field('methodology');
		$data['allstar'] = get_field('allstar');
		$data['vote'] = get_field('vote');
		$data['partners'] = get_field('partners');

        return $data;
    }
}
