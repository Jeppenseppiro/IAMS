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

    <title>ICT Asset System - Non Consumable</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/alert.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<style >
	
 .autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0;
    right: 0;
  }

  .autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background-color: #fff; 
    border-bottom: 1px solid #d4d4d4; 
  }

  /*when hovering an item:*/
  .autocomplete-items div:hover {
    background-color: #e9e9e9; 
  }

  /*when navigating through the items using the arrow keys:*/
  .autocomplete-active {
    background-color: DodgerBlue !important; 
    color: #ffffff; 
  }

</style>

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

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-desktop"></i>&nbsp;&nbsp;NON-CONSUMABLE ITEMS</h1> -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Non -  Consumable Items
                                <span style="float: right;">
                                    <a class="btn btn-icon-split btn-sm">
                                       <select id="item_type_filter" class="browser-default custom-select form-control" required="true">
                                            <option value="" selected disabled>Please Select ...</option>
                                            <?php
                                               item_type();
                                            ?> 
                                            <option value="ADDON">DESKTOP ADD ON</option>
                                        </select>
                                    </a>        
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
                                    <a class="btn btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#add_item">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-plus-circle"></i>
                                        </span>
                                        <span class="text">Add Item</span>
                                    </a>
                                </span>
                            </h6>
                        </div>
                        <div class="card-body datatable_non_consumable_table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%" cellspacing="0" id="non_consumable_table">
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

                        <div class="card-body datatable_non_consumable_table_addon">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%" cellspacing="0" id="non_consumable_table_addon">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Addon Type</th>
                                            <th>Asset ID Assigned</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Serial Number</th>
                                            <th>Description</th>                                     
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
    <script src="../js/function-js/item/insert-item.js"></script>
    <script src="../js/function-js/user/update-user.js"></script>
    <script src="../js/function-js/history/insert-history.js"></script>
    <script src="../js/function-js/history/insert-history-addon.js"></script>
    <script src="../js/auto.js"></script>

    <script >    
       // autocomplete(document.getElementById("history_problem"), problem);   
        document.getElementById("laptopdesktop").className = "nav-item active";
        document.getElementById("collapse_laptopdesktop").className = "collapse show";
        document.getElementById("desktop").className = "collapse-item active";

        //DATATABLE FOR THE ITEMS
        $(document).ready(function() {
            non_consumable_table = $('#non_consumable_table').DataTable({   
                "ajax"  : {
                  url :"../config/item/retreive/retreive-non-consumable-item.php",
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
            non_consumable_table.column(0).visible(false);
            non_consumable_table.column(2).visible(false);



            //DATATABLE (ADDON)
            non_consumable_table_addon = $('#non_consumable_table_addon').DataTable({   
                "ajax"  : {
                  url :"../config/item/retreive/retreive-non-consumable-item-addon.php",
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
            non_consumable_table_addon.column(0).visible(false);
        });


        //FILTER TABLE ACCORDING TO ITEM TYPE
        $(document).ready(function(){
            $(".datatable_non_consumable_table").show();
            $(".datatable_non_consumable_table_addon").hide();

            $('#item_type_filter').change(function(){
                if($("#item_type_filter option:selected").val() == "ADDON"){
                    $(".datatable_non_consumable_table").hide();
                    $(".datatable_non_consumable_table_addon").show();
                } else {
                    $(".datatable_non_consumable_table").show();
                    $(".datatable_non_consumable_table_addon").hide();
                }
                var filter_type = $(this).val();
                non_consumable_table.column(2).search(filter_type).draw();         
            });
        });

    </script>

</body>

</html>