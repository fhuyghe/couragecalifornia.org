<article @php post_class() @endphp>
  <header>
    <div class="container">
      <ul class="post-categories">
        <li>Job Opening</li>
      </ul>
      <h1 class="entry-title">{!! get_the_title() !!}</h1>
      <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
    </div>
  </header>
  <div class="entry-content">
      <div class="container">
    @php the_content() @endphp
      </div>
  </div>
</article>
