<?php
	$con=mysql_connect('localhost','root','')or die("Unable to connect remote server");
	mysql_select_db('library',$con) or die("Unable to connect Database");
?>
<?php
	function save($jname,$jlink)
		{
			$sql="insert into journal values('$jname','$jlink')";
			$n=mysql_query($sql);
			return $n;
		}
?>
		
		
