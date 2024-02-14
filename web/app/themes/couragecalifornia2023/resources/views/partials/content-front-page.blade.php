@php 
    function formatTitle($title){
        return preg_replace('/\*(.*?)\*/', '<span>$1</span>', $title);
    }
@endphp

{{-- TOP --}}
<section id="top" data-parallax="scroll" data-image-src="{{ $top['image']['url'] }}">
    <div class="container">
        <h1>{!! formatTitle($top['text']) !!}</h1>
    </div>
</section>

 {{-- INTRO --}}
<section id="intro">
    <div class="container">
        <div class="star">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/></svg>
        </div>
        <div class="text">
            @php the_content() @endphp
        </div>
    </div>
    <div class="image">
        <a href="{{ $intro['intro_link'] }}" target="_blank">
            <img src="{!! $intro['image_desktop']['url'] !!}" class="desktop" />
        </a>
        <img src="{!! $intro['image_mobile']['url'] !!}" class="mobile" />
    </div>
</section>

{{-- Engage --}}
@if ($engage)
<section id="engage">
    <div class="container">
        <h2>{{ $engage['title'] }}</h2>
        <div class="row">
            <div class="col-lg-8 action">
                @php $article = $featured_action @endphp
                @include('partials.article-block-featured')
            </div>
            <div class="col-lg-4 latest">
                @foreach ($latest_news as $article)
                    @include('partials.article-block-landing')
                @endforeach
            </div>
        </div>
        <footer>
            <a class="button" href="{{ $engage['link'] }}">{{ $engage['button'] }}</a>
        </footer>
    </div>
</section>
@endif

{{-- Newsletter --}}
@if ($newsletter)
<section id="newsletter" style="background-image: url({!! $newsletter['image']['url'] !!})">
    <div class="container">
        <div class="text">
            <h2>{!! $newsletter['title'] !!}</h2>
            <p>{!! $newsletter['text'] !!}</p>
        </div>
        @include('partials.newsletter-signup', ['buttonText' => "Count Me In   →", "formName" => "signup"])
        <div class="success">
            {{ $newsletter['success_message']}}
        </div>
    </div>
</section>
@endif

 {{-- COURAGE SCORE --}}
 <section id="courageScore" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text slide-up">
                <h2>{!! formatTitle($banner['title']) !!}</h2>
                <p>{!! $banner['text'] !!}</p>
                <a class="button arrow" href="{{ $banner['link'] }}">{{ $banner['button_text'] }}</a>
            </div>
            <div class="col-lg-6 image">
                <img src="{!! $banner['image']['url'] !!}" />
            </div>
        </div>
    </div>
</section>

 {{-- VOTER GUIDE --}}
 <section id="voterGuide" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text slide-up">
                <h2>{!! formatTitle($voter_guide['title']) !!}</h2>
                <p>{!! $voter_guide['text'] !!}</p>
                <a class="button arrow" href="{{ $voter_guide['link'] }}">{{ $voter_guide['button_text'] }}</a>
            </div>
            <div class="offset-md-1 col-md-5 image">
                <img src="{!! $voter_guide['image']['url'] !!}" />
            </div>
        </div>
    </div>
</section>

 {{-- INSTITUTE --}}
 <section id="institute" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4 image">
                <img src="{!! $institute['image']['url'] !!}" />
            </div>
            <div class="col-md-7 offset-md-1 text">
                <h2>{!! formatTitle($institute['title']) !!}</h2>
                <a class="button arrow" target="_blank" href="{{ $voter_guide['link'] }}">{{ $institute['button_text'] }}</a>
            </div>
        </div>
    </div>
</section>
