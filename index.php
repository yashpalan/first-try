<?php
    include 'connection.php';

    if(isset($_POST['save'])){
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $pass = md5($password);
        $query = "INSERT INTO `demo`(`password`) VALUES ('$pass')";
        $run = mysqli_query($conn, $query);
    
    if($run){
        echo "<script>alert('Saved successfully..')</script>";
    }
    else{
        echo "<script>alert('Saved not successfully..')</script>";
    }
    }

    if(isset($_POST['check1'])){
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $pass = md5($password);
        $query = "SELECT * FROM `demo` WHERE password = '$pass' ";
        $run = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($run);
        $f = mysqli_num_rows($run);

        if($f == 1){
            echo "<script>alert('Correct password..')</script>";
        }
        else{
            echo "<script>alert('Incorrect password..')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .sub{
            font-size: 35px;
            font-weight: 800;
            background-color: blanchedalmond;
            color: blue;
            padding: 20px;
            border: 3px solid black;
            border-radius: 5px;
        }

        .btn{
            background-color: rgb(219, 12, 140);
            color: aliceblue;
            font-size: 30px;
            border: 3px solid black;
            border-radius: 5px;
            padding: 2px 5px;
            cursor: pointer;
        }

        input{
            width: 250px;
            height: 40px;
        }

    </style>
    <title>Yash Palan</title>
</head>
<body>
    <div class="container">
        <div class="sub">
            <form method="post">
                <label for="pass">Password: </label>&nbsp;    
                <input type="text" name="password" id="pass"><br><br>
                <button type="submit" name="save" class="btn">Save</button>&nbsp;&nbsp;
                <button type="submit" name="check1" class="btn">Check</button>
            </form>
        </div>
    </div>
</body>
</html>