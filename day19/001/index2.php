<?php
/**
 * Created by PhpStorm.
 * User: LinhVu
 * Date: 12/5/2019
 * Time: 6:51 PM
 */
class car
{


    public $name;
    public $model;
    public $weight;
    public $price;
    public $year;
    public $manufacture;

        /*
     * Phương thức khởi tạo
     * chú ý có 2 shift_ liên tiếp
     * Khái niệm của method khởi tạo
     * Phương thức khởi tạo sẽ được gọi ngay khi sử dụng
     * từ khóa new để tạo 1 đối tượng
     * */
    public function __construct($name , $model , $weight , $price , $year , $manufacture)
    {
        echo "<br> Tôi là phương thức khởi tạo tôi được tự dộng gọi khi sử dụng từ khóa new để khỏi tạo đối tượng .";
        /*
         * Lấy giá trị từ tham số truyền vào gán cho các thuộc tính
         * Chú ý : bên trong class khi muốn gọi đến chính class đó
         * thì sẽ sử dụng từ khóa $this
         */
        $this ->name = $name;
        $this ->model = $model;
        $this -> weight = $weight;
        $this ->price = $price;
        $this ->year = $year;
        $this ->manufacture =$manufacture;
    }
    /**
     * Phương thức in ra các thông tin của xe ô tô
     */

    public function getInfo(){
        echo "<br> getInfo";
        echo "<br>" . $this->name;
        echo "<br>" . $this->model;
        echo "<br>" . $this->weight;
        echo "<br>" . $this->price;
        echo "<br>" . $this->year;
        echo "<br>" . $this->manufacture;
    }

}
/**
 * Chú ý phương thức khởi tạo sẽ được tự động gọi
 * khi mà khởi tạo đối tượng
 */
$car1 = new Car("Vinfast", "xl " , "1 tấn" , "1 tỷ" , "2019" , "vin");

//gọi phương thức
$car1->getInfo();