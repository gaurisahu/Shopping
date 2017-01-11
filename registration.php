<?php

if($_REQUEST['submit'])
{
$fname=$_REQUEST['t1'];
$lname=$_REQUEST['t2'];
$gender=$_REQUEST['r1'];
$date=$_REQUEST['t9'];
$email=$_REQUEST['t3'];
$password=$_REQUEST['p1'];
$phone=$_REQUEST['t5'];
$address=$_REQUEST['t6'];
$city=$_REQUEST['t7'];
$country=$_REQUEST['t8'];

$rs=mysql_query("select email from customer where email='$email' ");
$row=mysql_fetch_array($rs);

if($row['email']!=$email)
  {
   if(mysql_query("insert into customer values('$fname','$lname','$gender','$date','$email','$password','$phone','$address','$city','$country')"))
	   {
	      
	     echo "<script>location.href='order.php?subcon=$email'</script>";
	   }
	 }
else 
{
echo "user already exists";
}

}
?>
 
<p class="headin">Register for login</p><br/>
<form role="form" method='post' enctype="multipart/form-data" name="form1" action="index.php?con=6&subcon=regd">
	<div class="row">
		<div class="col-sm-2">
		
		</div>
		<div class="col-sm-7" id="form1" style="background: url(image/main_bg.png); background-size:530px 600px; background-repeat:no-repeat;"><br/><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="name">First Name:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="t1" name="t1" onChange="return fnam()" placeholder="Enter Name">
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="lname">Last Name:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="t2" name="t2" onChange="return lnam()" placeholder="Enter Last Name">
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="gender">Gender:</label>
				</div>
				<div class="col-sm-8">
					<label class="radio-inline"><input type="radio" name="r1">Male</label>
					<label class="radio-inline"><input type="radio" name="r1">Female</label>
					
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="date">Date of birth :</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="t9" id="t9" placeholder="Enter Date of Birth">
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="email">Email:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="t3" id="t3" onChange="return email()" placeholder="Enter Email">
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="pwd">Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="p1" id="p1" onChange="return pass()" placeholder="Enter password">
				</div>
			</div><br/>			
			<div class="form-group">
				<div class="col-sm-4">
					<label for="phone">Phone No.:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="t5" id="t5" onChange="return phone()" placeholder="Enter Phone No." >
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="address">Address:</label>
				</div>
				<div class="col-sm-8">
					<textarea class="form-control" rows="3" name="t6" id="t6" value="return add()" placeholder="Enter Address"></textarea>
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="city">City:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="t7" id="t7" onChange="return city()" placeholder="Enter City">
				</div>
			</div><br/>
			<div class="form-group">
				<div class="col-sm-4">
					<label for="country">Country:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="t8" id="t8" onChange="return coun()" placeholder="Enter Country">
				</div>
			</div><br/>
			<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
			</div>
				<input type="submit" name="submit" id="submit" class="btn btn-danger" value="Create my account" /><br/><br/>
		</div>		
		<div class="col-sm-3">
	
		</div>
	</div>  
</form>

