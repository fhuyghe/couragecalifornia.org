<section id="intro" style="background-image: url({{ $top_background['url'] }});">
    <div class="container text-center">
        {!! the_content() !!}
        <a class="button arrow" href="https://couragescore.org" target="_blank">Courage Score Website</a>
    </div>
</section>

 {{-- Methodology--}}
 <section id="methodology" class="banner bottom-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image">
                @php $image = $methodology['image'] @endphp
                @if( !empty( $image ) )
                    <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
            <div class="col-md-6 text slide-up">
                <h2>{!! $methodology['title'] !!}</h2>
                {!! $methodology['text'] !!}
            </div>
        </div>
    </div>
</section>

 {{-- All Stars--}}
 <section id="allstar" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text slide-up">
                <h2>{!! $allstar['title'] !!}</h2>
                {!! $allstar['text'] !!}
            </div>
            <div class="col-md-6 image">
                @php $image = $allstar['image'] @endphp
                @if( !empty( $image ) )
                <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
        </div>
    </div>
</section>

 {{-- Vote --}}
 <section id="vote" class="banner  bottom-image">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image">
                @php $image = $vote['image'] @endphp
                @if( !empty( $image ) )
                <img src="{{ esc_url($image['url']) }}" alt="{{ esc_attr($image['alt']) }}" />
                @endif
            </div>
            <div class="col-md-6 text slide-up">
                <h2>{!! $vote['title'] !!}</h2>
                {!! $vote['text'] !!}
                <a class="button arrow" href="https://couragescore.org" target="_blank">Courage Score Website</a>
            </div>
        </div>
    </div>
</section>

{{-- Partners --}}
@if(isset($partners))
    <section id="partners">
        <div class="container">
            <h2>{{ $partners['title'] }}</h2>
            {!! $partners['text'] !!}
            <div class="list">
                {!! $partners['list'] !!}
            </div>
        </div>
    </section>
@endif