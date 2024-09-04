<?php 
include("./Class/User.php");
include("./Class/Admin.php");
include("./Class/MySQLConnection.php");



// Tạo đối tượng User
$user = new User("user1", "user1@example.com", "password123");
$user->login();
$user->logout();
echo "Total users: " . User::getUserCount() . "<br>";
$user->showRole(); 
$user->undefinedMethod('arg1', 'arg2');
// // Tạo đối tượng Admin
$admin = new Admin("admin1", "admin1@example.com", "adminpass");
$admin->login();
$admin->manageUser($user);
$admin->logout();
echo "Total users: " . User::getUserCount() . "<br>";
$admin->showRole(); 


// tạo đối tượng và kêt nối sql 
$databaseConnection = new MySQLConnection();
$conn = $databaseConnection->connect();