<!DOCTYPE html>
<html>
  <head>
    <title>Minimal 1.3 - Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap-checkbox.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap/bootstrap-dropdown-multilevel.css">

    <link href="assets/css/minimal.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Wrap all page content here -->
    <div id="wrap">
      <!-- Make page fluid -->
      <div class="row">
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


          <div class="inside-block">

            <h1><strong>Welcome</strong> Stranger</h1>


            <form action="/login/process" method="POST" class="form-signin">
              <section>
                @csrf
                @error('admin_uname')
                    <p>
                        {{$message}}
                    </p>
                @enderror
                <div class="input-group">
                  <input type="text" class="form-control" name="admin_uname" placeholder="Username">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control" name="admin_pass" placeholder="Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
              </section>
              <section class="controls">
                <div class="checkbox check-transparent">
                  <input type="checkbox" value="1" id="remember" checked>
                  <label for="remember">Remember me</label>
                </div>
                <a href="login.html#">Forget password?</a>
              </section>
              <section class="log-in">
                <button type="submit" type="submit" class="btn btn-greensea">Log In</button>
                <span>or</span>
                <button type="submit" type="submit" class="btn btn-slategray">
                  <a href="/signup">Create an account</a>
                </button>
              </section>
            </form>
          </div>


        </div>
        <!-- /Page content -->
      </div>
    </div>
    <!-- Wrap all page content end -->
  </body>
</html>
