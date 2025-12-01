<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ameen - Bootstrap Admin Dashboard HTML Template</title>
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/7.3.67/css/materialdesignicons.min.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modernizr-3.6.0.min.js') }}"></script>
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/></svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><a href="#"><b><img src="" alt=""> </b><span class="brand-title"><img src="" alt=""></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-left">
                    <ul>
                        <li class="icons position-relative"><a href=""><i class="icon-magnifier f-s-16"></i></a>
                            <div class="drop-down animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <div class="header-search" id="header-search">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <div class="input-group-append"><span class="input-group-text"><i class="icon-magnifier"></i></span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-bell f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                            
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-comment f-s-18" aria-hidden="true"></i><div class="pulse-css"></div></a>
                        
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)"> <i class="mdi mdi-crosshairs-gps f-s-18" aria-hidden="true"></i>
                                <div class="pulse-css"></div>
                            </a>
                        </li>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-email"></i> <span>Inbox</span></a>
                                        </li>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Main</li>
                    <li><a href="index.html"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>


                    <li class="nav-label">Components</li>
                    </li>
                    
                    
                    <li><a href="calender-event.html"><i class="mdi mdi-calendar-check"></i> <span class="nav-text">Calendar</span></a></li>
                    <li><a href="widget-basic-card.html"><i class="mdi mdi-widgets"></i> <span class="nav-text">Widget</span></a>
                    </li>
                    
                    <li><a href="map-datamap.html"><i class="mdi mdi-map"></i> <span class="nav-text">Map</span></a></li>
                    <li><a href="page-invoice.html"><i class="mdi mdi-square-edit-outline"></i> <span class="nav-text">Invoice Summary</span></a>
                    </li>
                </ul>
            </div>
            <!-- nk nav scroll -->
        </div>
        <!--sidebar Ends-->
        <!-- content body -->
        <div class="content-body">
            <div class="invoice-container">
                <div class="invoice-header">
                    <div class="invoice-log">
                        <img src="https://png.pngtree.com/png-vector/20220825/ourmid/pngtree-creative-logo-design-vector-free-png-png-image_6123042.png" alt="Company Logo">
                        <div class="company-name">Company name will be here</div>
                        <div>Address:</div>
                        <div>Phone:</div>
                        <div>Email:</div>
                    </div>
                    <div class="invoice-company-details">
                        <div class="invoice-name" style="color:red">Invoice</div>
                        <div class="invoice-no"># INV-000143</div>
                        <div class="balance-due mt-3">Balance Due</div>
                        <div class="balance-amount">NGN500000</div>
                    </div>
                </div>
                <form id="invoice-form" action="" method="POST">
                    <div class="invoice-billing">
                        <div class="client-name">
                            <div>Bill To</div>
                            <div><input type="text" name="client_name" class="form-control mb-2" placeholder="Client Name" required></div>
                        </div>
                        <div class="invoice-date">
                            <!-- <div class="invoice-date-div">
                                <div>Invoice Date :</div>
                                <div>Terms :</div>
                                <div>Due Date :</div>
                            </div> -->
                            <div class="invoice-date-div">
                                <div class="form-group d-flex align-items-center">
                                    <div class="label-div">
                                        <label for="invoice_date">Issue Date:</label>
                                    </div>
                                    <div class="input-div">
                                        <input type="date" id="issue_date" name="issue_date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center">
                                    <div class="label-div">
                                        <label for="invoice-setting">Custom:</label>
                                    </div>
                                    <div class="input-div">
                                        <select type="date" id="invoice-setting" name="invoice-setting" class="form-control">
                                            <option value="">Select one</option>
                                            <option value="due on receipt">Due on receipt</option>
                                            <option value="custom">Custom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center">
                                    <div class="label-div">
                                        <label for="due_date">Due Date:</label>
                                    </div>
                                    <div class="input-div">
                                        <input type="date" id="due_date" name="due_date" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="invoice-items mt-3">
                        <thead style="background-color: red !important;">
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th style="width: 60px;">Qty</th>
                                <th style="width: 100px;">Rate</th>
                                <th style="width: 120px;">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div><input type="text" name="description[]" class="form-control mb-2" placeholder="Item Description" required></div>
                                    <div style="margin-top: 4px; font-size: 12px; color: #555;">
                                        <input type="text" name="note[]" class="form-control mb-2" placeholder="Item Notes">
                                    </div>
                                </td>
                                <td><input type="number" name="quantity[]" class="form-control mb-2" required></td>
                                <td><input type="text" name="rate[]" class="form-control mb-2" placeholder="Rate" required></td>
                                <td>500000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><button id="add_line" style="border:1px solid red; color:red;">Add Line</button></div>

                    <table class="invoice-totals">
                        <tr>
                            <td class="bold">SubTotal: NGN500000</td>
                        </tr>
                        <tr>
                            <td class="bold">Total: NGN500000</td>
                        </tr>
                        <tr>
                            <td class="bold">Balance Due: NGN500000</td>
                        </tr>
                    </table>

                    
                    <div class="invoice-words">
                        <strong>Total (in words):</strong> Five hundred thousand Naira
                    </div>
                    

                    <div class="invoice-footer">
                    <div><strong>Account Name:</strong> Company Account Name</div>
                    <div><strong>Account Number:</strong> Company Account Number</div>
                    <div><strong>Bank:</strong> Company Bank</div>
                    </div>
                </form>
            </div>
        </div>
        <!-- #/ content body -->
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="#">Ameen</a> 2018</p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>
    <!-- Common JS -->
    <script src="{{ asset('js/common.min.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- Chartjs chart -->
    <script src="{{ asset('js/chart.bundle.js') }}"></script>
    <!-- Custom dashboard script -->
    <script src="{{ asset('js/dashboard-1.js') }}"></script>
</body>

</html>