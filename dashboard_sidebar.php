<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include('bootstrap.php') ?>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
 <nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-2">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SelfiGlobal</a>
      <input class="form-control form-control-dark w-50" type="text" placeholder="Search" aria-label="Search">     
      <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown p-1">
                  <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="oi oi-bell"></span><span class="badge">2</span><span class="caret"></span></a>
                  <ul class="dropdown-menu ">
                     <div class="alert alert-default alert-dismissible f-18" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <strong>Admin</strong> Please Complete Your profile
                     </div>
                    <div class="alert alert-default alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <strong>Admin</strong> Please Password is weak
                     </div>
                  </ul>
                </li>
         </ul>
      <ul class="navbar-nav">
        <li class="nav-item text-nowrap">
          <a class="nav-link text-white p-1" href="#">Log Out &nbsp;&nbsp;<span class="oi oi-power-standby"></span>              
          </a>
        </li>
    </ul>
        <button class="d-md-none navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 bg-dark sidebar ">
          <div class="sidebar-sticky">
              <div class="collapse d-md-block navbar-collapse" id="navbarSupportedContent">
              <ul class="nav flex-column" >
              <li class="nav-item ">
                <a class="nav-link " href="dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                  &nbsp;&nbsp;Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
                  <li class="nav-item">
                    <a class="nav-link " href="index.php">
                        <i class="fas fa-home"></i>
                    &nbsp;&nbsp;Visit Site
                    </a>
                  </li> 
              <li class="nav-item">
                <a class="nav-link " href="instruction.php">
                    <i class="fas fa-info-circle"></i>
                    &nbsp;&nbsp;Instructions 
               </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link " href="earning.php">
                    <i class="fas fa-credit-card"></i>
                  &nbsp;&nbsp;Earning 
                </a>
              </li>            
              <li class="nav-item">
                <a class="nav-link " href="prize.php">
                <i class="fas fa-flag-checkered"></i>
                  &nbsp;&nbsp;Prize
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="photos.php">
                    <i class="fas fa-camera"></i>
                 &nbsp;&nbsp;My Photos
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="upload.php">
                    <i class="fas fa-cloud-upload-alt"></i>
                  &nbsp;&nbsp;Upload Photos
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="dvideo.php">
                      <i class="fas fa-video"></i>
                  &nbsp;&nbsp;Upload Videos
                </a>
              </li>  
               <li class="nav-item">
                <a class="nav-link " href="dbuysell.php">
                    <i class="fas fa-shopping-cart"></i>
                  &nbsp;&nbsp;Buy sell
                </a>
              </li>                            
             <li class="nav-item">
                <a class="nav-link " href="updateprofile.php">
                    <i class="fas fa-user"></i>
                  &nbsp;&nbsp;Update Profile
                </a>
              </li>
             
               <li class="nav-item">
                <a class="nav-link " href="changepass.php">
                    <i class="fas fa-lock"></i>
                 &nbsp;Change Password
                </a>
              </li>              
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <i class="fas fa-power-off"></i>
                  &nbsp;&nbsp;Log Out
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            </h6>
          </div>
        </div>
                <div class="m-b-250"></div>>
  
        </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">    
    </script>        
</body>
</html>