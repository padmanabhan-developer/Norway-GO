
                        <div class="lokationer_sub" >
                        <div class="breadcrumbs">
                             <ul>
                                <li><a href="/lokationer">TILBAGE</a></li>
                             </ul>
                        </div>
                        
                        <h2>OPRET <strong>LOKATION</strong></h2>
                        
                         <div class="form_row">
                    	 <span class="form_box" id="hertur1">
                         </span>
                         
                         <span class="form_box right" id="hertur2">
                         	
                         </span>
                    </div><!--close form_row-->
                        
                        
                       
                       <div class="form_row5" id="hertur4">
                       		<label>PRAKTISK INFO</label>
                            
                       </div>
                       
                            <div class="form_row">
                    	 <span class="form_box" id="hertur1a">
                         </span>
                         
                         <span class="form_box right" id="hertur2a">
                         	 
                         </span>
                    </div><!--close form_row-->
                          
                          <div class="form_row">
                    	 <span class="form_box" id="hertur1b">
                         </span>
                         
                         <span class="form_box right" id="hertur2b">
                         	 
                         </span>
                    </div><!--close form_row-->
                         
                         <div class="form_row5" id="herturgoogle">
                       		
                            
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

</div>
<script type="text/javascript">
  
    (function ($) {
      $('<label>NAVN</label>').appendTo('#hertur1');
     $('#edit-title').appendTo('#hertur1');
     $("#edit-title").removeClass('form-text');
     $("#edit-title").addClass('input2');
     $("#edit-title").attr("placeholder", "Navn");  

      $('#edit-field-billede').appendTo('#hertur1');     
     
     $('#edit-field-tovholder').appendTo('#hertur1'); 
     $('#edit-field-kaptajn').appendTo('#hertur1');
    $('#edit-field-godkendte-piloter').appendTo('#hertur1');

         $('<label>Vejnavn</label>').appendTo('#hertur1a');     
$('#edit-field-lokation-vejnavn-und-0-value').appendTo('#hertur1a');
     $("#edit-field-lokation-vejnavn-und-0-value").removeClass('form-text');
     $("#edit-field-lokation-vejnavn-und-0-value").addClass('input2');
     $("#edit-field-lokation-vejnavn-und-0-value").attr("placeholder", "Vejnavn");    

         $('<label>Postnummer</label>').appendTo('#hertur1b');  
     $('#edit-field-lokation-postnr-und-0-value').appendTo('#hertur1b');
     $("#edit-field-lokation-postnr-und-0-value").removeClass('form-text');
     $("#edit-field-lokation-postnr-und-0-value").addClass('input2');
     $("#edit-field-lokation-postnr-und-0-value").attr("placeholder", "Postnummer");    

         $('<label>Husnummer</label>').appendTo('#hertur2a');  
     $('#edit-field-lokation-husnr-und-0-value').appendTo('#hertur2a');
     $("#edit-field-lokation-husnr-und-0-value").removeClass('form-text');
     $("#edit-field-lokation-husnr-und-0-value").addClass('input2');
     $("#edit-field-lokation-husnr-und-0-value").attr("placeholder", "Husnummer"); 		
		 
		$('<label>By</label>').appendTo('#hertur2b');                                                                           
     $('#edit-field-lokation-by-und-0-value').appendTo('#hertur2b');
     $("#edit-field-lokation-by-und-0-value").removeClass('form-text');
     $("#edit-field-lokation-by-und-0-value").addClass('input2');
     $("#edit-field-lokation-by-und-0-value").attr("placeholder", "By");                                                       
                                                                              		 
   
     $('#edit-body-da-0-value').appendTo('#hertur4');
     $("#edit-body-da-0-value").removeClass('form-textarea');
     $("#edit-body-da-0-value").removeClass('text-full');
     $("#edit-body-da-0-value").addClass('textarea7');
     $("#edit-body-da-0-value").attr("placeholder", "Praktisk info"); 
     
     $('#edit-body-und-0-value').appendTo('#hertur4');
     $("#edit-body-und-0-value").removeClass('form-textarea');
     $("#edit-body-und-0-value").removeClass('text-full');
     $("#edit-body-und-0-value").addClass('textarea7');
     $("#edit-body-und-0-value").attr("placeholder", "Praktisk info");                                       
    
                                                     
                                                                                                                                                                      
          $('#edit-submit').appendTo('#hertur6');                
       $("#edit-submit").removeClass('form-submit');
     $("#edit-submit").addClass('button24');                                                                                                                                                                                                                                                                                                                   
 $('#edit-delete').appendTo('#hertur7');   
 
     $('<label>Google kort adresse</label>').appendTo('#herturgoogle');
     $('#edit-field-lokation-googlemaps-und-0-value').appendTo('#herturgoogle');
     $("#edit-field-lokation-googlemaps-und-0-value").removeClass('form-text');
     $("#edit-field-lokation-googlemaps-und-0-value").addClass('input2');
     $("#edit-field-lokation-googlemaps-und-0-value").attr("placeholder", "Google kort adresse"); 
      
 <?php
$user_data = user_load($GLOBALS['user']->uid);
?>   
 
$('#edit-field-kommunetesttax-und').val('<? print $user_data->field_kommunetesttax['und'][0]['tid']; ?>');
     

    
    
    })(jQuery);

</script>
<style>
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

.lokationer_sub {
width:480px;   
}

</style>
     