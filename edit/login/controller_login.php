<?php 
include_once ('../config/connectdb.php');

$user_name = $_GET["user_name"];
$pass = $_GET["pass"];

$sql = "SELECT * FROM `member` WHERE user_name = '$user_name' AND pass= '$pass'";

$row = Database::query($sql,PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
if($row != null){
    session_start();

    $_SESSION["id_mem"] = $row->id_mem;

    echo "<script>
    alert('ยินดีตอนรับเข้าสู่ระบบ');
    location.assign('../index.php');
</script>";
}else{
    echo "<script>
    alert('คุณกรอกชื่อผู้ใช้หรอรหัสผ่านไม่ถูกต้อง');
    location.assign('./singin.php');
</script>";
}

// echo $user_name. " - " .$pass;
?>