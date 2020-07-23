<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>
<p>
<?php 
	if (isset ($_GET['id2']))
		echo "Update Successful<br>"; 
?>
</p>
<h3> Update Supplier Information</h3>
	<table width="783" border="1">
   <tr bgcolor="#00CC66">
    <td>ID</td>
    <td>Category</td>
    <td>Condition</td>
    <td>Item Type</td>
    <td>Colour</td>
    <td>Quantity</td>
   
  </tr>
   
<?php
include ("connection.php");
$query = "SELECT * FROM tblitem";
$result = mysqli_query ($connection, $query) or die("Select Error ". mysqli_error($connection));
$i = 1;
while($row = mysqli_fetch_array($result))
{
	?>
<tr>
	<td><?php echo $row['ITid']; ?></td>
    <td><?php echo $row['ITcat']; ?></td>
    <td><?php echo $row['ITcon']; ?></td>
    <td><?php echo $row['ITnmitem']; ?></td>
    <td><?php echo $row['ITcolor']; ?></td>
    <td><?php echo $row['ITquantity']; ?></td>
	</tr>
<?php 
	$i++;
	}
	mysqli_close($connection);
?>
</table>
<p>
<form method="post" action="update-page.php">
	<input type="submit" value="Update Another" />
    </form></p>
    

</body></center>
</html>