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
                    @if($data['top_illustration'])
                        <img src="{{ $data['top_illustration']['url'] }}" />
                    @endif
                </div>
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

<section id="content">
    <div class="container">
        @php the_content() @endphp
    </div>
    @if($data['bottom_illustration'])
        <img src="{{ $data['bottom_illustration']['url'] }}" />
    @endif
</section>