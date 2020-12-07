<section id="top" class="text-center">
    <div class="container">
        <div class="container">
            <h1>{!! App::title() !!}</h1>
            {!! $data['intro'] !!}
            <a class="button" href="https://progressivevotersguide.com/california">Voter Guide Website</a>

            @if($data['top_illustration'])
                <img src="{{ $data['top_illustration']['url'] }}" />
            @endif
        </div>
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 subtitle">
                <h3>{{ $data['intro_paragraph'] }}</h3>
            </div>
            <div class="col-md-6 text">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>

<section id="blue">
    <div class="container">
        @foreach($data['blue'] as $banner)
            <div class="row">
            <div class="col-md-6">
                <h3>{{ $banner['title'] }}</h3>
                <p>{{ $banner['text'] }}</p>
            </div>
            <div class="col-md-6">
                <img src="{{ $banner['image']['url'] }}" />
            </div>
            </div>
        @endforeach
    </div>
</section>

@if($data['partners'])
    @php $section = $data['partners'] @endphp
    <section id="partners">
        <div class="container">
            <h2>{{ $section['title'] }}</h2>
            <p>{{ $section['text'] }}</p>
            <div class="list">
                {!! $section['partners'] !!}
            </div>
        </div>
    </section>
@endif

@if($data['equity'])
    @php $section = $data['equity'] @endphp
    <section id="equity">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text">
                    <h2>{{ $section['title'] }}</h2>
                    {!! $section['text'] !!}
                </div>
                <div class="col-md-6 image">
                    <img src="{{ $section['image']['url'] }}" alt="{{ $section['image']['alt'] }}" />
                </div>
            </div>
        </div>
    </section>
@endif

@if($data['institute'])
    @php $section = $data['institute'] @endphp
    <section id="bottom" class="text-center">
        <div class="container">
            <h2>{{ $section['title'] }}</h2>
            {!! $section['text'] !!}
        </div>
        @if($data['bottom_illustration'])
            <img src="{{ $data['bottom_illustration']['url'] }}" />
        @endif
    </section>
@endif