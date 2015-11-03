$(document).ready(function(){
  $('.untag_user').click(function(){

  });
});


function untag_approved_pilot(locationid, uid){
var popupdiv = "<div class='untag_popup' style='display:none'></div><div class='untag_popup_msg' style='display:none'><p>SIKKER TIL FORLADE LOKATION ?</p><button class='yes_button' onclick='untag_approved_pilot_process("+locationid+","+uid+")'>JA</button><button onclick='close_msg()'>CANCEL</button><img src='/sites/all/themes/cua/images/load.gif' class='load_symbol' style='display:none; margin-top:10%'></div>";
  $('body').append(popupdiv);
  $(".untag_popup").fadeIn(600);
  $(".untag_popup_msg").fadeIn(900);

}
function untag_approved_pilot_process(locationid, uid){
  $(".untag_popup_msg button").hide();
  $(".load_symbol").show();
  $.post(Drupal.settings.basePath + "cyklingudenalder/untagpilot/"+locationid+"/"+uid, function(data){
    if(data = "success"){
      alert("Succesfuld venstre lokation");
      window.location.reload();
    }
  });
}

function close_msg(){
  $(".untag_popup").hide();
  $(".untag_popup_msg").hide();
}
