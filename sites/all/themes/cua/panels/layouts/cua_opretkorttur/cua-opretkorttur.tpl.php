<?php exit; ?>
                        <div class="lokationer_sub" >
                        <div class="breadcrumbs">
                             <ul>
                                <li>
                                    <script>
    document.write('<a href="' + document.referrer + '">TILBAGE</a>');
</script>
                               </li>
                             </ul>
                        </div>
                        
                        <h2>OPRET <strong>BESKRIVELSE AF TUREN</strong></h2>
                        
                         <div class="form_row">
                    	 <span class="form_box" id="hertur1">
                         </span>
                         
                         <span class="form_box right" id="hertur2">
                         	
                         </span>
                    </div><!--close form_row-->
                        
                        
                       
                       <div class="form_row5" id="hertur4">
                       	                            
                       </div>
                       
                         <div class="form_row">
                    	 <span class="form_box" id="hertur5">
                         	   
                         </span>
                         
                         <span class="form_box5 right" >
                         	   
                             
                         </span>
                         
                    </div><!--close form_row-->
                        
                         <div class="form_row">
                    	 <span class="form_box" id="hertur6">
                         	   
                         </span>
                         
                         <span class="form_box right" id="hertur7">
                         	   
                             
                         </span>
                         
                    </div><!--close form_row-->
                        
                        <div class="clear"></div>
               </div><!--close lokationer_sub-->
<div id="vistheform">
<?php print $content['mc1']; ?>
<?php print $content['mc2']; ?>
<?php print $content['mc3']; ?>
<?php print $content['mc4']; ?>
<?php print $content['mc5']; ?>
<?php print $content['mc6']; ?>
<?php print $content['mc7']; ?>
<?php 
$nodeturid = $_GET["n"];

$node = node_load($nodeturid);

$startdatetur = str_replace("-", "/", format_date($node->field_tur_dato['und'][0]['value'], 'dateonly')); 
$starttidtur = str_replace("-", "/", format_date($node->field_tur_dato['und'][0]['value'], 'timeonly'));  
$startdatetur2 = str_replace("-", "/", format_date($node->field_tur_dato['und'][0]['value2'], 'dateonly')); 
$starttidtur2 = str_replace("-", "/", format_date($node->field_tur_dato['und'][0]['value2'], 'timeonly'));

$nodepassager1 = node_load($node->field_tur_beboer['und'][0]['target_id']);
$nodelokation = node_load($node->field_testlokation['und'][0]['target_id']); 
dsm($nodelokation);
$lokationnavn = $nodelokation->title;

if(empty($node->field_tur_beboer['und'][1]['target_id']))
{
$passager = $nodepassager1->title;
}
else
{
$nodepassager2 = node_load($node->field_tur_beboer['und'][1]['target_id']);
$passager = $nodepassager1->title . " og " . $nodepassager2->title;
}

$another_user = user_load($node->field_tur_frivillig['und'][0]['uid']);
$rickshawname = $another_user->field_fornavn['und'][0]['value'];

?>
</div>

  <script type="text/javascript">
  
    (function ($) {
     $('#edit-title').appendTo('#hertur1');
     $("#edit-title").removeClass('form-text');
     $("#edit-title").addClass('input2');
     $("#edit-title").attr("placeholder", "Overskrift");  
  
          $('#edit-body-und-0-value').appendTo('#hertur4');
     $("#edit-body-und-0-value").removeClass('form-textarea');
     $("#edit-body-und-0-value").removeClass('text-full');
     $("#edit-body-und-0-value").addClass('textarea7');
     $("#edit-body-und-0-value").attr("placeholder", "Beskrivelse");                                         
         
                                                                                                                                 
     $('#edit-field-billeder-und').appendTo('#hertur5');                                                                                                                                                                           
     $('#edit-submit').appendTo('#hertur7');                
     $("#edit-submit").removeClass('form-submit');
     $("#edit-submit").addClass('button24');                                                                                                                                                                                                                                                                                                                   
$('#edit-delete').appendTo('#hertur7');   

$('#edit-field-korttur-dato-und-0-value-datepicker-popup-0').val('<? print $startdatetur; ?>');
$('#edit-field-korttur-dato-und-0-value-timepicker-popup-1').val('<? print $starttidtur; ?>');
$('#edit-field-korttur-dato-und-0-value2-datepicker-popup-0').val('<? print $startdatetur2; ?>');
$('#edit-field-korttur-dato-und-0-value2-timepicker-popup-1').val('<? print $starttidtur2; ?>');
$('#edit-field-passager-navn-und-0-value').val('<? print $passager; ?>');   
$('#edit-field-tur-ref-und-<? print $nodeturid ?>').attr('checked', true);      

$('#edit-field-testlokation-und').val('<? print $node->field_testlokation['und'][0]['target_id']; ?>');                    
$('#edit-field-rickshawpilot-uid-und-0-value').val('<? print $node->field_tur_frivillig['und'][0]['uid']; ?>');
$('#edit-field-rickshawpilot-navn-und-0-value').val('<? print $rickshawname; ?>');  
$('#edit-field-passager-lokation-navn-und-0-value').val('<? print $lokationnavn; ?>');
                                                      
 <?php
$user_data = user_load($GLOBALS['user']->uid);
?>   
 
$('#edit-field-kommunetesttax-und').val('<? print $user_data->field_kommunetesttax['und'][0]['tid']; ?>');
     

    
    
    })(jQuery);

</script>
<style>
#edit-field-billeder-und legend {
display:none;  
    }
    
#edit-field-kommunetesttax {
/*    display:none;*/
}

.form-item-title {
    display:none;
}
#edit-body {
    display:none;
}
#vistheform {
   display:none; 
}


</style>
     