<footer class="main-footer content-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 left">
        @php dynamic_sidebar('left-footer') @endphp
        <div class="copyright">
          {!! $copyright !!}
        </div>
      </div>
      <div class="col-md-6 right">
        <h3>Get updates from Courage</h3>
        @include('partials.newsletter-signup', ['buttonText' => "Subscribe  →"])
        @php dynamic_sidebar('right-footer') @endphp
      </div>
    </div>
  </div>
</footer>
