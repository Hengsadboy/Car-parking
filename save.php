<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Save the data to a database or file
  // ...
  
  echo 'Registration successful!';
}
?>
