<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <?php 
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, 'php-crud-1');

    $id = $_POST['id'];
    $query = "SELECT* FROM students WHERE id ='$id' ";
    $qery_run = mysqli_query($connection, $query);

    if($qery_run){
        while($row = mysqli_fetch_array($qery_run)){
            ?>

    <div class="container">
        <div class="jumbotron">
            <h2>PHP - CRUD : Update Data</h2>
            <hr>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="fname" class="form-control" value="<?php echo $row['fname'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control" value="<?php echo $row['lname'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control" value="<?php echo $row['contact'] ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </form>
            </hr>
        </div>
    </div>
    <?php
    if(isset($_POST['update']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contact = $_POST['contact'];

        $query = "UPDATE students SET fname= '$fname', lname = '$lname', contact= '$contact' WHERE id = $id";
        $query_run =  mysqli_query($connection, $query);

        if($query_run){
            echo '<script> alert("Data updated");</script>';
            header('location:index.php');
    }
    else{
        echo '<script> alert("Data not updated");</script>';
    }
} ?>

    <?php
        }

    }
    else{
        echo '<script> alert("Data not found"); </script>';
    }
    ?>
</body>

</html>




