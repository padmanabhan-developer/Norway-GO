<?php 
$id = intval($_GET["id"]);
$con=mysqli_connect("mysql14.unoeuro.com","gobooking_bike","t4bkrcwd","gobooking_bike_db");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$num = 1;
$sql2 = "SELECT nr_node.title AS node_title, nr_node.nid AS nid, nr_field_data_field_cykel_aktiv.field_aktiv_value FROM nr_node LEFT JOIN nr_field_data_field_cykel_aktiv ON nr_node.nid = nr_field_data_field_cykel_aktiv.entity_id AND nr_field_data_field_cykel_aktiv.field_aktiv_value = '0' LEFT JOIN  nr_field_data_field_testlokation ON nr_node.nid = nr_field_data_field_testlokation.entity_id AND (nr_field_data_field_testlokation.entity_type = 'node' AND nr_field_data_field_testlokation.deleted = '0') WHERE (( (nr_field_data_field_testlokation.field_testlokation_target_id = '" . $id . "' ) )AND(( (nr_node.status = '1') AND (nr_node.type IN  ('beboer'))  )))";
// " . $id . "
$result2 = mysqli_query($con,$sql2);
/*while($row2 = mysqli_fetch_array($result2)) {
echo '<!--  tal:' . $num . '-->';
$num ++;
}
*/
?>
<script type="text/javascript">
(function ($) {

function foohide() {
//$("ul.chosen-results li:nth-child(2)").css("display","none");
//clearInterval(interval2);
}
})(jQuery);
</script>
<?
mysqli_close($con);
?>
