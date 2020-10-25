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
    <div class="container">
        <div class="jumbotron">
            <h2>PHP-CRUD : Display data in php</h2>
            <div class="row">
                <a href="insert.php" class="btn btn-success " style="margin-left:80%;">Add Data</a>
            </div>
            </br>
            <tr>
                <?php 
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, 'php-crud-1');
                    $query = "SELECT * FROM students";
                    $query_run = mysqli_query($connection,$query);
                ?>

                <table class="table table-bordered" style="background-color: White;">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact </th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                    </thead>
                    <?php
                    if($query_run){
                        while($row = mysqli_fetch_array($query_run))
                        {
                            ?>
                    <tbody>
                        <tr>
                            <th><?php  echo $row['id'];?></th>
                            <th><?php echo $row['fname'];?></th>
                            <th><?php echo $row['lname']; ?></th>
                            <th><?php  echo $row['contact'];?></th>
                            <form action="update.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <th><input type="submit" name="edit" class="btn btn-success" value="EDIT"></th>
                            </form>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <th><input type="submit" name="delete" value="DELETE" class="btn btn-danger"></th>
                            </form>
                        </tr>
                    </tbody>

                    <?php
                        }

                    }
                    else{
                        echo "Record not found";
                    }

                ?>
            </tr>

        </div>

        </table>
    </div>
</body>

</html>