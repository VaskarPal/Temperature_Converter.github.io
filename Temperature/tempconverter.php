<!DOCTYPE html>
<html>
<head>
	<title>Temp Converter</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		
		}

		h1{ text-align: center; line-height: 20vh; color: #5352ed; }
		.main-div{
			width: 100%;
			height: 80vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}

		.left-side{
          background-color: #f1f2f6;
          border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
		}

		.left-side img{
			max-width: 400px;
			height: auto;
		}

		.right-side{
			width: 400px;
			height: 300px;
			background-color: #9AECDB;
			border-radius: 15px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			text-align: center;
		}

		.input1{
			width: 250px;
			height: 40px;
			padding: 5px;
			outline: none;
			border-radius: 1px solid grey;
			border-radius: 5px;
		}

		.selection{
			width: 100%;
			margin: 20px 0;

		}
		.btn{
			padding: 10px 16px;
			border: 5px;
			outline: none;
			background-color: #6c63ff;
			color: white;
			font-size: 0.9rem;

		}
		.btn:hover{
			background-color: #FC427B;
			color: black;
		}
		p{
			margin: 20px 0 0 0;
		}
	</style>
</head>
<body>

<header>
	<h1>Temperature Conversion</h1>
	<div class="main-div">
		<div class="left-side">
			<img src="photo/tem.png" alt="tem.png">
		</div>

		<div class="right-side">
			<form method="POST">
				<input type="text" name="num" placeholder="Enter your number" class="input1">

				<div class="selection">
					<label>Celc</label>
					<input type="radio" name="units" value="cel">

					<label>faren</label>
					<input type="radio" name="units" value="feh">
				</div>

				<input type="submit" name="submit" value="convert now" class="btn">
			</form>

			<div>
				<p>
					
					<?php

					if (isset($_POST['submit'])){
					$num = $_POST['num'];
					$temp = $_POST['units'];

					if ($temp == "cel"){
					$result = $num * 9/5 + 32;
					echo "The Conversion value of cel in faren is " . $result;
				}
				else{
                      $result = ($num - 32) * 5/9; 
                      echo "The Conversion value of faren in cel is " . $result;
			       }
				}

					?>
				</p>
			</div>
		</div>
	</div>
</header>

</body>
</html>