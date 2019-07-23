<?php

include_once 'connect.php';

$week = $_POST[ 'week' ];

if ( $week == 'old' ) {
  $date = date('Y-m-d H:i:s',time()-(14*86400));
  $result = $connect->query( "SELECT * FROM css WHERE timestamp < '$date'" );
} else if ( $week == 'prev' ) {
  $result = $connect->query( "SELECT * FROM css WHERE YEAR(`timestamp`) = YEAR(NOW()) AND WEEK(`timestamp`, 1) = WEEK(NOW(), 1) - 1" );
} else {
  $result = $connect->query( "SELECT * FROM css WHERE YEAR(`timestamp`) = YEAR(NOW()) AND WEEK(`timestamp`, 1) = WEEK(NOW(), 1)" );
}

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $date = new DateTime( substr( $rs[ "timestamp" ], 0, 10 ) );
  $outp .= '{"id":"' . $rs[ "id" ] . '",';
  $outp .= '"job":"' . $rs[ "job" ] . '",';
  $outp .= '"css":"' . $rs[ "css" ] . '",';
  $outp .= '"npm":"' . $rs[ "npm" ] . '",';
  $outp .= '"comment":"' . $rs[ "comment" ] . '",';
  $outp .= '"engineer":"' . $rs[ "engineer" ] . '",';
  $outp .= '"company":"' . $rs[ "companyname" ] . '",';
  $outp .= '"mail":"' . $rs[ "mail" ] . '",';
  $outp .= '"keyvalue":"' . $rs[ "keyvalue" ] . '",';
  $outp .= '"weekNumber":"' . $date->format("W") . '",';
  $outp .= '"timestamp":"' . substr( $rs[ "timestamp" ], 0, 10 ) . '"}';
}
$outp ='{"data":[ '.$outp.']}';
$connect->close();
echo($outp);

?>