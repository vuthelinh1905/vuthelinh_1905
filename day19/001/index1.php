<?php
/**
 * Created by PhpStorm.
 * User: LinhVu
 * Date: 12/5/2019
 * Time: 6:51 PM
 */
class car{
    /**
     * Khai báo các thuộc tính bên trong class
     * Thuộc tính chỉ ra tính chất đặt điểm cho 1 đối tượng
     * thuộc tính tên, model , khối lượng, giá cả, năm sản xuất
     * nhà sản xuất
     * Thuộc tính ( property )
     */

    public $name;
    public $model;
    public $weight;
    public $price;
    public $year;
    public $manufacture;

    /**
     * Khai báo các phương thức bên trong class
     * Phương thức ( method )
     * chỉ ra hành động cụ thể của 1 đối tượng
     * - khởi động
     * - lái xe
     * - dừng xe
     */
    public  function start (){
        echo"<br> Khoi dong xe";
    }
    public function driver(){
        echo "<br> Lai xe";
    }
    public function stop(){
        echo "<br> Dung xe";
    }

}


// khởi tạo đối tượng từ class bằng từ khóa new
// Muốn truy cập đến thuộc tính $tên_đối_tương->tên_thuộc tính
// Chú ý tên thuộc tính sẽ không $

$mazda = new Car();
$mazda -> name = "mazda cx-5";
$mazda ->model = "cx5";
$mazda -> weight = "1 tấn";
$mazda -> price =1200000;
$mazda -> year = 2019;
$mazda -> manufacture = "mazda";

echo "<pre>";
print_r($mazda);
echo"</pre>";

// gọi đến 1 phương thức trong class

$mazda ->start();
$mazda ->driver();
$mazda ->stop();