<?php

include "../../config/database/conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICT Asset System - Desktop</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../css/alert.css" rel="stylesheet">
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "../../navbar/side-bar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                  <?php include "../../modal/modal.php" ?> 
                  <?php include "../../navbar/navbar-account.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-desktop"></i>&nbsp;&nbsp;DESKTOP UNIT</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">I N F R A S T R U C T U R E &nbsp;&nbsp; M A S T E R L I S T 
                                <span style="float: right;">
                                    <a class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#add_item">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-plus-circle"></i>
                                        </span>
                                        <span class="text">Add Item</span>
                                    </a>
                                </span>
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%" cellspacing="0" id="desktop_table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Company</th>
                                            <th>Item Type</th>
                                            <th>Equipment Code</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Serial Number</th>
                                            <th>OS</th>
                                            <th>HDD</th>
                                            <th>RAM</th>
                                            <th>Video Card</th>
                                            <th>Processor</th>
                                            <th>MotherBoard</th>
                                            <th>RR Date</th>
                                            <th>RR Number</th>
                                            <th>Supplier</th>
                                            <th>PO Number</th>
                                            <th>PO Date</th>
                                            <th>Invoice #</th>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <?php include "../../footer/footer.php" ?>
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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../js/sb-admin-2.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../js/demo/datatables-demo.js"></script>
    <script src="../../js/function-js/insert/insert-item.js"></script>

    <script >       
        document.getElementById("file_maintainance").className = "nav-item active";
        document.getElementById("collapse_database").className = "collapse show";
        document.getElementById("company").className = "collapse-item active";

        $(document).ready(function() {
           desktop_table = $('#desktop_table').DataTable({   

                "ajax"  : {
                //  url :"../config/item/retreive/retreive-item-desktop.php",
                 // type:"post"
                },

                 'order': [[0, "desc"]],

                bAutoWidth: false,
                //ordering: false,
                pagingType: "full_numbers",
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                language: {
                    paginate: {
                        first: 'First',
                        previous: 'Prev',
                        next: 'Next',
                        last: 'Last'
                    }
                }
          } );

         $('.dataTables_length').addClass('bs-select');
        } );

    </script>

</body>

</html>