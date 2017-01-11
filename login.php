<p class="headin">Login your account</p><br/>
<form role="form" action='verify_user.php' method='post' enctype="multipart/form-data" name="form1"  >
				<center><h3 align="center" class="para">
					<?php
					if(isset($_GET['con'])){
						if(isset($_GET['subcon'])=='login'){
							if(isset($_GET['msg'])){
								echo $_GET['msg'];
							}
						}
					}
					?>
					</h3>
				</center>
	<div class="row">
		<div class="col-sm-3">
		
		</div>
		<div class="col-sm-6" id="form1" style="background: url(image/main_bg.png) ;"><br/><br/>
			<div class="form-group">
				<div class="col-sm-3">
					<label for="email">User ID :</label>
				</div>
				<div class="col-sm-9">
					<input type="text" name="email" class="form-control" id="email">
				</div>
			</div><br/><br/>
			<div class="form-group">
				<div class="col-sm-3">
					<label for="pwd">Password:</label>
				</div>
				<div class="col-sm-9">
					<input type="password" name="password" class="form-control" id="password">
				</div>
			</div><br/>
			<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
			</div>
				<input type="submit" name="Submit" id="Submit" class="btn btn-danger" value="Login" />
				<a href="index.php?con=6&subcon=regd""><input type="Button" name="Submit1" id="Submit1" class="btn btn-danger" value="Sign Up" /></a>
				<p class="headin"><a href="#">Forgot your Password?</a></p><br/>
				
		</div>		
		<div class="col-sm-3">
	
		</div>
	</div> 	
</form>

