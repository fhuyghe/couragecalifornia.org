<div class="container">
    @php the_content() @endphp
</div>

<section id='actions'>
    <div class="container">
        @if($actions)
        <div class="row">
        @foreach ($actions as $article)
            @include('partials.article-block')
        @endforeach
        </div>
    @endif
    </div>
</section>