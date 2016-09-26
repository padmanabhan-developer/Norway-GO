<?php
$node = menu_get_object();
/*echo '<pre>';
print_r($node);exit;*/
$author = $node->uid;
$confirmed_by_coord = $node->field_tur_confirmed['und'][0]['value'];
$passanger = $node->field_tur_beboer['und'];
$accepted_by_pilot = $node->field_bekr_ftet_af_frivillig['und'][0]['value'];
$show_buttons_to_pilot = FALSE;

if($confirmed_by_coord && $accepted_by_pilot && ($user->uid==$author) && (count($passanger)>0)){
$show_buttons_to_pilot = TRUE;
}
?>
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


                        	 <input class="button24" type="submit" id="edit-submit4" name="op" value="OPRET TUR" disabled>
                        </div><!--close row11-->
                    </div><!--close opret_tur_left-->

                    <div class="opret_tur_right">

                <?php print $content['mc4']; ?>

                         <?php print $content['mc2']; ?>
                    <?php print $content['mc6']; ?>
                     <?php print $content['mc1']; ?>
                <?php print $content['mc3']; ?>



                    <?php print $content['mc7']; ?>
                        <label id="kanikkebookes">Cyklen er optaget i det valgte tidsrum.</label>
                    </div><!--close opret_tur_right-->
               </div><!--close opret_tur-->
  <div id="syvtid"></div>

 <div id="syvtid2"></div>

 <div id="syvtid3"></div>

  <script type="text/javascript">

//document.getElementById('edit-title').value = 'Tur';




    (function ($) {

     //

    $('#edit-title').val('Tur');
  // flyt

   //edit-field-tur-beboer-und

   $('#edit-field-tur-dato-und-0-value-datepicker-popup-0').appendTo('#hertur1');
   $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').appendTo('#hertur1');
//  $('#edit-field-kommunetesttax-und').appendTo('#hertur1');
//   $('#edit-field-testlokation-und').appendTo('#hertur1');
 
         
       $('#edit-field-tur-dato-und-0-value2-datepicker-popup-0').appendTo('#hertur2');
 $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').appendTo('#hertur2');
   $('#edit-field-testlokation-und').appendTo('#hertur1');
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




 //$("#edit-field-testlokation-und option").css("display","none");

   // $('#edit-field-testlokation-und option:first').text('Vælg lokation');
     $("<option value='0' disabled>Vælg lokation</option>").insertBefore($('#edit-field-testlokation-und option:first'));
    $("#edit-field-testlokation-und").removeAttr('multiple');
    $("#edit-field-testlokation-und option:first").attr('selected','selected');
    $("#edit-field-testlokation-und").css("border-color","#FF0000");



<?php
 global $user;
if (in_array('frivillig', $user->roles)) {
$view2 = views_get_view('godkendpaalokationer');
$view2->set_display('default');
$view2->pre_execute();
$view2->execute('default');
//print_r($view2->result);
$arrbuf2 = "var lokarrgod = [ ";
foreach ($view2->result as $result2) {
$arrbuf2 .= "'" . $result2->field_godkendte_piloter_users_nid . "',";
}
$arrbuf2 = substr($arrbuf2, 0, -1);
$arrbuf2 .= "];";
print $arrbuf2;
?>
$("#edit-field-testlokation-und option").each(function()
{

if(jQuery.inArray($(this).val(), lokarrgod) != -1) {
   //
} else {
    if ($(this).val() != 0) {
       $(this).remove();
    }

}


});
<?php
}
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


<?php


if (in_array('aktivitetsmedarbejder', $user->roles)) {
 ?>
  $("#edit-field-tur-kommentar-und-0-value").attr("placeholder", "SKRIV KOMMENTAR...");
<?
   }
   else
   {
   ?>
    $("#edit-field-tur-kommentar-und-0-value").attr("placeholder", "HER KAN DU EVENTUELT SKRIVE LIDT OM DINE ØNSKER OM TUREN, EKSEMPELVIS OM DU SELV HAR FORSLAG TIL EN RUTE, OM DU ER VILLIG TIL AT KØRE SELVOM DET BLÆSER LIDT ELLER HVIS DU HAR ANDRE KOMMENTARER ELLER IDEER TIL TUREN");
   <?
   }
   ?>

 $('#edit-field-tur-beboer-und option:first').text('Vælg passager');


   /*
         jQuery('select#edit-field-kommunetesttax-und').change();
          jQuery('select#edit-field-kommunetesttax-und').blur();
        */



<?php
if (in_array('frivillig', $user->roles)) {
?>
$('#edit-field-tur-dato-und-0-value2-datepicker-popup-0').attr('readonly','readonly');
<?
}
?>

  $("#edit-field-testlokation-und").change(function(){foo2();});



      $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").keyup(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});

     $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").change(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});

      $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").blur(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});

        $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").mouseout(function(){
   $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val());
});


