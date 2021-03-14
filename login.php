<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
	</head>
	<body>
		<div class="container" >
				<div class="row" >
					<div class="col">
						<h2>Login form</h2>
						<form action="validation.php" method="post">
							<div class="formgroup">
								<label>username</label>
								<input type="text" name="user" class="formcontrol" />
							</div>
							<div class="formgroup">
								<label>password</label>
								<input type="password" name="password" class="formcontrol" />
							</div>
							<center>
								<button class="btn" type="submit">
									Login
								</button>
							</center>
						</form>
					</div>
					<div class="col">
						<h2>Sign in form</h2>
						<form action="registration.php" method="post">
							<div class="formgroup">
								<label>username</label>
								<input type="text" name="user" class="formcontrol" />
							</div>
							<div class="formgroup">
								<label>password</label>
								<input type="password" name="password" class="formcontrol" />
							</div>
							<center>
								<button class="btn" type="submit">
									Sign in
								</button>
							</center>
						</form>
					</div>
				</div>
		</div>
		
	</body>
</html>