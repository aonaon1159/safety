<?php    
    include_once('dbconnect_safety.php');
    include_once('base_url.php');
    include('function.php');
    session_start();

    //ดึงข้อมูลความคิดเห็น
    $stmt = $safetyDb->prepare('SELECT id_article_comment,name_commenter,comment,create_date 
    FROM article_comment 
    WHERE del = "false" AND id_article = ?
    ORDER BY create_date DESC');
    $stmt->execute(array($_POST['id_article']));
    $article_comment = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($article_comment as $key=>$value){?>
<div class="row">
    <div class="col-lg-1 col-md-3 col-4 p-3">
        <img title="" class="img-fluid img_comment"
            src="<?php echo $base_url;?>/img/training_public/coach_img/businessman.png" alt="businessman">
    </div>
    <div class="col-lg-11 col-md-7 col-8 p-3">
        <b><span class="mr-5 color-green"><?php echo $value['name_commenter'];?></span></b>
        <span class="article_date"><?php echo DateThai($value['create_date']);?></span>
        <?php 
            if(isset($_SESSION['id_user'])){
        ?>
        <button class="close" type="button" data-id="<?php echo $value['id_article_comment'];?>" data-dismiss="modal"
            aria-label="Close"><span aria-hidden="true">×</span></button>
        <?php } ?>
        <p class="detail_comment">
            <?php echo $value['comment'];?>
        </p>
    </div>
</div>
<hr>
<?php } ?>