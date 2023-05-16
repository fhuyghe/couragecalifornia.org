<section id="top" class="text-center">
    <div class="container">
        <div class="container">
            <h1>{!! the_title() !!}</h1>
            {!! $intro !!}
            <a class="button arrow" target="_blank" href="https://progressivevotersguide.com/california">Voter Guide Website</a>

            @if($top_illustration)
                <img src="{{ $top_illustration['url'] }}" />
            @endif
        </div>
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 subtitle">
                <h3>{{ $intro_paragraph }}</h3>
            </div>
            <div class="col-md-6 text">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>

<section id="blue">
    <div class="container">
        @foreach($blue as $banner)
            <div class="row">
                <div class="col-md-6 text">
                    <h3>{{ $banner['title'] }}</h3>
                    <p>{{ $banner['text'] }}</p>
                    @if($loop->iteration == 3)
                    <a class="white button arrow" target="_blank" href="https://progressivevotersguide.com/california">Voter Guide Website</a>
                    @endif
                </div>
                <div class="col-md-6 image">
                    <img src="{{ $banner['image']['url'] }}" />
                </div>
            </div>
        @endforeach
    </div>
</section>

@if(isset($partners))
    <section id="partners">
        <div class="container">
            <h2>{{ $partners['title'] }}</h2>
            <p>{{ $partners['text'] }}</p>
            <div class="list">
                {!! $partners['partners'] !!}
            </div>
        </div>
    </section>
@endif