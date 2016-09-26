<div class="lokationer_sub">


  <div class="breadcrumbs">
                             <ul>
                               <li><a href="/lokationer">TILBAKE</a></li>
                             </ul>
                        </div>
                        <div class="clear"></div>
                        <?php print $content['mc5']; ?>
                        <div class="clear"></div>
                       <div class="location-subpage-left">
                       <?php print $content['mc1']; ?>

                     <div class="row12">
                       <h4>STEDETS <strong>SYKLER</strong></h4><?php print $content['mc7']; ?>
                       <ul><?php print $content['mc2']; ?></ul>
                         </div><!--close row12-->


                         <!-- <div class="row13" id="lok1">
                         	  <?php print $content['mc3']; ?>
                         	 </div>


                         <div class="row14">
                            <?php print $content['mc4']; ?>
                         </div>-->
                         </div><!--close location-subpage-left-->

                        <div class="location-subpage-right">
               				 <div class="side1">
                            <ul>
                            <?php print $content['mc8']; ?>
                         <?php print $content['mc9']; ?>
                       <div class="clear"></div>
                         </ul>

<?php
$node = menu_get_object();
$nid = $node->nid;

if ($_GET["goduser"] == "ok") {
$auid = filter_xss($_GET["auid"]);
$user_fields = user_load($auid);
$anode = node_load($nid);
$count = count($anode->field_godkendte_piloter['und']);
$anode->field_godkendte_piloter['und'][$count]['uid'] = $user_fields->uid;
node_save($anode);
$anodee = node_load($nid);
$location_name = $anode->title;

global $user, $base_url;
$firstname = $user_fields->field_fornavn['und']['0']['value'];
$lastname = $user_fields->field_efternavn['und']['0']['value'];
$email = $user_fields->mail;

$mail_subject = "Du er nå godkjent som pilot på $location_name";
$tovholder = user_load($node->field_tovholder['und'][0]['uid']);
$udata = $namestr =  $mailstr = $telstr = "";

$tovholder_name = $tovholder->field_fornavn['und']['0']['value']." ".$tovholder->field_efternavn['und']['0']['value'];
$tovholder_mail = $tovholder->mail;
$tovholder_contact = $tovholder->field_mobilnummer['und']['0']['value'];
?>
<script type="text/javascript">
location.reload();
</script>
<?
$mail_body = <<<EOD
<p>Hei $firstname $lastname</p>
<br/>
<p>Du er nå godkjent på stedet : $location_name.</p>

<p>Du kan nå komme i gang med å tråkke på pedalene ved å booke turer her: $base_url/ture </p>

<p>Hvis du har spørsmål, er du alltid velkommen til å kontakte koordinatoren:</p>

<p>Navn: $tovholder_name</p>

<p>Email: $tovholder_mail</p>

<p>Telefon: $tovholder_contact</p>
<br/>
<p>God fornøyelse på sykkelstien!</p>
EOD;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <hej@syklingutenalder.no>' . "\r\n";

$to = $email;
$subject = $mail_subject;
$txt = $mail_body;
$params = array('body' => $txt, 'subject' => $subject, 'headers'=> $headers);
if(isset($to) && ($to != '')){
drupal_mail('cyklingudenalder', 'send_email', $to, language_default(), $params, 'hej@syklingutenalder.no', TRUE);
}


}

global $user;

if (in_array('aktivitetsmedarbejder', $user->roles)) {
$taluid = "";
$view = views_get_view('sendtogodkendtbruger');
$view->set_display('default');
$view->pre_execute();
$view->execute('default');
foreach ($view->result as $result) {
$taluid .= $result->uid . ",";
}
?>
<!--<a href="/messages/new/<? print $taluid ?>" class="contact-button">KONTAKT ALLE</a>-->
<?
}
?>
                                <!--  # -->
                             </div><!--close side1-->
                                 <h4><strong>GODKJENTE </strong> PILOTER</h4>
                             <div class="side1" ondrop="drop3(event)" ondragover="allowDrop3(event)">
                             	  <div class="" >
                                  	   <?php print $content['mc10']; ?>
                                  </div>
                             </div><!--close side1-->
                             <h4>PILOTER TIL <strong>GODKJENNING</strong></h4>
                             <div class="side1" ondrop="drop2(event)" ondragover="allowDrop2(event)">
                             	  <div class="" >
                                  	   <?php print $content['mc11']; ?>
                                  </div>
                             </div><!--close side1-->

                             <h4>PILOTER UNDER <strong>OPPLÆRNING</strong></h4>
                             <div class="side1" ondrop="drop(event)" ondragover="allowDrop(event)">
                             	  <div class="" >
                                  	   <?php print $content['mc12']; ?>
                                  </div>
                             </div><!--close side1-->

<?php print $content['mc6']; ?>

  </div><!--close location-subpage-right-->

               </div><!--close lokationer_sub-->
               <div id="oksyvtid"></div>

 <script type="text/javascript">

//document.getElementById('edit-title').value = 'Tur';


function allowDrop(ev) {
    ev.preventDefault();
}

function allowDrop2(ev) {
    ev.preventDefault();
}

function allowDrop3(ev) {
    ev.preventDefault();
}


function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drag2(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drag3(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
//alert(ev.dataTransfer.getData("text").replace("usr_",""));

location.reload();
}

   function drop2(ev) {
    ev.preventDefault();
    var dataus = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(dataus));
var usdata = ev.dataTransfer.getData("text").replace("usr_","");
$.get(Drupal.settings.basePath+"users/" + usdata + "?intro=ok", function(data) {
 $("#oksyvtid").html(data);
  location.reload();
 });
}

 function drop3(ev) {
    ev.preventDefault();
    var dataus = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(dataus));
var usdata = ev.dataTransfer.getData("text").replace("usr_","");
$.get(window.location.href + "?goduser=ok" + "&auid=" + usdata + "&nid=<? print $nid; ?>" + "&rnd=" + Math.random() , function(data) {
 $("#oksyvtid").html(data);

 });
// location.reload();
}


    (function ($) {


    $('#edit-comment-body-und-0-value').appendTo('#lok1');
     $('#edit-submit').appendTo('#lok1');
  $("#edit-submit").addClass('submit2');
    $("#edit-comment-body-und-0-value").addClass('textarea8');
  $("#edit-comment-body-und-0-value").attr("placeholder", "SKRIV KOMMENTAR...");
    })(jQuery);


//    $(function() {
//
 //   });
</script>
<style>

#oksyvtid {
display:none;
}

#comment-form {
display:none;
}

<?php
global $user;
$uname = $user->name;
if ($uname != "kbh") {
?>
.location-subpage-right {
/*display:none;     */
}
<?
}
?>


</style>
