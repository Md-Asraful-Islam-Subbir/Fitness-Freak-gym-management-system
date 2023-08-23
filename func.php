<?php
$con = mysqli_connect("localhost", "root", "", "fitness freak");
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    if(empty($fname) || empty($lname) || empty($email)||empty($contact)||empty($docapp))
    {
        echo "<script>alert('Please fill in all the required fields.')</script>";
        echo "<script>window.open('entryform.php','_self')</script>";
    }
    else{
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Registration Successful !')</script>";
        echo "<script>window.open('entryform.php','_self')</script>";
    }
    } 
}
    if(isset($_POST['tra_submit']))
    {
        $Trainer_id=$_POST['Trainer_id'];
        $Name=$_POST['Name'];
        $phone=$_POST['phone'];
        if(empty($Trainer_id) || empty($Name) || empty($phone))
    {
        echo "<script>alert('Please fill in all the required fields.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    else{
        $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Trainer added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
    }
        if(isset($_POST['ins_submit']))
    {
        $Instrument_id=$_POST['Instrument_id'];
        $Name=$_POST['Name'];
        $Quantity=$_POST['Quantity'];
        if(empty($Instrument_id) || empty($Name) || empty($Quantity))
    {
        echo "<script>alert('Please fill in all the required fields.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    else{
        $query="insert into Instrument(Instrument_id,Name,Quantity)values('$Instrument_id','$Name','$Quantity')";
         $result=mysqli_query($con,$query);
        if($result)
        {
          echo "<script>alert('Instrument added.')</script>";
            echo "<script>window.open('admin-panel.php','_self')</script>";
        }
        } 
    }
    if (isset($_POST['tk_submit'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Zip = $_POST['Zip'];
        $NameOnCard = $_POST['NameOnCard'];
        $CreditCardNumber = $_POST['CreditCardNumber'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $Amount = $_POST['Amount'];
    
        if (empty($Name) || empty($Email) || empty($Address) || empty($City) || empty($State) || empty($Zip) || empty($NameOnCard) || empty($CreditCardNumber) || empty($Month) || empty($Year) || empty($Amount)) {
            echo "<script>alert('Please fill in all the required fields.')</script>";
            echo "<script>window.open('paymentGateway.php','_self')</script>";
        } else {
            $query = "INSERT INTO payment (Name,Email,Address,City,State,Zip,  `Name On Card`, `Credit Card Number`, Month, Year, Amount) VALUES ('$Name', '$Email', '$Address', '$City', '$State', '$Zip', '$NameOnCard', '$CreditCardNumber', '$Month', '$Year', '$Amount')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<script>alert('Payment successful.')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }
    if (isset($_POST['pay_submit'])) {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Zip = $_POST['Zip'];
        $NameOnCard = $_POST['NameOnCard'];
        $CreditCardNumber = $_POST['CreditCardNumber'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $Amount = $_POST['Amount'];
    
        if (empty($Name) || empty($Email) || empty($Address) || empty($City) || empty($State) || empty($Zip) || empty($NameOnCard) || empty($CreditCardNumber) || empty($Month) || empty($Year) || empty($Amount)) {
            echo "<script>alert('Please fill in all the required fields.')</script>";
            echo "<script>window.open('payment.php','_self')</script>";
        } else {
            $query = "INSERT INTO payment (Name,Email,Address,City,State,Zip,  `Name On Card`, `Credit Card Number`, Month, Year, Amount) VALUES ('$Name', '$Email', '$Address', '$City', '$State', '$Zip', '$NameOnCard', '$CreditCardNumber', '$Month', '$Year', '$Amount')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<script>alert('Payment successful.')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        }
    }
    
 function get_patient_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
         $fname=$row ['fname'];
    $lname=$row['lname'];
    $email=$row['email'];
    $contact=$row['contact'];
    $docapp=$row['docapp'];
      echo "<tr>
          <td>$fname</td>
        <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
          <td>$docapp</td>
        </tr>";
    }
}
function get_package(){
    global $con;
    $query="select * from Package";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Package_id=$row ['Package_id'];
        $Package_name=$row['Package_name'];
        $Amount=$row['Amount'];
        echo"<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer(){
    global $con;
    $query="select * from Trainer";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Trainer_id=$row ['Trainer_id'];
        $Name=$row['Name'];
        $phone=$row['phone'];
        echo"<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_instrument(){
  global $con;
  $query="select * from Instrument";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){
      $Instrument_id=$row ['Instrument_id'];
      $Name=$row['Name'];
      $Quantity=$row['Quantity'];
      echo"<tr>
      <td>$Instrument_id</td>
      <td>$Name</td>
          <td>$Quantity</td>
          
      </tr>";

  }
}
function get_payment(){
    global $con;
    $query="select * from payment";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
        $Name= $row ['Name'];
        $Email= $row['Email'];
        $Address = $row['Address'];
        $City = $row['City'];
        $State = $row['State'];
        $Zip = $row['Zip'];
        $NameOnCard = $row['Name On Card'];
        $CreditCardNumber = $row['Credit Card Number'];
        $Month = $row['Month'];
        $Year = $row['Year'];
        $Amount = $row['Amount'];
        
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$Name </td>
            <td>$Email</td>
            <td>$Address</td>
            <td>$City</td>
            <td>$State</td>
            <td>$Zip No</td>
            <td>$NameOnCard</td>
            <td>$CreditCardNumber</td>
            <td>$Month</td>
            <td>$Year</td>
            <td>$Amount</td>
        
            </tr>";

    }
}

?>



