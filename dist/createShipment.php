<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create - Shipment</title>
        <link href="startbootstrap-new-age-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <script src="https://use.fontawesome.com/1d7ada546b.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                                ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                                        >Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="login.html">Login</a><a class="nav-link" href="register.html">Register</a><a class="nav-link" href="password.html">Forgot Password</a></nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                                        >Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                    ></a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="500.html">500 Page</a></nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts</a
                            ><a class="nav-link" href="tables.html"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Static Navigation</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Static Navigation</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-Shipment-tab" data-toggle="tab" href="#nav-Shipment" role="tab" aria-controls="nav-Shipment" aria-selected="true">Create Shipment</a>
    <a class="nav-item nav-link" id="nav-Vehicle-tab" data-toggle="tab" href="#nav-Vehicle" role="tab" aria-controls="nav-Vehicle" aria-selected="false">Vehicle Type</a>
    <a class="nav-item nav-link" id="nav-Payment-tab" data-toggle="tab" href="#nav-Payment" role="tab" aria-controls="nav-Payment" aria-selected="false">Payment</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-Shipment" role="tabpanel" aria-labelledby="nav-Shipment-tab">
  
  <form>
  <br/>
  <p>Where do you want us to pickup your item(s)?</p>
  <div class="form-group row">
  <div class="col-sm-5">
      <input type="text" class="form-control" id="inptEmail3" placeholder="Pickup Location">
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-5">

      <input type="text" class="form-control" id="inputPsword3" placeholder="Dropoff Location">
      <!-- <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt=""> -->
    </div>
  </div>
  
  <p>Item Description</p>
 
  <div class="form-group row">
  <div class="col-sm-5">
      <textarea class="form-control" rows="5" id="inputEmail3" placeholder="Enter item description here"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Receiver's full name">
      <!-- <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt=""> -->
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-5">
    <input type="tel" id="phone" class="form-control" name="phone" placeholder="Receiver's phone e.g 08012345678" pattern="[0-9]{11}">
      <!-- <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt=""> -->
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
      <a class="nav-item nav-link" id="nextforshipment" class="btn btn-primary" data-toggle="tab" href="#nav-Vehicle" role="tab" aria-controls="nav-Vehicle" aria-selected="false">Next</a>
    </div>
  </div>
</form>
  
  </div>
  <div class="tab-pane fade" id="nav-Vehicle" role="tabpanel" aria-labelledby="nav-Vehicle-tab">
  <form>
  <br/>
  <p>Where do you want us to pickup your item(s)?</p>
  <div class="form-group row">
  <div class="col-sm-5">
    <label>Mini Buses  <i class="fas fa-bus fa-3x"></i></label>
  <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt="">
  <input type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
 </div>
  </div>
  <div class="input-group">
  <div class="input-group-prepend">
    <input type="text" class="form-control" aria-label="Text input with radio button">
  </div>
  <div class="input-group-text">
    <input type="radio" aria-label="Radio button for following text input">
    </div>
  
</div>
  
  <p>Item Description</p>
 
  <div class="form-group row">
  <div class="col-sm-5">
      <textarea class="form-control" rows="5" id="inputEmail3" placeholder="Enter item description here"></textarea>
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Receiver's full name">
      <!-- <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt=""> -->
    </div>
  </div>
  <div class="form-group row">
  <div class="col-sm-5">
    <input type="tel" id="phone" class="form-control" name="phone" placeholder="Receiver's phone e.g 08012345678" pattern="[0-9]{11}">
      <!-- <img src="assets/img/location.png" style="width: 20px; height:20px;" class="img-fluid" alt=""> -->
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
      <a class="nav-item nav-link" id="nextforshipment" class="btn btn-primary" data-toggle="tab" href="#nav-Vehicle" role="tab" aria-controls="nav-Vehicle" aria-selected="false">Next</a>
    </div>
  </div>
</form>


  </div>
  <div class="tab-pane fade" id="nav-Payment" role="tabpanel" aria-labelledby="nav-Payment-tab">...</div>
</div>
                            </div>
                        </div>
                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script>
          $(document).ready(function(){
  $("#nextforshipment").click(function(){
    $("#nav-Shipment-tab").removeClass("active");
    $("#nav-Vehicle-tab").addClass("active");
  });
});
          </script>
    </body>
</html>
