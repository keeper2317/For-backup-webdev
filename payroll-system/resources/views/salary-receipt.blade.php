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
  <body>

      <!-- CODE HERE -->
      <!-- Page content -->

    <div class="salary-receipt-panel">
      <div class="company-name"> BSIT Company </div>
      <div class="salary-receipt"> Salary Slip </div>

      <table class="empInfo-table-receipt">
        <tr>
          <th>Employee Code: </th>
          <td>0001</td>
          <th>Pay period: </th>
          <td></td>
        </tr>
        <tr>
          <th>Employee Name: </th>
          <td>Jarrell I. Reyes</td> 
          <th>Pay cycle: </th>
          <td></td>
        </tr>
        <tr>
          <th>Title/Position: </th>
          <td>Front end developer</td>
          <th>Code: </th>
          <td>12345678910</td>
        </tr> 
        <tr>
          <th>Bank Details: </th>
          <td></td>
          <th>Tax Number: </th>
          <td></td>
        </tr> 
      </table>

      <div class="payslip">
        <table class="payslip-table-receipt" border="1">
          <tr>
            <th>Earnings</th>
            <th class="amounts">Amounts (Php)</th>  
            <th>Deductions</th>
            <th class="amounts">Amounts (Php)</th>
          </tr>

          <tr>
            <th>Basic Salary</th>
            <td><input class="textbox2" type="number" value="15000" readonly onkeydown="return false"></td> <!-- nakadepende yung default sa CODE ng salary range at position-->
            <th>Late</th>
            <td><input class="textbox2" type="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr>
            <th>Overtime</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Absent</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
          </tr>
          <tr>
            <th>Incentives</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Income Tax</th>
            <td><input  class="textbox2" type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr>
            <th>Allowances</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Withholding Tax</th>
            <td><input class="textbox2"  type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr>
            <th>Bonuses</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>SSS</th>
            <td><input class="textbox2"  type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr>
            <th>Commissions</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Philhealth</th>
            <td><input class="textbox2"  type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr>
            <th>Paid leaves</th>
            <td><input class="textbox2"  type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Pag-ibig</th>
            <td><input class="textbox2"  type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>

          <tr class="total">
            <th>Total Earnings</th>
            <td><input class="textbox2" type="number" value="00000" readonly onkeydown="return false"></td>
            <th>Total Deductions</th>
            <td><input class="textbox2" type ="number" value="00000" readonly onkeydown="return false"></td>
          </tr>
        </table>

        <div class="salPayable-text-receipt">
          Net Salary Payable: 250000
        </div> 
      </div>

    </div>


</body>
    
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
      