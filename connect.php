<?php
$servername = "127.0.0.1:3310";  //
$username = "root";
$password = "";
$dbname = "curd_basayer";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "สถานะเซื่อมต่อ DB สำเร็จ";
} catch (PDOException $e) {
    echo "Connection failed". $e->getMessage();
}
?>