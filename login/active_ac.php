<?php 
session_start();
include 'dbconn.php';

if(isset($_GET['token'])){
          $ac_token = $_GET['token'];

          $updatequery = " update fitness_table set status='active' where token='$ac_token' ";

          $query = mysqli_query($con, $updatequery);

          if ($query) {
                    if (isset($_SESSION['msg'])) {
                             $_SESSION['msg'] = "Account activeted successfully. Login Now";
                             header('location:../dashboard/dashboard.php');
          }else{
                    $_SESSION['msg'] = "Account not Acivated.";
                    header('location:../index.html');
          }

}

}
?>