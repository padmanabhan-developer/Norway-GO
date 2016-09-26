<?php
$id = intval($_GET["id"]);
$da = $_GET["da"];
$t1 = $_GET["t1"];
$t2 = $_GET["t2"];
$con=mysqli_connect("mysql14.unoeuro.com","gobooking_bike","t4bkrcwd","gobooking_bike_db");
if (mysqli_connect_errno()) {
echo '<!--  SQL ERROR -->';
?>
<script type="text/javascript">
(function ($) {
$("#edit-submit4").attr('disabled','disabled');
$("#edit-submit4").css("background-color","#F38383");
$("#kanikkebookes").css("display","block");

 bookok = 0;
          })(jQuery);

</script>
<?
}

// ANTAL CYKLER
$sql3 = "SELECT COUNT(*) as antal FROM nr_node INNER JOIN nr_field_data_field_cykel_aktiv ON nr_node.nid = nr_field_data_field_cykel_aktiv.entity_id AND (nr_field_data_field_cykel_aktiv.entity_type = 'node' AND nr_field_data_field_cykel_aktiv.deleted = '0') LEFT JOIN  nr_field_data_field_cykel_lokation ON nr_node.nid = nr_field_data_field_cykel_lokation.entity_id AND (nr_field_data_field_cykel_lokation.entity_type = 'node' AND nr_field_data_field_cykel_lokation.deleted = '0') LEFT JOIN nr_field_data_field_cykel_brugstidspunkt ON nr_node.nid = nr_field_data_field_cykel_brugstidspunkt.entity_id AND (nr_field_data_field_cykel_brugstidspunkt.entity_type = 'node' AND nr_field_data_field_cykel_brugstidspunkt.deleted = '0') WHERE (( (nr_field_data_field_cykel_lokation.field_cykel_lokation_nid = '" . $id . "' ) )AND(( (nr_node.status = '1') AND (nr_field_data_field_cykel_aktiv.field_cykel_aktiv_value = '1') ))) ";
$result3 = mysqli_query($con,$sql3);
while($row3 = mysqli_fetch_array($result3)) {
$antal = $row3['antal'];
}

$date = DateTime::createFromFormat('d/m/Y', $da);
$datestring = $date->format('Y-m-d');

$date1new = strtotime($datestring . ' ' . $t1 . ':00' );
$date2new = strtotime($datestring . ' ' . $t2 . ':00' );
$num = 0;
$sql2 = "SELECT nr_node.nid AS nid, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value) AS dato1, nr_field_data_field_tur_dato.field_tur_dato_value as datonr1, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value2) AS dato2, nr_field_data_field_tur_dato.field_tur_dato_value2 as datonr2 FROM nr_node LEFT JOIN nr_field_data_field_cykel_lokation ON nr_node.nid = nr_field_data_field_cykel_lokation.entity_id AND (nr_field_data_field_cykel_lokation.entity_type = 'node' AND nr_field_data_field_cykel_lokation.deleted = '0') LEFT JOIN  nr_field_data_field_tur_dato ON nr_node.nid = nr_field_data_field_tur_dato.entity_id AND (nr_field_data_field_tur_dato.entity_type = 'node' AND nr_field_data_field_tur_dato.deleted = '0') WHERE (( (nr_node.status = '1') AND (nr_node.type IN  ('tur')) AND (nr_field_data_field_cykel_lokation.field_testlokation_target_id = '" . $id . "') AND (nr_field_data_field_tur_dato.field_tur_dato_value <= " . $date2new . " AND nr_field_data_field_tur_dato.field_tur_dato_value2 >= " . $date1new . " ) ))";

$result2 = mysqli_query($con,$sql2);
/*while($row2 = mysqli_fetch_array($result2)) {
$num ++;
}*/

echo '<!--  num:' . $num . '-->';
echo '<!--  antal:' . $antal . '-->';

if ($antal == 1) {
if ($num == 0) {
?>

 <script type="text/javascript">
(function ($) {
$("#edit-submit4").removeAttr('disabled');
$("#edit-submit4").css("background-color","#489e5c");
$("#kanikkebookes").css("display","none");
bookok = 1;
          })(jQuery);

</script>
<?
}
  }

if ($antal > 1) {
if ($antal > $num) {
?>
<script type="text/javascript">
(function ($) {
$("#edit-submit4").removeAttr('disabled');
$("#edit-submit4").css("background-color","#489e5c");
$("#kanikkebookes").css("display","none");
bookok = 1;
          })(jQuery);

</script>
<?
}
}
mysqli_close($con);
?>
