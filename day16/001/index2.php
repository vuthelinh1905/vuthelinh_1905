<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    MẢng kết hợp là mảng có 1 key trở lên là chuỗi
</pre>

<?php
    $mobile=["xi"=>"xiaomi","sa"=>"samsung","ip"=>"iphone"];
    $mobile[5]="test";

    echo "<pre>";
    print_r($mobile);
    echo "</pre>";

    echo "<br>" . $mobile["xi"];
    echo "<br>" . $mobile["sa"];
    echo "<br>" . $mobile["ip"];

foreach ($mobile as $key_mobile => $value_mobile){
    echo "<br> Key : " . $key_mobile;
    echo "<br> Value :" .$value_mobile;
}
?>

</body>
</html>