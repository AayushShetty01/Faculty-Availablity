<?php
  $title = $_POST['title'];
  include 'p1.php';
  $sql = "INSERT INTO todos(title)VALUES('$title')";

  $result = mysqli_query($conn, $sql);
  if(result) {
    header("location:./login.php");
  }
  else {
    echo"Sorry cant connect";
  }
  ?>