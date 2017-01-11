<?php
include ('database.php');
$email=$_POST['email'];
$password=$_POST['password'];
//echo "<pre>"; print_r($uname."++".$pass); echo "<pre>"; exit;
if($_POST['email'] == '' && $_POST['password']==''){
	header("Location:index.php?con=6&subcon=login&msg=Enter Email ID & Password");
}else{
	$qry=mysql_query("SELECT * FROM customer WHERE email='$email'");
	if(!$qry){
		die("Query Failed: ". mysql_error());
	}else{
		$row=mysql_fetch_array($qry);
		//echo $row["user"]." ".$row["password"]."<br/>";

		if($_POST['email']==$row["email"] && $_POST['password']==$row["password"] && $_POST['email'] != '' && $_POST['password']!=''){
			session_start();
			$_SESSION['name']=$_POST['email'];
			$email=$_POST['email'];
			header("Location:order.php?subcon=$email");
		}else{
			header("Location:index.php?con=6&subcon=login&msg=Enter correct Email ID & Password");
		}
	}
}
?>