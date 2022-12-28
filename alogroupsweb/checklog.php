<?php
session_start();
if(isset($_POST["log"]) && isset($_POST["pwd"]))
{

    require('database/db.php');
	
	$username = $_POST["log"];
   
	$password = $_POST["pwd"];
	$msg = '';
	
	$rs=mysqli_query($conn,"SELECT id,username,usertype,email FROM login WHERE email='" . mysqli_real_escape_string($conn,$username) . 
						"' and password='" . mysqli_real_escape_string($conn,$password) . "' LIMIT 1");
	if(mysqli_num_rows($rs) > 0)
	{
		if($rd=mysqli_fetch_array($rs,MYSQLI_NUM))
		{
			$_SESSION['email'] =$rd[4];
			$_SESSION['admin'] = $rd[1];
            $_SESSION['usertype'] = $rd[2];
			$_SESSION['timeout'] = time();
			$_SESSION['id'] = $rd[0];
			header("Location: index.php");
		}
		else
		{
			header("Location: login.php?failure=true");
		}
	}
	else
	{
		header("Location: login.php?failure=true");
	}
		
}
else
{
	header("Location: login.php?failure=true");
	
}
