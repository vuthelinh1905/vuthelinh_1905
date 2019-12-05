<?php
/**
 * Created by PhpStorm.
 * User: LinhVu
 * Date: 12/5/2019
 * Time: 7:38 PM
 */
class Guest {

    public $name;
    public $age;
    public $join_created;

    /**
     * method đọc bài viết
     */
    public function viewArticel(){
        echo "<br> xem bai viet";
    }

    /**
     * method để lại bình luận
     */
    public function postComment(){
        echo "<br>Binh luan";
    }
}