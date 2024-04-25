<?php
session_start();
$_SESSION['sesi'] = NULL;

include "config/database.php";
	if( isset($_POST['submit']))
	{
			$user	= isset($_POST['user']) ? $_POST['user'] : "";
			$pass	= isset($_POST['pass']) ? $_POST['pass'] : "";
			$qry	= mysqli_query($conn,"SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
			$sesi	= mysqli_num_rows($qry);

			if ($sesi == 1)
			{
				$data_admin	= mysqli_fetch_array($qry);
				$_SESSION['sesi'] = $data_admin['nm_admin'];
				
				echo "<script>alert('Anda berhasil Log In');</script>";
				echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi'>";
			}
			else
			{
				echo "<meta http-equiv='refresh' content='0; url=login.php'>";
				echo "<script>alert('Anda Gagal Log In');</script>";
			}
		
		
	}
	else
	{
	  include "login.php";
	}
?>
