<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include_once('dbconnect_safety.php');
    if(isset($_POST['email'])){
        $stmt = $safetyDb->prepare('INSERT INTO contact(name,email,tel,topic,detail,update_user) VALUES (?,?,?,?,?,?)');
        $result = $stmt->execute(array($_POST['name'],$_POST['email'],$_POST['tel'],$_POST['topic'],$_POST['detail'],$_POST['email']));
        
        $fm = "safety_new@xn--c3cugh2av8euch0i4b2c.com"; // *** ต้องใช้อีเมล์ @yourdomain.com เท่านั้น  ***
        $to = "safety1@topprobooking.com"; // อีเมล์ที่ใช้รับข้อมูลจากแบบฟอร์ม
        $custemail = $_POST['email']; // อีเมล์ของผู้ติดต่อที่กรอกผ่านแบบฟอร์ม
        
        $subj = $_POST['topic'];
        
        /* ------------------------------------------------------------------------------------------------------------- */
        $message = "ชื่อ-นามสกุล: ".$_POST['name']."\n";
        $message.= "อีเมล์: ".$_POST['email']."\n";
        // $message.= "หัวข้อ: ".$_POST['topic']."\n";
        $message.= "เบอร์โทร: ".$_POST['tel']."\n";
        $message.= "รายละเอียด: ".$_POST['detail']."\n";
        /* ------------------------------------------------------------------------------------------------------------- */
        
        /* หากต้องการรับข้อมูลจาก Form แบบไม่ระบุชื่อตัวแปร สามารถรับข้อมูลได้ไม่จำกัด ให้ลบบรรทัด 11-14 แล้วใช้ 19-22 แทน */
            
        // foreach ($_POST as $key => $value) {
        // echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
        // $message.= "Field ".htmlspecialchars($key)." = ".htmlspecialchars($value)."\n";
        // }
        
        $mesg = $message;
        
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = "utf-8"; 
        
        /* ------------------------------------------------------------------------------------------------------------- */
        /* ตั้งค่าการส่งอีเมล์ โดยใช้ SMTP ของ โฮสต์ */
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPAutoTLS = false;
        $mail->SMTPAuth = true;
        // $mail->SMTPSecure = 'ssl'; // บรรทัดนี้ ให้ Uncomment ไว้ เพราะ Mail Server ของโฮสต์ ไม่รองรับ SSL.
        $mail->Host = "mail.xn--c3cugh2av8euch0i4b2c.com"; //ใส่ SMTP Mail Server ของท่าน
        $mail->Port = "587"; // หมายเลข Port สำหรับส่งอีเมล์
        $mail->Username = "safety_new@xn--c3cugh2av8euch0i4b2c.com"; //ใส่ Email Username ของท่าน (ที่ Add ไว้แล้วใน Plesk Control Panel)
        $mail->Password = "LpeM9phOv"; //ใส่ Password ของอีเมล์ (รหัสผ่านของอีเมล์ที่ท่านตั้งไว้)
         
        /* ------------------------------------------------------------------------------------------------------------- */
        
        $mail->SetFrom("$fm", "ระบบหลังบ้านเซฟตี้อินไทย");
        $mail->AddAddress($to);
        $mail->AddReplyTo($custemail);
        $mail->Subject = $subj;
        $mail->Body     = $mesg;
        $mail->WordWrap = 50;  

        if(!$mail->Send() && $result != 1) {
            echo '0';
            // echo 'Message was not sent.';
            // echo 'ยังไม่สามารถส่งเมลล์ได้ในขณะนี้ ' . $mail->ErrorInfo;
        } else {
            // echo 'ส่งเมลล์สำเร็จ';  
            echo '1';
        }
    }
?>