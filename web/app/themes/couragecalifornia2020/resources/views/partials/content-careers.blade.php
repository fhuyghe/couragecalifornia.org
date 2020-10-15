<div class="page-header">
    <div class="container">
        <h1>{!! App::title() !!}</h1>
        @php the_content() @endphp
    </div>
  </div>

@if($current_jobs)
<section id='currentJobs'>
    <div class="container">
        <h2>Current Jobs</h2>
        <div class="row">
        @foreach ($current_jobs as $job)
            @include('partials.job-block')
        @endforeach
        </div>
    </div>
</section>
@endif