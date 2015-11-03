<?php print $content['mc1']; ?>
<?php print $content['mc2']; ?>
<?php print $content['mc3']; ?>
<?php print $content['mc4']; ?>
<?php print $content['mc5']; ?>
<?php print $content['mc6']; ?>
<?php print $content['mc7']; ?>
                        <div class="lokationer_sub" style="display:none;">
                        <div class="breadcrumbs">
                             <ul>
                                <li><a href="/personer">TILBAGE</a></li>
                             </ul>
                        </div>
                        
                        <h2>OPRET <strong>LOKATION</strong></h2>
                        
                         <div class="form_row">
                    	 <span class="form_box">
                         	 <input name="" type="text" class="input2" value="Den Tohjulede Hævner" onfocus="if (this.value == 'Den Tohjulede Hævner') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Den Tohjulede Hævner';}"/>
                         </span>
                         
                         <span class="form_box right">
                         	  <input name="" type="text" class="input2" value="STHF6476836473" onfocus="if (this.value == 'STHF6476836473') {this.value = '';}" onblur="if (this.value == '') {this.value = 'STHF6476836473';}"/>
                         </span>
                    </div><!--close form_row-->
                        
                        <div class="form_row">
                    	 <span class="form_box">
                         	 <textarea name="" cols="" rows="" class="textarea6">Trangravsvej 8,&#13;&#10;1436 Købenahvn K</textarea>
                         </span>
                         
                         <span class="form_box right2">
                         	   
                         </span>
                       </div>
                       
                       <div class="form_row5">
                       		<label>PRAKTISK INFO</label>
                            <textarea name="" cols="" rows="" class="textarea7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                       </div>
                       
                         <div class="form_row">
                    	 <span class="form_box">
                         	   <span class="thumb5"><img src="images/img3.png" alt="" /></span>
                               <a href="#" class="button21">UPLOAD Billede</a>
                         </span>
                         
                         <span class="form_box5 right">
                         	   
                               <a href="#" class="button21">DEAKTIVER</a>
                         </span>
                    </div><!--close form_row-->
                        
                        <div class="clear"></div>
               </div><!--close lokationer_sub-->

<script type="text/javascript">
  
    
    (function ($) {

<?php
$user_data = user_load($GLOBALS['user']->uid);
?>   
 
$("#edit-field-kommunetesttax-und").val('<? print $user_data->field_kommunetesttax['und'][0]['tid']; ?>');

 Drupal.ajax.prototype.specifiedResponse = function() {
    var ajax = this;
 
    // Do not perform another ajax command if one is already in progress.
    if (ajax.ajaxing) {
      return false;
    }
 
    try {
      $.ajax(ajax.options);
    }
    catch (err) {
      alert('An error occurred while attempting to process ' + ajax.options.url);
      return false;
    }
 
    return false;
  };                        
                                                  
                                                                                              
<?php
//
$view = views_get_view('flaggedlokation');
$view->set_display('default');
$view->pre_execute();
$view->execute('default');
$arrbuf = "var lokarr = [ ";
foreach ($view->result as $result) {
$arrbuf .= "'" . $result->nid . "',";
//print_r($result);
}
$arrbuf = substr($arrbuf, 0, -1);
$arrbuf .= "];";
print $arrbuf;
?>
$("#edit-field-testlokation-und option").each(function()
{

if(jQuery.inArray($(this).val(), lokarr) != -1) {
   //
} else {
    if ($(this).val() != 0) {
        $(this).remove();
    }
    
} 

    
});                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
/*    $('#edit-title').val('Tur');
  // flyt
   
   //edit-field-tur-beboer-und
  
   $('#edit-field-tur-dato-und-0-value-datepicker-popup-0').appendTo('#hertur1');
   $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').appendTo('#hertur1');
   $('#edit-field-kommunetesttax-und').appendTo('#hertur1');
   $('#edit-field-tur-dato-und-0-value2-datepicker-popup-0').appendTo('#hertur2');
   $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').appendTo('#hertur2');
   $('#edit-field-testlokation-und').appendTo('#hertur2');
  // $('#edit-field-tur-beboer-und').appendTo('#hertur2');
 $('#edit-field-tur-kommentar-und-0-value').appendTo('#hertur3');
 
 
   $('#edit-field-tur-passager-und--2').appendTo('#hertur2');
   $('#edit-field-tur-passager-und--3').appendTo('#hertur2');
       
   
   $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").removeClass('date-clear');
    $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").removeClass('form-text');
    $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").removeClass('hasDatepicker');
    $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").removeClass('date-popup-init');
    $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").removeClass('date-clear');
    $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").removeClass('form-text');
    $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").removeClass('hasDatepicker');
    $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").removeClass('date-popup-init');
    
    $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").removeClass('date-clear');
    $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").removeClass('form-text');
    $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").removeClass('date-popup-init');
    
    $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").removeClass('date-clear');
    $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").removeClass('form-text');
    $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").removeClass('date-popup-init');
    
   $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").addClass('input6');
 $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").addClass('input7');
  $("#edit-field-kommunetesttax-und").addClass('list3');
  $("#edit-field-testlokation-und").addClass('list3');
//   $("#edit-field-tur-beboer-und").addClass('list3');
  $("#edit-field-tur-kommentar-und-0-value").addClass('textarea5');
  
  $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").addClass('input6');
 $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").addClass('input7');

    $("#edit-field-testlokation-und").removeAttr('multiple');
//   $("#edit-field-tur-beboer-und").removeAttr('multiple');
 
  $("#edit-field-tur-kommentar-und-0-value").attr("placeholder", "HER KAN DU EVENTUELT SKRIVE LIDT OM DINE ØNSKER OM TUREN, EKSEMPELVIS OM DU SELV HAR FORSLAG TIL EN RUTE, OM DU ER VILLIG TIL AT KØRE SELVOM DET BLÆSER LIDT ELLER HVIS DU HAR ANDRE KOMMENTARER ELLER IDEER TIL TUREN.");
 
 $('#edit-field-testlokation-und option:first').text('Vælg lokation');
 $('#edit-field-tur-beboer-und option:first').text('Vælg passager');
*/
    
    })(jQuery);

</script>
<style>
#edit-field-kommunetesttax {
    display:none; 
}
#edit-field-aktiv {
    display:none;
}

   
</style>
     