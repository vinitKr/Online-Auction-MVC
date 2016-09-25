<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".bs-example1-modal-lg">
	Login/Signup
</button>
<div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg">
		<div style="background-image: url('productimages/us.jpg');" class="modal-content">
			<div class="container">
				<div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-info" >
						<div class="panel-heading">
							<div class="panel-title">
								Sign In
							</div>
							<div style="float:right; font-size: 100%; position: relative; top:-10px">
								User
							</div>
						</div>
						<div style="padding-top:30px" class="panel-body" >

							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form id="loginform" method="post" action="user.php" class="form-horizontal" role="form">

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" required name="user" type="text" class="form-control" name="user" value="" placeholder="username or email">
							</div>

							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" required name="password" type="password" class="form-control" name="password" placeholder="password">
							</div>

							<div style="margin-top:10px" class="form-group">
								<!-- Button -->
								<div class="col-md-offset-3 col-md-9">
									<input name="signin"  class="btn btn-info" value="Login" type="submit" />

								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										Don't have an account!
										<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Sign Up Here </a>
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
			<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							Sign Up
						</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px">
							<a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
						</div>
					</div>
					<div class="panel-body" >
						<form id="signupform" class="form-horizontal" role="form" method="post" action="user.php">

							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Username:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="email" placeholder="username">
								</div>
							</div>

							<div class="form-group">
								<label for="firstname" class="col-md-3 control-label">First Name:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="firstname" placeholder="First Name">
								</div>
							</div>
							<div class="form-group">
								<label for="lastname" class="col-md-3 control-label">Last Name:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" name="lastname" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<label for="number" class="col-md-3 control-label">Mobile:</label>
								<div class="col-md-9">
									<input type="text" required class="form-control" maxlength="10" name="number" placeholder="Mobile Number" onkeypress="return isNaN">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password:</label>
								<div class="col-md-9">
									<input type="password" required class="form-control" name="passwd" placeholder="Password">
								</div>
							</div>

							<div class="form-group">
								<!-- Button -->
								<div class="col-md-offset-3 col-md-9">
									<input id="btn-signup" type="submit" name="signup" value="SignUp" class="btn btn-info" />

								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>