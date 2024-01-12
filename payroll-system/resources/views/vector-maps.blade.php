<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.3 - Vector Maps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/animate/animate.css">
    <link type="text/css" rel="stylesheet" media="all" href="assets/js/vendor/mmenu/css/jquery.mmenu.all.css" />
    <link rel="stylesheet" href="assets/js/vendor/videobackground/css/jquery.videobackground.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link rel="stylesheet" href="assets/js/vendor/tabdrop/css/tabdrop.css">
    <link rel="stylesheet" href="assets/js/vendor/jvectormaps/css/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="assets/js/vendor/no-ui-slider/css/jquery.nouislider.min.css">

    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-1">

    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>
    <!--/Preloader -->

    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top" role="navigation" id="navbar">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
              <strong>MIN</strong>IMAL
            </a>
            <div class="sidebar-collapse">
              <a href="vector-maps.html#">
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
                <a href="vector-maps.html#" class="page-refresh"><i class="fa fa-refresh"></i></a>
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
              
              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="vector-maps.html#">
                  <i class="fa fa-tasks"></i>
                  <span class="label label-transparent-black">2</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>2</strong> new tasks</h1></li>
                  <li>
                    <a href="vector-maps.html#">
                      <div class="task-info">
                        <div class="desc">Layout</div>
                        <div class="percent">80%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="vector-maps.html#">
                      <div class="task-info">
                        <div class="desc">Schemes</div>
                        <div class="percent">15%</div>
                      </div>
                      <div class="progress progress-striped active progress-thin">
                        <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                          <span class="sr-only">45% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="vector-maps.html#">
                      <div class="task-info">
                        <div class="desc">Forms</div>
                        <div class="percent">5%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                          <span class="sr-only">5% Complete (warning)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="vector-maps.html#">
                      <div class="task-info">
                        <div class="desc">JavaScript</div>
                        <div class="percent">30%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span class="sr-only">30% Complete (danger)</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="vector-maps.html#">
                      <div class="task-info">
                        <div class="desc">Dropdowns</div>
                        <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped progress-thin">
                        <div class="progress-bar progress-bar-amethyst" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li><a href="vector-maps.html#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="vector-maps.html#">
                  <i class="fa fa-envelope"></i>
                  <span class="label label-transparent-black">1</span>
                </a>

                <ul class="dropdown-menu wider arrow nopadding messages">
                  <li><h1>You have <strong>1</strong> new message</h1></li>
                  <li>
                    <a class="cyan" href="vector-maps.html#">
                      <div class="profile-photo">
                        <img src="assets/images/ici-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Ing. Imrich Kamarel</span>
                        <span class="time">12 mins</span>
                        <div class="message-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="green" href="vector-maps.html#">
                      <div class="profile-photo">
                        <img src="assets/images/arnold-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Arnold Karlsberg</span>
                        <span class="time">1 hour</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="vector-maps.html#">
                      <div class="profile-photo">
                        <img src="assets/images/profile-photo.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">John Douey</span>
                        <span class="time">3 hours</span>
                        <div class="message-content">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="red" href="vector-maps.html#">
                      <div class="profile-photo">
                        <img src="assets/images/peter-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">Peter Kay</span>
                        <span class="time">5 hours</span>
                        <div class="message-content">Ut enim ad minim veniam, quis nostrud exercitation</div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a class="orange" href="vector-maps.html#">
                      <div class="profile-photo">
                        <img src="assets/images/george-avatar.jpg" alt />
                      </div>
                      <div class="message-info">
                        <span class="sender">George McCain</span>
                        <span class="time">6 hours</span>
                        <div class="message-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit</div>
                      </div>
                    </a>
                  </li>


                  <li class="topborder"><a href="vector-maps.html#">Check all messages <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided">
                
                <a class="dropdown-toggle button" data-toggle="dropdown" href="vector-maps.html#">
                  <i class="fa fa-bell"></i>
                  <span class="label label-transparent-black">3</span>
                </a>

                <ul class="dropdown-menu wide arrow nopadding bordered">
                  <li><h1>You have <strong>3</strong> new notifications</h1></li>
                  
                  <li>
                    <a href="vector-maps.html#">
                      <span class="label label-green"><i class="fa fa-user"></i></span>
                      New user registered.
                      <span class="small">18 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="vector-maps.html#">
                      <span class="label label-red"><i class="fa fa-power-off"></i></span>
                      Server down.
                      <span class="small">27 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="vector-maps.html#">
                      <span class="label label-orange"><i class="fa fa-plus"></i></span>
                      New order.
                      <span class="small">36 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="vector-maps.html#">
                      <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                      Server restared.
                      <span class="small">45 mins</span>
                    </a>
                  </li>

                  <li>
                    <a href="vector-maps.html#">
                      <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                      Server started.
                      <span class="small">50 mins</span>
                    </a>
                  </li>

                   <li><a href="vector-maps.html#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                </ul>

              </li>

              <li class="dropdown divided user" id="current-user">
                <div class="profile-photo">
                  <img src="assets/images/profile-photo.jpg" alt />
                </div>
                <a class="dropdown-toggle options" data-toggle="dropdown" href="vector-maps.html#">
                  John Douey <i class="fa fa-caret-down"></i>
                </a>
                
                <ul class="dropdown-menu arrow settings">

                  <li>
                    
                    <h3>Backgrounds:</h3>
                    <ul id="color-schemes">
                      <li><a href="vector-maps.html#" class="bg-1"></a></li>
                      <li><a href="vector-maps.html#" class="bg-2"></a></li>
                      <li><a href="vector-maps.html#" class="bg-3"></a></li>
                      <li><a href="vector-maps.html#" class="bg-4"></a></li>
                      <li><a href="vector-maps.html#" class="bg-5"></a></li>
                      <li><a href="vector-maps.html#" class="bg-6"></a></li>
                      <li class="title">Solid Backgrounds:</li>
                      <li><a href="vector-maps.html#" class="solid-bg-1"></a></li>
                      <li><a href="vector-maps.html#" class="solid-bg-2"></a></li>
                      <li><a href="vector-maps.html#" class="solid-bg-3"></a></li>
                      <li><a href="vector-maps.html#" class="solid-bg-4"></a></li>
                      <li><a href="vector-maps.html#" class="solid-bg-5"></a></li>
                      <li><a href="vector-maps.html#" class="solid-bg-6"></a></li>
                    </ul>


                  </li>

                  <li class="divider"></li>



                  <li>

                    <div class="form-group videobg-check">
                      <label class="col-xs-8 control-label">Video BG</label>
                      <div class="col-xs-4 control-label">
                        <div class="onoffswitch greensea small">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="videobg-check">
                          <label class="onoffswitch-label" for="videobg-check">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <ul id="videobackgrounds">
                      <li class="title">Choose type:</li>
                      <li><a href="vector-maps.html#" class="video-bg-1"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-2"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-3"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-4"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-5"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-6"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-7"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-8"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-9"></a></li>
                      <li><a href="vector-maps.html#" class="video-bg-10"></a></li>
                    </ul>

                  </li>


                  <li class="divider"></li>

                  <li>
                    <a href="vector-maps.html#"><i class="fa fa-user"></i> Profile</a>
                  </li>

                  <li>
                    <a href="vector-maps.html#"><i class="fa fa-calendar"></i> Calendar</a>
                  </li>

                  <li>
                    <a href="vector-maps.html#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                  </li>

                  <li class="divider"></li>

                  <li>
                    <a href="vector-maps.html#"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="vector-maps.html#mmenu"><i class="fa fa-comments"></i></a>
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
                <a href="vector-maps.html#" class="sidebar-toggle" data-toggle="#navigation">Navigation <i class="fa fa-angle-up"></i></a>
                
                <ul class="menu">
                  
                  <li>
                    <a href="index.html">
                      <i class="fa fa-tachometer"></i> Dashboard
                      <span class="badge badge-red">1</span>
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-list"></i> Forms <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="form-elements.html">
                          <i class="fa fa-caret-right"></i> Common Elements
                        </a>
                      </li>
                      <li>
                        <a href="validation-elements.html">
                          <i class="fa fa-caret-right"></i> Validation
                        </a>
                      </li>
                      <li>
                        <a href="form-wizard.html">
                          <i class="fa fa-caret-right"></i> Form Wizard
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-pencil"></i> Interface <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="ui-elements.html">
                          <i class="fa fa-caret-right"></i> UI Elements
                        </a>
                      </li>
                      <li>
                        <a href="typography.html">
                          <i class="fa fa-caret-right"></i> Typography
                        </a>
                      </li>
                      <li>
                        <a href="tiles.html">
                          <i class="fa fa-caret-right"></i> Tiles
                        </a>
                      </li>
                      <li>
                        <a href="portlets.html">
                         <i class="fa fa-caret-right"></i> Portlets
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="nestable.html">
                          <i class="fa fa-caret-right"></i> Nestable Lists
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="buttons.html">
                      <i class="fa fa-tint"></i> Buttons & Icons
                    </a>
                  </li>
                  <li>
                    <a href="grid.html">
                      <i class="fa fa-th"></i> Grid Layout
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-th-large"></i> Tables <b class="fa fa-plus dropdown-plus"></b>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="tables.html">
                          <i class="fa fa-caret-right"></i> Bootstrap Tables
                        </a>
                      </li>
                      <li>
                        <a href="datatables.html">
                          <i class="fa fa-caret-right"></i> DataTables
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li class="dropdown open active">
                    <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-desktop"></i> Example Pages <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-greensea">mails</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="login.html">
                          <i class="fa fa-caret-right"></i> Login Page
                        </a>
                      </li>
                      <li>
                        <a href="calendar.html">
                          <i class="fa fa-caret-right"></i> Calendar
                        </a>
                      </li>
                      <li>
                        <a href="page404.html">
                          <i class="fa fa-caret-right"></i> Page 404
                        </a>
                      </li>
                      <li>
                        <a href="page500.html">
                          <i class="fa fa-caret-right"></i> Page 500
                        </a>
                      </li>
                      <li>
                        <a href="page-offline.html">
                          <i class="fa fa-caret-right"></i> Page Offline
                        </a>
                      </li>
                      <li>
                        <a href="invoice.html">
                          <i class="fa fa-caret-right"></i> Invoice
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="blank-page.html">
                          <i class="fa fa-caret-right"></i> Blank Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="locked-screen.html">
                          <i class="fa fa-caret-right"></i> Locked Screen
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="gallery.html">
                          <i class="fa fa-caret-right"></i> Gallery
                        </a>
                      </li>
                      <li>
                        <a href="timeline.html">
                          <i class="fa fa-caret-right"></i> Timeline
                        </a>
                      </li>
                      <li>
                        <a href="chat.html">
                          <i class="fa fa-caret-right"></i> Chat
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="search-results.html">
                          <i class="fa fa-caret-right"></i> Search Results
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                      <li>
                        <a href="profile-page.html">
                          <i class="fa fa-caret-right"></i> Profile Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="weather-page.html">
                          <i class="fa fa-caret-right"></i> Weather Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="frontpage/index.html">
                          <i class="fa fa-caret-right"></i> Front Page
                          <span class="label label-greensea">new</span>
                        </a>
                      </li>
                      <li>
                        <a href="mail.html">
                          <i class="fa fa-caret-right"></i> Vertical Mail
                          <span class="badge badge-red">5</span>
                        </a>
                      </li>
                      <li>
                        <a href="mail-horizontal.html">
                          <i class="fa fa-caret-right"></i> Horizontal Mail
                          <span class="label label-greensea">mails</span>
                        </a>
                      </li>
                      <li class="active">
                        <a href="vector-maps.html">
                          <i class="fa fa-caret-right"></i> Vector Maps
                        </a>
                      </li>
                      <li>
                        <a href="google-maps.html">
                          <i class="fa fa-caret-right"></i> Google Maps
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="widgets.html">
                      <i class="fa fa-play-circle"></i> Widgets
                    </a>
                  </li>

                  <li>
                    <a href="charts.html">
                      <i class="fa fa-bar-chart-o"></i> Charts & Graphs
                    </a>
                  </li>

                  <li class="dropdown">
                    <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-folder"></i> Menu Levels <b class="fa fa-plus dropdown-plus"></b>
                      <span class="label label-cyan">new</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 1.1</a></li>

                      <li class="dropdown">
                        <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.2 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li class="dropdown">
                                <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 3.3 <b class="fa fa-plus dropdown-plus"></b></a>
                                <ul class="dropdown-menu">
                                  <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 4.1</a></li>
                                   <li class="dropdown">
                                      <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 4.2 <b class="fa fa-plus dropdown-plus"></b></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 5.1</a></li>
                                        <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 5.2</a></li>
                                      </ul>
                                    </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 1.3 <b class="fa fa-plus dropdown-plus"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 2.1</a></li>
                          <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 2.2</a></li>
                          <li class="dropdown">
                            <a href="vector-maps.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> Menu Level 2.3 <b class="fa fa-plus dropdown-plus"></b></a>
                            <ul class="dropdown-menu">
                              <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 3.1</a></li>
                              <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 3.2</a></li>
                              <li><a href="vector-maps.html#"><i class="fa fa-caret-right"></i> Menu Level 3.3</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>

                    </ul>
                  </li>


                </ul>

              </li>

              <li class="summary" id="order-summary">
                <a href="vector-maps.html#" class="sidebar-toggle underline" data-toggle="#order-summary">Orders Summary <i class="fa fa-angle-up"></i></a>

                <div class="media">
                  <a class="pull-right" href="vector-maps.html#">
                    <span id="sales-chart"></span>
                  </a>
                  <div class="media-body">
                    This week sales
                    <h3 class="media-heading">26, 149</h3>
                  </div>
                </div>

                <div class="media">
                  <a class="pull-right" href="vector-maps.html#">
                    <span id="balance-chart"></span>
                  </a>
                  <div class="media-body">
                    This week balance
                    <h3 class="media-heading">318, 651</h3>
                  </div>
                </div>

              </li>

              <li class="settings" id="general-settings">
                <a href="vector-maps.html#" class="sidebar-toggle underline" data-toggle="#general-settings">General Settings <i class="fa fa-angle-up"></i></a>

                <div class="form-group">
                  <label class="col-xs-8 control-label">Switch ON</label>
                  <div class="col-xs-4 control-label">
                    <div class="onoffswitch greensea">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-on" checked="">
                      <label class="onoffswitch-label" for="switch-on">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-xs-8 control-label">Switch OFF</label>
                  <div class="col-xs-4 control-label">
                    <div class="onoffswitch greensea">
                      <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch-off">
                      <label class="onoffswitch-label" for="switch-off">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                      </label>
                    </div>
                  </div>
                </div>

              </li>

              
            </ul>
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
        




        
        <!-- Page content -->
        <div id="content" class="col-md-12">
          








          <!-- page header -->
          <div class="pageheader">
            

            <h2><i class="fa fa-compass" style="line-height: 48px;padding-left: 0;"></i> Vector Maps <span>// Place subtitle here...</span></h2>
            

            <div class="breadcrumbs">
              <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.html">Minimal</a></li>
                <li><a href="vector-maps.html#">Example Pages</a></li>
                <li class="active">Vector Maps</li>
              </ol>
            </div>


          </div>
          <!-- /page header -->
          
          




          <!-- content main container -->
          <div class="main">




            <!-- row -->
            <div class="row">

              <!-- col 12 -->
              <div class="col-md-12">



                <!-- tile -->
                <section class="tile transparent">


                  <!-- tile header -->
                  <div class="tile-header nopadding">
                    <div class="controls">
                      <a href="vector-maps.html#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                      <a href="vector-maps.html#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="vector-maps.html#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body tab-content nopadding transparent">

                    <div class="tab-pane fade in active" id="gdpContainer">
                      <div id="gdp" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>

                    <div class="tab-pane fade" id="markersContainer">
                      <div id="markers" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>

                    <div class="tab-pane fade" id="unemploymentContainer">
                      <div id="unemployment" style="height: 570px;" class="rounded-corners"></div>
                      <div id="value" class="slider-value"></div>
                      <div class="noUiSlider margin-15" id="slider"></div>
                    </div>

                    <div class="tab-pane fade" id="regionsContainer">
                      <div id="regions" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>

                    <div class="tab-pane fade" id="franceContainer">
                      <div id="france" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>

                    <div class="tab-pane fade" id="colorsContainer">
                      <div id="colors" style="height: 570px;" class="rounded-corners"></div>
                      <button id="randomColors" class="btn btn-greensea margin-15">Randomize Colors</button>
                    </div>

                    <div class="tab-pane fade" id="mallContainer">
                      <div id="mall" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>

                    <div class="tab-pane fade" id="reverseContainer">
                      <div id="reverse" style="height: 570px;" class="rounded-top-corners"></div>
                    </div>
 
                  </div>
                  <!-- /tile body -->

                  <!-- tile footer -->
                  <div class="tile-footer color transparent-black rounded-bottom-corners">

                    <ul class="nav nav-pills tabdrop">
                      <li class="active"><a href="vector-maps.html#gdpContainer" data-toggle="pill" data-id="gdp">GDP by country visualization</a></li>
                      <li><a href="vector-maps.html#markersContainer" data-toggle="pill" data-id="markers">Markers on the world map</a></li>
                      <li><a href="vector-maps.html#unemploymentContainer" data-toggle="pill" data-id="unemployment">USA unemployment</a></li>
                      <li><a href="vector-maps.html#regionsContainer" data-toggle="pill" data-id="regions">Regions selection</a></li> 
                      <li><a href="vector-maps.html#franceContainer" data-toggle="pill" data-id="france">France elections</a></li> 
                      <li><a href="vector-maps.html#colorsContainer" data-toggle="pill" data-id="colors">Random colors</a></li> 
                      <li><a href="vector-maps.html#mallContainer" data-toggle="pill" data-id="mall">Map of the mall</a></li> 
                      <li><a href="vector-maps.html#reverseContainer" data-toggle="pill" data-id="reverse">Reverse projection</a></li>                  
                    </ul>

                  </div>
                  <!-- /tile footer -->


                </section>
                <!-- /tile -->




              </div>
              <!-- /col 12 -->


              
            </div>
            <!-- /row -->
          


          </div>
          <!-- /content container -->






        </div>
        <!-- Page content end -->




        <div id="mmenu" class="right-panel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="vector-maps.html#mmenu-users" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li class=""><a href="vector-maps.html#mmenu-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li class=""><a href="vector-maps.html#mmenu-friends" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li class=""><a href="vector-maps.html#mmenu-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
          </ul>
              
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="mmenu-users">
              <h5><strong>Online</strong> Users</h5>

              <ul class="users-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/peter-avatar.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Peter <strong>Kay</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/george-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">George <strong>McCain</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar1.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Lucius <strong>Cashmere</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar2.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Jesse <strong>Phoenix</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>

              <h5><strong>Offline</strong> Users</h5>

              <ul class="users-list">
                
                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar4.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Dell <strong>MacApple</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Paris, France</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar5.jpg" alt>
                    </a>

                    <div class="media-body">
                      <h6 class="media-heading">Roger <strong>Flopple</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Rome, Italia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                    
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar6.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Nico <strong>Vulture</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar7.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Bobby <strong>Socks</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar8.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Anna <strong>Opichia</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>

            </div>

            <div class="tab-pane" id="mmenu-history">
              <h5><strong>Chat</strong> History</h5>

              <ul class="history-list">
                
                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/peter-avatar.jpg" alt>

                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Peter <strong>Kay</strong></h6>
                      <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>
                
            </div>

            <div class="tab-pane" id="mmenu-friends">
              <h5><strong>Friends</strong> List</h5>
                <ul class="favourite-list">
                
                <li class="online">
                  <div class="media">
                    
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/arnold-avatar.jpg" alt>
                    </a>
                    <span class="badge badge-red unread">3</span>

                    <div class="media-body">
                      <h6 class="media-heading">Arnold <strong>Karlsberg</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                      <span class="badge badge-outline status"></span>
                    </div>

                  </div>
                </li>

                <li class="offline">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar8.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Anna <strong>Opichia</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="busy">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/random-avatar1.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Lucius <strong>Cashmere</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

                <li class="online">
                  <div class="media">
                    <a class="pull-left profile-photo" href="vector-maps.html#">
                      <img class="media-object" src="assets/images/ici-avatar.jpg" alt>
                    </a>
                    <div class="media-body">
                      <h6 class="media-heading">Ing. Imrich <strong>Kamarel</strong></h6>
                      <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                      <span class="badge badge-outline status"></span>
                    </div>
                  </div>
                </li>

              </ul>
            </div>

            <div class="tab-pane pane-settings" id="mmenu-settings">
              <h5><strong>Chat</strong> Settings</h5>

              <ul class="settings">
               
                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Offline Users</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">
                        <label class="onoffswitch-label" for="show-offline">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Fullname</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">
                        <label class="onoffswitch-label" for="show-fullname">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">History Enable</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">
                        <label class="onoffswitch-label" for="show-history">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Locations</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">
                        <label class="onoffswitch-label" for="show-location">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Notifications</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">
                        <label class="onoffswitch-label" for="show-notifications">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <label class="col-xs-8 control-label">Show Undread Count</label>
                    <div class="col-xs-4 control-label">
                      <div class="onoffswitch greensea">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">
                        <label class="onoffswitch-label" for="show-unread">
                          <span class="onoffswitch-inner"></span>
                          <span class="onoffswitch-switch"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>
                
            </div><!-- tab-pane -->
              
          </div><!-- tab-content -->
        </div>






      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->



    <section class="videocontent" id="video"></section>



    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/vendor/bootstrap/bootstrap-dropdown-multilevel.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script type="text/javascript" src="assets/js/vendor/mmenu/js/jquery.mmenu.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/nicescroll/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="assets/js/vendor/animate-numbers/jquery.animateNumbers.js"></script>
    <script type="text/javascript" src="assets/js/vendor/videobackground/jquery.videobackground.js"></script>
    <script type="text/javascript" src="assets/js/vendor/blockui/jquery.blockUI.js"></script>

    <script src="assets/js/vendor/jvectormaps/jquery-jvectormap-1.2.2.min.js"></script>        
    <script src="assets/js/vendor/jvectormaps/addons/gdp-data.js"></script>                           
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-world-mill-en.js"></script>    
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-us-aea-en.js"></script>      
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-de-merc-en.js"></script>       
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-fr-merc-en.js"></script>       
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-es-merc-en.js"></script>       
    <script src="assets/js/vendor/jvectormaps/addons/mall-map.js"></script>                           
    <script src="assets/js/vendor/jvectormaps/addons/jquery-jvectormap-us-lcc-en.js"></script> 

    <script src="assets/js/vendor/no-ui-slider/jquery.nouislider.min.js"></script> 

    <script src="assets/js/vendor/tabdrop/bootstrap-tabdrop.min.js"></script>

    <script src="assets/js/minimal.min.js"></script>

    <script>
    $(function(){

      // GDP by country visualization
      var initGdpMap = function(){
        $('#gdp').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#C8EEFF', '#0071A4'],
              normalizeFunction: 'polynomial'
            }]
          },
          onLabelShow: function(e, el, code){
            el.html(el.html()+' (GDP - '+gdpData[code]+')');
          }
        });
      };

      initGdpMap();

      // Markers on the world map
      var initMarkersMap = function() {
        $('#markers').vectorMap({
          map: 'world_mill_en',
          scaleColors: ['#C8EEFF', '#0071A4'],
          normalizeFunction: 'polynomial',
          hoverOpacity: 0.7,
          hoverColor: false,
          markerStyle: {
            initial: {
              fill: '#F8E23B',
              stroke: '#383f47'
            }
          },
          backgroundColor: '#383f47',
          markers: [
            {latLng: [41.90, 12.45], name: 'Vatican City'},
            {latLng: [43.73, 7.41], name: 'Monaco'},
            {latLng: [-0.52, 166.93], name: 'Nauru'},
            {latLng: [-8.51, 179.21], name: 'Tuvalu'},
            {latLng: [43.93, 12.46], name: 'San Marino'},
            {latLng: [47.14, 9.52], name: 'Liechtenstein'},
            {latLng: [7.11, 171.06], name: 'Marshall Islands'},
            {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
            {latLng: [3.2, 73.22], name: 'Maldives'},
            {latLng: [35.88, 14.5], name: 'Malta'},
            {latLng: [12.05, -61.75], name: 'Grenada'},
            {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
            {latLng: [13.16, -59.55], name: 'Barbados'},
            {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
            {latLng: [-4.61, 55.45], name: 'Seychelles'},
            {latLng: [7.35, 134.46], name: 'Palau'},
            {latLng: [42.5, 1.51], name: 'Andorra'},
            {latLng: [14.01, -60.98], name: 'Saint Lucia'},
            {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
            {latLng: [1.3, 103.8], name: 'Singapore'},
            {latLng: [1.46, 173.03], name: 'Kiribati'},
            {latLng: [-21.13, -175.2], name: 'Tonga'},
            {latLng: [15.3, -61.38], name: 'Dominica'},
            {latLng: [-20.2, 57.5], name: 'Mauritius'},
            {latLng: [26.02, 50.55], name: 'Bahrain'},
            {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
          ]
        });    
      };

      initMarkersMap();

      // USA unemployment
      var initUnemploymentMap = function() {
        $.getJSON('assets/js/vendor/jvectormaps/json/us-unemployment.json', function(data){
          
          var val = 2009;
              statesValues = jvm.values.apply({}, jvm.values(data.states)),
              metroPopValues = Array.prototype.concat.apply([], jvm.values(data.metro.population)),
              metroUnemplValues = Array.prototype.concat.apply([], jvm.values(data.metro.unemployment));

          $('#unemployment').vectorMap({
            map: 'us_aea_en',
            markers: data.metro.coords,
            series: {
              markers: [{
                attribute: 'fill',
                scale: ['#FEE5D9', '#A50F15'],
                values: data.metro.unemployment[val],
                min: jvm.min(metroUnemplValues),
                max: jvm.max(metroUnemplValues)
              },{
                attribute: 'r',
                scale: [5, 20],
                values: data.metro.population[val],
                min: jvm.min(metroPopValues),
                max: jvm.max(metroPopValues)
              }],
              regions: [{
                scale: ['#DEEBF7', '#08519C'],
                attribute: 'fill',
                values: data.states[val],
                min: jvm.min(statesValues),
                max: jvm.max(statesValues)
              }]
            },
            onMarkerLabelShow: function(event, label, index){
              label.html(
                 '<b>'+data.metro.names[index]+'</b><br/>'+'<b>Population: </b>'+data.metro.population[val][index]+'</br>'+'<b>Unemployment rate: </b>'+data.metro.unemployment[val][index]+'%'
              );
            },
            onRegionLabelShow: function(event, label, code){
              label.html(
                '<b>'+label.html()+'</b></br>'+'<b>Unemployment rate: </b>'+data.states[val][code]+'%'
              );
            }
          });

          var mapObject = $('#unemployment').vectorMap('get', 'mapObject');

          $("#slider").noUiSlider({
            range: [2005,2009],
            start: 2009,
            handles: 1,
            step: 1,
            serialization: {
              to: [ $('#value'), 'text' ],
              resolution: 1
            },
            slide: function(e) {
              val = $(this).val();
              mapObject.series.regions[0].setValues(data.states[val]);
              mapObject.series.markers[0].setValues(data.metro.unemployment[val]);
              mapObject.series.markers[1].setValues(data.metro.population[val]);
            }
          });
        });
      };

      initUnemploymentMap();

      //Regions selection
      var initRegionsMap = function() {
        var map,
        markers = [
          {latLng: [52.50, 13.39], name: 'Berlin'},
          {latLng: [53.56, 10.00], name: 'Hamburg'},
          {latLng: [48.13, 11.56], name: 'Munich'},
          {latLng: [50.95, 6.96], name: 'Cologne'},
          {latLng: [50.11, 8.68], name: 'Frankfurt am Main'},
          {latLng: [48.77, 9.17], name: 'Stuttgart'},
          {latLng: [51.23, 6.78], name: 'Düsseldorf'},
          {latLng: [51.51, 7.46], name: 'Dortmund'},
          {latLng: [51.45, 7.01], name: 'Essen'},
          {latLng: [53.07, 8.80], name: 'Bremen'}
        ],
        cityAreaData = [
          887.70,
          755.16,
          310.69,
          405.17,
          248.31,
          207.35,
          217.22,
          280.71,
          210.32,
          325.42
        ]

        map = new jvm.WorldMap({
          container: $('#regions'),
          map: 'de_merc_en',
          regionsSelectable: true,
          markersSelectable: true,
          markers: markers,
          markerStyle: {
            initial: {
              fill: '#4DAC26'
            },
            selected: {
              fill: '#CA0020'
            }
          },
          regionStyle: {
            initial: {
              fill: '#B8E186'
            },
            selected: {
              fill: '#F4A582'
            }
          },
          series: {
            markers: [{
              attribute: 'r',
              scale: [5, 15],
              values: cityAreaData
            }]
          },
          onRegionSelected: function(){
            if (window.localStorage) {
              window.localStorage.setItem(
                'jvectormap-selected-regions',
                JSON.stringify(map.getSelectedRegions())
              );
            }
          },
          onMarkerSelected: function(){
            if (window.localStorage) {
              window.localStorage.setItem(
                'jvectormap-selected-markers',
                JSON.stringify(map.getSelectedMarkers())
              );
            }
          }
        });
        map.setSelectedRegions( JSON.parse( window.localStorage.getItem('jvectormap-selected-regions') || '[]' ) );
        map.setSelectedMarkers( JSON.parse( window.localStorage.getItem('jvectormap-selected-markers') || '[]' ) );
      };

      initRegionsMap();

      //France elections
      var initFranceMap = function() {
        $.getJSON('assets/js/vendor/jvectormaps/json/france-elections.json', function(data){
          new jvm.WorldMap({
            map: 'fr_merc_en',
            container: $('#france'),
            series: {
              regions: [{
                scale: {
                  '1': '#4169E1',
                  '2': '#FF69B4'
                },
                attribute: 'fill',
                values: data['year2012'].results
              }]
            }
          });
        });
      };

      initFranceMap();

      //Random colors
      var initColorsMap = function() {
        var palette = ['#66C2A5', '#FC8D62', '#8DA0CB', '#E78AC3', '#A6D854'],
          generateColors = function(){
            var colors = {},
                key;

            for (key in map.regions) {
              colors[key] = palette[Math.floor(Math.random()*palette.length)];
            }
            return colors;
          },
          map;

        map = new jvm.WorldMap({
          map: 'es_merc_en',
          container: $('#colors'),
          series: {
            regions: [{
              attribute: 'fill'
            }]
          }
        });
        
        map.series.regions[0].setValues(generateColors());
        
        $('#randomColors').click(function(e){
          e.preventDefault();
          map.series.regions[0].setValues(generateColors());
        });
      };

      initColorsMap();

      //Map of the mall
      var initMallMap = function() {
        $('#mall').vectorMap({
          map: 'mall',
          backgroundColor: 'transparent',
          markers: [{
            coords: [60, 110],
            name: 'Escalator 1',
            style: {fill: 'yellow'}
          },{
            coords: [260, 95],
            name: 'Escalator 2',
            style: {fill: 'yellow'}
          },{
            coords: [434, 95],
            name: 'Escalator 3',
            style: {fill: 'yellow'}
          },{
            coords: [634, 110],
            name: 'Escalator 4',
            style: {fill: 'yellow'}
          }],
          series: {
            regions: [{
              values: {
                F102: 'SPORTS & OUTDOOR',
                F103: 'HOME DECOR',
                F105: 'FASHION',
                F106: 'OTHER',
                F108: 'BEAUTY & SPA',
                F109: 'FASHION',
                F110: 'BEAUTY & SPA',
                F111: 'URBAN FAVORITES',
                F114: 'SERVICES',
                F166: 'DINING',
                F167: 'FASHION',
                F169: 'DINING',
                F170: 'ENTERTAINMENT',
                F172: 'DINING',
                F174: 'DINING',
                F115: 'KIDS STUFF',
                F117: 'LIFESTYLE',
                F118: 'URBAN FAVORITES',
                F119: 'FASHION',
                F120: 'FASHION',
                F122: 'KIDS STUFF',
                F124: 'KIDS STUFF',
                F125: 'KIDS STUFF',
                F126: 'KIDS STUFF',
                F128: 'KIDS STUFF',
                F129: 'LIFESTYLE',
                F130: 'HOME DECOR',
                F132: 'DINING',
                F133: 'SPORTS & OUTDOOR',
                F134: 'KIDS STUFF',
                F135: 'LIFESTYLE',
                F136: 'LIFESTYLE',
                F139: 'KIDS STUFF',
                F153: 'DINING',
                F155: 'FASHION',
                F156: 'URBAN FAVORITES',
                F157: 'URBAN FAVORITES',
                F158: 'LINGERIE & UNDERWEAR',
                F159: 'FASHION',
                F160: 'FASHION',
                F162: 'FASHION',
                F164: 'FASHION',
                F165: 'FASHION',
                FR01: 'REST ROOMS',
                FR02: 'REST ROOMS',
                FR03: 'REST ROOMS',
                FR04: 'REST ROOMS',
                FFC: 'DINING'
              },
              scale: {
                "FASHION": "#2761ad",
                "LINGERIE & UNDERWEAR": "#d58aa3",
                "BEAUTY & SPA": "#ee549f",
                "URBAN FAVORITES": "#15bbba",
                "SPORTS & OUTDOOR": "#8864ab",
                "KIDS STUFF": "#ef4e36",
                "ENTERTAINMENT": "#e47325",
                "HOME DECOR": "#a2614f",
                "LIFESTYLE": "#8a8934",
                "DINING": "#73bb43",
                "REST ROOMS": "#6c260f",
                "SERVICES": "#504d7c",
                "OTHER": "#c7b789"
              }
            }]
          },
          onRegionLabelShow: function(e, el, code){
            if (el.html() === '') {
              e.preventDefault();
            }
          }
        });
      };

      initMallMap();

      //Reverse projection
      var initReverseMap = function() {
        var map,
            markerIndex = 0,
            markersCoords = {};

        map = new jvm.WorldMap({
          map: 'us_lcc_en',
          markerStyle: {
            initial: {
              fill: 'red'
            }
          },
          container: $('#reverse'),
          onMarkerLabelShow: function(e, label, code){
            map.label.text(markersCoords[code].lat.toFixed(2)+', '+markersCoords[code].lng.toFixed(2));
          },
          onMarkerClick: function(e, code){
            map.removeMarkers([code]);
            map.label.hide();
          }
        });

        map.container.click(function(e){
          var latLng = map.pointToLatLng(e.offsetX, e.offsetY),
              targetCls = $(e.target).attr('class');

          if (latLng && (!targetCls || (targetCls && $(e.target).attr('class').indexOf('jvectormap-marker') === -1))) {
            markersCoords[markerIndex] = latLng;
            map.addMarker(markerIndex, {latLng: [latLng.lat, latLng.lng]});
            markerIndex += 1;
          }
        });
      };

      initReverseMap();

      // Resize maps after tab show
      $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {   
        $('.tab-pane').resize();    
        $("html").getNiceScroll().resize();
      });

      //  Initialize tabDrop
      $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});
      
    })
      
    </script>
  </body>
</html>
      