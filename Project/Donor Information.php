<?php
    $name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$birth_date="";
	$err_birth_date="";
	$gender="";
	$err_gender="";
	$blood_group="";
	$err_blood_group="";
	$last_donate="";
	$err_last_donate="";
	$problems=[];
	$err_problems="";
	
	
	$hasError=false;
	
	$array1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$array2= array("Jan","Feb","Mar","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$array3= array(1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	
	$array4= array("never",1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$array5= array("never","Jan","Feb","Mar","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$array6= array("never",1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	function problemExist($problem){
		global $problems;
		foreach($problems as $h){
			if($h == $problem) return true;
		}
		return false;
	}
	
	
	
	if(isset($_POST["confirm"])){
	    if (empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["phone"])){
			 $hasError=true;
			 $err_phone="invalid phone number";
		 }
		 else if(!is_numeric($_POST["phone"])){
			  
			  $err_phone="invalid phone number";
		 }
		  else{} 
		 
        if(empty($_POST["email"]))
		{
			$hasError=true;
			$err_email="Email needed";			

		}
		else{
			$email = $_POST["email"];
			if(strpos($email,'@')&& strpos($email,'.'))
			{
				"invalid email";
			}
			else{
				$err_email="dot missing";
			}
		}	
		 
		 
		  
		if (empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		
		else{
			$address = $_POST["address"];
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["blood_group"])){
			$hasError = true;
			$err_blood_group="blood Group Required";
		}
		else{
			$blood_group = $_POST["blood group"];
		}
	}
	
	
		
?>
<html>
 <head></head>
  <body>
    <form method="POST">
	<fieldset>
	 <table>
	 <b>Donor Information</b>
	   <tr>
	    <td>Full Name:</td>
		<td><input type='text' name='name' <?php echo $name; ?> placeholder="Full Name"</td>
		<td><span> <?php echo $err_name;?> </span></td>
	   </tr>
	   <tr>
		
       <tr>
	    <td>Phone:</td>
		<td><input type='text'  name='phone' <?php echo $phone; ?> placeholder="Number"> 
		</td>
		<td><span> <?php echo $err_phone;?> </span></td>
	   </tr>
	   
		<tr>
	    <td>Email:</td>
		<td><input type='text' name='email' <?php echo $email; ?> placeholder="Email"</td>
		<td><span> <?php echo $err_email;?> </span></td>
	   </tr>
	   
	   <tr>
	    <td>Address:</td>
		<td><input type='text' name='address' <?php echo $phone; ?> placeholder="Street Address"><br>
		<input type='text' <?php echo $phone; ?> placeholder="City"> -
		<input type='text' <?php echo $phone; ?> placeholder="State"><br>
		<input type='text' <?php echo $phone; ?> placeholder="Postal/Zip Code"></td>
		<td><span> <?php echo $err_address;?> </span></td>
	   </tr>
	   <tr>
					<td>Birth Date</td>
					<td>: <select name="Day">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array1 as $p){
								if($p == $birth_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><select name="Month">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array2 as $p){
								if($p == $birth_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td> <select name="Year">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array3 as $p){
								if($p == $birth_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					
				</tr>
	   
	   
	   <tr>
		<td>Gender:</td>
		<td> <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
		<td><span> <?php echo $err_gender;?> </span></td>
	   </tr>
	   
	   <tr>
		<td>Blood Group:</td>
		<td> <input type="radio" value="A+" <?php if($blood_group=="A+") echo "checked"; ?> name="blood_group"> A+ <br>
             <input type="radio" value="B+" <?php if($blood_group=="B+") echo "checked"; ?> name="blood_group"> B+ <br>
             <input type="radio" value="AB+" <?php if($blood_group=="AB+") echo "checked"; ?> name="blood_group"> AB+ <br>
			 <input type="radio" value="O+" <?php if($blood_group=="O+") echo "checked"; ?> name="blood_group"> O+ <br>
			 <input type="radio" value="A-" <?php if($blood_group=="A-") echo "checked"; ?> name="blood_group"> A- <br>
			 <input type="radio" value="B-" <?php if($blood_group=="B-") echo "checked"; ?> name="blood_group"> B- <br>
			 <input type="radio" value="AB-" <?php if($blood_group=="AB-") echo "checked"; ?> name="blood_group"> AB- <br>
			 <input type="radio" value="O-" <?php if($blood_group=="O-") echo "checked"; ?> name="blood_group"> O- <br></td>
		<td><span> <?php echo $err_blood_group;?> </span></td>
	   </tr>
	   
	   <tr>
					<td>Last Donate</td>
					<td>: <select name="Day">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array4 as $p){
								if($p == $last_donate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><select name="Month">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array5 as $p){
								if($p == $last_donate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td> <select name="Year">
						<option disabled selected>---Select---</option>
						<?php
							foreach($array6 as $p){
								if($p == $last_donate) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					
				</tr>
	   
	    <tr>
			<td>Do you have any physical problem ?</td>
			   <td> <input type="checkbox" name="problems[]" <?php if(problemExist("None")) echo "checked";?> value="None"> None <br>
					<input type="checkbox" name="problems[]" <?php if(problemExist("High Blood pressure")) echo "checked";?> value="High Blood pressure"> High Blood pressure<br>
					<input type="checkbox" name="problems[]" <?php if(problemExist("Low Blood pressure")) echo "checked";?> value="Low Blood pressure"> Low Blood pressure<br>
					<input type="checkbox" name="problems[]" <?php if(problemExist("High Colesterol")) echo "checked";?> value="High Colesterol"> High Colesterol
					</td>
					<td><span> <?php echo $err_problems;?> </span></td>
    
   
   
   </tr>
			
	   <tr>
		<td colspan="2" align="center"  ><input type="submit" name="confirm" value="confirm"></td>
					
	   </tr>
	 </table>
	</fieldset>
	</form>
  </body>
</html>