<?php
include("./interfaces_abstract/Authenticatable.php");
include("./traits/Logger.php");
// lớp (Class) User 
class User implements  Authenticatable
{
    use Logger;
    // thuộc tính (Object)
    // const khai báo hằng số trong class 
    const ROLE = 'user';
    protected $email;
    private $password;
    protected $username;
    protected $role;
    public static $userCount = 0;
    // self  được sử dụng để tham chiếu đến các thành viên tĩnh của class , con 
    // __construct  tự động khởi tạo đối tượng 
    public function __construct( $username, $password  , $email ,  $role = self::ROLE ) {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
        $this->role = $role;
        self::$userCount++ ; 
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail ($email) {
        $this->email = $email;
    }
    public function getPassword () {
        return $this->password;
    }
    public function setPassword($password) {
       
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    public function getUsername () {
        return $this->username;
    }
    public function setUsername ($username) {
        $this->username = $username;
    }
    public function getRole () {
        return $this->role;
    }
    public function setRole ($role) {
            $this->role = $role;
    }
    
    public function login() {
        echo "{$this->username} đã đăng nhập.<br>";
        $this->logAction("User {$this->username} đã đăng nhập. <br>");
    }

    
    public function logout() {
        echo "{$this->username} đã đăng xuất.<br>";
        $this->logAction("User {$this->username} đã đăng xuất.");
    }

    public function register() {
        echo "{$this->username} đã đăng ký. <br>";
    }
    // Phương thức tĩnh (static method) để lấy số lượng người dùng , và ta có thể gọi trực tiếp = cách Tên class::tên thuộc tính , hàm tĩnh  
    public static function getUserCount() {
        return self::$userCount;
    }

    // Phương thức final không thể bị ghi đè bới các class con nào 
    final public function showRole() {
        echo "Role: " . self::ROLE . "<br>";
    }
    //__call được sd để  Xử lý các phương thức không tồn tại 
    public function __call($method, $args) {
        echo "Phương thức '{$method}' không tồn tại. Tham số: " . implode(', ', $args) . "<br>";
    }
}
