<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include('connection.php');

$var_ITcat =$_POST['ITcatLIST']; 
$var_ITcon=$_POST['ITconLIST']; 
$var_ITid=$_POST['txtITid']; 
$var_ITnmitem=$_POST['txtITnmitem'];
$var_ITcolor=$_POST['txtITcolor'];
$var_ITquantity=$_POST['txtITquantity'];

//insert data
$result = mysqli_query($connection, "INSERT INTO tblItem(ITcat,ITcolor,ITcon,ITid,ITnmitem,ITquantity) VALUES ('$var_ITcat','$var_ITcolor','$var_ITcon',$var_ITid,'$var_ITnmitem','$var_ITquantity')" );

//checking success or not  
if ($result){
	echo "Data recorded";
	//header ("location:insert-page.php?msg='Success'");
	}
else {
	echo "Problem occured ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<form method="post" action="insert_form.html">
<input type="submit" value="Insert Another Record">
</form>
<form method="post" action="login-page.php">
<input type="submit" value="Main Page">
</form>
</center>



</body>
</html> 