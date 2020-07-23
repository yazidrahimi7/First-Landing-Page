<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection.php');
$ITid = $_GET['id1'];

$query = "SELECT * FROM tblItem WHERE ITid='$ITid'";
$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
$row = mysqli_fetch_array($result);

if(isset($_GET['btupdate']))
{
	
	$ITcat = $_POST['ITcat']; 
	$ITcon = $_POST['ITcon']; 
	$ITid=$_POST['ITquantity']; 
	$ITnmitem=$_POST['ITnmitem'];
	$ITcolor=$_POST['ITcolor'];
	$ITquantity=$_POST['ITquantity'];
	
	$sql = "UPDATE tblItem SET ITcat='$ITcat',ITcolor='$ITcolor',ITcon='$ITcon',ITnmitem='$ITnmitem',ITquantity='$ITquantity' WHERE ITid=$ITid";
	$result = mysqli_query($connection,$sql);
        
	
	    
       
        
        //redirectig to the display page. In our case, it is index.php 
		
if ($result == TRUE){
	header("location:update-page.php"); 
	}
else 
	echo "Problem occured ";
}

if (isset($_POST['btIndex'])) {
			header("location:login-page.php");
		}
		if (isset($_POST['btUpdate_Another'])) {
			header("location:update-page.php");
	}


?>

	
    <center>
    <p> Update</p>
    <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
 <label for="ITcat" >Category :  </label>
    <select name="ITcat">
    <option value="" disabled selected>Please Select</option>
    	<option value="all">All</option>
        <option value="atv">ATV</option>
        <option value="minicross">Mini-Cross</option>
        <option value="pocketbike">Pocket Bike</option>
        
    </select>
      <br /> <br />
      
        <label for="ITcon"> Item Condition : </label>
     <select name="ITcon" >
      <option value="" disabled selected>Please Select</option>
    	<option value="New">New</option>
        <option value="Used">Used</option>
        <option value="Secondhand">Secondhand</option>
       
    </select>
     <br /> <br />
     <!--
      <label for="ITid"value=<?php echo $row['ITid']; ?>> ID :</label>
      <input type="number" name="txtITid" id="ItemID" required> 
     <br /><br /> 
     -->
       <label for="ITnmitem" >  Item Type : </label>
      <input type="text" name="ITnmitem" value="" />
     <br /><br />
     
      <label for="ITcolor" >  Colour : </label>
      <input type="text" name="ITcolor"  value="" />
      
      <br/><br/>
       <label for="ITquantity" >  Quantity : </label>
      <input type="number" name="ITquantity"  value="" />
     
      </div>
      <br />
      <br />
      
		<input type="submit" name="btupdate" value="Update"/>
        <input type="submit" name="btUpdate_Another" value="Update Another" />
        <input type="submit" name="btIndex" value="Home Page" />
</form>
</body></center>
</html>