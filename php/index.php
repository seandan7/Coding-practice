<!doctype html>
<html>
<head>
	<title>PHP GET</title>
	
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	</head>
	
<body>


<div>
<?php
	$names = array("Sean", "Fred", "Bob");
	
		if($_POST['submit']){
			
			if($_POST['name']){
				
				foreach($names as $name) {
					
					if($name == $_POST['name']){
						echo "I know you! Your name is ". $name;
						
						$knowYou = true;
					}

				}
				
				if(!$knowYou){
					echo "I don't know you,". $_POST['name'];
				}
				
			} else {
			echo "please enter your name";
		}
	}
	
	
	
?>	

	
	<form method="post">
		<label for="name">Name</label>
		<input name="name" type="text" />
		<input name="submit" type="submit" value="submit"/>
	
	</form>
		
</div>
</body>
</html>
