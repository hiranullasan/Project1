<!DOCTYPE html>
	<head>
		<body>
			<?php
			$nerr=$aerr=$eerr=" ";
			if($_SERVER['REQUEST_METHOD']=="POST"){
				if (empty($_POST["name"])) {
    				$nerr = "Name is required";
    			}
    		 	if (empty($_POST["email"])) {
   			 		 $eerr = "Email is required";
  				 }
  				 if (empty($_POST["age"])) {
   			 		 $aerr = "Age is required";
  			 }

			}

		?>

			<form method ="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
				Name  :<input type= "text" name = "name">*<?php echo $nerr;?><br><br>
				Age   :<input type= "text" name = "age">
				<span class="error">* <?php echo $aerr;?></span><br><br>
				Gender:<input type="radio" name="gender" value="male" checked> Male<input type="radio" name="gender" value="female"> Female<br><br>
				email :<input type= "text" name = "email">
				<span class="error">* <?php echo $eerr;?></span><br><br>
			    Batch:<select>
        				<option value="2017">2017</option>
        				<option value="2018">2018</option>
       					<option value="2019">2019</option>
    				</select><br><br><br><br>
				<input type = "submit" value ="register">
				<input type="reset">
			
		</body>
	</head>