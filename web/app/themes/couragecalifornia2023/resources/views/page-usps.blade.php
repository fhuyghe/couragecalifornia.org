@extends('layouts.app')

@section('content')
<!--Gorgias Chat Widget Start-->
<script id="gorgias-chat-widget-install-v2" src="https://config.gorgias.chat/gorgias-chat-bundle-loader.js?applicationId=14629"></script>
<!--Gorgias Chat Widget End-->
  @while(have_posts()) @php the_post() @endphp
  <div class="container">
    @include('partials.page-header')
    @include('partials.content-page')
  </div>
  @endwhile
@endsection
