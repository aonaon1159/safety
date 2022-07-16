<?php
//ติดต่อฐานข้อมูล MySQL
try {
    $mysql['host'] = 'localhost';//database host
    $mysql['username'] = 'toppro_booking263';//username ที่เชื่อมต่อฐานข้อมูล
    $mysql['password'] = 'jKVY8sRHGW';//password สำหรับ username
    $mysql['database'] = 'toppro_booking263';//ชื่อฐานข้อมูล

    $bookingDb = new PDO("mysql:host=".$mysql['host']."; dbname=".$mysql['database']."",
			$mysql['username'],$mysql['password'],
			[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]); //กำหนดการเชื่อมต่อเป็น utf8

}catch(PDOException $e){//ดักจับ ERROR แล้วเก็บไว้ใน $e
	echo $e->getMessage();# แสดงออกมาหน้าจอ
}
?>