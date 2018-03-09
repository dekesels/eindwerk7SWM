<?php
include("includes/db_conn.php");
if(isset($_GET['id'])){
	$userid = htmlspecialchars($_GET['id']);
	$sql_update= "UPDATE gip_newsletter SET isactive=1 WHERE userid=".$userid;
}

if (!$sql_update = mysqli_query($conn,$sql_update)) {
    echo "FOUT: Query kon niet uitgevoerd worden".$query; 
	exit;
}else{
	echo "Uw gegevens zijn opgeslagen in onze database. ";
}
?>