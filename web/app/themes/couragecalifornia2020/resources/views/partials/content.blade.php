<article @php post_class() @endphp>
  <div class="row">
  <div class="col-md-3">
    <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
  </div>
    <div class="col-md-9">
  <header>
    <div class="category">
      @php $categories = get_the_category(); @endphp
      @foreach ($categories as $category)
          {{ $category->name }}
      @endforeach
    </div>
    <h3 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>
    <p class="byline author vcard">
      {{ __('By', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
        {{ get_the_author() }}
      </a>
    </p>
  </header>
  
    <div class="entry-summary">
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
