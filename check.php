<?php
	include('connect.php');
	session_start();
?>
<?php
 		$uid=$_POST['email'];
		$pwd=$_POST['pwd'];
			$sql="select *from admin_reg where mail='$uid' and pwd='$pwd'";
			$res=mysql_query($sql,$con);
			$n=mysql_num_rows($res);
			$arr=mysql_fetch_row($res);
			if($n>0)
			{
				$_SESSION['name']=$arr[0];
				header('Location:ejournal.php');	
			}
			else
			{
				$msg=md5('failed');
				header('Location:login.php?error='.$msg);
			}
	?>
	
