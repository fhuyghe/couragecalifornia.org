@php 
    function formatTitle($title){
        return preg_replace('/\*(.*?)\*/', '<span>$1</span>', $title);
    }
@endphp

{{-- TOP --}}
@php $top = $data['top'] @endphp
<section id="top" data-parallax="scroll" data-image-src="{{ $top['image']['url'] }}">
    <div class="container">
        <h1>{!! formatTitle($top['text']) !!}</h1>
    </div>
</section>

 {{-- INTRO --}}
 @php $intro = $data['intro'] @endphp
<section id="intro">
    <div class="container">
        <div class="star">STAR</div>
        <div class="text">
            @php the_content() @endphp
        </div>
        <div class="image">
            <img src="{!! $intro['image']['url'] !!}" />
        </div>
    </div>
</section>

{{-- ACTIONS --}}
<section id="actions">
    <div class="container">
        <h2>Actions</h2>
        <div class="row">
        @foreach ($latest_news as $article)
            @include('partials.article-block')
        @endforeach
    </div>
    <a class="button" href="/actions">Read More</a>
    </div>
</section>

{{-- Newsletter --}}
@php $newsletter = $data['newsletter'] @endphp
 <section id="newsletter" style="background-image: url({!! $newsletter['image']['url'] !!})">
    <div class="container">
        <div class="text">
            <h2>{!! $newsletter['title'] !!}</h2>
            {!! $newsletter['text'] !!}
        </div>
        @include('partials.newsletter-signup')
        <div class="success">
            {{ $newsletter['success_message']}}
        </div>
    </div>
</section>

 {{-- COURAGE SCORE --}}
 @php $banner = $data['courage_score_banner'] @endphp
 <section id="courageScore" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text slide-up">
                <h2>{!! formatTitle($banner['title']) !!}</h2>
                {!! $banner['text'] !!}
                <a class="button" href="/courage-score">{{ $banner['button_text'] }}</a>
            </div>
            <div class="col-md-6 image">
                <img src="{!! $banner['image']['url'] !!}" />
            </div>
        </div>
    </div>
</section>

 {{-- VOTER GUIDE --}}
 @php $banner = $data['voter_guide'] @endphp
 <section id="voterGuide" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text slide-up">
                <h2>{!! formatTitle($banner['title']) !!}</h2>
                {!! $banner['text'] !!}
                <a class="button" href="/courage-score">{{ $banner['button_text'] }}</a>
            </div>
            <div class="col-md-6 image">
                <img src="{!! $banner['image']['url'] !!}" />
            </div>
        </div>
    </div>
</section>

 {{-- INSTITUTE --}}
 @php $banner = $data['institute'] @endphp
 <section id="institute" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4 image">
                <img src="{!! $banner['image']['url'] !!}" />
            </div>
            <div class="col-md-8 text">
                <h2>{!! formatTitle($banner['title']) !!}</h2>
                <a class="button" href="/courage-score">{{ $banner['button_text'] }}</a>
            </div>
        </div>
    </div>
</section>