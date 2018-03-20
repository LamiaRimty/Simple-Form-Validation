<?php

?>

<DOCTYPE html>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	

	<form>
		<p>
		<label>First Name</label>
		<input type="text" name="firstName"  id="firstName"/>

		</p>

		 <p>
		<label>Last Name</label>
  		<input type="text" name="lastName"  id="lastName"/>
		
		</p>

		<p>
		<label>Email</label>
		<input type="text" name="email"  id="email"/>
		</p>

<div class="well"> 
      <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
    </div>
</div>

<div class="well"> 
</div>


		<p>
		<label>Passsword</label>
		<input type="text" name="password"  id="password"/>
		
		<input type="submit" name="Submit">
	</p>

<input id="numb">

<button type="button" onclick="myFunction()">Submit</button>

<p id="demo"></p>

<script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 10) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>


	</form>
	</body>
	</html>