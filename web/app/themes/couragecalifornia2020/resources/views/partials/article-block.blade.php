@php $categories = get_the_category($article->ID); @endphp

<div class="article slide-up @foreach($categories as $category) cat-{{ $category->slug }}@endforeach">
    <div class="thumbnail">
        @if($loop->iteration == 1)
            {!! get_the_post_thumbnail($article->ID, 'large') !!}
        @else
            {!! get_the_post_thumbnail($article->ID, 'medium') !!}
        @endif
    </div>
    <div class="text">
        <div class="category">
            @foreach ($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
        <h3><a href="{{ get_the_permalink($article->ID) }}">{!! get_the_title($article->ID) !!}</a></h3>
        @if($loop->iteration == 1)
            <div class="excerpt">
                {!! get_the_excerpt($article->ID) !!}
            </div>
        @endif
        @include('partials.entry-meta')
    </div>
</div>