<?php
include_once('../dbconnect_booking.php');
session_start();

$UName = trim($_POST['UName']);
$Password = trim($_POST['Password']);

if (isset($_POST['Login'])) {
    if (empty($_POST['UName']) || empty($_POST['Password'])) {
        header("location:login");
    } else {
        $sql = "SELECT * FROM `user` where `Username` = ? and `Password` = ?";
        $stmt = $bookingDb->prepare($sql);
        $stmt->execute(array($UName,$Password));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($row = $result[0]) {
            $_SESSION['id_user'] = $row["id_user"];
            $_SESSION['img'] = $row["profile"];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['status'] = $row['status'];
            $_SESSION['permission'] = $row['permission'];
            $_SESSION['loginstatus'] = $row['loginstatus'];
            
            if($_SESSION['recent_url'] != ""){//ถ้ามีการเข้าหน้าอื่นก่อน login ให้กลับไปหน้าเดิม
                $recent_url = "location:" . $_SESSION['recent_url'];
            }
            else{
                $recent_url = "location:index";
            }
            header($recent_url);
        } else {
            header("location:login");
        }
    }
} 
 ?>