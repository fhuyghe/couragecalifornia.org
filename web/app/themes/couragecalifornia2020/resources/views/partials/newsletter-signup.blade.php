<div class="newsletter-wrap">
<form id="actionkit-embed-form" class="actionkit-widget" name="{{ $formName }}" action="https://act.couragecampaign.org/act/" onsubmit="this.submitted=1;return false">
  <input type="hidden" name="source" id="id_source" value="">
  <input type="hidden" name="page" value="CC_c4_signup">
  
  <input value="" id="id_email" placeholder="Email Address" type="text" name="email" />
  <input type="submit" value="{{ $buttonText }}">
  </form>
  
  <div id="{{ $formName }}-replacement" class="signup-success" style="display: none;">You are now signed up!</div>
</div>
  
  <script src="https://act.couragecampaign.org/samples/widget.js"></script>