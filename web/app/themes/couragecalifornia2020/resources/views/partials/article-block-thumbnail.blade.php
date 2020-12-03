@php $categories = get_the_category($article->ID); @endphp

@php $newtab = true @endphp
@if(in_category(6, $article))
    @php $link = get_field('link', $article->ID) @endphp
@else
    @php $newtab = false @endphp
    @php $link = get_the_permalink($article->ID) @endphp
@endif

<div class="article with-thumbnail slide-up @foreach($categories as $category) cat-{{ $category->slug }}@endforeach">
    <div class="thumbnail">
        <a href="{{ get_the_permalink($article->ID) }}">
        @if($loop->iteration == 1)
            {!! get_the_post_thumbnail($article->ID, 'large') !!}
        @else
            {!! get_the_post_thumbnail($article->ID, 'medium') !!}
        @endif
        </a>
    </div>    

    <div class="date">
        <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('', $article->ID) }}</time>
    </div>

    <div class="text">
        <div class="category">
            @foreach ($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
        <h3><a href="{{ $link }}" @if($newtab) target="_blank" @endif>{!! get_the_title($article->ID) !!}</a></h3>
        <p class="byline author vcard">
            @php $post_author_id = get_post_field( 'post_author', $article->ID ); @endphp
            {{ __('By', 'sage') }} <a href="{{ get_author_posts_url($post_author_id) }}" rel="author" class="fn">
                {{ get_the_author_meta('display_name', $post_author_id) }}
            </a>
            </p>
    </div>
</div>