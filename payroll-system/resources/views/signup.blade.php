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


            <div class="tile-body">

              <form class="form-horizontal" role="form" parsley-validate id="basicvalidations">

                <div class="form-group">
                  <label for="fullname" class="col-sm-4 control-label">Full Name *</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email *</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-type="email" parsley-validation-minlength="1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="website" class="col-sm-4 control-label">Username *</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="website" parsley-trigger="change" parsley-minlength="4" parsley-type="url" parsley-validation-minlength="1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-4 control-label">Password *</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="passwordconfirm" class="col-sm-4 control-label">Password Confirm *</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="passwordconfirm" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1" parsley-equalto="#password">
                  </div>
                </div>


                <div class="form-group form-footer">
                  <div class="col-sm-offset-4 col-sm-8">
                    <button type="cancel" class="btn btn-default">
                      <a href="login.html#"> Cancel </a>
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form>

            </div>
        <!-- /Page content -->
      </div>
    </div>
    <!-- Wrap all page content end -->
  </body>
</html>
