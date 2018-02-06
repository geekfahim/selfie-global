<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>SelfiGlobal</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                     <div class="alert alert-default alert-dismissible" role="alert">
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
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
          <div class="sidebar-sticky">
            <ul class="nav  flex-column">
              <li class="nav-item ">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index.php">
                  <span class="oi oi-home"></span>
                    Visit Site
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span class="oi oi-flag"></span>
                  Prize
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="#">
                <span class="oi oi-camera-slr"></span>
                  Photos
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="#">
                    <span class="oi oi-lock-locked"></span>
                  Change Password
                </a>
              </li>              
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <span class="oi oi-power-standby"></span>
                  Log Out
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            </h6>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="580"></canvas>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
    <?php include('footer.php') ?>
  </body>
</html>
