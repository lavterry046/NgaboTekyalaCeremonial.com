<?php

require "c.php";

if(isset($_GET['id'])){
$id =$_GET['id'];

$q ="DELETE FROM message WHERE id ='$id'";
$r =mysqli_query($conn,$q);

if($r){
header("location:dash1.php#delete");
}else{
echo "<h2 style='color:red;'>!!Failed to Delete!!</h2>";
}

}

?>