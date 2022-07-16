<?php
//ติดต่อฐานข้อมูล MySQL
try {
    $mysql['host'] = 'localhost';//database host
    $mysql['username'] = 'safe_safety';//username ที่เชื่อมต่อฐานข้อมูล
    $mysql['password'] = 'o8nZFi1G2';//password สำหรับ username
    $mysql['database'] = 'safe_safety';//ชื่อฐานข้อมูล

    $safetyDb = new PDO("mysql:host=".$mysql['host']."; dbname=".$mysql['database']."",
			$mysql['username'],$mysql['password'],
			[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]); //กำหนดการเชื่อมต่อเป็น utf8

}catch(PDOException $e){//ดักจับ ERROR แล้วเก็บไว้ใน $e
	echo $e->getMessage();# แสดงออกมาหน้าจอ
}
?>