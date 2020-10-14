<section id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>

<section id="staff">
    <div class="container">
        <h2 class="text-center">Staff</h2>
        <div class="row">
            @if($staff)
            @foreach ($staff as $person)
            <div class="col-md-3 person">
                <div class="portrait">
                    <img src="{{ get_the_post_thumbnail_url($person->ID) }}" />
                </div>
                <h3>{{ get_the_title($person->ID) }}</h3>
                <h4>{{ $person->title }}</h4>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

<section id="directors">
    <div class="container">
        <h2>Boards of Directors</h2>
    </div>
</section>

@if($jobs)
<section id="jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Work with us</h2>
            </div>
            <div class="col-md-8">
                @foreach ($jobs as $job)
                    <div class="col-md-6 job">
                        <h3>{{ get_the_title($job->ID) }}</h3>
                        <p>{!! get_the_excerpt($job->ID) !!}</p>
                        <a class="button" href="{{ get_the_permalink($job->ID) }}">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif