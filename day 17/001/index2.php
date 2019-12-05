<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<form name="login" action="" method="post">
    <p>
        <label>Username </label>
        <input name="username" type="text" value="">
    </p>

    <p>
        <label for="">Password</label>
        <input name="password" type="password" value="">
    </p>

    <p>
        <input type="submit" name="submit" value="login">
    </p>
    <?php
    $username="";
    $password="";

    if (isset($_POST[username]) && isset($_POST["username"])){
        if (($_POST["username"] != "") && ($_POST["password"])){

            $username =$_POST["username"];
            $password = $_POST["password"];
            if ($username == "admin" && $password=="123456"){

            }

        }
    }

    ?>
</form>




</body>
</html>
