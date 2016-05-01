<?php
session_start();
	if(!isset($_SESSION['name']))
		header('Location:login.php');
	$n=-1;
	if(isset($_GET['result']))
	$n=$_GET['result'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
	   <link href="css/style.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
body {
	background-color: #999999;
}
.style3 {color: #000099}
.style4 {color: #FF0000; }
-->
</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar -static-top" role="navigation">
     <div class="container-fluid">
        <a class="navbar-brand navbar-right" href="logout.php">Log Out</a></nav>
        <form id="form1" name="form1" method="post" action="save_journal.php">
  <table width="685" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
    <tr>
      <td colspan="3" bgcolor="#FF0000"><div align="center" class="style1">
          <h3 class="style2">Add Journal </h3>
      </div></td>
    </tr>
    <tr>
      <td width="220" height="41" bgcolor="#FFFFFF"><div align="center"><strong>Journal Name </strong></div></td>
      <td width="27" bgcolor="#FFFFFF">:</td>
      <td width="416" bgcolor="#FFFFFF"><label>
        <div align="center">
          <input name="jname" type="text" id="jname" size="50" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td height="52" bgcolor="#FFFFFF"><div align="center"><strong>Journal Link </strong></div></td>
      <td bgcolor="#FFFFFF">:</td>
      <td bgcolor="#FFFFFF"><label>
        <div align="center">
          <input name="jlink" type="text" id="jlink" size="50" />
        </div>
      </label></td>
    </tr>
    <tr>
      <td height="36" colspan="3" bgcolor="#FFFFFF" text-align="center"><label>
        <div align="center">
          <input type="reset" name="Submit2" value="Reset" />
          <input type="submit" name="Submit" value="Submit" />
        </div>
      </label></td>
    </tr>
  </table>
   <?php
		if(isset($_GET['result']))
		{

		 ?>
  <h2 align="center" class="style3">Successfully Added....</h2>
	  <?php
		  }
		 ?>
 
</form>
</body>
</html>
