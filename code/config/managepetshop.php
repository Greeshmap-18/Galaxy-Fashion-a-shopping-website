<?php
include 'config.php';
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/ga-logo.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <?php include 'sidebar.php'?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
    <?php include 'header.php'?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manage shops</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                           Image
                          </th>
                          <th>
                            Shopname
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                           Email
                          </th>
                          <th>
                            Phone number
                          </th>
                          <th>
                            Address
                          </th>
                          <th>Action
</th>
                        </tr>

                      </thead>
                      <tbody>
                        <?php 
                        $stmt=$admin->ret("SELECT * FROM `shop`");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        
                        ?>
                        <tr>
                          <td class="py-1">
                            <img src="../shop/controller/<?= $row['ps_image']?>" alt="image"/>
                          </td>
                          <td>
                            <?php 
                            echo $row['ps_name'] ?>
                          </td>
                          <td>
                          <?php 
                            echo $row['o_name'] ?>
                          </td>
                          
                          <td>
                          <?php 
                            echo $row['o_email'] ?>
                          </td>
                          <td>
                          <?php 
                            echo $row['o_phonenumber'] ?>
                          </td>
                          <td>
                          <?php 
                            echo $row['o_address'] ?>
                          </td>
                          <td>
                            <?php if($row['ps_status']=='pending'){?>
                         <a href="controller/managepetshop.php?psid=<?php echo $row['ps_id']?>"> <button class="btn btn-success"> accept</button></a>
                         <a href="controller/managepetshop.php?ps_id=<?php echo $row['ps_id']?>"> <button class="btn btn-danger"> reject</button></a>
                        <?php }elseif($row['ps_status']=='Accepted'){ ?>
                        <button class="btn btn-success"> Accepted</button>
                          <?php } elseif($row['ps_status']=='Rejected'){ ?>
                        <button class="btn btn-danger"> Rejected</button>
                        <?php } ?>
                        </td>
                        </tr>
                
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>