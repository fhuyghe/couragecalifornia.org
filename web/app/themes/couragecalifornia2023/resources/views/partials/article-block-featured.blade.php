@php $categories = get_the_category($article->ID); @endphp

@if(in_category(7, $article))
    @php $link = get_post_meta($article->ID, 'wpcf-field_ak_link_url', true) @endphp
    @if(!$link)
        @php $link = get_field('link', $article->ID) @endphp
    @endif
@endif

<div class="article featured slide-up @foreach($categories as $category) cat-{{ $category->slug }}@endforeach">
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail">
            <a href="{{ get_the_permalink($article->ID) }}">
                {!! get_the_post_thumbnail($article->ID, 'large') !!}
            </a>
            </div>
        </div>
        <div class="col-md-6 text">
                <div class="category">
                    @foreach ($categories as $category)
                        {{ $category->name }}
                    @endforeach
                </div>
                <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date('', $article->ID) }}</time>

                <h3><a href="{{ get_the_permalink($article->ID) }}">
                    {!! get_the_title($article->ID) !!}
                </a></h3>

                <p class="byline author vcard">
                    @php $post_author_id = get_post_field( 'post_author', $article->ID ); @endphp
                    {{ __('By', 'sage') }} <a href="{{ get_author_posts_url($post_author_id) }}" rel="author" class="fn">
                      {{ get_the_author_meta('display_name', $post_author_id) }}
                    </a>
                  </p>
                    <div class="excerpt">
                        {!! get_the_excerpt($article->ID) !!}
                    </div>

                    @if(in_category(7, $article))
                    <div>
                        <a href="{{ $link }}" target="_blank" class="button yellow arrow">Act Now</a>
                    </div>
                    @endif
        </div>
    </div>
</div>