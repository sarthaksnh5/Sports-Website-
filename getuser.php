<!DOCTYPE html>
<html>
<body>

<?php
$q = intval($_GET['q']);
//$con = mysqli_connect(host, username, password, dbname);
$con = mysqli_connect('localhost','root','','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

if(mysql_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)) {
		echo "<div class='col-md-12 mb-3'><p><span>Name:</span>";
		echo $row["name"];
		echo "</p></div><div class='col-md-12 mb-3'><p><span>Year:</span>";
		echo $row["year"];
		echo "</p></div><div class='col-md-12 mb-3'><p><span>Branch:</span>";
		echo $row["branch"];
		echo "</p></div>";
	}
}
else{
	echo "User not Found";
}
mysqli_close($con);
?>
</body>
</html>