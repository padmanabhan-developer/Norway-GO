
<div class="opret_tur">
               		<div class="opret_tur_left">
                        <div class="breadcrumbs">
                             <ul>
                                <li><a href="/">TILBAGE</a></li>
                             </ul>
                        </div>
                        
                        
                        <?php print $content['mc5']; ?>
                        
                        <div class="row9">
                        	 <!--<a href="#" class="button22">ENKEL</a>
                             <a href="#" class="button23">FÆLLES</a>-->
                        </div><!--close row9-->
                        
                        <div class="row10" id="hertur1">
                        	 <label>Start:</label>
                            </div><!--close row10-->
                        
                        <div class="row10" id="hertur2">
                        	 <label>Slut:</label>
                            
                        </div><!--close row10-->
                        
                        <div class="row11" id="hertur3">
                        	 
                        	
                        </div><!--close row11-->
                        
                        <div class="row11">
                        	 
                        	 
                        	 <input class="button24" type="submit" id="edit-submit4" name="op" value="GEM">
                        </div><!--close row11-->
                    </div><!--close opret_tur_left-->
                    
                    <div class="opret_tur_right">
                     <!--<h2>mulige <strong>ture</strong></h2>
                         <ul>
                         	<li>
                            	<span class="thumb1"><img src="/sites/all/themes/cua/images/thumb7.png" alt="" /></span>
                                <h4>Ole Kassow</h4>
                                <p>Dato: 23-04-2014</p>
                                <p>Tid: 16:00-17:00</p>
                                <p>Lokation: Rosengaarden</p>
                                <div class="links">
                                	 <a href="#">Konfimer tur</a>
                                </div>
                            </li>
                            
                            <li>
                            	<span class="thumb1"><img src="/sites/all/themes/cua/images/thumb7.png" alt="" /></span>
                                <h4>Ole Kassow</h4>
                                <p>Dato: 25-06-2014</p>
                                <p>Tid: 16:00-17:00</p>
                                <p>Lokation: Rosengaarden</p>
                                <div class="links">
                                	 <a href="#">Konfimer tur</a>
                                </div>
                            </li>
                            
                            <li>
                            	<span class="thumb1"><img src="/sites/all/themes/cua/images/thumb7.png" alt="" /></span>
                                <h4>Ole Kassow</h4>
                                <p>Dato: 26-05-2014</p>
                                <p>Tid: 16:00-17:00</p>
                                <p>Lokation: Rosengaarden</p>
                                <div class="links">
                                	 <a href="#">Konfimer tur</a>
                                </div>
                            </li>
                            
                            <li>
                            	<span class="thumb1"><img src="/sites/all/themes/cua/images/thumb7.png" alt="" /></span>
                                <h4>Ole Kassow</h4>
                                <p>Dato: 27-04-2014</p>
                                <p>Tid: 16:00-17:00</p>
                                <p>Lokation: Rosengaarden</p>
                                <div class="links">
                                	 <a href="#">Konfimer tur</a>
                                </div>
                            </li>
                            <div class="clear"></div>
                         </ul>-->
                    <?php print $content['mc1']; ?>
                <?php print $content['mc3']; ?>
               <?php print $content['mc4']; ?>
                    <?php print $content['mc6']; ?>
                    <?php print $content['mc2']; ?>
                    <?php print $content['mc7']; ?>
                    </div><!--close opret_tur_right-->
               </div><!--close opret_tur-->
 <script type="text/javascript">
  
//document.getElementById('edit-title').value = 'Tur';

    
    
    (function ($) {
    
    $('#edit-title').val('Tur');
  // flyt
   
   //edit-field-tur-beboer-und
  
   $('#edit-field-tur-dato-und-0-value-datepicker-popup-0').appendTo('#hertur1');
   $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').appendTo('#hertur1');
//   $('#edit-field-kommunetesttax-und').appendTo('#hertur1');
   $('#edit-field-tur-dato-und-0-value2-datepicker-popup-0').appendTo('#hertur2');
   $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').appendTo('#hertur2');
   $('#edit-field-testlokation-und').appendTo('#hertur2');
  // $('#edit-field-tur-beboer-und').appendTo('#hertur2');
 $('#edit-field-tur-kommentar-und-0-value').appendTo('#hertur3');
 
 
//   $('#edit-field-tur-passager-und--2').appendTo('#hertur2');
 //  $('#edit-field-tur-passager-und--3').appendTo('#hertur2');
       
   
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
 
  $("#edit-field-tur-kommentar-und-0-value").attr("placeholder", "SKRIV EN  KOMMENTAR...");
 
 $('#edit-field-testlokation-und option:first').text('Vælg lokation');
// $('#edit-field-tur-beboer-und option:first').text('Vælg passager');
 /* $('#edit-field-efternavn-und-0-value').prependTo('#her2');
   $('#edit-mail').prependTo('#her3');

   $('#edit-pass-pass1').prependTo('#her5');
   $('#edit-profile-frivillig-field-kommunetesttax-und').prependTo('#her4');
   $('#edit-field-mobilnummer-und-0-value').prependTo('#her7');
  
  
    $("#edit-field-fornavn-und-0-value").addClass('input3');
    $("#edit-field-efternavn-und-0-value").addClass('input3');
    $("#edit-mail").addClass('input3');
    $("#edit-pass-pass1").removeClass('password-field');
    $("#edit-pass-pass1").addClass('input3');
     $("#edit-field-mobilnummer-und-0-value").addClass('input3');
    $("#edit-profile-frivillig-field-kommunetesttax-und").addClass('list2');
    
    //
      $("#edit-pass-pass1").attr("placeholder", "Kodeord");
    $("#edit-field-fornavn-und-0-value").attr("placeholder", "Fornavn");
     $("#edit-field-efternavn-und-0-value").attr("placeholder", "Efternavn ");
    $("#edit-mail").attr("placeholder", "Din email");
    $("#edit-field-mobilnummer-und-0-value").attr("placeholder", "Mobilnummer");
    
        
    $('#edit-pass-pass1').keyup(function () { $("#edit-pass-pass2").val($("#edit-pass-pass1").val()); });
    */
   // _none 
      $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").keyup(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});
    
     $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").change(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});
    
    
    })(jQuery);
    
    
//    $(function() {
//       
 //   });
</script>     
<style>

#edit-field-kommunetesttax-und {
 /*   display:none;*/
}

.form-item.form-type-textfield.form-item-title {
    display:none;
}


#field-tur-dato-add-more-wrapper {
display:none;  
}
#field-tur-kommentar-add-more-wrapper {
display:none;  
}
#edit-field-kommunetesttax {
display:none;  
}
#edit-field-testlokation {
display:none;  
}
#edit-submit{
    display:none;  
}
#edit-field-tur-beboer {
  /*  display:none;  */
}
#edit-field-tur-beboer-und {
  
 /*    float:right;    */
}
#reference-options-limit-field-tur-passager {
  /*   display:none;  */
}
/*
ul li.active-result {
 height:30px;   
 width:99%; 
}
ul li.search-choice {
/* height:30px;    */
  /*width:40px; 
}
ul li.search-field {
 height:50px;    
}
ul li.result-selected {
 height:30px;   
 width:99%; 
}
*/

</style>         