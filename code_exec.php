<?php 
include('connection.php');
 ?>


<?php

	if (isset($_POST['send'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	
	mysql_query("insert into contact (name,email,message) values('$name','$email','$message')")or die(mysql_error());
				?>
				
				<script>
alert('Succsessfully Save');
window.location = "index.php";
</script>
<?php
}?>
