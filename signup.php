<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content {
	  width: 50%;
	  
	  margin: 10px auto;
	  background-color: #fff;
	  border: 2px solid #e6e6e6;
	  padding: 40px 50px;
	}
	.header {
	  border: 0px solid #000;
	  margin-bottom: 5px;
	}
	.well{
		background-color: #5BC0DE;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	input[type="checkbox"]{
		margin-top: 2px;

	}
	a{
		color: #00cb82;		
	}
    a:hover{
		text-decoration: underline;
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white;"><strong>wee social</strong></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
		        <div class="header">
		          <h3 style="text-align: center;"><strong>Join Wee social newteork</strong></h3><hr>
		        </div>
		        <div class="l-part">
		          <form  action="" method="post">
		            <div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					    <input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
					</div><br>
	            <div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					    <input id="password" type="password" class="form-control" name="u_pass" placeholder="Password" required="required">
					</div><br>
		            <div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					    <input id="email" type="email" class="form-control" name="u_email" placeholder="Email" required="required">
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="	glyphicon glyphicon-chevron-down"></i></span>
			            <select class="form-control" name="u_country" required="required">
							<option disabled>Select a Country</option>
							<option>Pakistan</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Nigeria</option>
							<option>Ghnan</option>
							<option>Egypt</option>
						</select>
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled="disabled">Select a Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div><br>
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" name="u_birthday" class="form-control input-md" required="required" >
					</div><br>
					<div class="input-group">
						<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
					    </div>

					<a style="text-decoration:none;float: right; color:#187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
					
		            <center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Sign up</button></center>
		            <?php include("insert_user.php"); ?>
		          </form>
		        </div>
	      </div>
		</div>
	</div>

<script type="text/javascript" href="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
<script type="text/javascript" href="js/bootstrap.js"></script>
</body>
</html>