<?php
function component($productname,$productprice,$productimage)
{
$element =
'
            <div class = "col-md-3 col-sm-6 my-3 my-md-0">
				<form action = "Product.php" method = "post">
                       <div class = "card shadow">
                             <div>
                                  <img src = "$productimage" alt ="alt" class = "img-fluid card-img-top">
                             </div> 
                             <div class = "card-body">
                                 <h5 class = "card-title">$productname</h5>
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
                                     <span class = "price">$productprice</span>
                                 </h5>

                                 <button type = "submit " class = "btn btn-warning my-3" name = "add">Add to cart <i class = "fas fa-shopping-cart"></i></button>
                             </div>
                       </div>
				</form>
			</div>
            ';
            echo $element;
}