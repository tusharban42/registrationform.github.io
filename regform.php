<?php
$errors=array();
if(isset($_POST['submit']))
{
mysql_connect('localhost','root','');
mysql_select_db('register');       
		               $Firstname=$_POST['fname'];
					   $Lastname=$_POST['lname'];
                       $Gender=$_POST['gender'];
                       $Address=$_POST['address'];
                       $Country=$_POST['country'];
                       $Mobile_No=$_POST['phone'];
					   $Email=$_POST['email'];
					   $Password=$_POST['Password'];
                     $query=mysql_query("select * from form where Firstname='".$Firstname."'") or die(mysql_error());
             $duplicate=mysql_num_rows($query);
			 if($duplicate!=0)
   			 {
      		 array_push($errors,"The name $Firstname is already exist. You cannot register twice.");
   			 }
			 if(count($errors)==0){
	$RegId=mt_rand(10000,99999);
	$pass = md5($Password);
 $query=mysql_query("insert into form values ('$RegId','$Firstname','$Lastname', '$Gender','$Address', '$Country', '$Mobile_No','$Email','$pass')")  or die(mysql_error());
 			array_push($errors,"Application form is successfully submitted. Your registration id is $RegId. Please note down your registration id
			and use this for checking your status.");
			echo "<p align='right'><a href='check-status.php'>Click here to proceed to next step.</a></p>";
}
}
?>

<?php include 'duplicate.php' ?>
