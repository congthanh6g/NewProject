<?php
require_once('./php/component.php');
require_once('dbhelp.php')


?>

<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" integrity="sha512-M+hXwltZ3+0nFQJiVke7pqXY7VdtWW2jVG31zrml+eteTP7im25FdwtLhIBTWkaHRQyPrhO2uy8glLMHZzhFog==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	img{
		max-width : 100%;
		height    : auto;
		background: lightblue;
		background:radial-gradient(white 30%, lightblue :70%);

	}




</style>

</head>
<body>
	 <div class = "container-fluid">
      	
             <h1 class = "text-center">Clothes Store</h1>
       </div>
      

       <nav class="navbar navbar-inverse">
      <div class="container-fluid">
    
      <ul class="nav navbar-nav">
      <li class="active"><a href="Webpage.php">Home</a></li>
      <li><a href="Product.php">Products</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
    </nav>
	<div class = "container">
		<div class = "row text-center py-5">
		 <div class = "col-md-3 col-sm-6 my-3 my-md-0">
				<form action = "Product.php" method = "post">
                       <div class = "card shadow">
                             <div>
                                  <img src = "images/shoe01.jpg" alt ="alt" class = "img-fluid card-img-top">
                             </div> 
                             <div class = "card-body">
                                 <h5 class = "card-title">Product01</h5>
                                 <h6>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class = "far fa-star"></i>
                                 </h6>
                                 <p class = "card-text">
                                     Some quick text
                                 </p>

                                 <h5>
                                     <span class = "price">$100</span>
                                 </h5>

                                 <button type = "submit " class = "btn btn-warning my-3" name = "add">Add to cart <i class = "fas fa-shopping-cart"></i></button>
                             </div>
                       </div>
				</form>
			</div>
			<div class = "col-md-3 col-sm-6 my-3 my-md-0">
				<form action = "Product.php" method = "post">
                       <div class = "card shadow">
                             <div>
                                  <img src = "images/shoe01.jpg" alt ="alt" class = "img-fluid card-img-top">
                             </div> 
                             <div class = "card-body">
                                 <h5 class = "card-title">Product01</h5>
                                 <h6>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class = "far fa-star"></i>
                                 </h6>
                                 <p class = "card-text">
                                     Some quick text
                                 </p>

                                 <h5>
                                     <span class = "price">$100</span>
                                 </h5>

                                 <button type = "submit " class = "btn btn-warning my-3" name = "add">Add to cart <i class = "fas fa-shopping-cart"></i></button>
                             </div>
                       </div>
				</form>
			</div>
			<div class = "col-md-3 col-sm-6 my-3 my-md-0">
				<form action = "Product.php" method = "post">
                       <div class = "card shadow">
                             <div>
                                  <img src = "images/shoe01.jpg" alt ="alt" class = "img-fluid card-img-top">
                             </div> 
                             <div class = "card-body">
                                 <h5 class = "card-title">Product01</h5>
                                 <h6>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class = "far fa-star"></i>
                                 </h6>
                                 <p class = "card-text">
                                     Some quick text
                                 </p>

                                 <h5>
                                     <span class = "price">$100</span>
                                 </h5>

                                 <button type = "submit " class = "btn btn-warning my-3" name = "add">Add to cart <i class = "fas fa-shopping-cart"></i></button>
                             </div>
                       </div>
				</form>
			</div>
			<div class = "col-md-3 col-sm-6 my-3 my-md-0">
				<form action = "Product.php" method = "post">
                       <div class = "card shadow">
                             <div>
                                  <img src = "images/shoe01.jpg" alt ="alt" class = "img-fluid card-img-top">
                             </div> 
                             <div class = "card-body">
                                 <h5 class = "card-title">Product01</h5>
                                 <h6>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class ="fas fa-star"></i>
                                     <i class = "far fa-star"></i>
                                 </h6>
                                 <p class = "card-text">
                                     Some quick text
                                 </p>

                                 <h5>
                                     <span class = "price">$100</span>
                                 </h5>

                                 <button type = "submit " class = "btn btn-warning my-3" name = "add">Add to cart <i class = "fas fa-shopping-cart"></i></button>
                             </div>
                       </div>
				</form>
			</div>

		</div>

</body>
</html>