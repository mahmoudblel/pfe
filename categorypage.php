<?php
session_start();
include 'init.php';
include 'includes/header.php';
?>




<div class="all-pg">


 <div class="container produit_pg">
   <h2 class="electricguitars">Electric guitars</h2>
   <hr>
   <div class="filter mb-5"></i></div>
   <div class="row mb-5">
       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center" >
         
           <a href="productpage.php">
               <img src="images/lespaul.png" width="220rem" class="img-fluid">
               <h5 class="mt-3 mb-2">Les paul</h5>
            </a>
           <p>4500d</p>
        </a>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center" >
       	<a href="details_produit.php">
           <img src="images/strat.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Stratocaster</h5>
       </a>
           <p>3000d</p><span></span>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center">
       	<a href="details_produit.php">
           <img src="images/lespaul.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Les paul</h5>
       </a>
           <p>4500d</p><span></span>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center">
       	<a href="details_produit.php">
           <img src="images/strat.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Stratocaster</h5>
       </a>
           <p>3000d</p><span></span>
       </div>
       

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center">
         <a href="details_produit.php">
           <img src="images/lespaul.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Les paul</h5>
       </a>
           <p>4500d</p><span></span>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center">
       	<a href="details_produit.php">
           <img src="images/strat.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Stratocaster</h5>
       </a>
           <p>3000d</p><span></span>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5" style="text-align:center">
       	<a href="details_produit.php">
           <img src="images/lespaul.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Les paul</h5>
       </a>
           <p>4500d</p><span></span>
       </div>

       <div class="col-lg-3 col-md-4 col-sm-6 col-12  mb-5" style="text-align:center">
       	<a href="details_produit.php">
           <img src="images/strat.png" width="220rem" class="img-fluid">
           <h5 class="mt-3 mb-2">Stratocaster</h5>
       </a>
           <p>3000d</p><span></span>
       </div>
       
   </div>
 </div>
</div>







<div class="container">

<div class="row">
	<aside class="col-sm-3">



<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Brands </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Fender
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Gibson
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Jackson
				  </span>
				</label>  <!-- form-check.// -->
			</form>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Left handed </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    yes
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    no
			  </span>
			</label>
			
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
</div> <!-- card.// -->
<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Range input </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<div class="form-row">
			<div class="form-group col-md-6">
			  <label>Min</label>
			  <input type="number" class="form-control" id="inputEmail4" placeholder="0 d">
			</div>
			<div class="form-group col-md-6 text-right">
			  <label>Max</label>
			  <input type="number" class="form-control" placeholder="0 d">
			</div>
			</div>
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->


	 </div>
	</aside>
</div>
</div>


<?php include 'includes/footer.php';?>

	



