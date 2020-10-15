<div class="container">
    <h1>{!! App::title() !!}</h1>
    @php the_content() @endphp
</div>

<section id='releases'>
    <div class="container">
        @if($releases)
        @foreach ($releases as $release) 
            <div class="release">
                <h3><a href="{{ get_the_permalink($release->ID) }}">{!! get_the_title($release->ID) !!}</a></h3>
                <time class="updated" datetime="{{ get_post_time('c', true, $release) }}">{{ get_the_date('', $release) }}</time>
            </div>
        @endforeach
    @endif
    </div>
</section>