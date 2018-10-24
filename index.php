<!DOCTYPE html>
<html>
<head>
	<title>The Skating</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}

body{
	font-size: 20px;
	overflow-x: hidden;
	color: white;
	font-family: 'Flamenco', cursive;
}

header{
	
	
}

.clearfix:after{
	content: ".";
	visibility: hidden;
	display: block;
	height: 0px;
	clear: both;
}

.row{
	max-width: 1180px;
	margin: 0 auto;
}

.logo{
	height: 120px;
	width: auto;
	float: left;
	margin-top: 20px;
}

.main-nav{
	float: right;
	margin-top: 60px;
}

.main-nav li{
	display: inline-block;
	list-style: none;
	margin-left: 40px;
}

.main-nav li a{
	padding: 5px 0;
	color: #fff;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 90%; 
	font-weight: 100;
}

.main-nav li a:hover{
	border-bottom: 2px solid #bf55ec;
}


.main-content-header{
	width: 1180px;
	padding:0 2%;
	position: absolute;
	/*border: 1px solid red;*/
	top: 55%;
	left: 50%;
	transform: translate(-50%, -50%);

}

h1{
	color: #fff;
	font-size: 240%;  
	word-spacing: 5px;
	letter-spacing: 3px;
	margin-bottom: 20px;
	text-transform: uppercase;
	font-weight: lighter;
}

.btn{
	display: inline-block;
	padding: 10px 30px;
	font-weight: lighter;
	text-decoration: none;
	text-transform: uppercase;
	border-radius: 200px;
	transition: background-color 0.2s, border 0.2s, color 0.2;
}


.btn-full{
	background-color: transparent;
	color: #bf55ec;
	margin-right: 300px;
	border: 1px solid #bf55ec;
}

.btn-full:hover{
	background-color:#FFFF00;
}

.btn-nav{
	background-color: transparent;
	color: #fff;
	border: 1px solid #fff;
}

.btn-nav:hover{
	background-color: #FFFF00;
}


.colorchange{
	animation:  colorchangethapa 1s infinite;
}

@keyframes colorchangethapa{
	0%{color: red;}
	25%{color:yellow; ;}
	50%{ color: white; }
	100%{ color:yellow;  }
}

.mobile-icon{display: none;}


/*//////// Responsive queries //////////*/

@media only screen and (max-width: 1180px){
	.main-content-header{
		width:100%;
		padding:0 2%;
	}

	.row{
		width:100%;
		padding:0 2%;
	}
}

@media only screen and (max-width: 998px){
	h1{font-size: 200%;}
}

@media only screen and (max-width: 768px){
	h1{font-size: 180%;}	

	.main-nav{display: none;}

	.mobile-icon{ display: inline-block; 
		color: #fff;
		float: right;
		margin-top: 30px;
		margin-right: 20px;
	}

	.main-nav{float: left;}

	.main-nav li{
		display: block;
		margin-top: 10px;
	}
}

@media only screen and (max-width: 480px){
	.btn-full{
		margin-bottom: 20px;
	}

	h1{font-size: 180%;}
}
	</style>
</head>
<body>

	<header style="background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('img/s1.jpg');
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 100vh;">
		<nav>
			<div class="row clearfix">
				<img src="" class="logo">

				<ul class="main-nav animated infinite rubberBand" id="check-class">
					
					<li><a href="home.php
						">Home</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

		<div class="main-content-header">
			<h1> WELCOME TO <span class="colorchange">SKATE254</span>.<br>
				Learn and Enjoy Skating. </h1>
			
			<a href="home.php" class="btn btn-nav"> HOME</a>
		</div>
	</header>

	<script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}	

	</script>

</body>
</html>