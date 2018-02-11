<!DOCTYPE html>
<html>
<head>
	<title>Selfie Global</title>
	<?php include('dashboard_sidebar.php') ?>
</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="btn btn-outline-primary">Sell</h1>
    <h6 class="btn btn-danger">Please enter the currency in dollar</h6>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
		<form>
		<div class="form-group">
			<label class="input">Name</label>
			<input type="text" name="name" class="form-control" placeholder="Name"><br>
			<label for="text2">Photo</label>
			<input type="file" name="" class="form-control-file" id=""><br>
			<label for="exampleFormControlTextarea1">Price</label>
			<input type="number" min="1" max="10000000" name="price" class="m-l-20" placeholder="price in $"><br>			
			<label for="exampleFormControlTextarea2" class="m-t-20">Description</label><br>
  		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
			<select class="col-md-6 custom-select m-b-50">
			  <option selected>Select Categories</option>
			  <option value="1">Painting</option>
			  <option value="2">Antique</option>
			  <option value="3">Photography</option>
			  <option value="4">Wallmate</option>
			  <option value="5">Show Piece</option>
			</select><br>	
		<button class="btn btn-primary">Update</button>										
		</div>
		</form>
	</div>
	</div>
</div>
</body>
</html>