<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{!! App::title() !!}</h1>
                @php the_content() @endphp
            </div>
            <div class="col-md-6 categories">
                {{-- <h4>Categories</h4>
                <ul>
                    @foreach ($categories as $cat)
                <li data-filter=".cat-{{ $cat->slug }}">{{ $cat->name }}</li>
                    @endforeach
                </ul> --}}
            </div>
        </div>
    </div>
</div>

<section id='actions'>
    <div class="container">
        @if($actions)
        <div class="row grid">

            <div class="col-md-12">
                @php $article = $latestaction[0] @endphp
                @php $hiddenID = $article->ID @endphp
                @include('partials.article-block-featured')
            </div>

            <div class="col-md-8">
                @foreach ($actions as $article)
                    @if($hiddenID !== $article->ID)
                        @include('partials.article-block')
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                Sidebar
            </div>
        </div>
    @endif
        <footer class="text-center">
            @php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '6',
                'button_label' => 'Show More Posts',
                'button_loading_label' => 'Loading...',
                'scroll' => 'false'
            );	
            if(function_exists('alm_render')){
                alm_render($args);
            }
            @endphp
        </footer>
    </div>
</section>