<article @php post_class() @endphp>
  <header>
    <div class="container">
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
      @include('partials/entry-meta')
    </div>
  </header>
  <div class="entry-content">
      <div class="container">
        @php the_content() @endphp
      </div>
    </div>
    <footer>
      <div class="container">
        <a class="button" href="/press-releases">Back to all Press Releases</a>
      </div>
  </footer>
</article>
