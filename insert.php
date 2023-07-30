<?php
$conn=mysqli_connect("localhost","root","","project");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<?php

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $num=$_POST['num'];
    $add=$_POST['add'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $sql="INSERT INTO `order`(`fname`,`lname`,`email`,`contact`,`address`,`City`,`State`,`zip`)VALUES('$fname','$lname','$email','$num','$add','$city',' $state','$zip')";N
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location:boot_form.html');
      } 
      else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  ?>