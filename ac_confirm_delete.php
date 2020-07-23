<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<h3><p>Are you sure you want to delete this data?</p></h3>

<form method="post" action="delete-page.php">
	<table width="620" border="1">
  <tr>
  <tr bgcolor="blue">
  <td>No.</td>
    <td>ID</td>
    <td>Category</td>
    <td>Condition</td>
    <td>Item Type</td>
    <td>Colour</td>
    <td>Quantity</td>
   
  </tr>
<?php
	include ("connection.php");
$ITid = $_GET['id2'];

$query = "SELECT * FROM tblitem WHERE ITid = '$ITid'";
$result = mysqli_query ($connection, $query) or die("Select Error ".mysqli_error($connection));

while($row = mysqli_fetch_array($result))
{ $i=1;
	$hid_id=$row['ITid'];
?>

<tr>
	<td><?php echo $i; ?></td>
    <td><?php echo $row['ITid'];?></td>
    <input name="hid_id" type="hidden" value="<?php echo $row['ITid']; ?>" size="2" /></td>
	<td><?php echo $row['ITcat']; ?></td>
	<td><?php echo $row['ITcon']; ?></td>
	<td><?php echo $row['ITnmitem'];?></td>
	<td><?php echo $row['ITcolor'];?></td>
	<td><?php echo $row['ITquantity'];?></td>   
</tr>
<?php
}
mysqli_close($connection);
?>
</table>
<p>
<input name="bt_delete" type="submit" value="Delete">
    <label for="hidden"></label>
</form>
  <form method="post" action="login-page.php">
  <input type="submit" value="Home Page">
</form> </p>
<center>
</body>
</html>