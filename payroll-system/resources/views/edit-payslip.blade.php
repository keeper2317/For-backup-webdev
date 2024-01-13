<!DOCTYPE html>
<html>
  <head>


    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link rel="stylesheet" href="assets/js/vendor/rickshaw/css/rickshaw.min.css">
    <link rel="stylesheet" href="assets/js/vendor/morris/css/morris.css">
    <link rel="stylesheet" href="assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote.css">
    <link rel="stylesheet" href="assets/js/vendor/summernote/css/summernote-bs3.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen.min.css">
    <link rel="stylesheet" href="assets/js/vendor/chosen/css/chosen-bootstrap.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Make page fluid -->
      <div class="row">

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top collapsed" role="navigation" id="navbar">

          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
              <strong>MIN</strong>IMAL
            </a>
            <div class="sidebar-collapse">
              <a href="index.html#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">

            <!-- Page refresh -->
            <ul class="nav navbar-nav refresh">
              <li class="divided">
                <a href="index.html#" class="page-refresh"><i class="fa fa-refresh"></i></a>
              </li>
            </ul>
            <!-- /Page refresh -->

            <!-- Search -->
            <div class="search" id="main-search">
              <i class="fa fa-search"></i> <input type="text" placeholder="Search...">
            </div>
            <!-- Search end -->

            <!-- Quick Actions -->
            <ul class="nav navbar-nav quick-actions">

              </li>

              <!-- Profile picture-->
              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="index.html#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>

                <ul class="dropdown-menu arrow settings">

                  <li>
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="index.html#" class="bg-1"></a></li>
                      <li><a href="index.html#" class="bg-2"></a></li>
                      <li><a href="index.html#" class="bg-3"></a></li>
                      <li><a href="index.html#" class="bg-4"></a></li>
                      <li><a href="index.html#" class="bg-5"></a></li>
                      <li><a href="index.html#" class="bg-6"></a></li>
                      <li class="title">Solid Backgrounds:</li>
                      <li><a href="index.html#" class="solid-bg-1"></a></li>
                      <li><a href="index.html#" class="solid-bg-2"></a></li>
                      <li><a href="index.html#" class="solid-bg-3"></a></li>
                      <li><a href="index.html#" class="solid-bg-4"></a></li>
                      <li><a href="index.html#" class="solid-bg-5"></a></li>
                      <li><a href="index.html#" class="solid-bg-6"></a></li>
                    </ul>
                  </li>

                  <li>
                    <a href="index.html#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="index.html#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="index.html#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="login.html"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- /Quick Actions -->

            <!-- Sidebar -->
            <ul class="nav navbar-nav side-nav" id="sidebar">

              <li class="collapsed-content">
                <ul>
                  <li class="search"><!-- Collapsed search pasting here at 768px --></li>
                </ul>
              </li>

              <li class="navigation" id="navigation">
                <a href="index.html#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>

                <ul class="menu">

                  <li class="active">
                    <a href="index.html">
                      <i class="fa fa-tachometer"></i> Dashboard
                      <span class="badge badge-red">1</span>
                    </a>
                  </li>

                  <!-- forms sidebar-->
                  <li class="dropdown">
                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-list"></i> Employee Information <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="generate-payslip">
                          <i class="fa fa-caret-right"></i> Generate Payslip
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- INterface sidebar-->
                  <li class="dropdown">
                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-pencil"></i> Payroll Processing <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="{{ url('salarySlips') }}">
                          <i class="fa fa-caret-right"></i> Salary Slips
                        </a>
                      </li>
                    </ul>
                  </li>
            </ul>

            <!-- Sidebar end -->

          </div>
          <!--/.nav-collapse -->

        </div>
        <!-- Fixed navbar end -->


        <!-- CODE HERE -->
        <!-- Page content -->

        <div class="pagecontent-panel">
            <div class="salSlip-title">
                <b>Salary for January 13, 2024 - January 20, 2024</b>
              </div>
            <div class="salSlip-panel2">
                <div class="empInfo">
                    <table class="empInfo-table" border="1">
                        <!-- Display employee information from $salarySlip -->
                        <tr>
                            <th>Employee Code</th>
                            <td>{{ $salarySlip->emp_code }}</td>
                            <th>Employee Name</th>
                            <td>{{ $salarySlip->emp_name }}</td>
                        </tr>

                        <tr>
                            <th>Title/Position</th>
                            <td>{{ $salarySlip->title_position }}</td>
                            <th>Code</th>
                            <td>{{ $salarySlip->code }}</td>
                        </tr>
                    </table>
                </div>

                <div class="payslip">
                    <form action="/update/salary-slip/{{ $salarySlip->slip_id }}" method="POST">
                        @csrf <!-- CSRF token for form submission -->
                        @method('PUT') <!-- Use the PUT method for updating -->

                        <!-- Add hidden fields for employee data -->
                        <input type="hidden" name="employeeCode" value="{{ $salarySlip->emp_code }}">
                        <input type="hidden" name="employeeName" value="{{ $salarySlip->emp_name }}">
                        <input type="hidden" name="title_position" value="{{ $salarySlip->title_position }}">
                        <input type="hidden" name="code" value="{{ $salarySlip->code }}">

                        <!-- Add other hidden fields for existing data -->

                        <!-- Use the value attribute to populate fields with existing data -->
                        <table class="payslip-table" border="1">
                            <!-- Add rows for other earnings and deductions -->

                            <tr>
                                <th>Total Earnings</th>
                                <td><input type="number" name="totalEarnings" value="{{ $salarySlip->earnings }}" readonly></td>
                                <th>Total Deductions</th>
                                <td><input type="number" name="totalDeductions" value="{{ $salarySlip->deductions }}" readonly></td>
                            </tr>
                        </table>

                        <div class="salPayable-text">
                            Net Salary Payable: <span id="netSalaryPayable">{{ $salarySlip->net_salary }}</span>
                        </div>

                        <!-- Add a button to cancel and go back to the salary-slip page -->
                        <a href="/salary-slip" class="cancel-btn">Cancel</a>

                        <!-- Add a button to update the payslip -->
                        <button class="salPayable-btn2" type="submit">Update Payslip</button>
                    </form>
                </div>
            </div>
        </div>


        <!-- Page content end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.time.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.selection.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.animator.min.js"></script>
    <script src="assets/js/vendor/flot/jquery.flot.orderBars.js"></script>
    <script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

    <script src="assets/js/vendor/rickshaw/raphael-min.js"></script>
    <script src="assets/js/vendor/rickshaw/d3.v2.js"></script>
    <script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>

    <script src="assets/js/vendor/morris/morris.min.js"></script>

    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="assets/js/vendor/summernote/summernote.min.js"></script>

    <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

    <script src="assets/js/minimal.min.js"></script>


  </body>
</html>
