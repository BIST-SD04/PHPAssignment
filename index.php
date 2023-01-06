<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
		<div class="title">
	<h1>REGISTRATION FORM</h1>
	</div>
	<?php include 'Classes.php'; ?>
	<div class="form"></div>
	<form align="center" method="post">
		<div class="input_field">
			<label>Name:</label>
            <input type="text" name="pName" required><br><br>
		</div>
      
      <div class="input_field">
      	<label>Address:</label>
      	<input type="text" name="pAddress" ><br><br>
      </div>
       
      <div class="input_field">
      	<label>Phone Number:</label>
      <input type="number" name="pNumber" ><br><br>
      </div>
       
      <div class="input_field">
      	<label>Email Address:</label>
        <input type="text" name="pEmail" ><br><br>
      </div>
       
      <div class="label">For Employee users only<br><br></div>
      
      <div class="input_field">
      	<label>Office:</label>
      	<input type="text" name="Office" ><br><br>
      </div>
       
      <div class="input_field">
      	<label>Salary:</label>
      	<input type="number" name="salary" ><br><br>
      </div>
       
      <div class="input_field">
      	<label>Date-hired:</label>
      	<input type="date" name="date" ><br><br>
      </div>
       
      <div class="label">For employee staff users<br><br></div>
      
      <div class="input_field">
      	<label>Title:</label>
      	 <input type="text" name="title" ><br><br>
      </div>
      
     <div class="label">For faculty members<br><br></div>
      
      <div class="input_field">
      	<label>Office Hours:</label>
      	<input type="text" name="oHours" ><br><br>
      </div>
       
      <div class="input_field">
      	<label>Rank:</label>
      	 <input type="number" name="rank" ><br><br>
      </div>
      
      <div class="submit">
      	<input type="submit" onclick="getName()"><br><br>
      </div>

		
	</form>
	</div>
	</div>

<?php 
	
	$name = $_POST["pName"];
	$address = $_POST["pAddress"];
	$phoneNumber = $_POST["pNumber"];
	$emailAddress = $_POST["pEmail"];
	$office = $_POST["Office"];
	$salary = $_POST["salary"];
	$dateHired = $_POST["date"];
	$title = $_POST["title"];
	$officeHours = $_POST["oHours"];
	$rank = $_POST["rank"];




	$details = array(
	"name" => $name,
	"address" => $address,
	"phoneNumber" => $phoneNumber,
	"emailAddress" => $emailAddress,
	"office" => $office,
	"salary" => $salary,
	"dateHired" => $dateHired,
	"title" => $title,
	"officeHours" => $officeHours,
	"rank" => $rank
	);

	 
	
	?>

	<div class="jsonE">
		<?php 
			$encoded = json_encode($details, JSON_PRETTY_PRINT);

	 		echo $encoded.PHP_EOL;
	 	?>
	</div>
</body>
</html>