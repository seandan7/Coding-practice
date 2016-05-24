<!doctype html>
<html>
<head>
	<title>What's the Weather?</title>
	
	<meta charset="utf-8">
	<meta http-equiv="Content-type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script   src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
	<style>
		
		html, body {
			height: 100%;
			
		}
		.container {
			background-image: url("https://images.unsplash.com/photo-1460500063983-994d4c27756c?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=27c2758e7f3aa5b8b3a4a1d1f1812310");
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%;
			height: 100%;
			background-position: center;
			padding-top: 100px;
		}
		.center {
			text-align: center;
		}
		.text-shadow {
			color: black;
			background-color: #ffffff;
			opacity: 0.6;
			filter: alpha(opacity=60);
		}
		p {
			padding-top:10px;
			padding-bottom:10px
		}
		button {
			margin-bottom: 20px;
		}
		.alert {
			margin-top: 20px;
			display: none;
		}
	</style>
</head>
	
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center text-shadow">Weather hunter</h1>
				
				<p class="lead center text-shadow">Enter your city for a forecast of the weather</p>
				
				<form>
				
					<div class="form-group">
						
						<input type="text" class="form-control" name="city" id="city"
						placeholder="Ex: Lompoc, Cocoa Beach, New York"/>
						
					</div>
					
					<button id="findMyWeather" class="btn btn-success btn-lg">Find Your Weather</button>
					
				
				</form>
				<div id="success" class="alert alert-success">Success!</div>
				<div id="fail" class="alert alert-danger">Could not find data for that city. Please try again!</div>
				<div id="noCity" class="alert alert-danger">Please enter a city</div>
			</div>
			
			
			
			
			
		</div>
	</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
		$(".container").css("min-height",$(window).height());

</script>
<script>

$("#findMyWeather").click(function(evt){
	
	evt.preventDefault();
		$(".alert").hide();

	
	
	if($("#city").val()!=""){
		$.get("/weather-app/scraper.php?city="+$("#city").val(), function(data){
			
			if(data==""){
				$("#fail").fadeIn();
			} else {
					$("#success").html(data).fadeIn();
			}
			
		});
	} else{
		$("#noCity").fadeIn();
	}
	
	
	
});


</script>
</body>
</html>