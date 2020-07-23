<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WELCOME</title>
</head>

<?php
// ob_start();
// session_start();
// if(!isset($_SESSION['username'])) header("location: logmasuk.php");
// include "connection.php";
?>


<h2 align="center" >Welcome to admin system</h2> 

<h4 align="center"><a href="logout.php">LogOut</a> </h4>


<body>
<!--Header section  -->
<center>
<table width="542" height="150" border="0">
  <tr>
    <td colspan="6" bgcolor="#FFFF99"><div align="center"><strong><em> Database Main Page</em></strong></div></td>
  </tr>
  <tr>
    <td colspan="5" rowspan="2"><img src="pexels-photo-15213.png" width="628" height="192" /></td>
  </tr>
  <tr></tr>
</table><br />
<table height="80" width="670">
  
<td width="614" height="74">

<center>
<form id="form1" name="form1" method="post" action="insert-page.html">
      <input type="submit" name="button" id="button" value="Insert Record" />
    </form><br />
  
  <form id="form2" name="form2" method="post" action="display-page.php">
      <input type="submit" name="button2" id="button2" value="Display Record" /></form><br />
      
  <form id="form3" name="form3" method="post" action="update-page.php">
    <input type="submit" name="button3" id="button3" value="Update Record" />
  </form><br />
</center>
</td>
</table>
  
</center>


</body>
</html>

<?php
// mysqli_close($connection);
// ob_end_flush();
?>
 <!--End -->
 
 
 
 
</body>
</html>