<?php
    include 'dbcorn.php';
    $id=$_GET['id'];
   $qry="DELETE FROM `user` WHERE `id`='$id'";
   $run=mysqli_query($link,$qry);
   header("Location: index.php");
?>