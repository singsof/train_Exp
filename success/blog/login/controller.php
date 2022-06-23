
<?php 
// date_default_timezone_set("Asia/Bangkok");
include_once ('../config/connectdb.php');


$id_code = $_GET['id_code'];
$name = $_GET['name'];
$last_name = $_GET['last_name'];
$e_mail = $_GET['e_mail'];
$phone = $_GET['phone'];
$user_name = $_GET['user_name'];
$pass = $_GET['pass'];


$sql = "INSERT INTO `member` (`id_mem`, `id_code`, `name`, `last_name`, `e_mail`, `phone`, `user_name`, `pass`, `status`) 
                        VALUES (NULL, '$id_code', '$name', '$last_name', '$e_mail', '$phone', '$user_name', '$pass', '1');";

if(Database::query($sql)){
    echo "<script>
        alert('บันทึกข้อมูลสำเร็จระบบจะนำทางไปยังหน้าล็อกอิน');
        location.assign('./singin.php');
    </script>";

    // echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "ไม่สามารถเพิ่มข้อมูลได้";
}


// echo Database::query("SELECT NOW() as time;",PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ)->time;

// echo $_GET['id_code'].'<br>';
// echo $_GET['name'].'<br>';
// echo $_GET['last_name'].'<br>';
// echo $_GET[''].'<br>';
// echo $_GET['phone'].'<br>';
// echo $_GET['user_name'].'<br>';
// echo $_GET['pass'].'<br>';