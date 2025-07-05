<?php
 
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM cibc WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Account Deleted Successfully";
        header("Location: chris_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account Not Deleted";
        header("Location: chris_index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $balance = mysqli_real_escape_string($con, $_POST['Balance']);
    $title = mysqli_real_escape_string($con, $_POST['Title']);
    $info = mysqli_real_escape_string($con, $_POST['info']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

      $query = "UPDATE cibc SET  id = '$id', Balance='$balance', Title='$title', info='$info', price='$price' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Account Updated Successfully";
        header("Location: chris_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account Not Updated";
        header("Location: chris_index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $balance = mysqli_real_escape_string($con, $_POST['Balance']);
    $title = mysqli_real_escape_string($con, $_POST['Title']);
    $info = mysqli_real_escape_string($con, $_POST['info']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $query = "INSERT INTO cibc VALUES".
"('$id','$balance','$title','$info','$price')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Account Created Successfully";
        header("Location: chris_index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Account Not Created";
        header("Location: chris_index.php");
        exit(0);
    }
}

?>