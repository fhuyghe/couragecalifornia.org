<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageEngage extends Composer
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
            'latestaction' => $this->latestaction(),
            'newsletter' => $this->newsletter(),
            'categories' => $this->categories(),
        ];
    }

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

	public function newsletter(){
		$data = [];
		$data['title'] = get_field('newsletter_title');
		$data['text'] = get_field('newsletter_text');
		$data['image'] = get_field('newsletter_image');

		return $data;
	}
	
	public function categories(){
		return get_categories();
	}
}
