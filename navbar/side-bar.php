<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="fas fa-clipboard-list"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><img src="../img/sidebar_logo.png" class="img-responsive" style="height: 80px;"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item" id="main_page">
        <a class="nav-link" href="../pages/main.php" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ICT INFRASTRUCTURES
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item " id="laptopdesktop">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse_laptopdesktop" aria-expanded="true"
            aria-controls="collapse_laptopdesktop" id="laptop_desktop_dropdown">
            <i class="fas fa-fw fa-desktop"></i>
            <span>IT Items</span>
        </a>
        <div id="collapse_laptopdesktop" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Items</h6>
                <a class="collapse-item" href="non_consumable.php" id="desktop">Non-Consumable</a>
                <a class="collapse-item"  href="laptop.php" id="laptop">Consumable</a>
                <a class="collapse-item"  href="other-item.php" id="other_item">Miscellaneous</a>
            </div>
        </div>
    </li>

    <li class="nav-item " id="assign_user_tab">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse_assign_user" aria-expanded="true"
            aria-controls="collapse_assign_user" id="assign_user_dropdown">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>User Assignment</span>
        </a>
        <div id="collapse_assign_user" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">End User</h6>
                <a class="collapse-item" href="assign_user.php" id="assign_user">Assign / Deploy</a>
                <a class="collapse-item" href="asset_receipt.php" id="receipt">IT Asset Receipt</a>
            </div>
        </div>
    </li>

    <li class="nav-item " id="file_maintainance">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapse_database" aria-expanded="true"
            aria-controls="collapse_database" id="file_maintainance_dropdown">
            <i class="fas fa-fw fa-cog"></i>
            <span>FIle Maintainance</span>
        </a>
        <div id="collapse_database" class="collapse" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">  
                <h6 class="collapse-header">Database</h6>
                <a class="collapse-item" href="file-maintainance/company.php" id="company">company</a>
                <a class="collapse-item" href="#" id="switch">Switch Hub</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>