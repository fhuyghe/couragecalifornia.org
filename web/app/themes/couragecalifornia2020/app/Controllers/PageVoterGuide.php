<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageVoterGuide extends Controller
{
    public function data(){
        $data = [];
		$data['top_illustration'] = get_field('top_illustration');
		$data['intro'] = get_field('intro');
		$data['intro_paragraph'] = get_field('intro_paragraph');
		$data['blue'] = get_field('blue');
		$data['partners'] = get_field('partners');
		$data['equity'] = get_field('equity_on_trial');
		$data['institute'] = get_field('courage_california_institute');
		$data['bottom_illustration'] = get_field('bottom_illustration');

        return $data;
    }
}
