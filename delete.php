<?php 
include 'inc/db.php';
$id = $_GET['id'];


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM contact WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location:http://localhost:1234/CRUD_APP/show.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>