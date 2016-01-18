<?php
$id = intval($_GET["id"]);
$da = $_GET["da"];
$con=mysqli_connect("mysql14.unoeuro.com","gobooking_bike","t4bkrcwd","gobooking_bike_db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// ANTAL CYKLER
$sql2 = "SELECT COUNT(*) as antal FROM nr_node INNER JOIN nr_field_data_field_cykel_aktiv ON nr_node.nid = nr_field_data_field_cykel_aktiv.entity_id AND (nr_field_data_field_cykel_aktiv.entity_type = 'node' AND nr_field_data_field_cykel_aktiv.deleted = '0') LEFT JOIN  nr_field_data_field_cykel_lokation ON nr_node.nid = nr_field_data_field_cykel_lokation.entity_id AND (nr_field_data_field_cykel_lokation.entity_type = 'node' AND nr_field_data_field_cykel_lokation.deleted = '0') LEFT JOIN nr_field_data_field_cykel_brugstidspunkt ON nr_node.nid = nr_field_data_field_cykel_brugstidspunkt.entity_id AND (nr_field_data_field_cykel_brugstidspunkt.entity_type = 'node' AND nr_field_data_field_cykel_brugstidspunkt.deleted = '0') WHERE (( (nr_field_data_field_cykel_lokation.field_cykel_lokation_nid = '" . $id . "' ) )AND(( (nr_node.status = '1') AND (nr_field_data_field_cykel_aktiv.field_cykel_aktiv_value = '1') ))) ";
$result2 = mysqli_query($con,$sql2);
while($row2 = mysqli_fetch_array($result2)) {
$antal = $row2['antal'];
}

$date = DateTime::createFromFormat('d/m/Y', $da);
$datestring = $date->format('Y-m-d');
$io = "00";
$starttimer = "";
echo "<style>";
for ($i = 0; $i <= 23; $i++) {

if (strlen($i) == 1) {
    $io = "0" . $i;
    }else
    {
    $io = $i;
    }


$date1 = strtotime($datestring . ' ' . $io . ':00:00' );
$date2 = strtotime($datestring . ' ' . $io . ':59:59' );
$sql = "SELECT nr_node.nid AS nid, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value) AS dato1, nr_field_data_field_tur_dato.field_tur_dato_value as datonr1, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value2) AS dato2, nr_field_data_field_tur_dato.field_tur_dato_value2 as datonr2 FROM nr_node LEFT JOIN nr_field_data_field_testlokation ON nr_node.nid = nr_field_data_field_testlokation.entity_id AND (nr_field_data_field_testlokation.entity_type = 'node' AND nr_field_data_field_testlokation.deleted = '0') LEFT JOIN  nr_field_data_field_tur_dato ON nr_node.nid = nr_field_data_field_tur_dato.entity_id AND (nr_field_data_field_tur_dato.entity_type = 'node' AND nr_field_data_field_tur_dato.deleted = '0') WHERE (( (nr_node.status = '1') AND (nr_node.type IN  ('tur')) AND (nr_field_data_field_testlokation.field_testlokation_target_id = '" . $id . "') AND (nr_field_data_field_tur_dato.field_tur_dato_value BETWEEN " . $date1 . " AND " . $date2 . " ) ))";
//$sql = "SELECT nr_node.nid AS nid, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value) AS dato1, nr_field_data_field_tur_dato.field_tur_dato_value as datonr1, FROM_UNIXTIME(nr_field_data_field_tur_dato.field_tur_dato_value2) AS dato2, nr_field_data_field_tur_dato.field_tur_dato_value2 as datonr2 FROM nr_node LEFT JOIN nr_field_data_field_testlokation ON nr_node.nid = nr_field_data_field_testlokation.entity_id AND (nr_field_data_field_testlokation.entity_type = 'node' AND nr_field_data_field_testlokation.deleted = '0') LEFT JOIN  nr_field_data_field_tur_dato ON nr_node.nid = nr_field_data_field_tur_dato.entity_id AND (nr_field_data_field_tur_dato.entity_type = 'node' AND nr_field_data_field_tur_dato.deleted = '0') WHERE (( (nr_node.status = '1') AND (nr_node.type IN  ('tur')) AND (nr_field_data_field_testlokation.field_testlokation_target_id = '" . $id . "') AND (nr_field_data_field_tur_dato.field_tur_dato_value BETWEEN " . $date1 . " AND " . $date2 . " ) ))";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
$starttimer = $i;


if ($antal == 1) {
echo "#tid" . $io . "00 {display:none;}";
echo "#tid" . $io . "30 {display:none;}";
  }

if ($antal > 1) {

//echo "#tid" . $ios . "00 {display:none;}";
//echo "#tid" . $ios . "30 {display:none;}";
}

$start_date = new DateTime($row['dato1']);
$since_start = $start_date->diff(new DateTime($row['dato2']));
$antaltimer = $since_start->h;
 echo '/*' . $antaltimer .' hours' . $starttimer . ' ';
echo $since_start->i.' minutes */';

// her

$ios = "00";
$alletimer = $starttimer + $antaltimer;
for ($is = $starttimer; $is <= $alletimer; $is++) {

if (strlen($is) == 1) {
    $ios = "0" . $is;
    }else
    {
    $ios = $is;
    }

if ($antal == 1) {
echo "#tid" . $ios . "00 {display:none;}";
echo "#tid" . $ios . "30 {display:none;}";
}

if ($antal > 1) {
$antalbook = 0;
$date1re = strtotime($datestring . ' ' . $ios . ':00:00' );
$date2re = strtotime($datestring . ' ' . $ios . ':59:59' );
//echo "#tid" . $ios . "00 {display:none;}";
//echo "#tid" . $ios . "30 {display:none;}";
$sqlbook = "SELECT COUNT(*) as antalbook FROM nr_node LEFT JOIN nr_field_data_field_testlokation ON nr_node.nid = nr_field_data_field_testlokation.entity_id AND (nr_field_data_field_testlokation.entity_type = 'node' AND nr_field_data_field_testlokation.deleted = '0') LEFT JOIN  nr_field_data_field_tur_dato ON nr_node.nid = nr_field_data_field_tur_dato.entity_id AND (nr_field_data_field_tur_dato.entity_type = 'node' AND nr_field_data_field_tur_dato.deleted = '0') WHERE (( (nr_node.status = '1') AND (nr_node.type IN  ('tur')) AND (nr_field_data_field_testlokation.field_testlokation_target_id = '" . $id . "') AND (nr_field_data_field_tur_dato.field_tur_dato_value <= " . $date2 . " AND nr_field_data_field_tur_dato.field_tur_dato_value2 >= " . $date1re . ") ))";
$resultbook = mysqli_query($con,$sqlbook);
while($rowbook = mysqli_fetch_array($resultbook)) {
$antalbook = $rowbook['antalbook'];

}
echo "/*" . $ios . " " . $antalbook . "*/";
if ($antal <= $antalbook) {
echo "#tid" . $ios . "00 {display:none;}";
echo "#tid" . $ios . "30 {display:none;}";
}


}

}


 }



}


//)

echo "</style>";
mysqli_close($con);

?>
