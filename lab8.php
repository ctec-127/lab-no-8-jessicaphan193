<!DOCTYPE html>
<html lang="">
<head>
	<title>Temperature Converter</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	<!-- add link to jquery -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- add link to bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Need Help?</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

			<li class="nav-item">
				<a class="nav-link" href="https://getbootstrap.com/">Bootstrap</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="https://www.w3schools.com/">W3Schools</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="https://www.youtube.com/">YouTube</a>
			</li>
        </ul>
    </div>
</nav>

<?php require "inc/functions.inc.php";?>


<div id="wrapper">
	<div class="jumbotron">
		<h1 class="display-md-4 row justify-content-center text-primary">Temperature Converter</h1>
		<hr class="my-3">
			<p class="lead font-italic text-center">Feel free to use the converter to convert your desire temperatures.</p>
</div><!-- end jumbotron div-->

<div class="container-fluid border border-info">
	<form class="p-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="section">
			<label for="temp" class="font-weight-bold">Temperature</label>

				<div class="form-row">
					<div class="col">
						<input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
					</div>

					<div class="col">
						<select name="originalunit">
							<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
							<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
							<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
							<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
						</select>
					</div>
				</div>
		
		</div>		

		<div class="section">
			<label for="convertedtemp" class="font-weight-bold">Converted Temperature</label>
				<input type="text" class="form-control" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
					<select name="conversionunit">
						<option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
						<option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
						<option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
						<option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
					</select>
		</div>

		<input class="btn btn-outline-info" type="submit" value="Convert"/>   
	</form>
</div><!-- end container-fluid div-->
</div><!-- end wrapper div-->
</div><!-- end container div-->

<div class="container my-3 ">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="header text-white bg-dark ">
						<h4 class="font-weight-bold">Formulas</h4>
					</div>
					<div class="card-body bg-light">
						<h3 class="card-title font-weight-bolder">Conversion Formulas</h3>
						<h5 class="card-title text-primary my-1">Celsius to Fahrenheit:</h5>
						<p class="card-text">Fahrenheit = (C * 9/5) + 32</p>
						<h5 class="card-title text-primary my-1">Fahrenheit to Kelvin:</h5>
						<p class="card-text">Kelvin = (F - 32) * 5/9 + 273.15</p>
						<h5 class="card-title text-primary my-1">Kelvin to Fahrenheit:</h5>
						<p class="card-text">Fahenheit = (K - 273.15) * 9/5 + 32</p>
						<h5 class="card-title text-primary my-1">Fahrenheit to Celsius</h5>
						<p class="card-text">Celcsius = (F - 32) * 5/9</p>
						<h5 class="card-title text-primary my-1">Celsius to Kelvin</h5>
						<p class="card-text">Kelvin = C + 273.15</p>
						<h5 class="card-title text-primary my-1">Kelvin to Celsius</h5>
						<p class="card-text">Celsius = K - 273.15</p>
					</div>
				</div>
			</div><!-- end col-6 div-->

			<div class="col-md-6">
				<div class="card">
					<div class="header text-white bg-dark">
						<h4 class="font-weight-bold">Facts</h4>
					</div>
					<div class="card-body bg-light">
						<ul style="font-size:18px">
 	 						<li class="font-italic">Heat is transferred from a substance at a higher temperature to one at a lower temperature by conduction, convection, or radiation.</li>
 							<li class="font-italic">Silver melts at 962 degrees Celsius and boils at 2,210 degrees Celsius<br> Gold melts at 1,064 degrees Celsius and boils at 2,900 degrees Celsius.</li>
							<li class="font-italic">A very notable fact is that Fahrenheit and Celsius are equal at -40 degrees.</li>
						</ul>  
					</div>
				</div>
			</div>
		</div>
</div><!-- end container div-->






</body>
</html>