<?php
include_once('../dbconnect_booking.php'); 
include_once('../dbconnect_safety.php'); 

if(isset($_GET['action'])){
    if($_GET['action'] == "fet_banner")
    {
        if(isset($_POST['id_banner'])){
            $sql = 'SELECT * FROM banner WHERE id_banner = ' . $_POST['id_banner'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT * FROM banner WHERE del = "false" ORDER BY status DESC,sequence';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_promotion")
    {
        if(isset($_POST['id_promotion'])){
            $sql = 'SELECT * FROM promotion WHERE id_promotion = ' . $_POST['id_promotion'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT * FROM promotion WHERE del = "false" ORDER BY status DESC,sequence';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    
    if($_GET['action'] == "fet_album")//ดึงรูปแรกมาแสดง
    {
        if(isset($_POST['id_gallery'])){
            $sql = 'SELECT id_gallery,type,id_provinces,topic_training,alt,JSON_EXTRACT(date,"$.date") AS date FROM gallery WHERE id_gallery = ' . $_POST['id_gallery'] . ' AND del = "false"';
        }
        else{
            $sql = 'SELECT id_gallery,type,topic_training,name_th,path,alt,JSON_EXTRACT(date,"$.date") AS date,status 
            FROM gallery 
            LEFT JOIN provinces ON provinces.id = gallery.id_provinces
            WHERE del = "false" AND sequence = 1
            ORDER BY status DESC,date DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_gallery")//ดึงรูปทั้งหมดในอัลบั้ม
    {
        $sql = 'SELECT id_gallery,name,path,sequence,status
        FROM gallery 
        WHERE del = "false" AND id_group = ?
        ORDER BY status DESC,sequence';

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute(array($_POST['id_gallery']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_alt_gallery")//ดึง alt ของรูปมาแสดง
    {
        $sql = 'SELECT alt
        FROM gallery 
        WHERE id_gallery = ?';

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute(array($_POST['id_gallery']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_article")
    {
        if(isset($_POST['id_article'])){
            $sql = 'SELECT id_article,topic,shortlink,tag,meta_keyword,id_promotion,content,alt,meta_description FROM article WHERE id_article = ' . $_POST['id_article'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT article.id_article,article.sequence,topic,shortlink,tag,meta_keyword,article.id_promotion,promotion.path,meta_description AS img_promotion,content,count_view,create_date,cover_img,article.alt,article.status,recommend,meta_description 
            FROM article 
            LEFT JOIN promotion ON promotion.id_promotion = article.id_promotion
            WHERE article.del = "false"
            ORDER BY status DESC,recommend DESC,article.sequence';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_contact")
    {
        if(isset($_POST['id_contact'])){
            $sql = 'SELECT id_contact,name,topic,email,tel,detail FROM contact WHERE id_contact = ' . $_POST['id_contact'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT id_contact,name,topic,email,tel,update_time,status FROM contact 
            WHERE del = "false"
            ORDER BY status DESC,update_time DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_menu_branch")
    {
        if(isset($_POST['id_menu_branch'])){
            $sql = 'SELECT id_menu_branch,namebranch,url_page,meta_keyword,meta_description,id_branch,alt FROM menu_branch WHERE id_menu_branch = ' . $_POST['id_menu_branch'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT id_menu_branch,namebranch,url_page,meta_keyword,meta_description,path_banner,alt,status_jorpor_s,status_jorpor_h,status_jorpor_m,status_korporor,status FROM menu_branch
            WHERE del = "false"
            ORDER BY status DESC,update_time DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_menu_training")
    {
        if(isset($_POST['id_menu_training'])){
            $sql = 'SELECT id_menu_training,name_menu,url_page,meta_keyword,meta_description,alt FROM menu_training WHERE id_menu_training = ' . $_POST['id_menu_training'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT id_menu_training,name_menu,url_page,shortlink,meta_keyword,meta_description,path_banner,alt,sequence,status FROM menu_training
            WHERE del = "false"
            ORDER BY status DESC,update_time DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training_public")
    {
        if(isset($_POST['id_training_public'])){
            $sql = 'SELECT id_training_public,name_group,name_category,training_public.id_group_training_public,topic_training,training_public.id_menu_training,training_public.alt
            FROM training_public 
            LEFT JOIN group_training_public ON group_training_public.id_group_training_public = training_public.id_group_training_public
            LEFT JOIN menu_training ON training_public.id_menu_training = menu_training.id_menu_training
            WHERE id_training_public = ' . $_POST['id_training_public'] . ' AND training_public.del = "false"';
        }else{
            $sql = 'SELECT id_training_public,name_group,name_category,training_public.id_group_training_public,topic_training,menu_training.shortlink,url_page,cover_img,training_public.alt,coach_img,training_public.sequence,training_public.status 
            FROM training_public
            LEFT JOIN group_training_public ON group_training_public.id_group_training_public = training_public.id_group_training_public
            LEFT JOIN menu_training ON training_public.id_menu_training = menu_training.id_menu_training
            WHERE training_public.del = "false"
            ORDER BY name_category,name_group,training_public.status DESC,training_public.update_time DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training_inhouse")
    {
        if(isset($_POST['id_training_inhouse'])){
            $sql = 'SELECT id_training_inhouse,type_training,topic_training,detail_training,alt FROM training_inhouse WHERE id_training_inhouse = ' . $_POST['id_training_inhouse'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT id_training_inhouse,type_training,topic_training,cover_img,alt,detail_training,path_pdf,sequence,status FROM training_inhouse
            WHERE del = "false"
            ORDER BY status DESC,update_time DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    
    if($_GET['action'] == "check_menu_branch")//ตรวจสอบว่ามีข้อมูลอยู่แล้วหรือไม่
    {
        $sql = 'SELECT id_menu_branch FROM menu_branch WHERE id_branch = ? AND del = "false"';
        $stmt = $safetyDb->prepare($sql);
        $stmt->execute(array($_POST['sl_branch']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_plan")
    {
        if(isset($_POST['id_plan'])){
            $sql = 'SELECT id_plan,id_branch FROM plan WHERE id_plan = ' . $_POST['id_plan'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT id_plan,id_branch,path,status,sequence FROM plan 
            WHERE del = "false"
            ORDER BY status DESC,sequence';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!isset($_POST['id_plan'])){
            foreach ($result as $key => $value) {
                $sql = 'SELECT namebranch FROM branch WHERE id_branch = ?';
                $stmt = $bookingDb->prepare($sql);
                $stmt->execute(array($value['id_branch']));
                $namebranch = $stmt->fetch(PDO::FETCH_ASSOC);
                $result[$key]['namebranch'] = $namebranch['namebranch'];
            }
        }

        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training")//ดึงข้อมูลเมนูหลักสูตร 16 = id_group_safety(หมวด 4 ด้านความปลอดภัย) 17 = id_group_training(หมวด 7 ด้านศูนย์ทดสอบ)
    {
        $sql = 'SELECT course.id_training,topic_training FROM course 
        LEFT JOIN training ON course.id_training = training.id_training
        WHERE id_branch = ?  AND (id_group = 16 OR id_group = 17) AND status_training = 1
        GROUP BY id_training ORDER BY topic_training';

        $stmt = $bookingDb->prepare($sql);
        $stmt->execute(array($_POST['id_branch']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training_by_id_group")//ดึงข้อมูลเมนูหลักสูตร
    {
        if(isset($_POST['id_group']) && $_POST['id_group']) {
            $array_group = explode(',', $_POST['id_group']);
            
            foreach($array_group as $value) {
                $group_where[] = " id_group = " . $value;
            }
             
            if(!empty($group_where)){
                $where[] = " (" . implode(' OR ' ,$group_where) . ") ";
            }
        }
        
        $sql = 'SELECT id_training,topic_training FROM training 
        WHERE (type_security = 1 OR type_security = 2 OR type_security = 3 OR type_security = 7 OR type_security = 8 OR type_security = 6) AND status_training = 1';
        
        if (!empty($where)) {
            $sql .= " AND ". implode(' AND ', $where);
        }
        
        $stmt = $bookingDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training_by_type")//ดึงข้อมูลเมนูหลักสูตร
    {
        if(isset($_POST['type']) && $_POST['type'] == "inhouse") {
            $sql = 'SELECT IF(topic_training != "", topic_training , project.id_training) as topic_training , project_datestart as date
            FROM project 
            LEFT JOIN sale_training ON project.id_training = sale_training.id_training 
            WHERE project.project_type = "ST"
            GROUP BY topic_training
            ORDER BY date';
        }else{
            $sql = 'SELECT topic_training ,IF(new_datestart != "0000-00-00", new_datestart , datestart) as date
            FROM course 
            LEFT JOIN training ON course.id_training = training.id_training
            WHERE (id_group = 16 OR id_group = 17)
            GROUP BY topic_training
            ORDER BY date';
        }
      
        $stmt = $bookingDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_group_training_by_name_category")//ดึงข้อมูลกลุ่มของหลักสูตรตามหมวด
    {
        $sql = 'SELECT id_group_training_public,name_group
        FROM group_training_public 
        WHERE name_category = ?';

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute(array($_POST['name_category']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }

    if($_GET['action'] == "fet_training_by_group_training")//ดึงข้อมูลหลักสูตรตามกลุ่ม
    {
        $sql = 'SELECT id_training_public,topic_training,url_page,cover_img
        FROM training_public 
        LEFT JOIN menu_training ON training_public.id_menu_training = menu_training.id_menu_training
        WHERE name_category = ? AND id_group_training_public = ?
        ORDER BY training_public.sequence';

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute(array($_POST['name_category']));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    if($_GET['action'] == "fet_job")//ดึงข้อมูลตำแหน่งที่รับสมัครงาน
    {
        if(isset($_POST['id_job'])){
            $sql = 'SELECT * FROM job WHERE id_job = ' . $_POST['id_job'] . ' AND del = "false"';
        }else{
            $sql = 'SELECT * FROM job WHERE del = "false" ORDER BY status DESC';
        }

        $stmt = $safetyDb->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
    
}
?>