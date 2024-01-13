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
                    <a href="{{ route('login') }}"><i class="fa fa-power-off"></i> Logout</a>
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
                        <a href="salary-slip">
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
                  <tr>
                      <th>Employee Code</th>
                      <td>0001</td>
                      <th>Employee Name</th>
                      <td>Jarrell I. Reyes</td>
                  </tr>

                  <tr>
                    <th>Title/Position</th>
                    <td>Front end developer</td>
                    <th>Code</th>
                    <td>12345678910</td>
                  </tr>
            </div>

            <div class="payslip">
                <form action="/create/salary-slip" method="POST">
                    @csrf <!-- CSRF token for form submission -->

                    <input type="hidden" name="employeeCode" value="0001">
                    <input type="hidden" name="employeeName" value="Jarrell I. Reyes">
                    <input type="hidden" name="title_position" value="Front end developer">
                    <input type="hidden" name="code" value="12345678910">

                    <table class="payslip-table" border="1">
                        <tr>
                            <th>Earnings</th>
                            <th class="amounts">Amounts (Php)</th>
                            <th>Deductions</th>
                            <th class="amounts">Amounts (Php)</th>
                        </tr>

                        <tr>
                            <th>Basic Salary</th>
                            <td>
                              <input class="textbox" type="number" name="basicSalary" value="15000" onkeydown="return false">
                            </td>
                            <th>Late</th>
                            <td><input type="number" name="late" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Overtime</th>
                            <td><input type="number" name="overtime" value="00000"></td>
                            <th>Absent</th>
                            <td><input type="number" name="absent" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Incentives</th>
                            <td><input type="number" name="incentives" value="00"></td>
                            <th>Income Tax</th>
                            <td><input type="number" name="incomeTax" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Allowances</th>
                            <td><input type="number" name="allowances" value="00000"></td>
                            <th>Withholding Tax</th>
                            <td><input type="number" name="withholdingTax" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Bonuses</th>
                            <td><input type="number" name="bonuses" value="00000"></td>
                            <th>SSS</th>
                            <td><input type="number" name="sss" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Commissions</th>
                            <td><input type="number" name="commissions" value="00000"></td>
                            <th>Philhealth</th>
                            <td><input type="number" name="philhealth" value="00000"></td>
                        </tr>

                        <tr>
                            <th>Paid leaves</th>
                            <td><input type="number" name="paidLeaves" value="00000"></td>
                            <th>Pag-ibig</th>
                            <td><input type="number" name="pagIbig" value="00000"></td>
                        </tr>

                        <tr class="total">
                            <th>Total Earnings</th>
                            <td><input type="number" name="totalEarnings" value="00000" readonly></td>
                            <th>Total Deductions</th>
                            <td><input type="number" name="totalDeductions" value="00000" readonly></td>
                        </tr>
                    </table>

                    <div class="salPayable-text">
                        Net Salary Payable: <span id="netSalaryPayable">0.00</span>
                    </div>

                    <button class="salPayable-btn2" type="submit">Generate Payslip</button>
                </form>
            </div>
          </div>
        </div>


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
