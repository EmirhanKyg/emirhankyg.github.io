<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="stil.css">
	<style>

.button {
	 
	        text-decoration: none;
			font-size: 18px;
			margin-left: 15px;
			display: inline-block;
			padding: 1px 1px;
			margin-top: 110px;
			
			width: 30%;
			border-radius: 12px;
				
			background-repeat: no-repeat;
		}
		.bir {
			
			 background-color: red;
			
		}
		.bir:hover{
            
			
			background-color: black;

		}

		
		
		.iki{
			background-color: gray;
			
			
			width: 34%;
			
			
		}
		.iki:hover{
			background-color: black;
		}
		.üç{
			background-color: green;
			
			width: 30;
			
		}
		.üç:hover{
				
			
			background-color: black;
		}
		
		
		.img{
	width:10px;
  height:10px;
  background-repeat: no-repeat;
}

		

	</style>

	<link href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
			rel="stylesheet" integrity=
"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
			crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity=
"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
	</script>
	
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
			integrity=
"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
			crossorigin="anonymous">
	</script>
</head>

<body>
 <a href="fiyat.php" class="button bir ">
 1<img class="button" >
 </a>
  
 
 
 
 <a href="fiyat2.php" class="button iki">
 2<img class="button" >
 </a>
  <a href="fiyat3.php" class="button üç">
 3<img class="button" >
  </a>
	<!-- NAVBAR STARTING -->
	<!-- Use navbar class to the navbar logo
		to the far left of the screen-->
	<nav class=" navbar navbar-expand-lg
		navbar-light bg-light fixed-top py-lg-0 ">

		<a class="navbar-brand" href="#">

			<!-- Add logo with size of 90*80 -->
			<img src=
"logo.jpg"
			width="110" height="80" alt="">
		</a>
		
		<button class="navbar-toggler" type="button"
				data-toggle="collapse"
				data-target="#navbarResponsive"
				aria-controls="navbarResponsive"
				aria-expanded="false"
				aria-label="Toggle navigation">
				
				<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse"
				id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="deneme.php">Anasayfa
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Hakkımızda</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="deneme1.php">Market Fiyatları</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">iletişim</a>
				</li>
			</ul>
		</div>
	</nav>
</body>

</html>
