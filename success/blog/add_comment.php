<?php 
include ('./config/connectdb.php');
// ?id_mem=1&id_blog=3&message_com=ทดสอบ

$id_mem = $_GET["id_mem"];
$id_blog =$_GET["id_blog"];
$message_com =$_GET["message_com"];

$sql = "INSERT INTO `comment` (`id_com`, `id_blog`, `id_mem`, `message_com`, `date_com`)
                VALUES (NULL, '$id_blog', '$id_mem', '$message_com', current_timestamp());";

if(Database::query($sql)){
    
    echo "<script>
    alert('แสดงความคิดเห็นสำเร็จ');
    location.assign('./detail_blog.php?id_blog=$id_blog');
</script>";
}else{
    echo "<script>
    alert('แสดงความคิดเห็นwไม่สำเร็จ');
    location.assign('./detail_blog.php?id_blog=$id_blog');
</script>";
}

?>