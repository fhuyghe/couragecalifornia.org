@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container">
      @include('partials.page-header')
      <div class="row">
        <div class="col-md-6">
          @include('partials.content-page')
        </div>
        <div class="col-md-6 form">
          Donate form
        </div>
      </div>
    </div>
  @endwhile
@endsection
