<article @php post_class() @endphp>
  <header>
    <div class="container">
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
    </div>
  </header>
  <div class="entry-content">
      <div class="container">
    @php the_content() @endphp
      </div>
  </div>
</article>
