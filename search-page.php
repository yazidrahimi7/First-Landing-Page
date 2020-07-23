<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<html>

<h1 align="center"><u>Search</u></h1><center>
<?php

include ('connection.php');

$ITcat =$_POST['ITcat']; 
$ITcon=$_POST['ITcon'];  
$ITnmitem=$_POST['ITnmitem'];
$ITcolor=$_POST['ITcolor'];
$ITquantity=$_POST['ITquantity'];

if ($ITcat == ""){
	$ITcat = '%';
}

if ($ITcon == ""){
	$ITcon = '%';
}

if ($ITnmitem == ""){
	$ITnmitem = '%';
}
if ($ITcolor == ""){
	$ITcolor = '%';
}
if ($ITquantity == ""){
	$ITquantity = '%';
}

$result = mysqli_query ($connection, "SELECT * FROM tblItem WHERE ITnmitem LIKE '$ITnmitem%' OR ITcolor LIKE '$ITcolor%' OR ITid LIKE 'ITid%' OR ITcon LIKE 'ITcon&' OR ITcat LIKE'ITcat%' OR ITquantity LIKE '$ITquantity&'") or die (mysqli_error($connection));
	
$num_rows = mysqli_num_rows($result);
	echo "There are <u> $num_rows </u> records.<P>";

if ($row = mysqli_fetch_row($result)) 
{	echo "<table width=200 border=1>";

	
    echo "<th>Category</th>";
    echo "<th>Condition</th>";
	echo "<th>Colour</th>";
    echo "<th>Item Type</th>";
	echo"<th>Quantity</th>";  
	echo "<th>ID</th>";
	echo "</tr>";
		
	do {
		
		echo "<tr>\n";
		foreach ($row as $field) 
		echo "\t<td>$field</td>\n";
		echo "</tr>\n";
		
		} 
	
		while($row = mysqli_fetch_row($result));
		echo "</table>";
} 

else {
	echo "Sorry, no records were found!";
}
mysqli_close($connection);?> <br />
<form method="post" action="home-search.html">
<input type="submit" value="Search">
</form><br>
<form method="POST" action="login-page.php">
  <input type="submit" value="Main Page">
</form></center></body></html>

</body>
</html>