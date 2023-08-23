<?php

$host = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "fitness freak";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // Check if the form has been submitted
  if (isset($_POST['login_submit'])) {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // Prepare the SQL statement
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
  
    // Bind parameters and execute the statement
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
  
    if (mysqli_stmt_execute($stmt)) {
      $result = mysqli_stmt_get_result($stmt);
      if (mysqli_num_rows($result) == 1) {
        // User exists, display welcome message
        echo "<script>window.open('admin-panel.php','_self')</script>";
      }
       else {
        // User doesn't exist, display error message
        echo "Invalid email or password.";
      }
    } else {
      // Error executing the statement
      echo "Error: " . mysqli_error($conn);
    }
  
    // Close the statement
    mysqli_stmt_close($stmt);
  }
  
  // Close the connection
  mysqli_close($conn);