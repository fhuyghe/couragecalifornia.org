<article @php post_class() @endphp>
  <header>
    <div class="container">
      {!! the_category() !!}
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
      {!! social_warfare() !!}
    </div>
  </header>
  <div class="entry-content">
      <div class="container">
    @php the_content() @endphp
        @if(in_category(7))
        <div>
          @php $link = get_post_meta(get_the_ID(), 'wpcf-field_ak_link_url', true) @endphp
          <a href="{{ $link }}" target="_blank" class="button yellow arrow">Act Now</a>
        </div>
        @endif
      </div>
  </div>
</article>
