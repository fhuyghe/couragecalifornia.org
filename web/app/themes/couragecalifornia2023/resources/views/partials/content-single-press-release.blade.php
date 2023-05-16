<article @php post_class() @endphp>

  <header>
    <div class="container">
      <a href="/press-releases">← all Press Releases</a>
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
      <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </div>
  </header>

    <div class="entry-content">
      <div class="container">
        @php the_content() @endphp
      </div>
    </div>

    <footer>
      <div class="container">
        {!! the_field('press_releases_footer', 'option') !!}
        <a class="button" href="/press-releases">Back to all Press Releases</a>
      </div>
  </footer>

</article>
