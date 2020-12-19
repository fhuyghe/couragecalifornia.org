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
        <div class="star">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/></svg>
        </div>
        <div class="text">
            @php the_content() @endphp
        </div>
    </div>
    <div class="image">
        <img src="{!! $intro['image_desktop']['url'] !!}" class="desktop" />
        <img src="{!! $intro['image_mobile']['url'] !!}" class="mobile" />
    </div>
</section>

{{-- Engage --}}
<section id="engage">
    <div class="container">
        <h2>Engage</h2>
        <div class="row">
            <div class="col-md-8 action">
                @php $article = $data['featured_action'] @endphp
                @include('partials.article-block-featured')
            </div>
            <div class="col-md-4 latest">
                @foreach ($latest_news as $article)
                    @include('partials.article-block-landing')
                @endforeach
            </div>
        </div>
        <footer>
            <a class="button" href="/engage">Read More</a>
        </footer>
    </div>
</section>

{{-- Newsletter --}}
@php $newsletter = $data['newsletter'] @endphp
 <section id="newsletter" style="background-image: url({!! $newsletter['image']['url'] !!})">
    <div class="container">
        <div class="text">
            <h2>{!! $newsletter['title'] !!}</h2>
            <p>{!! $newsletter['text'] !!}</p>
        </div>
        @include('partials.newsletter-signup', ['buttonText' => "Count Me In   →"])
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
                <p>{!! $banner['text'] !!}</p>
                <a class="button arrow" href="/courage-score">{{ $banner['button_text'] }}</a>
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
                <p>{!! $banner['text'] !!}</p>
                <a class="button arrow" href="/courage-score">{{ $banner['button_text'] }}</a>
            </div>
            <div class="offset-md-1 col-md-5 image">
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
            <div class="col-md-7 offset-md-1 text">
                <h2>{!! formatTitle($banner['title']) !!}</h2>
                <a class="button arrow" target="_blank" href="https://couragecaliforniainstitute.org">{{ $banner['button_text'] }}</a>
            </div>
        </div>
    </div>
</section>