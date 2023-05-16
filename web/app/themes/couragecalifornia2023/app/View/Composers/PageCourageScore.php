<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageCourageScore extends Composer
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
            'top_background' => get_field('top_background'),
			'methodology' => get_field('methodology'),
			'allstar' => get_field('allstar'),
			'vote' => get_field('vote'),
			'partners' => get_field('partners'),
        ];
    }
}
