<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <pre>
        Mảng đa chiều;
    </pre>
    <?php
    $vietnam=[];
    $vietnam["hn"]=[
        "province"=>"Hà Nội",
        "district"=>[
            "tx"=>"Thanh Xuân",
            "hk"=>"Hoàn Kiếm",
            "th"=>"Tây Hồ",
        ]
    ];
    $vietnam["hcm"]=[
        "province"=>"Hồ Chí Minh",
        "district"=>[
            "td"=>"Thủ Đức",
            "1"=>"Quận 1",
            "2"=>"Quận 2",
        ]
    ];

    echo"<pre>";
    print_r($vietnam);
    echo"</pre>";

    echo "<br>" . $vietnam["hn"]["province"];
    echo "<br>" . $vietnam["hn"]["district"]["tx"];
    echo "<br>" . $vietnam["hcm"]["province"];
    echo "<br>" . $vietnam["hcm"]["district"]["td"];

    foreach($vietnam as $key_province => $value_province){
        echo "<br> - " . $value_province["province"];
        foreach ($value_province["district"] as $key_district => $value_district){
            echo "<br> --" .$key_district . " - " . $value_district;
        }
    }

    ?>

</body>
</html>
