<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="newdb";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $subject = $_POST['subject'];
	 $message = $_POST['message'];
	 $sql_query = "INSERT INTO contact_us (name,email,subject, message)
	 VALUES ('$name','$email','$subject','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Your message has been sent. Thank you!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>