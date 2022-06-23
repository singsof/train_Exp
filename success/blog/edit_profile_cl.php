<?php 
// date_default_timezone_set("Asia/Bangkok");
include_once ('./config/connectdb.php');

$id_mem = $_GET["id_mem"];
$id_code = $_GET['id_code'];
$name = $_GET['name'];
$last_name = $_GET['last_name'];
$e_mail = $_GET['e_mail'];
$phone = $_GET['phone'];
$user_name = $_GET['user_name'];
$pass = $_GET['pass'];


$sql = "UPDATE `member` SET `id_code` = '$id_code', 
                            `name` = '$name', 
                            `last_name` = '$last_name', 
                            `e_mail` = '$e_mail', 
                            `phone` = '$phone', 
                            `user_name` = '$user_name', 
                            `pass` = '$pass' 
                WHERE `member`.`id_mem` = '$id_mem';";

if(Database::query($sql)){
    echo "<script>
        alert('แก้ไขข้อมูลส่วนตัวสำเร็จ');
        location.assign('./profile.php');
    </script>";

    // echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "<script>
    alert('แก้ไขข้อมูลส่วนตัวไม่สำเร็จ');
    location.assign('./profile.php');
</script>";
}
