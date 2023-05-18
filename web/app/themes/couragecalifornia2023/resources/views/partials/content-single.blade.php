<article @php post_class() @endphp>
  <header>
    <div class="container">
      {!! the_category() !!}
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
      {!! social_warfare() !!}

      @php $thumbnail = get_the_post_thumbnail(get_the_ID(), 'large') @endphp
      @if($thumbnail)
        <div class="hero">
        {!! $thumbnail !!}
        </div>
      @endif

    </div>
  </header>
  <div class="entry-content">
      <div class="container">
    @php the_content() @endphp
        {{-- ACTION --}}
        @if(in_category(7))
        <div>
          @if($link)
          <a href="{{ $link }}" target="_blank" class="button yellow arrow">Act Now</a>
          @endif
        </div>
        @endif

        {{-- IN THE NEWS --}}
        @if(in_category(6))
        <div>
          @if($link)
          <a href="{{ $link }}" target="_blank" class="button yellow arrow">Read Now</a>
          @endif
        </div>
        @endif
      </div>
  </div>
  @if(in_category(1))
  <footer>
    <div class="container">
      {!! the_field('press_releases_footer', 'option') !!}
    </div>
  </footer>
  @endif
</article>
