<?php
    $name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $confirm_password="";
	$err_confirm_password="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$birth_date="";
	$err_birth_date="";
	$gender="";
	$err_gender="";
	$hears=[];
	$err_hears="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	$array1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$array2= array("Jan","Feb","Mar","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$array3= array(1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	function hearExist($hear){
		global $hears;
		foreach($hears as $h){
			if($h == $hear) return true;
		}
		return false;
	}
	
	
	function passcheck($str)
	{
		if((strpos($str,'#')|| strpos($str,'?')) && ctype_upper($str) && ctype_lower($str)  && strlen($str)>=8)
		{
				return true;
		}
		else
		{
			return false;
		}
	}
	if(isset($_POST["register"])){
	    if (empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name = $_POST["name"];
		}
		
		if (empty($_POST["user_name"])){
			$hasError = true;
			$err_username="User Name Required";
		}
		
			else if(strlen($_POST["user_name"]) < 6 && strpos($_POST["user_name"],' ') ){
			$hasError = true;
			$err_username="User Name must contain >6character";
			
		}
		else{
			$user_name = $_POST["user_name"];
		}
		
		if(empty($_POST["password"])){
			$hasError= true;
			$err_password="password required";

		}
		else{
			$password = $_POST["password"];
			if(passcheck($password))
			{
				$err_password="";
			}
			else{
				$err_password="password must be atleast 8 digit and must contain atlest 1 special character, 1 number and combination of uppercase and lowercase ";
			}
		}	
		if(empty($_POST["confirm_password"])){
			$hasError= true;
			$err_confirm_password="password required";
		}
         else if ($_POST["confirm_password"]!=($_POST["password"]))	{
               $err_confirm_password="Password did not matched";			 
		 }
		 else {}
		 
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
		 
		 if(empty($_POST["phone"])){
			 $hasError=true;
			 $err_phone="invalid phone number";
		 }
		 else if(!is_numeric($_POST["phone"])){
			  
			  $err_phone="invalid phone number";
		 }
		  else{} 
		  
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
	}
	
	
		
?>
<html>
 <head></head>
  <body>
    <form method="POST">
	<fieldset>
	 <table>
	   <tr>
	    <td>Name:</td>
		<td><input type='text' name='name' <?php echo $name; ?></td>
		<td><span> <?php echo $err_name;?> </span></td>
	   </tr>
	   <tr>
		 <td>Username:</td>
		 <td> <input type="text" name='user_name' >  </td>
		 <td><span> <?php echo $err_username;?> </span></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td> <input type="text" name='password'  >  </td>
			<td><span> <?php echo $err_password;?> </span></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td> <input type="text" name='confirm_password' >  </td>
			<td><span> <?php echo $err_confirm_password;?> </span></td>
		</tr>
		<tr>
	    <td>Email:</td>
		<td><input type='text' name='email' <?php echo $email; ?></td>
		<td><span> <?php echo $err_email;?> </span></td>
	   </tr>
	   <tr>
	    <td>Phone:</td>
		<td><input type='text'  name='phone' <?php echo $phone; ?> placeholder="code"> -
		<input type='text' <?php echo $phone; ?> placeholder="Number"></td>
		<td><span> <?php echo $err_phone;?> </span></td>
	   </tr>
	   <tr>
	    <td>Address:</td>
		<td><input type='text' name='address' <?php echo $phone; ?> placeholder="Street Address"><br>
		<input type='text' <?php echo $phone; ?> placeholder="City"> -
		<input type='text' <?php echo $phone; ?> placeholder="State"><br>
		<input type='text' <?php echo $phone; ?> placeholder="Postal/Zip Code"></td>
		<td><span> <?php echo $err_name;?> </span></td>
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
			<td>Where did you hear about us?</td>
			   <td> <input type="checkbox" name="hears[]" <?php if(hearExist("A Friend or Colleague")) echo "checked";?> value="A Friend or Colleague"> A Friend or Colleague 
					<input type="checkbox" name="hears[]" <?php if(hearExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="hears[]" <?php if(hearExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post<br>
					<input type="checkbox" name="hears[]" <?php if(hearExist("News Articles")) echo "checked";?> value="News Articles"> News Articles
					</td>
					<td><span> <?php echo $err_hears;?> </span></td>
    
   
   
   </tr>
			
	   
	   <tr>
		<td>Bio:</td>
		<td><textarea name="bio"  ><?php echo $bio; ?></textarea>
		<td><span> <?php echo $err_bio;?> </span></td>
		</td>
	   </tr>
	   <tr>
		<td colspan="2" align="center"  ><input type="submit" name="register" value="register"></td>
					
	   </tr>
	 </table>
	</fieldset>
	</form>
  </body>
</html>