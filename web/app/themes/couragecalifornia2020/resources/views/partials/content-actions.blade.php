<div class="page-header">
    <div class="container">
        <h1>{!! App::title() !!}</h1>
        <div class="row">
            <div class="col-md-6">
                @php the_content() @endphp
            </div>
            <div class="col-md-6 categories">
                Categories
                <ul>
                    @foreach ($categories as $cat)
                <li data-filter="cat-{{ $cat->slug }}">{{ $cat->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<section id='actions'>
    <div class="container">
        @if($actions)
        <div class="grid">
            @foreach ($actions as $article)
            @include('partials.article-block')
            @endforeach
            <div class="grid-sizer"></div>
        </div>
    @endif
    </div>
</section>