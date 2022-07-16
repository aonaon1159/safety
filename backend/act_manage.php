<?php
include_once('../dbconnect_booking.php'); 
include_once('../dbconnect_safety.php'); 
include_once('../base_url.php');
session_start();

if(isset($_GET['action'])){
    if($_GET['action'] == "manage_banner")// เพิ่ม แก้ไข Banner
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }

        $status_upload = true;
        if($_FILES['imgBanner']['name']!=null){
            setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย
            $path_parts=pathinfo(basename($_FILES['imgBanner']['name']));
            $new_img_name='banner-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/banner/'.$new_img_name;
            $path = "/img/banner/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['imgBanner']['tmp_name'],$upload_path);
        }
        
        if($status_upload){
            if($id_banner != ""){
                if(isset($path)){
                    $stmt = $safetyDb->prepare('UPDATE banner SET name = ?, path = ?, alt = ?, url = ?, startDate = ?, endDate = ?, update_time = NOW(), update_user = ? WHERE id_banner = ?');
                    $result = $stmt->execute(array($name,$path,$alt,$url,$startDate,$endDate,$_SESSION['name'],$id_banner));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE banner SET name = ?, alt = ?, url = ?, startDate = ?, endDate = ?, update_time = NOW(), update_user = ? WHERE id_banner = ?');
                    $result = $stmt->execute(array($name,$alt,$url,$startDate,$endDate,$_SESSION['name'],$id_banner));
                }
            }
            else{
                $sql = 'SELECT MAX(sequence) FROM banner WHERE del = "false"';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute();
                $max_sequence = $stmt->fetchColumn();
            
                $stmt = $safetyDb->prepare('INSERT INTO banner(name,path,alt,url,startDate,endDate,update_user,sequence) VALUES (?,?,?,?,?,?,?,?)');
                $result = $stmt->execute(array($name,$path,$alt,$url,$startDate,$endDate,$_SESSION['name'],$max_sequence+1));
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_banner")// เปลี่ยนสถานะ Banner
    {
        $id_banner = $_POST['id_banner'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE banner SET status = ?, update_time = NOW(), update_user = ? WHERE id_banner = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_banner));
        echo $result;
    }

    if($_GET['action'] == "del_banner")// ลบ Banner
    {
        $id_banner = $_POST['id_banner'];
        $stmt = $safetyDb->prepare('UPDATE banner SET del = "true", update_time = NOW(), update_user = ? WHERE id_banner = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_banner));
        echo $result;
    }

    if($_GET['action'] == "manage_promotion")// เพิ่ม แก้ไข Promotion
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }

        $status_upload = true;
        if($_FILES['imgPromotion']['name']!=null){
             setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย;
            $path_parts=pathinfo(basename($_FILES['imgPromotion']['name']));
            $new_img_name='promotion-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/promotion/'.$new_img_name;
            $path = "/img/promotion/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['imgPromotion']['tmp_name'],$upload_path);
        }
        
        if($status_upload){
            if($id_promotion != ""){
                if(isset($path)){
                    $stmt = $safetyDb->prepare('UPDATE promotion SET name = ?, alt = ?, path = ?, url = ?, startDate = ?, endDate = ?, update_time = NOW(), update_user = ? WHERE id_promotion = ?');
                    $result = $stmt->execute(array($name,$alt,$path,$url,$startDate,$endDate,$_SESSION['name'],$id_promotion));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE promotion SET name = ?, alt = ?, url = ?, startDate = ?, endDate = ?, update_time = NOW(), update_user = ? WHERE id_promotion = ?');
                    $result = $stmt->execute(array($name,$alt,$url,$startDate,$endDate,$_SESSION['name'],$id_promotion));
                }
            }
            else{
                $sql = 'SELECT MAX(sequence) FROM promotion WHERE del = "false"';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute();
                $max_sequence = $stmt->fetchColumn();
            
                $stmt = $safetyDb->prepare('INSERT INTO promotion(name,alt,path,url,startDate,endDate,update_user,sequence) VALUES (?,?,?,?,?,?,?,?)');
                $result = $stmt->execute(array($name,$alt,$path,$url,$startDate,$endDate,$_SESSION['name'],$max_sequence+1));
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_promotion")// เปลี่ยนสถานะ Promotion
    {
        $id_promotion = $_POST['id_promotion'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE promotion SET status = ?, update_time = NOW(), update_user = ? WHERE id_promotion = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_promotion));
        echo $result;
    }

    if($_GET['action'] == "del_promotion")// ลบ Promotion
    {
        $id_promotion = $_POST['id_promotion'];
        $stmt = $safetyDb->prepare('UPDATE promotion SET del = "true", update_time = NOW(), update_user = ? WHERE id_promotion = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_promotion));
        echo $result;
    }

    if($_GET['action'] == "manage_gallery")// เพิ่ม แก้ไข Gallery
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }

        $allDate["date"] = [];
        foreach($date_gallery as $key => $value){
            $allDate["date"][] = date("Y-m-d", strtotime($value));//แปลงรูปแบบวันที่ให้สามารถเก็บในฐานข้อมูลได้
        }
        $allDate["date"] = array_unique($allDate["date"]);
        sort($allDate["date"]);
        $allDate = json_encode($allDate,JSON_UNESCAPED_UNICODE);

        if($_FILES['imgGallery']['name'][0]!=null){
            if($id_gallery != ""){//กรณีแก้ไข gallery
                $sql = 'SELECT id_gallery FROM gallery WHERE id_group = ? ORDER BY id_gallery LIMIT 1';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute(array($id_gallery));
                $name_folder = $stmt->fetchColumn();
                $folder = 'gallery_'. $name_folder;
                
                $sql = 'SELECT sequence FROM gallery WHERE id_group = ? AND del = "false" ORDER BY sequence DESC LIMIT 1';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute(array($id_gallery));
                $sequence = $stmt->fetchColumn();

                $album_id = $id_gallery;
            }else{
                $stmt = $safetyDb->prepare('INSERT INTO gallery(id_provinces,type,topic_training,sequence,update_user) VALUES (?,?,?,?,?)');
                $result = $stmt->execute(array($sl_province,$sl_type,$sl_topic_training,1,$_SESSION['name']));
                $album_id = $safetyDb->lastInsertId();

                $folder = 'gallery_'. $album_id;

                if(!file_exists("../img/gallery/" .$folder)) mkdir("../img/gallery/" . $folder);

                $sequence = 0;
            }

            foreach($_FILES['imgGallery']['name'] as $key => $value){
                
                if(strpos($_FILES['imgGallery']['name'][$key], '.jpeg') !== false){
                    $name = substr($_FILES['imgGallery']['name'][$key],0, -4);
                }else{
                    $name = substr($_FILES['imgGallery']['name'][$key],0, -4);
                }

                $new_img_name=$_FILES['imgGallery']['name'][$key];
                $upload_path='../img/gallery/' . $folder . "/" . $new_img_name;
                $path = "/img/gallery/" . $folder . "/" .$new_img_name;
                $status_upload = move_uploaded_file($_FILES['imgGallery']['tmp_name'][$key],$upload_path);
                if($status_upload){
                    ++$sequence;
                    if($key == 0 && $id_gallery == ""){//หากเป็นรูปแรกให้ทำการอัพเดท เนื่องจากมีการ insert ชุดข้อมูลเพื่อหาเลขไอดีมาก่อนแล้ว
                        $stmt = $safetyDb->prepare('UPDATE gallery SET id_group = ?, name = ?, path = ?, alt = ? ,date = ?,update_user = ? WHERE id_gallery = ?');
                        $result = $stmt->execute(array($album_id,$name,$path,$alt,$allDate,$_SESSION['name'],$album_id));
                    }else{
                        $stmt = $safetyDb->prepare('INSERT INTO gallery(id_provinces,id_group,type,topic_training,name,path,alt,sequence,date,update_user) VALUES (?,?,?,?,?,?,?,?,?,?)');
                        $result = $stmt->execute(array($sl_province,$album_id,$sl_type,$sl_topic_training,$name,$path,$alt,$sequence,$allDate,$_SESSION['name']));
                    }
                }
            }
        }else{
            if($id_gallery != ""){
                $stmt = $safetyDb->prepare('UPDATE gallery SET id_provinces = ?,type = ?, topic_training = ?, alt = ?, date = ?, update_time = NOW(), update_user = ? WHERE id_group = ?');
                $result = $stmt->execute(array($sl_province,$sl_type,$sl_topic_training,$alt,$allDate,$_SESSION['name'],$id_gallery));
            }
        }
        echo $result;
    }

    if($_GET['action'] == "change_status_gallery")// เปลี่ยนสถานะ Gallery
    {
        $id_gallery = $_POST['id_gallery'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE gallery SET status = ?, update_time = NOW(), update_user = ? WHERE id_gallery = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_gallery));
        echo $result;
    }

    if($_GET['action'] == "del_gallery")// ลบ Gallery
    {
        $id_gallery = $_POST['id_gallery'];

        $stmt = $safetyDb->prepare('UPDATE gallery SET del = "true", update_time = NOW(), update_user = ? WHERE id_gallery = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_gallery));

        $stmt = $safetyDb->prepare('UPDATE gallery SET del = "true", update_time = NOW(), update_user = ? WHERE id_group = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_gallery));
        echo $result;
    }

    if($_GET['action'] == "sort_plan")// จัดลำดับ Plan
    {
        $id_plan = $_POST['id_plan'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE plan SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_plan = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_plan));
        echo $result;
    }

    if($_GET['action'] == "sort_banner")// จัดลำดับ Banner
    {
        $id_banner = $_POST['id_banner'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE banner SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_banner = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_banner));
        echo $result;
    }

    if($_GET['action'] == "sort_promotion")// จัดลำดับ Promotion
    {
        $id_promotion = $_POST['id_promotion'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE promotion SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_promotion = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_promotion));
        echo $result;
    }

    if($_GET['action'] == "sort_gallery")// จัดลำดับ Gallery
    {
        $id_gallery = $_POST['id_gallery'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE gallery SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_gallery = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_gallery));
        echo $result;
    }

    if($_GET['action'] == "sort_article")// จัดลำดับ Article
    {
        $id_article = $_POST['id_article'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE article SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_article = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_article));
        echo $result;
    }

    if($_GET['action'] == "sort_training_inhouse")// จัดลำดับ Training Inhouse
    {
        $id_training_inhouse = $_POST['id_training_inhouse'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE training_inhouse SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_training_inhouse = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_training_inhouse));
        echo $result;
    }

    if($_GET['action'] == "sort_training_public")// จัดลำดับ Training public
    {
        $id_training_public = $_POST['id_training_public'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE training_public SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_training_public = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_training_public));
        echo $result;
    }

    if($_GET['action'] == "sort_menu_training")// จัดลำดับ Menu Training
    {
        $id_menu_training = $_POST['id_menu_training'];
        $sequence = $_POST['sequence'];
        $stmt = $safetyDb->prepare('UPDATE menu_training SET sequence = ?, update_time = NOW(), update_user = ? WHERE id_menu_training = ?');
        $result = $stmt->execute(array($sequence,$_SESSION['name'],$id_menu_training));
        echo $result;
    }

    if($_GET['action'] == "change_group_gallery")// เปลี่ยน id_group
    {
        $old_id_gallery = $_POST['old_id_gallery'];
        $new_id_gallery = $_POST['new_id_gallery'];
        $stmt = $safetyDb->prepare('UPDATE gallery SET id_group = ?, update_time = NOW(), update_user = ? WHERE id_group = ?');
        $result = $stmt->execute(array($new_id_gallery,$_SESSION['name'],$old_id_gallery));
        echo $result;
    }

    if($_GET['action'] == "manage_article")// เพิ่ม แก้ไข Article
    {
        /* make a URL small */
        function get_bitly_short_url($long_url) {
            $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
            $genericAccessToken = '4e4336e06a409d1e16240a228e32681ba44fce99'; 

            $data = array(
                'long_url' => $long_url
            );
            $payload = json_encode($data);

            $header = array(
                'Authorization: Bearer ' . $genericAccessToken,
                'Content-Type: application/json',
                'Content-Length: ' . strlen($payload)
            );

            $ch = curl_init($apiv4);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            $resultToJson = json_decode($result);

            if (isset($resultToJson->link)) {
                return $resultToJson->link;
            }
            else {
                return 'Not found';
            }
        }
        /* make a URL small */
        
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        if($tag != ""){
            $arr_tag['tags'] = explode(',', $tag);//เก็บข้อมูล tag
            $allTag = json_encode($arr_tag,JSON_UNESCAPED_UNICODE);
        }
        else{
            $allTag = null;
        }

        $long_url = $base_url . "/article_detail?article=" . $topic;
        $shortlink = ($short_url) ? $short_url : get_bitly_short_url($long_url);
        
        if($id_article != ""){
            $stmt = $safetyDb->prepare('UPDATE article SET topic = ?,shortlink = ?, tag = ?,meta_keyword = ?,meta_description = ?,id_promotion = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_article = ?');
            $result = $stmt->execute(array($topic,$shortlink,$allTag,$meta_keyword,$meta_description,$sl_promotion,$alt,$_SESSION['name'],$id_article));
            $last_id = $id_article;
        }
        else{
            $sql = 'SELECT MAX(sequence) FROM article WHERE del = "false"';
            $stmt = $safetyDb->prepare($sql);
            $stmt->execute();
            $max_sequence = $stmt->fetchColumn();
            $max_sequence = $max_sequence+1;
            
            $stmt = $safetyDb->prepare('INSERT INTO article(topic,shortlink,tag,meta_keyword,meta_description,id_promotion,alt,update_user,sequence) VALUES (?,?,?,?,?,?,?,?,?)');
            $result = $stmt->execute(array($topic,$shortlink,$allTag,$meta_keyword,$meta_description,$sl_promotion,$alt,$_SESSION['name'],$max_sequence));
            $last_id = $safetyDb->lastInsertId();
        }

        //สร้างโฟลเดอร์
        $folder = 'article_'. $last_id;
        if(!file_exists("../img/article/" .$folder)) mkdir("../img/article/" . $folder);

        $status_upload = true;
        if($_FILES['cover_img']['name']!=null){
            setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย
            $path_parts=pathinfo(basename($_FILES['cover_img']['name']));
            $new_img_name='cover-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/article/'. $folder ."/".$new_img_name;
            $cover_img = "/img/article/". $folder ."/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['cover_img']['tmp_name'],$upload_path);
        }

        //แปลงและจัดเก็บรูปภาพจากข้อมูลของ plugin summernote
        if (strpos($content, '<img') !== false) {

            if($id_article != ""){//กรณีแก้ไข article
                // ตรวจสอบว่ามีรูป article อยู่แล้วหรือไม่ถ้ามีให้ทำการลบ
                $stmt = $safetyDb->prepare('DELETE FROM article_img WHERE id_article = ?');
                $stmt->execute(array($id_article));
            }

            $doc = new DOMDocument();
            $doc->loadHTML($content);
            $metas = $doc->getElementsByTagName('meta');
            if(!count($metas)){
                $doc->loadHTML('<meta http-equiv="Content-Type" content="charset=utf-8" />' . $content);
            }
            $tags = $doc->getElementsByTagName('img');
            
                foreach ($tags as $tag) {
                    if(strpos($tag->getAttribute('src'), ';base64') !== false){//ตรวจสอบว่ารูปเป็น base64 หรือไม่
                        // Get base64 encoded string
                        $srcStr = $tag->getAttribute('src');
                        $base64EncData = substr($srcStr, ($pos = strpos($srcStr, 'base64,')) !== false ? $pos + 7 : 0);
                        $base64EncData = substr($base64EncData, 0, -1);
                
                        // Get an image file
                        $img = base64_decode($base64EncData);
                
                        // Get file type
                        $dataInfo = explode(";", $srcStr)[0];
                        $fileExt = str_replace('data:image/', '', $dataInfo);
                
                        // Get name image
                        $nameImg = $tag->getAttribute('data-filename');

                        // Create a new filename for the image
                        $filename = "article-" . $nameImg;

                        $tag->removeAttribute('data-filename');
                    }else{
                        $src = urldecode($tag->getAttribute('src'));

                        // Get an image file
                        if(!file_exists('../img/article/'. $folder ."/". basename($src))){
                            $img = file_get_contents($src);
                        }
                        else{
                            $img = file_get_contents('../img/article/'. $folder ."/". basename($src));
                        }
                        // Get name image
                        $nameImg = pathinfo(basename($src), PATHINFO_FILENAME);
                        
                        // Create a new filename for the image
                        if(!file_exists('../img/article/'. $folder ."/". basename($src))){
                            $filename = "article-" . basename($src);
                        }
                        else{
                            $filename = basename($src);
                        }
                    }

                    $file = '../img/article/'. $folder ."/". $filename;
                    
                    // Save the image to disk
                    $imgUrl = "/img/article/". $folder ."/". $filename;
                    $success = file_put_contents($file, $img);
                    if($success){//เก็บข้อมูลรูปลงฐานข้อมูล
                        $stmt = $safetyDb->prepare('INSERT INTO article_img(id_article,name,path) VALUES (?,?,?)');
                        $result = $stmt->execute(array($last_id,$nameImg,$imgUrl));
                    }
                    $tag->setAttribute('data-src', $imgUrl);
                    $tag->removeAttribute('src');
                    $tag->setAttribute('class', "lazy");
                }            
            $content = $doc->saveHTML();
        }
        //เก็บข้อมูลที่แปลงจาก summernote ใส่ฐานข้อมูล
        if($status_upload){
            if(isset($cover_img)){
                $stmt = $safetyDb->prepare('UPDATE article SET cover_img = ?,content = ?, update_time = NOW() WHERE id_article = ?');
                $result = $stmt->execute(array($cover_img,$content,$last_id));   
                echo $result;
            }
            else{
                $stmt = $safetyDb->prepare('UPDATE article SET content = ?, update_time = NOW() WHERE id_article = ?');
                $result = $stmt->execute(array($content,$last_id));   
                echo $result;
            }
        }
    }

    if($_GET['action'] == "manage_comment")// เพิ่ม aricle comment
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }

        $stmt = $safetyDb->prepare('INSERT INTO article_comment(id_article,name_commenter,comment) VALUES (?,?,?)');
        $result = $stmt->execute(array($id_article,$name_commenter,$comment));
        echo $result;
    }
    
    if($_GET['action'] == "del_comment")// ลบ aricle comment
    {
        $id_article_comment = $_POST['id_article_comment'];
        $stmt = $safetyDb->prepare('UPDATE article_comment SET del = "true", update_time = NOW(), update_user = ? WHERE id_article_comment = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_article_comment));
        echo $result;
    }

    if($_GET['action'] == "change_status_article")// เปลี่ยนสถานะ Article
    {
        $id_article = $_POST['id_article'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE article SET status = ?, update_time = NOW(), update_user = ? WHERE id_article = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_article));
        echo $result;
    }

    if($_GET['action'] == "change_recommend_article")// เปลี่ยนสถานะบทความแนะนำ
    {
        $id_article = $_POST['id_article'];
        $recommend = ($_POST['recommend'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE article SET recommend = ?, update_time = NOW(), update_user = ? WHERE id_article = ?');
        $result = $stmt->execute(array($recommend,$_SESSION['name'],$id_article));
        echo $result;
    }

    if($_GET['action'] == "del_article")// ลบ Article
    {
        $id_article = $_POST['id_article'];
        $stmt = $safetyDb->prepare('UPDATE article SET del = "true", update_time = NOW(), update_user = ? WHERE id_article = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_article));
        echo $result;
    }

    if($_GET['action'] == "change_status_contact")// เปลี่ยนสถานะ contact
    {
        $id_contact = $_POST['id_contact'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE contact SET status = ?, update_time = NOW(), update_user = ? WHERE id_contact = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_contact));
        echo $result;
    }

    if($_GET['action'] == "del_contact")// ลบ contact
    {
        $id_contact = $_POST['id_contact'];
        $stmt = $safetyDb->prepare('UPDATE contact SET del = "true", update_time = NOW(), update_user = ? WHERE id_contact = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_contact));
        echo $result;
    }

    if($_GET['action'] == "manage_menu_branch")// เพิ่ม แก้ไข menu_branch
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        
        $sql = 'SELECT namebranch FROM branch WHERE id_branch = ?';
        $stmt = $bookingDb->prepare($sql);
        $stmt->execute(array($sl_branch));
        $namebranch = $stmt->fetchColumn();

        $status_upload = true;

        if($_FILES['path_banner']['name']!=null){
             setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย;
            $path_parts=pathinfo(basename($_FILES['path_banner']['name']));
            $new_img_name='banner-'.$sl_branch.'-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/menu_branch/'.$new_img_name;
            $path = "/img/menu_branch/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['path_banner']['tmp_name'],$upload_path);
        }

        if($status_upload){
            if($id_menu_branch != ""){
                if(isset($path)){
                    $stmt = $safetyDb->prepare('UPDATE menu_branch SET id_branch = ?,namebranch = ?,url_page = ?,meta_keyword = ?,meta_description = ?,path_banner = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_menu_branch = ?');
                    $result = $stmt->execute(array($sl_branch,$namebranch,$url_page,$meta_keyword,$meta_description,$path,$alt,$_SESSION['name'],$id_menu_branch));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE menu_branch SET id_branch = ?,namebranch = ?,url_page = ?,meta_keyword = ?,meta_description = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_menu_branch = ?');
                    $result = $stmt->execute(array($sl_branch,$namebranch,$url_page,$meta_keyword,$meta_description,$alt,$_SESSION['name'],$id_menu_branch));
                }
            }
            else{
                $stmt = $safetyDb->prepare('INSERT INTO menu_branch(id_branch,namebranch,url_page,meta_keyword,meta_description,path_banner,alt,update_user) VALUES (?,?,?,?,?,?)');
                $result = $stmt->execute(array($sl_branch,$namebranch,$url_page,$meta_keyword,$meta_description,$path,$alt,$_SESSION['name']));
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_menu_branch")// เปลี่ยนสถานะ menu_branch
    {
        $id_menu_branch = $_POST['id_menu_branch'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $type = 'status';
        $type .= ($_POST['type'] == "none") ? "" : $_POST['type'];
        $stmt = $safetyDb->prepare("UPDATE menu_branch SET $type = ?, update_time = NOW(), update_user = ? WHERE id_menu_branch = ?");
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_menu_branch));
        echo $result;
    }

    if($_GET['action'] == "del_menu_branch")// ลบ menu_branch
    {
        $id_menu_branch = $_POST['id_menu_branch'];
        $stmt = $safetyDb->prepare('UPDATE menu_branch SET del = "true", update_time = NOW(), update_user = ? WHERE id_menu_branch = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_menu_branch));
        echo $result;
    }
    
    if($_GET['action'] == "manage_menu_training")// เพิ่ม แก้ไข menu_training
    {
         /* make a URL small */
         function get_bitly_short_url($long_url) {
            $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
            $genericAccessToken = '4e4336e06a409d1e16240a228e32681ba44fce99';

            $data = array(
                'long_url' => $long_url
            );
            $payload = json_encode($data);

            $header = array(
                'Authorization: Bearer ' . $genericAccessToken,
                'Content-Type: application/json',
                'Content-Length: ' . strlen($payload)
            );

            $ch = curl_init($apiv4);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            $result = curl_exec($ch);
            $resultToJson = json_decode($result);

            if (isset($resultToJson->link)) {
                return $resultToJson->link;
            }
            else {
                return 'Not found';
            }
        }
        /* make a URL small */
    
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        
        $status_upload = true;

        if($_FILES['path_banner']['name']!=null){
             setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย;
            $path_parts=pathinfo(basename($_FILES['path_banner']['name']));
            $new_img_name='banner-'.$sl_branch.'-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/menu_training/'.$new_img_name;
            $path = "/img/menu_training/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['path_banner']['tmp_name'],$upload_path);
        }

        if($status_upload){
            $shortlink = ($url_page) ? get_bitly_short_url($url_page) : "";
            if($id_menu_training != ""){
                if(isset($path)){
                    $stmt = $safetyDb->prepare('UPDATE menu_training SET name_menu = ?,url_page = ?,shortlink = ?,meta_keyword = ?,meta_description = ?,path_banner = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_menu_training = ?');
                    $result = $stmt->execute(array($name_menu,$url_page,$shortlink,$meta_keyword,$meta_description,$path,$alt,$_SESSION['name'],$id_menu_training));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE menu_training SET name_menu = ?,url_page = ?,shortlink = ?,meta_keyword = ?,meta_description = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_menu_training = ?');
                    $result = $stmt->execute(array($name_menu,$url_page,$shortlink,$meta_keyword,$meta_description,$alt,$_SESSION['name'],$id_menu_training));
                }
            }
            else{
                $sql = 'SELECT MAX(sequence) FROM menu_training WHERE del = "false"';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute();
                $max_sequence = $stmt->fetchColumn();
            
                $stmt = $safetyDb->prepare('INSERT INTO menu_training(sequence,name_menu,url_page,shortlink,meta_keyword,meta_description,path_banner,alt,update_user) VALUES (?,?,?,?,?,?,?,?,?)');
                $result = $stmt->execute(array($max_sequence + 1,$name_menu,$url_page,$shortlink,$meta_keyword,$meta_description,$path,$alt,$_SESSION['name']));
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_menu_training")// เปลี่ยนสถานะ menu_training
    {
        $id_menu_training = $_POST['id_menu_training'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $type = 'status';
        $type .= ($_POST['type'] == "none") ? "" : $_POST['type'];
        $stmt = $safetyDb->prepare("UPDATE menu_training SET $type = ?, update_time = NOW(), update_user = ? WHERE id_menu_training = ?");
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_menu_training));
        echo $result;
    }

    if($_GET['action'] == "del_menu_training")// ลบ menu_training
    {
        $id_menu_training = $_POST['id_menu_training'];
        $stmt = $safetyDb->prepare('UPDATE menu_training SET del = "true", update_time = NOW(), update_user = ? WHERE id_menu_training = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_menu_training));
        echo $result;
    }

    if($_GET['action'] == "manage_plan")// เพิ่ม แก้ไข plan
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }

        $status_upload = true;

        if($_FILES['filePlan']['name']!=null){
            $new_file_name=$_FILES['filePlan']['name'];
            $upload_path='../pdf/plan_year/'.$new_file_name;
            $path = "/pdf/plan_year/".$new_file_name;
            $status_upload = move_uploaded_file($_FILES['filePlan']['tmp_name'],$upload_path);
        }
        
        if($status_upload){
            if($id_plan != ""){
                $stmt = $safetyDb->prepare('UPDATE plan SET id_branch = ?, path = ?, update_time = NOW(), update_user = ? WHERE id_plan = ?');
                $result = $stmt->execute(array($sl_branch,$path,$_SESSION['name'],$id_plan));
            }
            else{
                $stmt = $safetyDb->prepare("SELECT id_plan FROM plan WHERE id_branch = ? AND del = 'false'");
                $stmt->execute(array($sl_branch));
                $check_duplicate = $stmt->fetch(PDO::FETCH_ASSOC);
                if(isset($check_duplicate['id_plan']) && $check_duplicate['id_plan']) {
                    $stmt = $safetyDb->prepare('UPDATE plan SET id_branch = ?, path = ?, update_time = NOW(), update_user = ? WHERE id_plan = ?');
                    $result = $stmt->execute(array($sl_branch,$path,$_SESSION['name'],$check_duplicate['id_plan']));
                }
                else{
                    $sql = 'SELECT MAX(sequence) FROM plan WHERE del = "false"';
                    $stmt = $safetyDb->prepare($sql);
                    $stmt->execute();
                    $max_sequence = $stmt->fetchColumn();
                
                    $stmt = $safetyDb->prepare('INSERT INTO plan(sequence,id_branch,path,update_user) VALUES (?,?,?,?)');
                    $result = $stmt->execute(array($max_sequence + 1,$sl_branch,$path,$_SESSION['name']));
                }
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_plan")// เปลี่ยนสถานะ plan
    {
        $id_plan = $_POST['id_plan'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE plan SET status = ?, update_time = NOW(), update_user = ? WHERE id_plan = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_plan));
        echo $result;
    }

    if($_GET['action'] == "del_plan")// ลบ plan
    {
        $id_plan = $_POST['id_plan'];
        $stmt = $safetyDb->prepare('UPDATE plan SET del = "true", update_time = NOW(), update_user = ? WHERE id_plan = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_plan));
        echo $result;
    }

    if($_GET['action'] == "upload_file")
    {
      $url = 0 ;
      $allowed = array ('png', 'jpg', 'gif', 'pdf', 'doc', 'docx', 'txt', 'mp3');
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $extension = pathinfo($_FILES ['file']['name'], PATHINFO_EXTENSION);
            if (!in_array(strtolower($extension), $allowed)) {
                exit;
            }
            if(move_uploaded_file($_FILES['file']['tmp_name'], '../pdf/article/'.$_FILES['file']['name'])) {
                $url = $base_url .'/pdf/article/'.$_FILES['file']['name'];
            }
        }
        echo $url;
    }
    
    if($_GET['action'] == "del_file")
    {
        $url = explode("Images", $_POST['src']);
        $file_name = str_replace($url[0], '', $_POST['src']); // striping host to get relative path
        if(unlink($file_name))
        {
            echo 'file deleted!';
        }
    }

    if($_GET['action'] == "manage_training_inhouse")// เพิ่ม แก้ไข training_inhouse
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        
         $status_img_upload = true;
         $status_pdf_upload = true;
         $path = array();

        if($_FILES['path_pdf']['name']!=null){
            $new_pdf_name=$_FILES['path_pdf']['name'];
            $upload_path='../pdf/training_inhouse/'.$new_pdf_name;
            $path_pdf = "/pdf/training_inhouse/".$new_pdf_name;
            $path[] = "path_pdf = '$path_pdf'";
            $status_pdf_upload = move_uploaded_file($_FILES['path_pdf']['tmp_name'],$upload_path);
        }
        
        if($_FILES['cover_img']['name']!=null){
            $new_img_name=$_FILES['cover_img']['name'];
            $upload_path='../img/training_inhouse/'.$new_img_name;
            $path_img = "/img/training_inhouse/".$new_img_name;
            $path[] = "cover_img = '$path_img'";
            $status_img_upload = move_uploaded_file($_FILES['cover_img']['tmp_name'],$upload_path);
        }

        if($status_img_upload && $status_pdf_upload){
            if($id_training_inhouse != ""){
                if(!empty($path)){
                    $stmt = $safetyDb->prepare('UPDATE training_inhouse SET type_training = ?,topic_training = ?,detail_training = ?, alt = ?, update_time = NOW(), update_user = ?, ' . implode(', ', $path) . ' WHERE id_training_inhouse = ?');
                    $result = $stmt->execute(array($type_training,$topic_training,$detail_training,$alt,$_SESSION['name'],$id_training_inhouse));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE training_inhouse SET type_training = ?,topic_training = ?,detail_training = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_training_inhouse = ?');
                    $result = $stmt->execute(array($type_training,$topic_training,$detail_training,$alt,$_SESSION['name'],$id_training_inhouse));
                }
            }
            else{
                $sql = 'SELECT MAX(sequence) FROM training_inhouse WHERE del = "false"';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute();
                $max_sequence = $stmt->fetchColumn();
                
                $stmt = $safetyDb->prepare('INSERT INTO training_inhouse(sequence,type_training,topic_training,detail_training,cover_img,alt,path_pdf,update_user) VALUES (?,?,?,?,?,?,?,?)');
                $result = $stmt->execute(array($max_sequence+1,$type_training,$topic_training,$detail_training,$path_img,$alt,$path_pdf,$_SESSION['name']));
            }
            echo $result;
        }
    }
    
    if($_GET['action'] == "change_status_training_inhouse")// เปลี่ยนสถานะ training_inhouse
    {
        $id_training_inhouse = $_POST['id_training_inhouse'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare("UPDATE training_inhouse SET status = ?, update_time = NOW(), update_user = ? WHERE id_training_inhouse = ?");
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_training_inhouse));
        echo $result;
    }

    if($_GET['action'] == "del_training_inhouse")// ลบ training_inhouse
    {
        $id_training_inhouse = $_POST['id_training_inhouse'];
        $stmt = $safetyDb->prepare('UPDATE training_inhouse SET del = "true", update_time = NOW(), update_user = ? WHERE id_training_inhouse = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_training_inhouse));
        echo $result;
    }

    if($_GET['action'] == "manage_training_public")// เพิ่ม แก้ไข training_public
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        
         $status_img_upload = true;
         $status_coach_upload = true;
         $path = array();

        if($_FILES['coach_img']['name']!=null){
            $new_pdf_name=$_FILES['coach_img']['name'];
            $upload_path='../img/training_public/coach_img/'.$new_pdf_name;
            $path_coach = "/img/training_public/coach_img/".$new_pdf_name;
            $path[] = "coach_img = '$path_coach'";
            $status_coach_upload = move_uploaded_file($_FILES['coach_img']['tmp_name'],$upload_path);
        }
        
        if($_FILES['cover_img']['name']!=null){
            $new_img_name=$_FILES['cover_img']['name'];
            $upload_path='../img/training_public/cover_img/'.$new_img_name;
            $path_img = "/img/training_public/cover_img/".$new_img_name;
            $path[] = "cover_img = '$path_img'";
            $status_img_upload = move_uploaded_file($_FILES['cover_img']['tmp_name'],$upload_path);
        }

        if($status_img_upload && $status_img_upload){
            if($id_training_public != ""){
                if(!empty($path)){
                    $stmt = $safetyDb->prepare('UPDATE training_public SET id_group_training_public = ?,topic_training = ?, alt = ?,id_menu_training = ?, update_time = NOW(), update_user = ?, ' . implode(', ', $path) . ' WHERE id_training_public = ?');
                    $result = $stmt->execute(array($group_training_public,$topic_training,$alt,$menu_training,$_SESSION['name'],$id_training_public));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE training_public SET id_group_training_public = ?,topic_training = ?, alt = ?,id_menu_training = ?, update_time = NOW(), update_user = ? WHERE id_training_public = ?');
                    $result = $stmt->execute(array($group_training_public,$topic_training,$alt,$menu_training,$_SESSION['name'],$id_training_public));
                }
            }
            else{
                $sql = 'SELECT MAX(sequence) FROM training_public WHERE del = "false"';
                $stmt = $safetyDb->prepare($sql);
                $stmt->execute();
                $max_sequence = $stmt->fetchColumn();
                
                $stmt = $safetyDb->prepare('INSERT INTO training_public(sequence,id_group_training_public,topic_training,id_menu_training,cover_img,alt,coach_img,update_user) VALUES (?,?,?,?,?,?,?,?)');
                $result = $stmt->execute(array($max_sequence+1,$group_training_public,$topic_training,$menu_training,$path_img,$alt,$path_coach,$_SESSION['name']));
            }
            echo $result;
        }
    }
    
    if($_GET['action'] == "change_status_training_public")// เปลี่ยนสถานะ training_public
    {
        $id_training_public = $_POST['id_training_public'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare("UPDATE training_public SET status = ?, update_time = NOW(), update_user = ? WHERE id_training_public = ?");
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_training_public));
        echo $result;
    }

    if($_GET['action'] == "del_training_public")// ลบ training_public
    {
        $id_training_public = $_POST['id_training_public'];
        $stmt = $safetyDb->prepare('UPDATE training_public SET del = "true", update_time = NOW(), update_user = ? WHERE id_training_public = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_training_public));
        echo $result;
    }

    if($_GET['action'] == "manage_job")// เพิ่ม แก้ไข job
    {
        foreach($_POST as $key => $value){
            $$key = $value;
        }
        
        $status_upload = true;
        if($_FILES['imgJob']['name']!=null){
             setlocale(LC_ALL,'en_US.UTF-8');//สำหรับอัพให้ชื่อรูปเป็นภาษาไทย;
            $path_parts=pathinfo(basename($_FILES['imgJob']['name']));
            $new_img_name='job-'.$path_parts['filename'].'.'.$path_parts['extension'];
            $upload_path='../img/job/'.$new_img_name;
            $path = "/img/job/".$new_img_name;
            $status_upload = move_uploaded_file($_FILES['imgJob']['tmp_name'],$upload_path);
        }
        
        if($status_upload){
            if($id_job != ""){
                if(isset($path)){
                    $stmt = $safetyDb->prepare('UPDATE job SET name = ?, description = ?, alt = ?, path = ?, update_time = NOW(), update_user = ? WHERE id_job = ?');
                    $result = $stmt->execute(array($name,$description,$alt,$path,$_SESSION['name'],$id_job));
                }else{
                    $stmt = $safetyDb->prepare('UPDATE job SET name = ?, description = ?, alt = ?, update_time = NOW(), update_user = ? WHERE id_job = ?');
                    $result = $stmt->execute(array($name,$description,$alt,$_SESSION['name'],$id_job));
                }
            }
            else{
                $stmt = $safetyDb->prepare('INSERT INTO job(name,description,path,alt,update_user) VALUES (?,?,?,?,?)');
                $result = $stmt->execute(array($name,$description,$path,$alt,$_SESSION['name']));
            }
            echo $result;
        }
    }

    if($_GET['action'] == "change_status_job")// เปลี่ยนสถานะ job
    {
        $id_job = $_POST['id_job'];
        $status = ($_POST['status'] == "true") ? "active" : "inactive";
        $stmt = $safetyDb->prepare('UPDATE job SET status = ?, update_time = NOW(), update_user = ? WHERE id_job = ?');
        $result = $stmt->execute(array($status,$_SESSION['name'],$id_job));
        echo $result;
    }

    if($_GET['action'] == "del_job")// ลบ job
    {
        $id_job = $_POST['id_job'];
        $stmt = $safetyDb->prepare('UPDATE job SET del = "true", update_time = NOW(), update_user = ? WHERE id_job = ?');
        $result = $stmt->execute(array($_SESSION['name'],$id_job));
        echo $result;
    }
    
}
?>