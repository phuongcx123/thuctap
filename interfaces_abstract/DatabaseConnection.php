<?php 
// Class trừu tượng
abstract class DatabaseConnection {
   protected $host;
   protected $username;
   protected $password;
   protected $dbname;
    // Phương thức trừu tượng & trong class ta có thể định nghĩa các thuộc tính  , thiết lập các chức năng , nhưng ko đc khởi tạo 
    abstract public function connect();
    // Phương thức ma thuật __destruct để đóng kết nối cơ sở dữ liệu ,Khi đối tượng connect() bị hủy, phương thức __destruct sẽ tự động được gọi
    public function __destruct() {
        $this->disconnect();
    }

    protected function disconnect() {
        echo "Đã đóng kết nối cơ sở dữ liệu.<br>";
    }
   
}