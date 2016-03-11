<html>
<head>
	<meta charset="utf-8">
	<title>Acount recovery</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"> </script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container col-lg-4">
		 <form action="" method="post">
		  	<h1>Account recovery</h1>
		  	<p>Pease input username</p>
		  	<p><?php echo $error; ?></p>
		  	<div>
		  	    <label for="email">USER</label>
			    <input type="email" placeholder="Email" class="form-control" id="email" name="email" />
			</div>
			
			<div>
			    <input type="submit" name="submit" value="SEND" class="btn btn-default"/><br>
			    <a href="recov.php">Forgot password?</a>
			</div>
			<div>
			    <a href="register.php">Register</a>
			</div>
			<div>
			    <a href="index.php">Login</a>
			</div>
		</form>
	</div>
</body>
</html>
