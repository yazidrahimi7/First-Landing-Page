<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<center>
<?php
$searchtype=$_POST['searchType'];
$searchvalue=$_POST['searchValue'];

include ('connection.php');


$sqlStatement ="SELECT * FROM tblPembekal WHERE $searchtype LIKE '$searchvalue'";

$result = mysqli_query($link,$sqlStatement) or die (mysqli_error($link));

$count = mysqli_num_rows($result);

if($count < 1)
{
	echo "<h3 align='center'>No Record Found</h3>";
}

else
{
	echo "<h1 align='center'>Supplier Record</h1>";
	echo "<h3 align='center'>Record Found</h3>";
	echo "There are <u> $count </u> records.<P>";
	echo "<table border='1' width='400' align='center'>";
		echo "<tr>";
		echo "<th>Name</th>";
		echo "<th>ID</th>";
		echo "<th>Type</th>";
		echo "</tr>";
		while ($get_info = mysqli_fetch_row($result) ){
			echo "<tr>";
			foreach ($get_info as $field){
				echo "<td align='center'>$field</td>";
			}
			echo "</tr>";
		}
	echo "</table>";
}

?><form method="POST" action="login-page.html">
<input type="submit" value="Main Page">
</form></center></body></html>
</body>
</html>