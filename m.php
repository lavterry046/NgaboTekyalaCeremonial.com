<?php
require "c.php";

if(isset($_POST['submit'])){
$email =$_POST['email'];
$message =$_POST['message'];

$q ="INSERT INTO message(id,email,message) VALUES('','$email','$message')";
$r =mysqli_query($conn,$q);

if($r == TRUE){
echo "<h2 style='color:green;'>Message Sent</h2><br>";
}else{
echo "<h2 style='color:red;'>message not sent</h2><br>";
}

}else{
echo "<h2>Leave a message</h2><br>"
}
?>