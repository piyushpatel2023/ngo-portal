<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 07:22:18 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Orders | NGO Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

            </div>

           
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <h1>N</h1>
                    </span>
                    <span class="logo-lg">
                        <h1>NGO Portal</h1>
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <h1>N</h1>
                    </span>
                    <span class="logo-lg">
                        <h1>NGO Portal</h1>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index.html" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                            </a>
                        </li> <!-- end Dashboard Menu -->
                        
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Leftover food data</h4>

                                

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="orderList">
                                <div class="card-header border-0">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <h5 class="card-title mb-0">Order History</h5>
                                        </div>
                                        <div class="col-sm-auto">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border border-dashed border-end-0 border-start-0">
                                    <form>
                                        <div class="row g-3">
                                            <div class="col-xxl-5 col-sm-6">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search for order ID, customer, order status or something...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-6">
                                                <div>
                                                    <input type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-4">
                                                <div>
                                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                        <option value="">Status</option>
                                                        <option value="all" selected>All</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Inprogress">Inprogress</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                        <option value="Pickups">Pickups</option>
                                                        <option value="Returns">Returns</option>
                                                        <option value="Delivered">Delivered</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-2 col-sm-4">
                                                <div>
                                                    <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idPayment">
                                                        <option value="">Select Payment</option>
                                                        <option value="all" selected>All</option>
                                                        <option value="Mastercard">Mastercard</option>
                                                        <option value="Paypal">Paypal</option>
                                                        <option value="Visa">Visa</option>
                                                        <option value="COD">COD</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-1 col-sm-4">
                                                <div>
                                                    <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                                        Filters
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <div>
                                        <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="true">
                                                    <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false">
                                                    <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Delivered
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Pickups" data-bs-toggle="tab" id="Pickups" href="#pickups" role="tab" aria-selected="false">
                                                    <i class="ri-truck-line me-1 align-bottom"></i> Pickups 
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Returns" data-bs-toggle="tab" id="Returns" href="#returns" role="tab" aria-selected="false">
                                                    <i class="ri-arrow-left-right-fill me-1 align-bottom"></i> Returns
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled" role="tab" aria-selected="false">
                                                    <i class="ri-close-circle-line me-1 align-bottom"></i> Cancelled
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="table-responsive table-card mb-1">
                                            <table class="table table-nowrap align-middle" id="orderTable">
                                                <thead class="text-muted table-light">
                                                    <tr class="text-uppercase">
                                                        <th scope="col" style="width: 25px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="id">Order ID</th>
                                                        <th class="sort" data-sort="customer_name">Customer</th>
                                                        <th class="sort" data-sort="date">Order Date</th>
                                                        <th class="sort" data-sort="status">Delivery Status</th>
                                                        <th class="sort" data-sort="city">Action</th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                $jsonFile = 'https://55i53iuqk9.execute-api.ap-south-1.amazonaws.com/prod/orders';
                                                $jsonData = file_get_contents($jsonFile);
                                                $data = json_decode($jsonData, true);
                                                
                                                // $data3 = array(
                                                //     'orderType'=> 'food',
                                                //     'handlerId'=> '123',
                                                //     'ngoId'=> '456',
                                                //     'pickupLocation'=> 'Location A surat',
                                                //     'deliveryLocation'=> 'ahemdabad',
                                                //     'status'=> 'pending',
                                                //     'customerName'=> 'piyush',
                                                //     'customerLocation'=> 'Navsari',
                                                //     'distance'=> '5',
                                                // );
                                                 
                                                // $json = json_encode($data3);
                                                // $url = 'https://55i53iuqk9.execute-api.ap-south-1.amazonaws.com/prod/orders';
                                                // $ch = curl_init($url);
                                                // $data_string = urlencode(json_encode($url));
                                                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                                // curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
                                                // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                                                // curl_setopt($ch,CURLOPT_MAXREDIRS, 3);
                                                // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                                                // curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
                                                // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                                                // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                //     'Content-Type: application/json'
                                                // ));
                                                // $response = curl_exec($ch);
                                                // if(curl_errno($ch)) {
                                                //     echo 'Error: ' . curl_error($ch);
                                                // } else {
                                                //     echo $response;
                                                // }
                                                // curl_close($ch);
                                                // die;
                                                ?>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="customer_name">Frank Hook</td>
                                                        
                                                        <td class="date">20 Dec, 2021, <small class="text-muted">02:21 AM</small></td>
                                                        <td class="status"><span class="badge badge-soft-warning text-uppercase">Pending</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                                    <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                                        <i class="ri-pencil-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <div class="pagination-wrap hstack gap-2">
                                                <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                </a>
                                                <ul class="pagination listjs-pagination mb-0"></ul>
                                                <a class="page-item pagination-next" href="#">
                                                    Next
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id">
                                                            <label for="orderId" class="form-label">ID</label>
                                                            <input type="text" id="orderId" class="form-control" value="#VZ2101" readonly />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="customername-field" class="form-label">Customer Name</label>
                                                            <input type="text" id="customername-field" class="form-control" value="Frank Hook" readonly />
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="date-field" class="form-label">Order Date</label>
                                                            <input type="text" id="date-field" class="form-control" value="20 Dec, 2021, 02:21 AM" readonly/>
                                                        </div>

                                                        <div>
                                                            <label for="delivered-status" class="form-label">Delivery Status</label>
                                                            <select class="form-control" data-trigger name="delivered-status" required id="delivered-status">
                                                                <option value="">Delivery Status</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Cancelled">Cancelled</option>
                                                                <option value="Pickups">Pickups</option>
                                                                <option value="Delivered">Delivered</option>
                                                                <option value="Returns">Returns</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Update Status</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4>You are about to delete a order ?</h4>
                                                        <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->
                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © NGO Portal.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Tech Turtles
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>

    <!--list pagination js-->
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- ecommerce-order init js -->
    <script src="assets/js/pages/ecommerce-order.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/apps-ecommerce-orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 07:22:19 GMT -->
</html>