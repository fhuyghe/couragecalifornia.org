<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageVoterGuide extends Controller
{
    public function data(){
        $data = [];
		$data['top_illustration'] = get_field('top_illustration');
		$data['bottom_illustration'] = get_field('bottom_illustration');

        return $data;
    }
}
