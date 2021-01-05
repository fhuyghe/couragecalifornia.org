<script src="https://act.couragecampaign.org/resources/actionkit.js"></script>
<script type="text/javascript">actionkit.forms.initPage()</script>

@if(!isset($buttonText))
  @php $buttonText = 'Subscribe' @endphp
@endif

    
<form class="action_form newsletter-form" name="act" method="POST" action="https://act.couragecampaign.org/act/" accept-charset="utf-8">
  <div class="form-wrap">
    <input type="hidden" name="utf8" value="&#x2714;">
    <ul class="compact" id="ak-errors"></ul>
    <input name="first_name" id="id_first_name" type="hidden">
    <input name="last_name" id="id_last_name" type="hidden">
    <input name="email" placeholder="Email Address" id="id_email" type="text">
    <input name="zip" id="id_zip" type="hidden">
    <input name="phone" id="id_phone" type="hidden">
    <input type="hidden" name="country" value="United States">
    <p style="clear: both; text-align:center;"><input class="submitform" type="submit" value="{{ $buttonText }}"></p>
    <input type="hidden" name="page" value="CC_c4_signup">
    <input type="hidden" name="lists" value="5" />
  </div>
</form>
    
<script type="text/javascript">
  actionkit.forms.contextRoot = 'https://act.couragecampaign.org/context/';
  actionkit.forms.initForm('act');

  jQuery(".newsletter-form").on('submit', function(e) {

  console.log('Ajax call');
  e.preventDefault(); // avoid to execute the actual submit of the form.

  var form = jQuery(this);
  var url = form.attr('action');

  jQuery.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            console.log('response:', data); // show response from the php script.
        },
        error: function(data)
        {
            console.log('error:', data); // show response from the php script.
        }
      });


  });
</script>