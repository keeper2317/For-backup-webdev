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
                        <a href="salarySlips.html">
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
            <b>Salary for January, 2024</b> 
          </div>

          <div class="salSlip-panel">
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
              <table class="payslip-table" border="1">
                <tr>
                  <th>Earnings</th>
                  <th class="amounts">Amounts (Php)</th>  
                  <th>Deductions</th>
                  <th class="amounts">Amounts (Php)</th>
                </tr>

                <tr>
                  <th>Basic Salary</th>
                  <td><input type="number" value="15000"></td> <!-- nakadepende yung default sa CODE ng salary range at position-->
                  <th>Late</th>
                  <td><input type="number" value="00000"></td>
                </tr>

                <tr>
                  <th>Overtime</th>
                  <td><input type="number" value="00000"></td>
                  <th>Absent</th>
                  <td><input type="number" value="00000"></td>
                </tr>
                <tr>
                  <th>Incentives</th>
                  <td><input type="number" value="00"></td>
                  <th>Income Tax</th>
                  <td><input type ="number" value="00000"></td>
                </tr>

                <tr>
                  <th>Allowances</th>
                  <td><input type="number" value="00000"></td>
                  <th>Withholding Tax</th>
                  <td><input type ="number" value="00000"></td>
                </tr>

                <tr>
                  <th>Bonuses</th>
                  <td><input type="number" value="00000"></td>
                  <th>SSS</th>
                  <td><input type ="number" value="00000"></td>
                </tr>

                <tr>
                  <th>Commissions</th>
                  <td><input type="number" value="00000"></td>
                  <th>Philhealth</th>
                  <td><input type ="number" value="00000"></td>
                </tr>

                <tr>
                  <th>Paid leaves</th>
                  <td><input type="number" value="00000"></td>
                  <th>Pag-ibig</th>
                  <td><input type ="number" value="00000"></td>
                </tr>

                <tr class="total">
                  <th>Total Earnings</th>
                  <td><input type="number" value="00000" readonly></td>
                  <th>Total Deductions</th>
                  <td><input type ="number" value="00000" readonly></td>
                </tr>
              </table>

              <div class="salPayable-text">
                Net Salary Payable: 250000
              </div>
              <button class="salPayable-btn" type="button"> +Generate Payslip</button>
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

    <script>
    $(function(){

      // Initialize card flip
      $('.card.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      // Initialize flot chart
      var d1 =[ [1, 715],
            [2, 985],
            [3, 1525],
            [4, 1254],
            [5, 1861],
            [6, 2621],
            [7, 1987],
            [8, 2136],
            [9, 2364],
            [10, 2851],
            [11, 1546],
            [12, 2541]
      ];
      var d2 =[ [1, 463],
                [2, 578],
                [3, 327],
                [4, 984],
                [5, 1268],
                [6, 1684],
                [7, 1425],
                [8, 1233],
                [9, 1354],
                [10, 1200],
                [11, 1260],
                [12, 1320]
      ];
      var months = ["January", "February", "March", "April", "May", "Juny", "July", "August", "September", "October", "November", "December"];

      // flot chart generate
      var plot = $.plotAnimator($("#statistics-chart"), 
        [
          {
            label: 'Sales', 
            data: d1,    
            lines: {lineWidth:3}, 
            shadowSize:0,
            color: '#ffffff'
          },
          { label: "Visits",
            data: d2, 
            animator: {steps: 99, duration: 500, start:200, direction: "right"},   
            lines: {        
              fill: .15,
              lineWidth: 0
            },
            color:['#ffffff']
          },{
            label: 'Sales',
            data: d1, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(0,0,0,.5)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          },
          { label: "Visits",
            data: d2, 
            points: { show: true, fill: true, radius:6,fillColor:"rgba(255,255,255,.2)",lineWidth:2 }, 
            color: '#fff',        
            shadowSize:0
          }
        ],{ 
        
        xaxis: {

          tickLength: 0,
          tickDecimals: 0,
          min:1,
          ticks: [[1,"JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"]],

          font :{
            lineHeight: 24,
            weight: "300",
            color: "#ffffff",
            size: 14
          }
        },
        
        yaxis: {
          ticks: 4,
          tickDecimals: 0,
          tickColor: "rgba(255,255,255,.3)",

          font :{
            lineHeight: 13,
            weight: "300",
            color: "#ffffff"
          }
        },
        
        grid: {
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          borderColor: 'rgba(255,255,255,.3)',
          margin:0,
          minBorderMargin:0,              
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6
        },
        
        legend: { show: false}
      });

      $(window).resize(function() {
        // redraw the graph in the correctly sized div
        plot.resize();
        plot.setupGrid();
        plot.draw();
      });

      $('#mmenu').on(
        "opened.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      $('#mmenu').on(
        "closed.mm",
        function()
        {
          // redraw the graph in the correctly sized div
          plot.resize();
          plot.setupGrid();
          plot.draw();
        }
      );

      // tooltips showing
      $("#statistics-chart").bind("plothover", function (event, pos, item) {
        if (item) {
          var x = item.datapoint[0],
              y = item.datapoint[1];

          $("#tooltip").html('<h1 style="color: #418bca">' + months[x - 1] + '</h1>' + '<strong>' + y + '</strong>' + ' ' + item.series.label)
            .css({top: item.pageY-30, left: item.pageX+5})
            .fadeIn(200);
        } else {
          $("#tooltip").hide();
        }
      });
 
      //tooltips options
      $("<div id='tooltip'></div>").css({
        position: "absolute",
        //display: "none",
        padding: "10px 20px",
        "background-color": "#ffffff",
        "z-index":"99999"
      }).appendTo("body");

      //todo's
      $('#todolist li label').click(function() {
        $(this).toggleClass('done');
      });

      // Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});

      //load wysiwyg editor
      $('#quick-message-content').summernote({
        toolbar: [
          //['style', ['style']], // no style button
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          //['insert', ['picture', 'link']], // no insert buttons
          //['table', ['table']], // no table button
          //['help', ['help']] //no help button
        ],
        height: 143   //set editable area's height
      });

      //multiselect input
      $(".chosen-select").chosen({disable_search_threshold: 10});
      
    })
      
    </script>
  </body>
</html>
      