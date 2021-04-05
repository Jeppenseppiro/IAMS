<?php

session_start();
if(!isset($_SESSION['UserID'])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICT Asset System - User Assignment</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/alert.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../css/datatables-select.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "../navbar/side-bar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Includes -->
                  <?php include "../config/database/functions.php"; ?>
                  <?php include "../navbar/navbar-account.php" ?>
                <!-- End of Includes -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">End User Details</h6>
                                </div>
                                <div class="card-body">
                                     <div class="row">
                                        <div class="col-lg-12">
                                            <b>COMPANY</b>
                                            <select id="user_company" class="browser-default custom-select form-control" required="true">
                                                 <option value="" selected disabled>Please Select ...</option>
                                                    <?php
                                                       company();                                    
                                                    ?>   
                                            </select>
                                        </div>                                       
                                    </div><br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <b>FIRSTNAME</b>
                                            <input type="text" class="form-control form-control-user" id="user_fname" oninput="this.value = this.value.toUpperCase()">
                                        </div>                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <b>LASTNAME</b>
                                            <input type="text" class="form-control form-control-user" id="user_lname" oninput="this.value = this.value.toUpperCase()">
                                        </div>                                       
                                    </div><br>
                                     <div class="row">
                                        <div class="col-lg-12">
                                            <b>LOCATION / DEPARTMENT</b>
                                            <input type="text" class="form-control form-control-user" id="user_location" oninput="this.value = this.value.toUpperCase()">
                                        </div>                                       
                                    </div><br><br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="btn btn-success btn-icon-split btn-md" id="save_deployment">
                                                <span class="icon text-white-50">
                                                <i class="fas fa-save"></i>
                                                </span>
                                                <span class="text">Save Assigned IT Assets</span>
                                            </a>  
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Assign IT Assets</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" width="100%" cellspacing="0" id="non_consumable_tables">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Company</th>
                                                    <th>Code</th>
                                                    <th>Item Type</th>
                                                    <th>Equipment Code</th>
                                                    <th>Brand</th>
                                                    <th>Model</th>
                                                    <th>Serial Number</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
           <?php include "../footer/footer.php" ?>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Alert / Toast -->
    <div id="snackbar"><span id="snacker_message"></span></div>

    <!-- JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/function-js/deployment/deployment.js"></script>
    <script src="../js/demo/datatables-select.min.js"></script>

    <script >    
    
        document.getElementById("assign_user_tab").className = "nav-item active";
        document.getElementById("collapse_assign_user").className = "collapse show";
        document.getElementById("assign_user").className = "collapse-item active";

        //DATATABLE FOR THE ITEMS
        $(document).ready(function() {
            non_consumable_tables = $('#non_consumable_tables').DataTable({   
                "ajax"  : {
                  url :"../config/item/retreive/retreive-non-consumable-item.php",
                  type:"post"
                },
                 select: {
                   style: 'multi'
                },

                 'order': [[0, "desc"]],
            });

            $('.dataTables_length').addClass('bs-select');
            non_consumable_tables.column(0).visible(false);
            non_consumable_tables.column(1).visible(false);
            non_consumable_tables.column(2).visible(false);
            non_consumable_tables.column(3).visible(false);
            non_consumable_tables.column(8).visible(false);
            non_consumable_tables.column(9).visible(false);
        });




    </script>

</body>

</html>