<?php
/**
 * Created by PhpStorm.
 * User: LinhVu
 * Date: 12/5/2019
 * Time: 7:40 PM
 */

/**
 * Class Mod
 * Kế thừa từ class khác bằng cách sử dụng từ khóa extends
 */
class Mod extends Guest{

    public $approve_comment;

    public $manager_guest;

    /**
     * duyệt comment của người dùng
     */
    public function approveComment(){
        echo "<br> duyet comment";
    }

    /**
     * đồng ý hoặc loại người dùng ra khỏi diễn đàn
     */
    public function managerGuest(){
        echo "<br> quan ly nguoi dung dong y hay ban nguoi dung";
    }
}