$("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val("Vælg tid");
$("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").val("Vælg tid");



setInterval(function() { foo(); }, 100);

testtid1 = "Vælg tid";
testtid2 = "Vælg tid";
bookok = 0;
bookoktjek = 0;

        //edit-field-tur-dato-und-0-value-timepicker-popup-1

function foo() {

if (compareDates() == false) {
$("#edit-submit4").attr('disabled','disabled');
$("#edit-submit4").css("background-color","#838383");
//$("#kanikkebookes").css("display","block");
$("#edit-field-tur-dato-und-0-value-timepicker-popup-1").css("border-color","#FF0000");
$("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").css("border-color","#FF0000");


}
else
{
//$("#edit-submit4").removeAttr('disabled');
//$("#edit-submit4").css("background-color","#489e5c");
$("#edit-field-tur-dato-und-0-value-timepicker-popup-1").css("border-color","#929292");
$("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").css("border-color","#929292");

}

if($("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val() != $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val()) {
$("#edit-submit4").attr('disabled','disabled');
$("#edit-submit4").css("background-color","#838383");
 foo2();
 $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random() , function(data) {
 $("#syvtid").html(data);

 });
$.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test2.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&t1=" + $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val() + "&rnd=" + Math.random() , function(data) {
 $("#syvtid").html(data);
 });

 $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
     });


}


 $("#edit-field-tur-dato-und-0-value2-datepicker-popup-0").val($("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val())


 if (testtime() == false) {
 if (compareDates() == true) {
 foo4();
 }
  }

 if (testtime2() == false) {
      if (compareDates() == true) {
    foo4();
      }
  }
<?php
if (in_array('aktivitetsmedarbejder', $user->roles)) {
 ?>


if ($("li.search-choice").size() == 0) {
$("ul.chosen-choices").css("border-color","#FF0000");
$("#edit-submit4").attr('disabled','disabled');
$("#edit-submit4").css("background-color","#838383");
bookoktjek = 0;

}
else
{

if ($("li.search-choice:contains('- Ingen -')").text() != "- Ingen -") {


$("ul.chosen-choices").css("border-color","#929292");
if (bookoktjek != $("li.search-choice").size()) {
$("ul.chosen-choices").css("border-color","#FFF292");
bookoktjek = $("li.search-choice").size();
$("#edit-submit4").attr('disabled','disabled');
$("#edit-submit4").css("background-color","#838383");
$("#kanikkebookes").css("display","block");
 $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test2.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&t1=" + $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val() + "&t2=" + $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid2").html(data);
 });
}

}

}


<?
}
?>

//
}


