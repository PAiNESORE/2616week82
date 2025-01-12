<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex05";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("การเชื่อมต่อฐานข้อมูลมีปัญหา: " . $conn->connect_error);
}
echo "<div class='alert alert-success'>
  <strong>Success!</strong> เชื่อมต่อฐานข้อมูลสำเร็จ
</div>";
?>