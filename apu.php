<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Simple Calculator Using PHP By Apu Fouzder!">
	<title>Simple Calculator Using PHP!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<div class="container">

	<p class="content">
		Simple Calculator<br>Using PHP.
	</p>
<div>
	
	<form action="apu.php" method="post">

		<input type="number" name="num1" value="" placeholder="Enter number..">
		<input type="number" name="num2" value="" placeholder="Enter number..">

		<select name="options">
			<option value="add">ADD (+)</option>
			<option value="sub">SUB (-)</option>
			<option value="mul">MULTI (*)</option>
			<option value="div">DIVi (/)</option>
			<option value="mod">MOD (%)</option>
		</select>

		<input type="submit" name="submit" value="Calculate">

	</form>
</div>

	<p> Result: 
		<?php 

			if(isset($_POST['submit'])){
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				$options = $_POST['options'];

				if($num1 < 0 && $num2 < 0)
				{
					echo "Negative Number";
				}
				else
				{
					switch ($options) {
						case 'add':
							echo $num1 + $num2;
							break;
						case 'sub':
							echo $num1 - $num2;
							break;
						case 'mul':
							echo $num1 * $num2;
							break;
						case 'div':
							echo $num1 / $num2;
							break;
						case 'mod':
							echo $num1 % $num2;
							break;
						
						default:
							echo "Invalid Answer!";
							break;
					}
				}

			}

		 ?>
	</p>

</div>

</body>
</html>