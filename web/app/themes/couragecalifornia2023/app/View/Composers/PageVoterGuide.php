<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageVoterGuide extends Composer
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
            'top_illustration' => get_field('top_illustration'),
			'intro' => get_field('intro'),
			'intro_paragraph' => get_field('intro_paragraph'),
			'blue' => get_field('blue'),
			'partners' => get_field('partners'),
        ];
    }
}
