 <div class="home">

                 <div class="row2">
                       <h3>Om <strong>‘Sykling uten alder’</strong> </h3>
                         <p>Vi drømmer om en verden hvor vi gjennom aktivt medborgerskap, skaper livsglede hos våre eldre og bevegelseshemmede medborgere og gir dem muligheten til å forbli en aktiv del av samfunnet og nærmiljøet. Dermed bygger vi broer mellom generasjoner og forsterker tilliten, respekten og det sosiale limet i vårt samfunn.</p>
                         <span class="img_right"><!--<img src="/sites/all/themes/cua/images/cykle.png" alt="" />--></span>
                    </div><!--close row2-->

                        <!--<h2>SENESTE <strong>TURE</strong></h2>-->

                    <div class="row1">
                      <?php print $content['c1']; ?>

                    </div><!--close row1-->


               </div><!--close home-->
<?php print $content['c2']; ?>
<?php print $content['c3']; ?>
<?php print $content['c4']; ?>
<?php print $content['c5']; ?>
<?php print $content['c6']; ?>
<?php print $content['c7']; ?>
<script type="text/javascript">
    (function ($) {
  // flyt

  $('#user-login-form').appendTo('#loginbox1');
  $('#loginbox4').prependTo('#user-login-form');
   $('#loginbox3').prependTo('#user-login-form');
  $('#loginbox2').prependTo('#user-login-form');


  $('<label>Email</label>').appendTo('#loginbox2');
  $('#edit-name').appendTo('#loginbox2');

  $('<label>Passord</label>').appendTo('#loginbox3');
  $('#edit-pass').appendTo('#loginbox3');
  $('<h3><a href="/user/password">Glemt passordet ditt?</a></h3>').appendTo('#loginbox3');
  $('#edit-submit').appendTo('#loginbox4');

  $("#edit-name").removeClass('form-text');
$("#edit-pass").removeClass('form-text');
$("#edit-name").removeClass('required');
$("#edit-pass").removeClass('required');
$("#edit-name").addClass('input1');
$("#edit-pass").addClass('input1');

$("#edit-submit").removeClass('form-submit');
$("#edit-submit").addClass('submit1');



//$('#edit-submit').appendTo('#user-login-form');
/*


$("#edit-name").removeClass('form-text');
$("#edit-pass").removeClass('form-text');

$("#edit-name").addClass('input1');
$("#edit-pass").addClass('input1');  */
  /*  $("#edit-field-fornavn-und-0-value").addClass('input3');
    $("#edit-field-efternavn-und-0-value").addClass('input3');
    $("#edit-mail").addClass('input3');
    $("#edit-pass-pass1").removeClass('password-field');
   //$("#edit-pass-pass1").attr("placeholder", "Kodeord");
     */

    })(jQuery);
    </script>
<style>
.item-list {
    display:none;

}
.form-item {
    display:none;
}

#user-login-form {
width:700px;

}

</style>
