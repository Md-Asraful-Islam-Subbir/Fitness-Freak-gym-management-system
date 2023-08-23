<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Fitness Freak</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap4.min.css">
    </head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px; height:450px;"></div>	

 <div class="container">
<div class="card"style="margin-left:-10rem;width:90rem;">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light " style="margin-left:3rem;">Go Back</a>
             </div>
             <div class="col-md-3"style="margin-left:3rem;"><h3>Payment Details</h3></div>
             <div class="col-md-8">
         <form class="form-group" action="patient_search.php" method="post">
          <div class="row">
              
                 </form></div></div></div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
    <table class="table table-hover" id="example">
    <button type="button">Report</button> <br>
        <thead>
     <tr>
            <th>Name </th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip No</th>
            <th>Name on card</th>
            <th>Credit card number</th>
            <th>Month</th>
            <th>Year</th>
            <th>Amount</th>
           <!-- <th>Customer Name</th>-->
         
        </tr>   
        </thead>
        
        <tbody>
          <?php get_payment(); ?>
        </tbody>
       
    </table>
    <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
    <br><br>
                <h3>Make new Payment</h3>
                </div> 
                <div class="card-body">
                <form class="form-group" action="func.php" method="post">
 
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>Email</label>
                    <input type="text" name="Email" class="form-control"><br>
                    <label>Address</label>
                    <input type="text" name="Address" class="form-control"><br> 
                    <label>City</label>
                    <input type="text" name="City" class="form-control"><br>
                    <label>State</label>
                    <input type="text" name="State" class="form-control"><br>
                    <label>Zip</label>
                    <input type="text" name="Zip" class="form-control"><br> 
                    <label>Name On Card</label>
                    <input type="text" name="NameOnCard" class="form-control"><br>
                    <label>Credit Card Number</label>
                    <input type="text" name="CreditCardNumber" class="form-control"><br>
                    <label>Month</label>
                    <input type="text" name="Month" class="form-control"><br> 
                    <label>Year</label>
                    <input type="text" name="Year" class="form-control"><br>
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control"><br>
</div>
<input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
         </div>
     </div>
    </div>

    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
    
    <script src=" https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'pdf', 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
</html>