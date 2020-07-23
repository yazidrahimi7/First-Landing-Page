<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	if (isset ($_GET['msg']))
		echo "Insert Successful";
?>
<center>
<h3> List Of Items </h3>
<p>
<table width="620" border="1">
  <tr>
  <tr bgcolor="blue">
    <td>ID</td>
    <td>Category</td>
    <td>Condition</td>
    <td>Item Type</td>
    <td>Colour</td>
    <td>Quantity</td>
   
  </tr>
  <?php
include ("connection.php");
$query = "SELECT * FROM tblItem";
$result = mysqli_query ($connection, $query) or die("Select Error ". mysqli_error($connection));
$i = 1;
while ($row = mysqli_fetch_array($result)) {
?>
  
  <tr>
    <td><?php echo $row['ITid']; ?></td>
    <td><?php echo $row['ITcat']; ?></td>
    <td><?php echo $row['ITcon']; ?></td>
    <td><?php echo $row['ITnmitem']; ?></td>
    <td><?php echo $row['ITcolor']; ?></td>
    <td><?php echo $row['ITquantity']; ?></td>
   
   <td width="69">
	<?php echo "<a href=ac_update.php?id1=".$row['ITid'].">". "Edit"; 
	?>
	</td>
	<td width="82">
	<?php echo "<a href=ac_confirm_delete.php?id2=".$row['ITid'].">". "Delete"; 
	?></td>
	</tr>
  
<?php 
	$i++;
	} 
	mysqli_close ($connection);
?>

<p>
</table>
<form method="post" action="login-page.php">
<p>
<input type="Submit" value="Home Page">
</form>
</center>
</body>
</html>