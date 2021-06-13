<html>
<head></head>
<body>
Grade:
<?php $Marks = 75;
	
	if($Marks === 90){
		echo "<br> A+";
	}
	else if($Marks > 90){
		echo "<br> A";
	} 
	else if($Marks > 80){
		echo "<br> B";
	}
	else if($Marks > 70){
		echo "<br> C";
	}
	else {
		echo "<br> F";
	}
	?>
</body>
</html>