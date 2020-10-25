<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'php-crud-1');

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $query = "DELETE FROM students WHERE id = $id";
    $query_run =mysqli_query($connection,$query);

    if($query_run){
        echo '<script> alert("Successfully deleted");</script>';
        header("location:index.php");
    }
    else{
        echo '<script> alert("Data not deleted");</script>';
    }
}


?>