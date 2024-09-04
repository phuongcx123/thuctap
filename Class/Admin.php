<?php
require_once("Class/User.php");


//   Tính chất kế thừa  , Và từ khóa để kế thùa là extends
class Admin extends User
{
     const ROLE = 'admin';
    // Tính chất đóng gói 
    private  $chek = false;
    public function __construct($username, $email, $password)
    {
        parent::__construct($username, $email, $password, self::ROLE);
    }
    // Đa hình: Ghi đè phương thức login
    public function login()
    {

        if ($this->getRole() === 'admin') {
            $this ->  chek = true;
            echo "{$this->getUsername()} đã đăng nhập với quyền quản trị. <br>";
        } else {
            echo "Không có quyền truy cập.";
        }
    }

    public function manageUser($user)
    {
        if ( $this -> chek) {
            echo "Admin {$this->getUsername()} đang quản lý người dùng {$user->getUsername()}. <br>";
        }else {
            echo "Không có quyền truy cập.";
        }
       
    }
}
