@php $categories = get_the_category($article->ID); @endphp

<div class="article slide-up">
    <div class="thumbnail">
        {!! get_the_post_thumbnail($article->ID, 'medium') !!}
    </div>
    <div class="text">
        <div class="category">
            @foreach ($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
        <h3><a href="{{ get_the_permalink($article->ID) }}">{!! get_the_title($article->ID) !!}</a></h3>
    </div>
</div>