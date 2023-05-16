@php $categories = get_the_category($article->ID); @endphp

@php $link = get_the_permalink($article->ID) @endphp

<div class="article slide-up @foreach($categories as $category) cat-{{ $category->slug }}@endforeach">
    <div class="date">
        <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('', $article->ID) }}</time>
    </div>
    <div class="text">
        <div class="category">
            @foreach ($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
        <h3><a href="{{ $link }}">{!! get_the_title($article->ID) !!}</a></h3>
        <p class="byline author vcard">
            @php $post_author_id = get_post_field( 'post_author', $article->ID ); @endphp
            {{ __('By', 'sage') }} <a href="{{ get_author_posts_url($post_author_id) }}" rel="author" class="fn">
                {{ get_the_author_meta('display_name', $post_author_id) }}
            </a>
        </p>
    </div>
</div>