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
            <div class="container">

  <h2>Create Invoice</h2>

  <form id="invoice-form" action="" method="POST">
    @csrf

    <!-- Client Info -->
    <h4>Client Information</h4>
    <input type="text" name="client_name" class="form-control mb-2" placeholder="Client Name" required>
    <input type="text" name="client_email" class="form-control mb-2" placeholder="Client Email">
    <input type="text" name="client_address" class="form-control mb-4" placeholder="Client Address">

    <!-- Invoice Table -->
    <table class="table table-bordered" id="items-table">
      <thead>
        <tr>
          <th>Description</th>
          <th width="100">Qty</th>
          <th width="150">Rate</th>
          <th width="150">Amount</th>
          <th width="50">
            <button type="button" id="addRow" class="btn btn-primary btn-sm">+</button>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" name="items[0][description]" class="form-control" required></td>
          <td><input type="number" name="items[0][qty]" class="form-control qty" value="1" required></td>
          <td><input type="number" step="0.01" name="items[0][rate]" class="form-control rate" required></td>
          <td><input type="text" name="items[0][amount]" class="form-control amount" readonly></td>
          <td><button type="button" class="btn btn-danger btn-sm removeRow">x</button></td>
        </tr>
      </tbody>
    </table>

    <!-- Totals -->
    <div class="text-right">
      <h4>Subtotal: NGN <span id="subtotal">0.00</span></h4>
      <h4>Total: NGN <span id="total">0.00</span></h4>
    </div>

    <button class="btn btn-success">Save Invoice</button>
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

    <script>
let row = 1;

// Add new row
document.getElementById("addRow").addEventListener("click", function() {
  let tbody = document.querySelector("#items-table tbody");

  tbody.insertAdjacentHTML("beforeend", `
    <tr>
      <td><input type="text" name="items[${row}][description]" class="form-control" required></td>
      <td><input type="number" name="items[${row}][qty]" class="form-control qty" value="1" required></td>
      <td><input type="number" step="0.01" name="items[${row}][rate]" class="form-control rate" required></td>
      <td><input type="text" name="items[${row}][amount]" class="form-control amount" readonly></td>
      <td><button type="button" class="btn btn-danger btn-sm removeRow">x</button></td>
    </tr>
  `);

  row++;
});

// Remove row
document.addEventListener("click", function(e) {
  if (e.target.classList.contains("removeRow")) {
    e.target.closest("tr").remove();
    calculateTotals();
  }
});

// Auto-calc totals
document.addEventListener("input", function() {
  calculateTotals();
});

function calculateTotals() {
  let subtotal = 0;

  document.querySelectorAll("#items-table tbody tr").forEach(tr => {
    let qty = parseFloat(tr.querySelector(".qty").value) || 0;
    let rate = parseFloat(tr.querySelector(".rate").value) || 0;
    let amount = qty * rate;

    tr.querySelector(".amount").value = amount.toFixed(2);

    subtotal += amount;
  });

  document.getElementById("subtotal").textContent = subtotal.toFixed(2);
  document.getElementById("total").textContent = subtotal.toFixed(2);
}
</script>
</body>

</html>