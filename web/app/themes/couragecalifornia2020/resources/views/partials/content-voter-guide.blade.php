<section id="intro">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h1>{!! App::title() !!}</h1>
                    {!! the_field('intro') !!}
                    <a class="button" href="https://progressivevotersguide.com/california">Voter Guide Website</a>
                </div>
                <div class="col-md-6 illustration">
                    <img src="{{ get_field('top_illustration')['url'] }}" />
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        @php the_content() @endphp
    </div>
    <img src="{{ get_field('bottom_illustration')['url'] }}" />
</section>