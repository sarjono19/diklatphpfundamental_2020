<?php

include_once('koneksidatabase.php');

$id=$_GET['id'];

$result = mysqli_query($connect, "DELETE FROM user WHERE id=$id");

header('location:viewdatabase.php');

?>