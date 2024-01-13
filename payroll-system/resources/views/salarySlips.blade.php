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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-GLhlTQ8i6c6EM3eapF8AqQKk/6Kh/j6IbYPS1z+wwpZlO/63l/5dz1B5C/S+hZ" crossorigin="anonymous">

  </head>
  <body class="bg-2">

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
                    <a href="{{ url('login') }}"><i class="fa fa-power-off"></i> Logout</a>
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
                        <a href="{{ url('generate-payslip') }}">
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
                        <a href="">
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
              <b>Salaries</b>
          </div>

          <div class="salSlip-panel">
            <div class="salSlip-text"> Salary Slips </div>

            <div class="dropdown-container">
              <div class="show"> Show Entries
                <button class="dropdown-button"> 10 &#9662;</button>
                <div class="dropdown-content">
                  <a href="#"> 10 </a>
                  <a href="#"> 8 </a>
                  <a href="#"> 5 </a>
                </div>
              </div>
            </div>



            <div class="salSlips">
              <table class="salSlips-table" border="1">
                  <tr>
                      <th class="empcode">
                        <div class="empcode-header"> Emp Code
                          <button class="empcode-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>

                      <th class="name">
                        <div class="name-header"> Name
                          <button class="name-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>
                      <th class="period">
                        <div class="period-header"> Payment Period
                          <button class="payment-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>
                      <th class="earning">
                        <div class="earning-header"> Earning
                          <button class="earning-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>
                      <th class="deductions">
                        <div class="deduction-header"> Deductions
                          <button class="deduc-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>
                      <th class="netsalary">
                        <div class="netsalary-header"> Net Salary
                          <button class="netSal-btn" type="button">&#8593; &#8595;</button>
                        </div>
                      </th>
                      <th class="salSlips-action">Actions</th>
                  </tr>

                  @foreach ($salarySlips as $slip)
                        <tr>
                            <td class="empcode">{{ $slip->emp_code }}</td>
                            <td class="name">{{ $slip->emp_name }}</td>
                            <td class="period">{{ $slip->payment_period_start }} - {{ $slip->payment_period_end }}</td>
                            <td class="earning">{{ $slip->earnings }}</td>
                            <td class="deduction">{{ $slip->deductions }}</td>
                            <td class="netsalary">{{ $slip->net_salary }}</td>
                            <td>
                               <button class="salSlip-btn" type="button" onclick="window.location='{{ url('salaryreceipt') }}'">
                                    <img src="assets/images/download.png" alt="download">
                                </button>
                                <a href="{{ route('edit-payslip', ['slipId' => $slip->slip_id]) }}">
                                    <button class="salSlip-btn2" type="button">
                                        <img src="assets/images/edit.png" alt="edit">
                                    </button>
                                </a>
                                {{-- <button class="salSlip-btn2" type="button" onclick="window.location='{{ url('editpayslip') }}'">
                                    <img src="assets/images/edit.png" alt="edit">
                                </button> --}}
                                <button class="salSlip-btn3" type="button">
                                    <img src="assets/images/delete.png" alt="delete">
                                </button>
                            </td>
                        </tr>
                    @endforeach


              </table>
            </div>

            <div class="bottom-page">
              <div class="showed-entry">Showing 1 to 10 of 10 entries </div>
              <div class="bottompage-btn">
                <button class="previous"> Previous</button>
                <button class="page"> 1 </button>
                <button class="next"> Next </button>
              </div>

            </div>


        </div>
      </div>

        <!-- Page content end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></>
    <script src="assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>
    <script type="text/javascript" src="assets/js/salarySlips.js"></script>


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
