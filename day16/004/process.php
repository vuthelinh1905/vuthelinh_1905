<?php
echo "Đây là process";
echo "pre";
print_r($_POST);
echo "/pre";

if (isset($_POST[username]) && isset($_POST["username"])){
    if (($_POST["username"] != "") && ($_POST["password"])){

        $username =$_POST["username"];
        $password = $_POST["password"];
        if ($username == "admin" && $password=="123456"){
            header("Location : suc");
            exit();
        }
    }
}
header("Location: index1.php?message=Username hay password không đùng");
exit();