<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multidisciplinary Research and Development Centre</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
  <style>
  img{
	  width: 150px;
	  height:150px;
  }
  .navbar{
  margin-bottom:0;
  margin-radius:0;
  background-color: #FFF;
 
  padding: 0.45% 0;
  font-size: 1.4em;
  border: 0;
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  }
  
  .navbar-brand{
  float: left;
  min-height:105px;
  padding: 0 2px 20px;
  max-height: 15px;
  max-width: 20px;
  width: 20px;
  height: 20px;
	
  
  }
  
  .navbar-inverse .navbar-nav .active a, .navbar-inverse navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover {
  color:#000;
  background-color: #FFF ;
  
  }
  .navbar-inverse .navbar-nav li a{
  color: #000;
  }
  
  #icon{
  max-width:250px;
  margin: 1% auto;
  }
  
  footer{
  width: 100%;
  background-color:#000;
  padding:5%;
  color: #FFF;
  
  }
  
  .fa{
  padding: 15px;
  font-size: 30px;
  
  
  }
  
  .fa:hover {
  color:#D5D5D5;
  text-decoration:none;
  
  
  }
  
  @media (max-width:600px){
  
	#icon{
	
		max-width:150px;  
  
	}
	
	h2{
		font-size: 1.7em;
	}
  }
  form-control{
	  width: 50%;
	  border: 5px;
  }
  input{
	  height: 45px;
  }
  button{
	  background:grey;
	  color: #fff;
	  font-size: 20px;
	  font-weight: bold;
	  height: 50px;
	  margin-top:20px;
	  border-color:transparent;
  }
  form{
	padding-top:10px;
	padding-bottom:10px;
	width:50%;
	margin:50px;
	outline-color:black;
	outline:5px;
	background-color:black;
	color:#fff;
	transition: all 4s ease-in-out;
}
	
  </style>
</head>
<body>
	 <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				
				</button>
				<a class="navbar-brand" href="#"><img src="img/rusl.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="#myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Research</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class = "form">
		<center>
		<form "method="post" action="contact-form-handler.php">
			<label>Name</label> 
			<input type="text" name="name" placeholder="Your Name" class="form-control" required><br>
			<label>E-mail address</label>
			<input type="text" name="email" placeholder="Your e-mail" class="form-control" required><br>
			<label>Subject</label><br>
			<input type="text" name="subject" placeholder="Place your message subject here" class="form-control"><br> 
			<label>Message</label>
			<textarea name="message" placeholder="Place your messege here" class="form-control" style="height:200px" required></textarea><br>
			
			<button type="submit" name="submit"> Send </button>    
		</form>
	</div>
		
	<footer class="container-fluid text-center">
		<div class="row">
		
			<div class="col-sm-4">
				<h3>Contact Us </h3>
				<br>
				<h4> Our address and contact info here. </h4>
				
			</div>
			
			<div class="col-sm-4">
				<h3>Connect</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				<a href="#" class="fa fa-youtube"></a>
				
			</div>
			
			
			<div class="col-sm-4">
				<!--- Uni Logo--->
				
			</div>
			
		
		</div>
		
	</footer>
	
	
			
			
</body>
</html>
