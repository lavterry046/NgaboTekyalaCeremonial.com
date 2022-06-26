<html>

<head>
<title>Booked Ceremonies</title>
<link rel="icon" href="1.png" type="image/png" sizes="60x40">
<link rel="stylesheet" href="all.css">
<script src="all.js"></script>
<style>
*{
margin:auto;
}
nav{
display:flex;
color:rgb(32,64,100);
height:35vh;
background:linear-gradient(rgba(0,32,96,.8),rgba(0,32,96,.8)), url('4.jpg');
background-size:cover;
background-position:fixed;
}
nav h1{
color:white;
font-size:4em;
text-align:center;
padding-top:130px;
text-align:center;
}
nav img{
width:15vh;
float:left;
margin-top:0%;
margin-left:2%;
background:none;
}
nav button{
margin-top:0%;
margin-right:0%;
float:right;
padding:5px;
margin-right:2%;
color:white;
background:none;
border:none;
outline:none;
cursor:pointer;
tarnsition:2s;
}
nav button:hover{
border-bottom:2px solid white;
}
#table{
text-align:center;
}
th{
font-size:2em;
color:rgb(32,64,100);
padding-left:10px;
padding-right:10px;
}
td{
font-size:1.5em;
color:white;
background:rgb(32,64,100);
}
#delete{
color:red;
}
</style>
</head>
<body>
<nav><img src="logo.png"><h1>Booked Ceremonies</h1><button onclick="window.location.href='dash1.php'">Messages</button></nav><br><br>
<table id="table">
<tr id="1">
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Date</th>
<th>Time</th>
<th>Venue</th>
<th>Ceremony</th>
<th>Remove</th>
</tr>
<?php

require "c.php";

$q ="SELECT * FROM book";
$r =mysqli_query($conn,$q);

if($r){
while($row =mysqli_fetch_assoc($r)){
$id =$row['id'];
$name =$row['name'];
$email =$row['email'];
$number =$row['number'];
$date =$row['date'];
$time =$row['time'];
$venue =$row['venue'];
$select =$row['ceremony'];

?>

<tr>
<td style="text-align:center;"><?php echo "$id"; ?></td>
<td><?php echo "$name"; ?></td>
<td><?php echo "$email"; ?></td>
<td><?php echo "$number"; ?></td>
<td><?php echo "$date"; ?></td>
<td><?php echo "$time"; ?></td>
<td><?php echo "$venue"; ?></td>
<td><?php echo "$select"; ?></td>
<td style="text-align:center;"><a href="delete2.php?id=<?php echo $id;?>"><i id="delete" class="fas fa-trash-alt"></i></a></td>
</tr>


<?php
}
}else{
echo "empty";
}


?>
</table>
</body>
</html>