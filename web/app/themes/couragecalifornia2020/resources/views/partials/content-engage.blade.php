<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>{!! App::title() !!}</h1>
                @php the_content() @endphp
            </div>
            <div class="col-lg-6 categories">
                {{-- <button id="clearFilters" class='active'>All</button> --}}
                {!! do_shortcode('[ajax_load_more_filters id="categories" target="ajax_load_more"]') !!}
                {{-- <ul>
                    @foreach ($categories as $cat)
                <li data-filter=".cat-{{ $cat->slug }}">{{ $cat->name }}</li>
                    @endforeach
                </ul> --}}
            </div>
        </div>
    </div>
</div>

<section id='articles'>
    <div class="container">
        <div class="row grid">

            <div class="col-md-12" id="featuredAction">
                @php $article = $latestaction[0] @endphp
                @php $hiddenID = $article->ID @endphp
                @include('partials.article-block-featured')
            </div>

            <div class="col-lg-8">
                <div class="load-more">
                    @php
                    $args = array(
                        'id' => 'ajax_load_more',
                        'filters' => "true",
                        'target' => "categories",
                        'post_type' => 'post',
                        'posts_per_page' => '5',
                        'button_label' => 'Show More Posts',
                        'button_loading_label' => 'Loading...',
                        'placeholder' => 'true',
                        'scroll' => 'false'
                    );	
                    if(function_exists('alm_render')){
                        alm_render($args);
                    }
                    @endphp
                </div>
            </div>

            <div class="col-lg-4">
                <div class="newsletter-widget desktop">
                    <div class="inner">
                    <img src="{{ $newsletter['image']['url'] }}" />
                    <h3>{{ $newsletter['title'] }}</h3>
                    <p>{{ $newsletter['text'] }}</p>
                    @include('partials/newsletter-signup')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.almFiltersActive = function(obj){
        if(obj){
            document.getElementById('articles').classList.add("filtered");
        } else {
            document.getElementById('articles').classList.remove("filtered");
        }
    }
</script>
