<?php include 'includes/header.php';?>
<form role="form" enctype="multipart/form-data" method="post" action="register.php">
						<div class="form-group">
							<label >Email address*</label> <input type="email" class="form-control" name="email"	placeholder="Email">
						</div>
						<div class="form-group">
							<label >Choose Username*</label> <input
								type="text" class="form-control" name="username" placeholder="Create a username">
						</div>
						<div class="form-group">
							<label >Password*</label> <input
								type="password" class="form-control" name="username" placeholder="Enter a password">
						</div>
							<div class="form-group">
							<label >Confirm Password*</label> <input
								type="password" class="form-control" name="username" placeholder="Enter password again">
						</div>
						
						<div class="form-group">
							<label>Upload Avatar</label> <input type="file" name="avatar">
							<p class="help-block"></p>
						</div>
						<div class="form-group">
							<label>About Me</label>
							<textarea id="about" rows="6" cols="80" class="form-control" name="about"
							placeholder="Tell us about yourself (Optional)"></textarea>
						</div>
						<input name="register" type="submit" class="btn btn-default" value="Register"/>
						
					</form>


				</div>

			</div>

		</div>
		<div class="col-md-4">
			<div id="sidebar">
				<div class="block">
					<h3>Login</h3>
					<form role="form">
						<div class="form-group">
							<label>Username</label> <input name="username" type="text"
								class="form-control" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password</label> <input name="password" type="password"
								class="form-control" placeholder="Enter Password">
						</div>

						<button name="do_login" type="submit" class="btn btn-primary">Submit</button>
						<a class="btn btn-default" href="register.html">Create Accout</a>
					</form>
<?php include 'includes/footer.php';?>