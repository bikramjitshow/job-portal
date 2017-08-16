<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
	$con = mysql_connect("localhost","root");
	mysql_select_db("job", $con);
	$sql = "select * from user_master where UserName='".$UserName."' and Password='".$Password."'";
	$result = mysql_query($sql,$con);
	$records = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
		$_SESSION['ID']=$row['UserId'];
		$_SESSION['Name']=$row['UserName'];
		header("Location:Admin/index.php");
	} 
	mysql_close($con);
}
else if($UserType=="JobSeeker")
{
	$con = mysql_connect("localhost","root");
	mysql_select_db("job", $con);
	$sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
	$result = mysql_query($sql,$con);
	$records = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
		$_SESSION['ID']=$row['JobSeekId'];
		$_SESSION['Name']=$row['JobSeekerName'];
		header("Location:JobSeeker/index.php");
	} 
	mysql_close($con);
}
else
{
	$con = mysql_connect("localhost","root");
	mysql_select_db("job", $con);
	$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."' and Status='Confirm'";
	$result = mysql_query($sql,$con);
	$records = mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	if ($records==0)
	{
		echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
	}
	else
	{
	$_SESSION['ID']=$row['EmployerId'];
	$_SESSION['Name']=$row['CompanyName'];
	header("location:Employer/index.php");
	} 
	mysql_close($con);
}
?>