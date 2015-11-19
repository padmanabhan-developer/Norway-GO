<?php
$node = menu_get_object();
/*echo '<pre>';
print_r($node);*/
$author = $node->uid;
$confirmed_by_coord = $node->field_tur_confirmed['und'][0]['value'];
$passanger = $node->field_tur_beboer['und'];
$accepted_by_pilot = $node->field_bekr_ftet_af_frivillig['und'][0]['value'];
$show_buttons_to_pilot = FALSE;

if($confirmed_by_coord && $accepted_by_pilot && ($user->uid==$author) && (count($passanger)>0)){
$show_buttons_to_pilot = TRUE;
}

               		?>
               		<div class="am_bekraeft_tur">
               		<div class="breadcrumbs">
                    	 <ul>
                         	<li><a href="/">TILBAKE</a></li>
                         </ul>
                    </div>

                    <div class="form_row">
                    	 <span class="form_box">
                         	   <label>RICKSHAWPILOT</label>
                               <div class="input2boxrickshaw">
                            <?php

                             $user_datauther = user_load($node->uid);
                           //
if (in_array('frivillig', $user_datauther->roles)) {
print $user_datauther->field_fornavn['und'][0]['value'] . " " . $user_datauther->field_efternavn['und'][0]['value'];
}
else
{
$user_dat = user_load($node->field_tur_frivillig['und'][0]['uid']);
print $user_dat->field_fornavn['und'][0]['value'] . " " . $user_dat->field_efternavn['und'][0]['value'];
}



                            ?>
                               </div>

                               <?php print $content['mc1']; ?>
                         </span>

                         <span class="form_box right">
                         	    <label>PASSASJER</label>
                         	    <div class="input2boxrickshaw">
                         	    <?php
                                               	  dsm($node);

$nodepassager1 = node_load($node->field_tur_beboer['und'][0]['target_id']);
$nodepassager2 = node_load($node->field_tur_beboer['und'][1]['target_id']);
if(empty($nodepassager2))
{
print $nodepassager1->title;
}
else
{
print $nodepassager1->title;
print "<br />";
print $nodepassager2->title;
}
                          //	 print $node->field_tur_beboer(0)("1");
                        // 	 print $passagers->[1]['target_id'];
                         //	    foreach($passagers as $item) {
//print $item->target_id;
//  }
  ?>
                         	    </div>
                         </span>
                    </div><!--close form_row-->

                    <div class="form_row">
                    	 <span class="form_box">
                         	   <label>DATO</label>
                              <?php print $content['mc3']; ?>
                         </span>

                         <span class="form_box right">
                         	   <label>TIDSPUNKT</label>
                               <?php print $content['mc4']; ?>
                         </span>
                    </div><!--close form_row-->

                    <div class="form_row">
                         <span class="form_box right">
                         	   <label>STED</label>
                               <?php print $content['mc5']; ?>
                         </span>
                    </div><!--close form_row-->

                    <div class="form_row">
                         <?php print $content['mc6']; ?>
                    </div><!--close form_row-->

                    <div class="form_row">
                         <a href="/node/<? print $node->nid; ?>/edit" class="flag" id="redigerknap">REDIGER</a>
                    <a href="/node/add/k-rte-ture?n=<? print $node->nid; ?>" class="flag" id="beskrivknap">Beskrive tur</a>
                         <?php print $content['mc7']; ?>

                    </div><!--close form_row-->
               </div><!--close am_bekraeft_tur-->
<?php




//$result = db_query('SELECT n.title FROM {node} n');
//foreach(
//$result as $item) {
//  print $item->title;
//}



?>
<style>
.field-name-field-tur-frivillig a {
    color:#000000;
}
</style>
 <script type="text/javascript">


    (function ($) {

 $('.messages li').last().css( "display", "none" );

 $("#edit-comment-body-und-0-value").removeClass('required');
 $("#edit-comment-body-und-0-value").removeClass('form-textarea');
 $("#edit-comment-body-und-0-value").removeClass('text-full');
 $("#edit-comment-body-und-0-value").addClass('textarea1');
 $("#edit-comment-body-und-0-value").attr("placeholder", "SKRIV KOMMENTAR...");

$("[id^=edit-comment-body-und-0-value--]").removeClass('required');
    $("[id^=edit-comment-body-und-0-value--]").removeClass('form-textarea');
    $("[id^=edit-comment-body-und-0-value--]").removeClass('text-full');
    $("[id^=edit-comment-body-und-0-value--]").addClass('textarea1');
    $("[id^=edit-comment-body-und-0-value--]").attr("placeholder", "SKRIV KOMMENTAR...");
     $("[id^=edit-submit--]").removeClass('form-submit');
     $("[id^=edit-submit--]").addClass('button24_comment');
     $("[id^=edit-submit--]").val('LEGG TIL KOMMENTAR');

      $("#edit-submit").removeClass('form-submit');
     $("#edit-submit").addClass('button24_comment');
     $("#edit-submit").val('LEGG TIL KOMMENTAR');
    //
    //edit-comment-body-und-0-value--2
    // edit-submit
    //


    })(jQuery);


</script>

<style>

.field-items {
float:left;
/* clear:both; border:solid 1px #dfdfdf; background:#fff; */
padding:0 12px; width:199px; height:63px; color:#575757; font-size:14px; font-family: 'RobotoLight';padding-top:5px;
}


<?php
global $user;
if (in_array('aktivitetsmedarbejder', $user->roles) || $show_buttons_to_pilot) {
 ?>
//
<?
}
 else
 {
 ?>
#redigerknap { display:none; }
<?

 }
 ?>


<?php
  //field_tur_frivillig['und'][0]['uid']
   //field_testlokation['und'][0]['target_id']
   //field_tur_confirmed['und'][0]['value']
if ($node->field_tur_dato['und'][0]['value'] < time()) {
?>
.flag-outer-med-som-f-l {
display:none;
}
#redigerknap { display:none; }

<?

if ($node->field_tur_frivillig['und'][0]['uid'] == $user->uid)
{
?>
#beskrivknap {  }
<?
}
else {
?>
#beskrivknap { display:none; }
<?
}


}
else
{
?>
#beskrivknap { display:none;  }
<?
}
?>

#edit-comment-body-und-0-format {
display:none;
}

#edit-comment-body-und-0-format-guidelines  {
display:none;
}

#edit-author--2 {
display:none;
}

*[id*='edit-author--']
{
display:none;
}
*[id*='edit-comment-body-und-0-format--']
{
display:none;
}
.form-item-comment-body-und-0-value label {
display:none;
    }

.field.field-name-field-tur-beboer.field-type-entityreference.field-label-hidden.field-items.field-item {


      float:left; clear:both; border:solid 1px #dfdfdf; background:#fff; padding:0 12px; width:199px; height:63px; color:#575757; font-size:14px; font-family: 'RobotoLight';


}

</style>
