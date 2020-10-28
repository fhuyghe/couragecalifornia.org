<div class="col-lg-6 job">
    <h3>{{ get_the_title($job->ID) }}</h3>
    <p>{!! get_the_excerpt($job->ID) !!}</p>
    <a class="button" href="{{ get_the_permalink($job->ID) }}">Read More</a>
</div>