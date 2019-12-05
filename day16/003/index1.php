<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
        Khi mà thuộc tính action="" của form
        thì có nghĩa là form khi submit dữ liệu
        sẽ gửi đến đường dẫn URL hiện tại
        $_POST là 1 mảng
</pre>

<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<br>" . $_POST["Username"];
    echo "<br>" . $_POST["Password"];
    echo "<br>" . $_POST["submit"];
?>

<form name="Login" action="" method="post">
    <p>
        <label>Usernam</label>
        <input name="Username" type="text" value="">
    </p>

    <p>
        <label for="">Password</label>
        <input name="Password" type="password" value="">
    </p>

    <p>
        <input type="submit" name="submit" value="login">
    </p>
</form>

</body>
</html>
