<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('dashboard_sidebar.php') ?>
</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="btn btn-outline-primary">Upload Photos</h1>
    <h6 class="btn btn-danger">You Must select only one category</h6>
    <div class="btn-toolbar mb-2 mb-md-0">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>
<div class="password m-t-50 m-b-200">
<div class="container">
<div class="col-md-6">
<!-- <form class="col-md-6">
  <div class="form-group">
    <label for="input">Old Password</label>
    <input type="password" class="form-control" id="input" placeholder="Old Password">
  </div>
<div class="form-group">
	<label for="input">New Password</label>
	<input type="password" class="form-control" id="input" placeholder=" New Password">
</div>
<div class="form-group">
	<label for="input">Confirm Password</label>
	<input type="password" class="form-control" id="input" placeholder="Confirm Password">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
<select class="custom-select m-b-50">
  <option selected>Select Categories</option>
  <option value="1">Painting</option>
  <option value="2">Antique</option>
  <option value="3">Photography</option>
  <option value="4">Wallmate</option>
  <option value="5">Show Piece</option>
  <option value="6">Model</option>
  <option value="7">Actor</option>
  <option value="8">Actress</option>
  <option value="9">Videography</option>
  <option value="10">Flashmob</option>
  <option value="11">Short Film</option>
  <option value="12">Surprise Video</option>
  <option value="13">Prank</option>
  <option value="14">Comedy</option>
  <option value="15">Poster</option>
  <option value="16">Logo</option>
  <option value="17">Vector Image</option>
  <option value="18">Interior</option>
</select>
<div class="custom-file m-b-50">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">Choose file</label> 
      <input type="text" name="name" class="form-control m-t-50" placeholder="Caption"><br>
  </div><br>
<button type="submit" class="btn btn-primary m-b-200">Submit</button>
</div>
</div>
</div>
</main>
</body>
</html>