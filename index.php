<?php

?>

<DOCTYPE html>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Form Validation With PHP</title>

<style>


		
			
.form-validation{
	width: 450px;
	margin: 0 auto;
	background: #ddd;
	padding: 20px 50px;
	box-sizing: border-box;

}

.label{

	float: left;
	width: 100%;
	font-size: left;
	width: 100%;
	font-size: bold;
	padding-bottom: 10px;

}

.text{

}



.error{
	color: #cc0000;
	padding-top: 5px;
	float: left;
	width: 100%;
}




		</style>



	</head>
	<body>
		
	
<div class="form-validation">
	<h2>Create Student Account</h2>

<form action="" method="post" enctype="mutipart/form/data">
	<table>
		<tr class="row">
			<td class="label"><label for="name">Name</label></td>

			<td ><input  class="text" type="text"  id="name " name="name" placeholder="Name">   </td>
		</tr>

		<tr class="row">
			<td class="label"><label for="fathername">Father's Name</label></td>

			<td ><input  class="text" type="text"  id="fathername" name="fathername" placeholder="Father's Name">   </td>
		</tr>


<tr class="row">
			<td class="label"><label for="roll">Roll No</label></td>

			<td ><input  class="text" type="text"  id="roll " name="roll" placeholder="Roll ">   </td>
		</tr>

		<tr class="row">
			<td class="label"><label for="reg">Registation</label></td>

			<td ><input  class="text" type="text"  id="reg " name="reg" placeholder="Registation ">   </td>
		</tr>



		

	</table>
	
</form>

</div>
	
		


	
	</body>
	</html>