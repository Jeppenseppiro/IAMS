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

    <title>ICT Asset System - IT Asset Receipt</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/alert.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                  <?php include "../modal/modal.php" ?> 
                  <?php include "../navbar/navbar-account.php" ?>
                <!-- End of Includes -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">List of End Users</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" width="100%" cellspacing="0" id="asset_receipt_table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Company</th>
                                                    <th>Name</th>
                                                    <th>Location / Department Assigned</th>
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

    <script >    
    
        document.getElementById("assign_user_tab").className = "nav-item active";
        document.getElementById("collapse_assign_user").className = "collapse show";
        document.getElementById("receipt").className = "collapse-item active";

        //DATATABLE FOR THE ITEMS
        $(document).ready(function() {
            asset_receipt_table = $('#asset_receipt_table').DataTable({   
                "ajax"  : {
                  url :"../config/deployment/asset_receipt/retrieve-asset-receipt.php",
                  type:"post"
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
            });

            $('.dataTables_length').addClass('bs-select');
            asset_receipt_table.column(0).visible(false);
        });


        //-------------------------------------------
        //-------------------------------------------
        // PRINT ASSET RECEIPT
        //-------------------------------------------

        $(document).on('click','#print_receipt',function()
        {

            fname = $(this).data('fname');
            lname = $(this).data('lname');
            $('<form action="../class/asset_receipt.php" target="_blank" method="post"> <input type"hidden" name="fname" value="'+fname+'"><input type"hidden" name="lname" value="'+lname+'"> </form>').appendTo('body').submit().remove();
        });


    </script>

</body>

</html>