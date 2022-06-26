<html>
<head>
<title>Contacts</title>
<link rel="icon" href="nt.png" type="image/png" sizes="20x20">
<link rel="stylesheet" href="all.css">
<link rel="icon" href="1.png" type="image/png" sizes="60x40">
<script src="all.js"></script>
<meta name="viewport" content="width=device-width, scale=1.0">
<style>
*{
margin:auto;
padding:0;
}
h1{
color:white;
font-size:4em;
text-align:center;
padding-top:130px;
}
nav{
padding-left:20px;
background:linear-gradient(rgba(0,32,96,.8),rgba(0,32,96,.8)), url('4.jpg');
background-size:cover;
background-position:top 30px;
}
nav button{
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
border-bottom:1px solid #fff;
}
nav img{
width:15vh;
float:left;
background:none;
}
#contacts{
width:50%;
color:rgb(32,56,100);
padding-left:20px;
text-align:left;
font-size:1.1em;
}

#send{
width:50%;
color:rgb(32,56,100);
padding-left:20px;
text-align:left;
font-size:1.1em;
}

#contacts p{
padding-top:5px;
padding-bottom:5px;
}

main{
display:flex;

}
#send form{
width:80%;
text-align:center;
}
#send input{
padding-left:5px;
width:80%;
height:5vh;
border-radius:5px;
border:2px solid rgba(32,56,100);
outline:none;
color:#777;
}

textarea{
color:#777;
padding-left:5px;
width:80%;
height:10vh;
border-radius:5px;
border:2px solid rgba(32,56,100);
outline:none;
}









@media only screen and (max-width:1000px){
main{
display:block;
}
#contacts{
width:98%;
color:rgb(32,56,100);
padding-left:0;
text-align:left;
font-size:1.4em;
}

#send{
width:98%;
color:rgb(32,56,100);
padding-left:0;
text-align:left;
font-size:1.4em;
}
#send form{
width:100%;
text-align:center;
}
#send input{
padding-left:5px;
width:80%;
height:5vh;
border-radius:5px;
border:2px solid rgba(32,56,100);
outline:none;
color:#777;
}
textarea{
color:#777;
padding-left:5px;
width:80%;
height:10vh;
border-radius:5px;
border:2px solid rgba(32,56,100);
outline:none;
}

	
}

</style>
</head>
<body>

<nav>
<img src="logo.png">
<button onclick="window.location.href='contacts.php'">Contacts</button>
<button onclick="window.location.href='services.php'">Services</button>
<button onclick="window.location.href='index.php'">Home</button>

<h1>Contacts</h1><br><br>

</nav><br><br><br>

<main>

<div id="contacts">

<p><i class="fas fa-map-marker-alt"></i> :Watoto Children's village Bbira</p>
<p><i class="fas fa-phone-alt"></i>(Airtel) :070-413-2315</p>
<p><i class="fas fa-phone-alt"></i>(MTN) :0772608331</p>
<p><i class="fas fa-envelope-open-text"></i> :solomonngabo@gmail.com</p>
<p><i class="fab fa-facebook-square"></i> :Solomon Mukasa</p>
<p><i class="fab fa-whatsapp-square"></i> :0772608331</p>
<p><i class="fab fa-youtube"></i> :Ngabo Tekyala Ceremonial Services</p>
<p><i class="fas fa-user-tie"></i> Director:Solomon Mukasa</p>

</div>

<div id="send">

<form action="contacts.php" method="POST"><br>

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

echo "<h2>Leave a message</h2><br>";
}



?>




<input type="email" name="email" placeholder="Your email" required=""><br><br>
<textarea name="message" placeholder="Your message......."></textarea><br><br>
<input type="submit" name="submit" value="Send" style="background:rgb(32,56,100); color:white; cursor:hand;"><br><br>
</form>


</div>

</main>
</body>
</html>