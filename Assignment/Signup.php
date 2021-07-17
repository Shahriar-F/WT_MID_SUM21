<?php include 'main_header.php'; 
<?php include 'controllers/UserController.php';
?>
  $name="";
  $err_name="";
  $uname="";
  $err_uname="";
  $email="";
  $err_email="";
  $password="";
  $err_password="";
  
  $hasError=false;
  
  if(isset($_POST["sign_up"])){
	  if (empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name = $_POST["name"];
		}
		if (empty($_POST["uname"])){
			$hasError = true;
			$err_uname="User Name Required";
		}
		
		else{
			$uname = $_POST["uname"];
		}
		if (empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		
		else{
			$email = $_POST["email"];
		}
		if (empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password = $_POST["password"];
		}
  }
  
  
?>

<!--sign up starts -->
<div class="center-login:>
  <h1 class="text text-center">Sign Up</h1>
  <form action="" method="post" class="form-horizontal form-material">
   <div class='form-group">
      <h4 class="text">Name</h4>
	  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
	  <span class="text-danger"><?php echo $err_name; ?> </span>
	</div>
	<div class="form-group">
	     <h4 class="text">Username</h4>
		 <input type="text" name="uname" value="<?php echo $uname; ?>" class="form-control">
		 <span class="text-danger"><?php echo $err_uname; ?></span>
	</div>
	<div class="form-group">
	     <h4 class="text">Email</h4>
		 <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
		 <span class="text-danger"><?php echo $err_email; ?> </span>
	</div>
	<div class="form-group">
	     <h4 class="text">Password</h4>
		 <input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
		 <span class="text-danger"><?php echo $err_password; ?> </span>
	</div>
	<div class="form-group text-center">
	
	    <input type="submit" class="btn btm-success" value="Sign Up" class="form-control">
     </div>
  </form>
</div>  

<!--sign up ends -->
<?php include 'main_footer.php';?>