<?php
global $user;
$uid = $user->uid;
$approved_lokations = db_select('field_data_field_godkendte_piloter', 'fgp')
  ->fields('fgp', array('entity_id', 'field_godkendte_piloter_uid'))
  ->condition('field_godkendte_piloter_uid', $uid)
  ->execute();
?>
<div class="rediger_profil">
               		<h2 id="usrrow0">REDIGER <strong>PROFIL</strong></h2>
                    <div class="form_row1" id="usrrow1">
                    	 <div class="form_box2" id="userretboks1">

                         </div>

                         <div class="form_box3" id="userretboks2">

                         </div>
                    </div><!--close form_row1-->

                    <div class="form_row1" id="usrrow2">
                    	 <div class="form_box2" id="userretboks3">

                         </div>

                         <div class="form_box3" id="userretboks4">

                         </div>
                    </div><!--close form_row1-->

                    <div class="form_row1" id="usrrow3">
                          <div class="form_box2" id="userretboks5a">

                         </div>
                         <div class="form_box3" id="userretboks5">

                         </div>
                    </div><!--close form_row1-->

                    <h3>OPPDATER <strong>PASSORD</strong></h3>
                    <div class="form_row1">
                    	 <div class="form_box2" id="userretboks6">

                         </div>

                         <div class="form_box3" id="userretboks7">

                         </div>
                    </div><!--close form_row1-->

                    <div class="form_row2" id="userretboks8">
                    	 <h3><strong>PROFILBILDE</strong></h3>

                    </div><!--close form_row2-->
                    <?php if(isset($approved_lokations) && count($approved_lokations)>0) {?>
                    <div class="approved_lokations_div">
                    <h3><strong>GODKJENTE BRUKERSTEDER</strong></h3>
                    <ul class="approved_lokations_ul">
<?php
  foreach($approved_lokations as $approved_lok){
    $lokation_data_query = db_select('node','n')
      ->fields('n',array('title','nid'))
      ->condition('nid', $approved_lok->entity_id)
      ->execute()
      ->fetchObject();
?>
  <li class="approved_lokations_li">
    <div class="approved_lokations_li_div">
    <a href="<?php echo $base_url; ?>/node/<?php echo $lokation_data_query->nid ?>"><?php echo $lokation_data_query->title; ?></a>
    <div class="button_div" onclick="return untag_approved_pilot(<?php echo $lokation_data_query->nid ?>,<?php echo $uid; ?>)">forlate dette stedet</div>
  </li><div class="clear"></div>
<?php
  }
}
?>
                    </ul>
                    </div>
                    <div class="form_row2" id="userretboks9">

                    </div><!--close form_row2-->

                    <div class="clear"></div>
               </div><!--close rediger_profil-->
<?php print $content['mc1']; ?>
<?php print $content['mc2']; ?>
<?php print $content['mc3']; ?>
<?php print $content['mc4']; ?>
<?php print $content['mc5']; ?>
<?php print $content['mc6']; ?>
<?php print $content['mc7']; ?>
<script type="text/javascript">
    (function ($) {



  // flyt

    $('#edit-field-fornavn-und-0-value').prependTo('#userretboks1');
    $("#edit-field-fornavn-und-0-value").addClass('input3');
    $("#edit-field-fornavn-und-0-value").attr("placeholder", "FORNAVN");
     $('#edit-field-efternavn-und-0-value').prependTo('#userretboks2');
      $("#edit-field-efternavn-und-0-value").addClass('input3');
       $("#edit-field-efternavn-und-0-value").attr("placeholder", "ETTERNAVN");
        $('#edit-mail').prependTo('#userretboks3');
          $("#edit-mail").addClass('input3');
            $("#edit-mail").attr("placeholder", "Din email");
             $('#edit-field-mobilnummer-und-0-value').prependTo('#userretboks4');
           $("#edit-field-mobilnummer-und-0-value").addClass('input3');
               $("#edit-field-mobilnummer-und-0-value").attr("placeholder", "Mobilnummer");

             $('#edit-current-pass').prependTo('#userretboks5');
             $("#edit-current-pass").removeClass('form-text');
             $("#edit-current-pass").addClass('input3');
             $("#edit-current-pass").attr("placeholder", "Nåværende passord");



             $('#edit-pass-pass1').prependTo('#userretboks6');
             $("#edit-pass-pass1").removeClass('password-field');
             $("#edit-pass-pass1").addClass('input3');
             $("#edit-pass-pass1").attr("placeholder", "PASSORD");
             $('#edit-pass-pass2').prependTo('#userretboks7');
             $("#edit-pass-pass2").removeClass('password-confirm');
             $("#edit-pass-pass2").addClass('input3');
             $("#edit-pass-pass2").attr("placeholder", "BEKREFTET PASSORD");


             $('#edit-picture').appendTo('#userretboks8');
        $('#edit-field-modtage-e-mail').appendTo('#userretboks8');
              $('#edit-field-kommunetesttax-und').appendTo('#userretboks5a');
             $("#edit-field-kommunetesttax-und").addClass('list2');

             $('#edit-field-har-taget-introtur').appendTo('#userretboks8');


        $('#edit-submit').prependTo('#userretboks9');
        $("#edit-submit").removeClass('form-submit');
        $("#edit-submit").addClass('button24');
//$("#edit-field-kommunetesttax-und").attr('disabled', 'disabled');




      if(window.location.href.indexOf("edit?pass-reset-token") > -1) {
      $("#usrrow1").addClass('hideme');
      $("#usrrow2").addClass('hideme');
      $("#usrrow3").addClass('hideme');
      $("#userretboks8").addClass('hideme');
      $("#usrrow0").addClass('hideme');

      }

  /*
  edit-pass-pass1
appendTo

   $('#edit-profile-frivillig-field-kommunetesttax-und').prependTo('#her4');


  */


    })(jQuery);



</script>
<style>
#edit-picture {display: block;}
#edit-picture legend {display: none;}
.description {display: none;}
#edit-locale {display: none;}
#edit-field-nuv-rende-by {display: none;}
#edit-field-kommunetesttax {display: none;}
#edit-comment-notify-settings {display: none;}
#edit-field-valglokation {display: none;}
#edit-picture-upload label {display: none;}
#edit-field-har-taget-introtur {display: none;}
#edit-privatemsg {display: none;}
.form-item {
    font-family: RobotoRegular, Arial, Helvetica, sans-serif;
    margin-top:4px;
margin-bottom:4px;
}
</style>


