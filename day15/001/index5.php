<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<prre>
    mảng là gì
    mảng là kiểu dữ liệu chứa nhiều giá trị
    mảnh trong php được khao báo bởi
    $a=Array();
    trpng php7 thì người ta khai báo bằng cú pháo[]
    $a=[];
    trong mảng sẽ chứa các phần tử
    các phần tử được phân tách bởi dấu ,
    chú ý : không thể in ra các mảng bằng lệnh echo
    trong mảng chứa nhiều phần tử
    mỗi phần tử thig có 2 khái niệm tạo ra 1 phàn tử
    key ( hay còn gọi là chỉ số của phần tử)
    value( giá trị của phần tử)
</prre>
<?php
    //mảng số nguyên
    $a=array(1,2,3,4,6,8,0);
    //mảng số thực
    $b=array(2.1,4.3,5.4,6.3);
    //mảng chỗi
    $c=array("Nguyen van a","Nguyen van b","Nguyen van c");
    //Mảng boolean
    $d=array(true,false);
    //mnagr hỗn hợp
    $e=array(1,5.9,"Nguyen",true);

    //in ra
    echo"<pre>";
    print_r($a);
    echo"</pre>";
//in ra
    echo"<pre>";
    print_r($b);
    echo"</pre>";
//in ra
    echo"<pre>";
    print_r($c);
    echo"</pre>";
//in ra
    echo"<pre>";
    print_r($d);
    echo"</pre>";
//in ra
    echo"<pre>";
    print_r($e);
    echo"</pre>";
?>

</body>
</html>
