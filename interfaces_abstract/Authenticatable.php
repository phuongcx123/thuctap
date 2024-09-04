<?php
interface Authenticatable {
    // chỉ đươc định nghĩa các phương thức , và đc được viết các thuộc tính và ko đc khởi tạo 
    public function login();
    public function logout();
}
