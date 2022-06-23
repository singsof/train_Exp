<?php 
include_once("./config/connectdb.php");

$id_blog = $_GET["id_blog"];
$id_mem = $_GET["id_mem"];
$title_blog= $_GET["title_blog"];
$delite_blog = $_GET["delite_blog"];

$sql = "UPDATE `blog` SET `title_blog` = '$title_blog', `delite_blog` = '$delite_blog' WHERE `blog`.`id_blog` ='$id_blog' AND id_mem='$id_mem';";

if(Database::query($sql)){
    
    echo "<script>
    alert('แก้ไขบล็อกสำเร็จ');
    location.assign('./mg_blog.php');
</script>";
}else{
    echo "<script>
    alert('แก้ไขบล็อกไม่สำเร็จ');
    location.assign('./mg_blog.php');
</script>";
}
?>