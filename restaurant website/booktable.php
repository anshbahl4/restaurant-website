<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database_name="database_123"

 $conn=mysqli_connect($server_name,$username,$password,$database_name);
 //now check the connection
 if(!$conn)
 {
	 die("Connection Failed:" . mysqli_connect_error());

 }
 if(isset($_POST['save']))
 {
	 $name=$_Post['name'];
	 $gender=$_Post['gender'];
	 $address=$_Post['address'];
	 $email=$_Post['email'];
	 $pincode=$_Post['pincode'];
	 $date=$_Post['date'];
\

	 $sql_query="INSERT INTO entry_details(name,gender,Address,email,pincode,date)
	 VALUES ('$name','$gender','$address','$email','$pincode','$date')";
   if (mysqli_query($conn, $sql_query))
   {
	   echo "New Details Entry inserted succesfully !";

   }
   else{
	   echo "Error :" . $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);
    
 }
