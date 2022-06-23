<?php 
include_once("./config/connectdb.php");

$id_mem = $_GET["id_mem"];
$title_blog= $_GET["title_blog"];
$delite_blog = $_GET["delite_blog"];

$sql = "INSERT INTO `blog` (`id_blog`, `id_mem`, `title_blog`, `delite_blog`, `date_blog`, `view_blog`, `status`) 
                        VALUES (NULL, '$id_mem', '$title_blog', '$delite_blog', current_timestamp(), '0', '1');";

if(Database::query($sql)){
    
    echo "<script>
    alert('เพิ่มบล็อกสำเร็จ');
    location.assign('./mg_blog.php');
</script>";
}else{
    echo "<script>
    alert('เพิ่มบล็อกไม่สำเร็จ');
    location.assign('./mg_blog.php');
</script>";
}
?>