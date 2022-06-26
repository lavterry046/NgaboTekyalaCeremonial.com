<html>
<head>
<title>Videos</title>
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
main{
text-align:center;
}
#s{
width:20%;
background:black;
border:none;
outline:none;
margin-left:5%;
cursor:hand;
transition:.5s;
position: relative;
}
#s:hover{
box-shadow:0px 0px 5px #111;
transform:scale(1.1);
}

#s img{
background:black;
width:99%;
height:35vh;
border-radius:5px;
opacity:20%;
}
#s header{
color:rgb(32,56,100);
font-size:1.3em;
padding-top:5px;
padding-bottom:5px;
}

#s p{
color:#555;
padding-top:5px;
padding-bottom:5px;
}

#play{
position: absolute;
top: 25%;
left: 25%;
padding: 12px 24px;
font-size:7em;
cursor: pointer;
border-radius: 5px;
text-align: center;
}
#tube{
color:red;
border:none;
outline:none;
background:none;
box-shadow:0px 0px 5px black;
border-radius:15px;
font-size:3em;
position:relative;
cursor:hand;
transition:.3s;
}
#tube:hover{
transform:scale(1.1);
}







@media only screen and (max-width:1000px){
#s{
margin-top:3%;
width:95%;
}
	
}

</style>
</head>
<body>

<nav>
<img src="logo.png">
<a href="contacts.php"><button>Contacts</button></a>
<a href="services.php"><button>Services</button></a>
<a href="index.php"><button>Home</button></a>

<h1>Videos</h1><br><br>

</nav><br><br><br>

<main>

<button onclick="window.location.href='https://www.youtube.com/channel/UCyycy_luAP_AQMpSDmXbgKA'" id="tube"><i class="fab fa-youtube"></i></button><br><br>



<div id="send">

<button onclick="window.location.href='1.mp4'" id="s">




<img src="5.jpg" width="" height="">

<p id="play" onclick="document.getElementById('play').style.cursor='load'"><i style="color:white;"  class="fas fa-play-circle"></i></p>

<header>Ceremonial Dance

</header>

</button>

<button onclick="window.location.href='2.mp4'" id="s">



<img src="6.jpg" width="" height="">

<p id="play" onclick="document.getElementById('play').style.cursor='load'"><i style="color:white;" class="fas fa-play-circle"></i></p>


<header>Wonderful

</header>

</button>
	
<button  onclick="window.location.href='3.mp4'" id="s">


<img src="7.jpg" width="" height="">

<p id="play" onclick="document.getElementById('play').style.cursor='load'"><i style="color:white;" class="fas fa-play-circle"></i></p>

<header>Best in Ceremony

</header>

</button>



</div>

</main>
</body>
</html>