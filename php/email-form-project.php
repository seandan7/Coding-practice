<?php
		
		if($_POST['submit']){
			
			
			if(!$_POST['name']){
				$error="<br />Please enter your name";
			}
			
			if(!$_POST['email']){
				$error.="<br />Please enter an email address";
			}
			if(!$_POST['comment']){
				$error.="<br />Please enter a comment";
			}
			
			if($_POST['email']="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$error.= "<br />Please enter a valid email address";
			} 
			
			
			
			if($error){
				
			$result="There was an issue:".$error;
			
		} else {
			if( mail("uscandgiantsfan@aol.com", "Comment from website","Name: ".$_POST['name'].	
			"Email: ".$_POST['email'].
			"Comment: ".$_POST['comment'])){
				$result = "Email has been sent!";
			} else {
				
					$result="Sorry there was a problem";
			}
			
		}
	}
		
?>
<!doctype html>
<html>
<head>
	<title>PHP GET</title>
	
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<style>
		.emailForm {
			border: 1px solid gray;
			border-radius: 10px;
			margin-top: 20px;
		}
		textarea {
			height: 100px;
		}
		form {
			padding-bottom: 20px;
			
		}
	</style>
</head>
	
<body>



<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 emailForm">
			<h1>Want an e-mail?</h1>
			<?php 
				echo $result;
			?>
			
			<p class="lead">Please e-mail me with any questions or comments</p>
			<form method="post">
				
				<div class="form-group">
				
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control" placeholder="Your name"/>
					
				
				</div>
				
				<div class="form-group">
				
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" placeholder="Your Email"/>
					
				
				</div>
				<div class="form-group">
				
					<label for="comment">Comments:</label>
					<input name="comment" class="form-control"/>
					
				
				</div>
				<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit"/>
			
			</form>
		</div>
	</div>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>