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
            <div class="invoice-content-body">
                    <!-- Company Info -->
                <div class="invoice-header">
                    <div class="invoice-company-name">Company Name</div>

                    <table class="invoice-info-table">
                        <tr>
                            <td>Address: </td>
                        </tr>
                        <tr>
                            <td>Phone: </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                        </tr>
                    </table>
                </div>

                <!-- Invoice Number + Right Title -->
                <table width="100%">
                    <tr>
                        <td>
                            <div style="font-size: 15px;">Invoice<br>
                                <strong># Invoice Number</strong>
                            </div>
                        </td>

                        <td class="invoice-title">
                            Balance Due<br>
                            <strong>NGN{{ number_format(3000.33, 2) }}</strong>
                        </td>
                    </tr>
                </table>

                <!-- Bill To -->
                <div class="invoice-section-title">Bill To</div>
                <div style="font-size: 14px;">
                    Client Name
                </div>

                <!-- Invoice dates section -->
                <table class="invoice-info-table" style="margin-top: 20px;">
                    <tr>
                        <td><strong>Invoice Date:</strong> {{ \Carbon\Carbon::parse('2024-09-04')->format('d M Y') }}</td>
                        <td><strong>Terms:</strong> Custom</td>
                        <td><strong>Due Date:</strong> {{ \Carbon\Carbon::parse('2024-09-04')->format('d M Y') }}</td>
                    </tr>
                </table>

                <!-- Items Table -->
                <table class="invoice-items">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Item & Description</th>
                            <th style="width: 50px;">Qty</th>
                            <th style="width: 80px;">Rate</th>
                            <th style="width: 120px;">Amount</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <strong>title</strong><br>
                                description<br>
                                Amount: notes
                            </td>
                            <td>quantity</td>
                            <td>{{ number_format(3, 2) }}</td>
                            <td>{{ number_format(1000, 2) }}</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <strong>title</strong><br>
                                description<br>
                                Amount: notes
                            </td>
                            <td>quantity</td>
                            <td>{{ number_format(3, 2) }}</td>
                            <td>{{ number_format(1000, 2) }}</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Totals Section -->
                <table class="invoice-totals">
                    <tr>
                        <td class="invoice-bold">Sub Total {{ number_format(50000, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="invoice-bold">Total NGN{{ number_format(50000, 2) }}</td>
                    </tr>
                    <tr>
                        <td class="invoice-bold">Balance Due NGN{{ number_format(50000, 2) }}</td>
                    </tr>
                </table>

                <!-- Total in Words -->
                <div style="margin-top: 15px;">
                    <strong>Total In Words:</strong>
                    four million naira
                </div>

                <!-- Bank Details -->
                <div class="invoice-footer">
                    <strong>Account Name:</strong> FFSD Group <br>
                    <strong>Account Number:</strong> 7031320037 <br>
                    <strong>Bank:</strong> Opay
                </div>
                <!-- #/ container -->
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