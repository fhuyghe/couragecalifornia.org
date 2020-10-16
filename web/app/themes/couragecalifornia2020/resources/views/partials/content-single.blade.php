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
      </div>
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
