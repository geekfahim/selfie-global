<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('dashboard_sidebar.php') ?>
</head>
<body>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="btn btn-outline-primary">Change Password</h1>
    <h6 class="btn btn-danger">Password Must be more than 8 characters</h6>
    <div class="btn-toolbar mb-2 mb-md-0">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>
<div class="password m-t-50 m-b-200">
<div class="container">
<form class="col-md-6">
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
</form>
</div>
</div>
</main>
</body>
</html>