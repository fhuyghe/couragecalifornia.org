
<script type="text/javascript">actionkit.forms.initPage()</script>



<form id="signupForm" class="action_form" name="act" method="POST" action="https://act.couragecampaign.org/act/" accept-charset="utf-8">
<input type="hidden" name="utf8" value="&#x2714;">

<ul class="compact" id="ak-errors"></ul>
<div id="unknown_user">
    <div class="gridded">
        <p>
              <label for="id_email">Email <span class="req">*</span>:</label>
              <input name="email" id="id_email" type="text">
        </p>

        <p>            
              <label for="id_phone">Phone:</label>
              <input name="phone" id="id_phone" type="text">
        </p>
    </div>
      <input type="hidden" name="country" value="United States">
</div>

<p style="clear: both; text-align:center;"><input class="submitform" type="submit" value="Submit Form"></p>

<input type="hidden" name="page" value="CC_c4_signup">
<input type="hidden" name="lists" value="5" />

</form>

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