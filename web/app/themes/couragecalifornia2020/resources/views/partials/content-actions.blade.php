<div class="container">
    @php the_content() @endphp
</div>

<section id='actions'>
    <div class="container">
    @if($actions)
        @foreach ($actions as $article)
            @include('partials.article-block')
        @endforeach
    @endif
    </div>
</section>