function foo2() {
$("#edit-field-tur-dato-und-0-value-timepicker-popup-1").css("border-color","#FF0000");
$("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").css("border-color","#FF0000");
$("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val("Vælg tid");
$("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").val("Vælg tid");

// Check locaton
if ($("#edit-field-testlokation-und").val() == 0) {
$("#edit-field-testlokation-und").css("border-color","#FF0000");
$("#edit-submit4").attr('disabled','disabled');
          $("#edit-submit4").css("background-color","#838383");
}
else
{
$("#edit-field-testlokation-und").css("border-color","#929292");

}

}

 function foo3() {
   if ( $('.search-choice').length > 0 ) {
//$("#edit-submit4").removeAttr('disabled');
//$("#edit-submit4").css("background-color","#489e5c");
 }  else {
//$("#edit-submit4").attr('disabled','disabled');
//$("#edit-submit4").css("background-color","#838383");
                  };
 }

 function foo4() {
 bookok = 0;
 $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").css("border-color","#FFF000");
$("#edit-submit4").attr('disabled','disabled');
 $("#edit-submit4").css("background-color","#838383");
     $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test2.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&t1=" + $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val() + "&t2=" + $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid2").html(data);
 });
 }

 function testtime() {

  var startTime = $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').val();

    if(testtid1 == startTime) {
        testtid1 = startTime;
        return true;

    } else {
        testtid1 = startTime;
        return false;
    }
}
    function testtime2() {
  var endTime =  $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').val();

    if(testtid2 == endTime) {
        testtid2 = endTime;
        return true;

    } else {
        testtid2 = endTime;
        return false;
    }
}

 function compareDates() {
  var endTime =  $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').parseValToNumber();
  var startTime = $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').parseValToNumber();

    if(endTime > startTime) {
        return true;

    } else {

        return false;
    }
}
                                                                                                                                                                    $.fn.parseValToNumber = function() {
    return parseInt($(this).val().replace(':',''), 10) || 0;
}

// - HER ER DET


    $("#edit-submit4").click(function(){


var submitButton1 = document.getElementById("edit-submit4");
submitButton1.disabled=true;

      event.preventDefault();

  $(this).attr('disabled',true);
    $("#edit-submit4").css("display","none");

$("#edit-submit4").attr('disabled','disabled');
          $("#edit-submit4").css("background-color","#838383");
      //  alert('Prøv igen senere');
    $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test3.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&t1=" + $("#edit-field-tur-dato-und-0-value-timepicker-popup-1").val() + "&t2=" + $("#edit-field-tur-dato-und-0-value2-timepicker-popup-1").val() + "&rnd=" + Math.random(), function(data) {
// $("#syvtid2").html(data);

 if (data.indexOf("OK") !=-1)  {


     document.getElementById("tur-node-form").submit();

    return false;
        }
        else
        {
         $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
     });

      $("#edit-submit4").css("display","block");
           return false;


        }
 });
  //

    });


 $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
 });


      $("#edit-field-testlokation-und").keyup(function(){

     $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
 });

    });

     $("#edit-field-testlokation-und").change(function(){

    $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
 });


  $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test4.php?id=" + $("#edit-field-testlokation-und").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid3").html(data);
 });

   });



 // DATE TJEK
        $('#edit-field-tur-dato-und-0-value-timepicker-popup-1').attr('readonly', 'readonly');
        $('#edit-field-tur-dato-und-0-value2-timepicker-popup-1').attr('readonly', 'readonly');

       $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").keyup(function(){

     $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
 });

    });

     $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").change(function(){

     $("#edit-submit4").attr('disabled','disabled');
          $("#edit-submit4").css("background-color","#838383");

    $.get("http://cycle/sites/all/themes/cua/panels/layouts/cua_oprettur/test.php?id=" + $("#edit-field-testlokation-und").val() + "&da=" + $("#edit-field-tur-dato-und-0-value-datepicker-popup-0").val() + "&rnd=" + Math.random(), function(data) {
 $("#syvtid").html(data);
 });

  //





   });



    })(jQuery);



</script>

<style>


#kanikkebookes {
    display:none;
}


.chosen-results > li:first-child {
  display:none !important;
}

.form-item-field-tur-beboer-und label {
 /*   display:none; */
}

.form-item.form-type-textfield.form-item-title {
    display:none;
}

#edit-field-kommunetesttax-und {
/*display:none; */
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
/*display:none;  */
}
#edit-submit{
    display:none;
}
#edit-field-tur-beboer {
    display:none;
}
#edit-field-tur-beboer-und {

    float:right;
}
#reference-options-limit-field-tur-passager {
    display:none;
}

.form-item-field-testlokation-und label {

display:none;

}

#edit-field-kommunetesttax-und {

display:none;

}

#kanikkebookes {
color:#ff0000;
}

</style>
