<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
        $_GET là 1 mảng
        dữ liệu gửi đi từ form có method="get"
        sẽ hiện ở trên thanh URL còn post không hiện
</pre>

<?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";

    echo "<br>" . $_GET["username"];
    echo "<br>" . $_GET["password"];
    echo "<br>" . $_GET["submit"];
?>

<form name="Login" action="" method="get">
    <p>
        <label>Usernam</label>
        <input name="username" type="text" value="">
    </p>

    <p>
        <label for="">Password</label>
        <input name="password" type="password" value="">
    </p>

    <p>
        <input type="submit" name="submit" value="login">
    </p>
</form>

</body>
</html>
