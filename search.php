<?php 
	
	// if (isset($_GET['usearch'])) {
	// 	echo $_GET['usearch'];
	// }

	$conn = mysql_connect("localhost","root","");
	mysql_select_db('searchbox',$conn);
	$s=$_GET['usearch'];

	$sql = "SELECT * FROM user WHERE name like '%$s%'";
	$rs=mysql_query($sql);
	while ($row = mysql_fetch_array($rs)) {
		echo $row['name']."<br>";
	}

?>