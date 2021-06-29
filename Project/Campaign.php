<?php
    $name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$email="";
	$err_email="";
	$address="";
	$err_address="";
	$start_date="";
	$err_start_date="";
	$end="";
	$err_end="";
	$time="";
	$err_time="";
	
	
	
	$hasError=false;
	
	
	
	
	$array1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$array2= array("Jan","Feb","Mar","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$array3= array(1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005);
	
	
	
	
	
	if(isset($_POST["submit"])){
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
		
		if (empty($_POST["start_date"])){
			$hasError = true;
			$err_start_date="";
		}
		
		else{
			$start_date = $_POST["start_date"];
		}
		
		if (empty($_POST["end"])){
			$hasError = true;
			$err_end="";
		}
		
		else{
			$end = $_POST["end"];
		}
		
		if (empty($_POST["time"])){
			$hasError = true;
			$err_time="";
		}
		
		else{
			$time = $_POST["time"];
		}
		
	
	
	}
	
	
		
?>
<html>
 <head></head>
  <body>
    <form method="POST">
	<fieldset>
	 <table>
	 <b>Campaign</b>
	   <tr>
	    <td>Campaign Name:</td>
		<td><input type='text' name='name' <?php echo $name; ?> placeholder="Campaign Name" </td>
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
		<td><textarea name='address' <?php echo $phone; ?> placeholder=" Address"> </textarea> </td>
		
		<td><span> <?php echo $err_address;?> </span></td>
	   </tr>
	  
	 
	   
	   <tr>
					<td>Star Date</td>
					<td> <select name="Day">
						<option disabled selected>DD</option>
						<?php
							foreach($array1 as $p){
								if($p == $start_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td><select name="Month">
						<option disabled selected>MM</option>
						<?php
							foreach($array2 as $p){
								if($p == $start_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					<td> <select name="Year">
						<option disabled selected>YYYY</option>
						<?php
							foreach($array3 as $p){
								if($p == $start_date) 
									echo "<option selected>$p</option>";
								else
									echo "<option>$p</option>";
							}
						?>
						</select>
					</td>
					
				</tr>
	   
	   <tr>
	    <td>Time:</td>
		<td><input type='text' name='Time' <?php echo $time; ?> placeholder="HH:MM AM/PM" </td>
		<td><span> <?php echo $err_time;?> </span></td>
	   </tr>
		
	   <tr>
	    <td>End :</td>
		<td><input type='text' name='End_date' <?php echo $end; ?> placeholder="End Time" </td>
		<td><span> <?php echo $err_end;?> </span></td>
	   </tr>
	   
	   
	   
	   
	   
	   
	   
	    
			
	   <tr>
		<td colspan="2" align="center"  ><input type="submit" name="submit" value="submit"></td>
					
	   </tr>
	 </table>
	</fieldset>
	</form>
  </body>
</html>