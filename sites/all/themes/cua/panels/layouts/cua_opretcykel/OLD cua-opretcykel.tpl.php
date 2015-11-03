<div class="opret_cykel">
               		<div class="breadcrumbs">
                    	 <ul>
                         	<li>
                         	<script>
    document.write('<a href="' + document.referrer + '">TILBAGE</a>');
</script></li>
                         </ul>
                    </div>
                    <h2 id="overskjult">OPRET <strong>CYKEL</strong></h2>
                       <h2 id="overskjult2">RET <strong>CYKEL</strong></h2>
                     <div class="form_row">
                    	 <span class="form_box" id="hertur1">
                         	   <label>KALDENAVN</label>
                               
                              
                         </span>
                         
                         <span class="form_box right" id="hertur2">
                         	   <label>CYKELNUMMER</label>
                               
                              
                         </span>
                    </div><!--close form_row-->
                    
                    <div class="form_row">
                    	 <span class="form_box" id="hertur3">
                         	   <label>BATTERINUMMER</label>
                               
                               
                         </span>
                         
                         <span class="form_box right" id="hertur4">
                         	   <label>BATTERILADER</label>
                               
                               
                         </span>
                    </div><!--close form_row-->
                    
                    <div class="form_row">
                    	 <span class="form_box" id="hertur5">
                         	   
                               
                         </span>
                         
                         <span class="form_box5 right">
                         	 
                         </span>
                    </div><!--close form_row-->
                    
                    <h3>HVORNÅR KAN <strong>CYKLEN IKKE BRUGES?</strong></h3>
                    
                    <div class="row8" style="width:450px;" id="herturtid">
                    	
                  
                    </div><!--close row8-->
                    
                    
                     <div class="form_row">
                    	 <span class="form_box" id="herturaktiv">
                         	  
                               
                              
                         </span>
                         
                         <span class="form_box right" >
                         	   
                               
                               
                         </span>
                    </div><!--close form_row-->
                    
                    <div class="form_row">
                    	 <span class="form_box" id="herturslet">
                         	  
                               
                              
                         </span>
                         
                         <span class="form_box right" id="herturgem">
                         	   
                               
                               
                         </span>
                    </div><!--close form_row-->
                    
               	    <div class="clear"></div>
               </div><!--close opret_cykel-->
           
                        
                      
<div id="vistheform">
<?php print $content['mc1']; ?>
<?php print $content['mc2']; ?>
<?php print $content['mc3']; ?>
<?php print $content['mc4']; ?>
<?php print $content['mc5']; ?>
<?php print $content['mc6']; ?>
<?php print $content['mc7']; ?>
</div>
<script type="text/javascript">
  
    (function ($) {
     $('#edit-title').appendTo('#hertur1');
     $("#edit-title").removeClass('form-text');
     $("#edit-title").addClass('input2');
     $("#edit-title").attr("placeholder", "Kaldenavn");  
     
     $('#edit-field-cykel-cykelnummer-und-0-value').appendTo('#hertur2');
     $("#edit-field-cykel-cykelnummer-und-0-value").removeClass('form-text');
     $("#edit-field-cykel-cykelnummer-und-0-value").addClass('input2');
     $("#edit-field-cykel-cykelnummer-und-0-value").attr("placeholder", "Cykelnummer"); 
     
     $('#edit-field-cykel-batterinummer-und-0-value').appendTo('#hertur3');
     $("#edit-field-cykel-batterinummer-und-0-value").removeClass('form-text');
     $("#edit-field-cykel-batterinummer-und-0-value").addClass('input2');
     $("#edit-field-cykel-batterinummer-und-0-value").attr("placeholder", "Batterinummer");  
   
     $('#edit-field-cykel-batterilader-und-0-value').appendTo('#hertur4');
     $("#edit-field-cykel-batterilader-und-0-value").removeClass('form-text');
     $("#edit-field-cykel-batterilader-und-0-value").addClass('input2');
     $("#edit-field-cykel-batterilader-und-0-value").attr("placeholder", "BATTERILADER");       
         
     $('#edit-title').appendTo('#hertur1');
     $("#edit-title").removeClass('form-text');
     $("#edit-title").addClass('input2');
     $("#edit-title").attr("placeholder", "Batterilader");            
         
     $('#edit-body-da-0-value').appendTo('#hertur4');
     $("#edit-body-da-0-value").removeClass('form-textarea');
     $("#edit-body-da-0-value").removeClass('text-full');
     $("#edit-body-da-0-value").addClass('textarea7');
     $("#edit-body-da-0-value").attr("placeholder", "Praktisk info"); 
     
     $('#edit-field-cykel-billede').appendTo('#hertur5');  
      
     $('#field-cykel-brugstidspunkt-add-more-wrapper').appendTo('#herturtid');  
        
     $('#edit-field-cykel-aktiv').appendTo('#herturaktiv'); 
 <?
                                                                                                                                                                    if (empty($_GET["l"])) {
    //
}   else {
?>                                                                                                                                                                
$('#edit-field-cykel-lokation-und').val('<? print $_GET["l"] ?>');                                                                                              
<?                                                                                                                                                                 }                                                                                                                                                                    ?>                                                                                                                                                                      $('#edit-submit').appendTo('#herturgem');                
     $("#edit-submit").removeClass('form-submit');
     $("#edit-submit").addClass('button24');                                                                                                                                                                                                                                                                                                                   
     $('#edit-delete').appendTo('#herturslet');   
 
    
      if(window.location.href.indexOf("/edit?destination") > -1) {
   
      $('#overskjult').addClass('hideme');
      }
      else
      {
       $('#overskjult2').addClass('hideme');
      }
    
    })(jQuery);

</script>
<style>
#edit-field-kommunetesttax {
    display:none;
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
.field-label {
    display:none;
}
#field-cykel-brugstidspunkt-values {
width:100%;    
}
.form-item-field-cykel-brugstidspunkt-und-0-value2 label {
    display:none; 
}
.description {
   display:none;   
}
.fieldset-legend {
   display:none;   
}
.tabledrag-toggle-weight-wrapper {
   display:none;    
}
</style>
     