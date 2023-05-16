
<script type="text/javascript">actionkit.forms.initPage()</script>


<div class="newsletter-wrap">
    <form id="signupForm" class="actionkit-widget" name="act" method="POST" action="https://act.couragecampaign.org/act/" accept-charset="utf-8">
    <input type="hidden" name="utf8" value="&#x2714;">

    <ul class="compact" id="ak-errors"></ul>
        <input name="email" id="id_email" type="text" placeholder="Email Address">
        <input type="hidden" name="phone" id="id_phone" type="text">
        <input type="hidden" name="country" value="United States">

    <input class="submitform" type="submit" value="{{ $buttonText }}">

    <input type="hidden" name="page" value="CC_c4_signup">
    <input type="hidden" name="lists" value="5" />

    </form>
    <div id="{{ $formName }}-replacement" class="signup-success" style="display: none;">You are now signed up!</div>
</div>

<script src="https://malsup.github.io/jquery.form.js"></script> 


<script type="text/javascript">
(function($) {
$(document).ready(function() { 
$('#signupForm')
    .ajaxForm({
        url : 'https://act.couragecampaign.org/act/', // or whatever
        dataType : 'json',
        success : function (response) {
            alert("The server says: " + response);
        },
        error : function (response) {
            alert("The server says: " + response);
        }
    })
})
$('#signupForm').submit(function(e){
  e.stopPropagation();
})
})

actionkit.forms.contextRoot = 'https://act.couragecampaign.org/context/';
actionkit.forms.initForm('act');
</script>