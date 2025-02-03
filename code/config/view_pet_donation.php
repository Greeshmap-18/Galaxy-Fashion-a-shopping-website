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
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:partials/_sidebar.html -->
    <?php include 'sidebar.php'?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <?php include 'header.php'?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                      
                        <tr>
                            <th>SL.NO</th>
                            <th>Donor NAME</th>
                            <th>Pet Category</th>
                            <th>Breed Of Pet</th>
                            <th>Gender Of Pet</th>
                            <th>Pet Image</th>
                          </tr>
                        
                      </thead>
                      <tbody>
                      <?php 
                               $i=1;
                             
                               $stmt=$admin->ret("SELECT * FROM `user` INNER JOIN `donate_pet` ON donate_pet.u_id=user.u_id ");
                               while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                               ?>
                       <tr>
                                
                                    <td><?php echo $i++?></td>
                                    <td><?php echo $row['u_name']?></td>
                                    <td><?php echo $row['pet_category']?></td>
                                    <td><?php echo $row['breed']?></td>
                                    <td><?php echo $row['gender']?></td>
                                    <td><img src="../ donate/controller/<?php echo $row['pet_image']?>" alt=""></td>
                                  
                                    
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
        <!-- partial:partials/_footer.html -->
      
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
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- End custom js for this page-->
</body>

</html>
