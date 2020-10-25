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
            <h2>PHP - CRUD : Add Data</h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="enter first name " require>
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="enter last name" require>
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="number" name="contact" class="form-control" placeholder="enter contact number" require>
                </div>
                <button type="submit" name="Insert" class="btn btn-primary">Save Data</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </form>
            </hr>
        </div>
    </div>

</body>

</html>