<?php
include_once("./config/connectdb.php");
// require_once("");

session_start();
$ID_MEM  = isset($_SESSION["id_mem"]) ? $_SESSION["id_mem"] : null;



$ROW_MEM = Database::query("SELECT * FROM `member` WHERE id_mem ='$ID_MEM'", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);





// $ROW_MEM = (object)[
//     'id_mem' => '1',
//     'id_code' => '0123456789123',
//     'name' => 'somphol',
//     'last_naem' => 'wila',
//     'e_mail' => 'som@gmail.com',
//     'phone' => '0961632545',
//     'user_name' => 'user',
//     'pass' => 'user',
//     'status' => '1',
// ]; 

// echo $ROW_MEMid_mem ;


$COUT_BLOG = Database::query("SELECT COUNT(*) as count FROM `blog` WHERE id_mem='$ID_MEM';", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
// $COUT_BLOG = (object)[
//     'count' => '1',
// ]; 

// print_r($ROW_MEM);
// echo "<br>";
// print_r($COUT_BLOG);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ยินดีตอน : <?php echo $ROW_MEM->name . " " . $ROW_MEM->last_name; ?> </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center ">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg" alt="Image">
                <h3 class="font-weight-bold text-center"><?php echo $ROW_MEM->name . " " . $ROW_MEM->last_name; ?> </h3>
                <div class="p-3 mb-4">
                    <div class="row">
                        <div class="col-md-5">
                            <h6>รหัสบัคร</h6>
                        </div>
                        <div class="col-md-7">
                            <?php echo $ROW_MEM->id_code ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>โพสต์ทั้งหมด</h6>
                        </div>
                        <div class="col-md-7">
                            <?php echo $COUT_BLOG->count ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>เบอร์</h6>
                        </div>
                        <div class="col-md-7">
                            <?php echo $ROW_MEM->phone ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>อีเมล</h6>
                        </div>
                        <div class="col-md-7">
                            <?php echo $ROW_MEM->e_mail ?>
                        </div>
                    </div>

                </div>
                <a href="./edit_profile.php" class="btn btn-lg btn-block btn-primary mt-auto">โปรไฟล์</a>
            </div>
            <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
                <i class="fas fa-2x fa-angle-double-right text-primary"></i>
            </div>
        </div>
        <div class="content">
            <!-- Navbar Start -->
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
                    <a href="" class="navbar-brand d-block d-lg-none">SIGNSOFT</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="index.php" class="nav-item nav-link active">หน้าหลัก</a>
                            <a href="mg_blog.php" class="nav-item nav-link">จัดการโพสต์</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">จัดการข้อมูล</a>
                                <div class="dropdown-menu">
                                    <a href="profile.php" class="dropdown-item">โปรไฟล์</a>
                                    <a href="logout.php" class="dropdown-item">ออกจากระบบ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->

            <style>
                .text {
                    word-break: break-word;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    line-height: 16px;
                    /* fallback */
                    max-height: 50px;
                    /* fallback */
                    -webkit-line-clamp: 3;
                    /* number of lines to show */
                    -webkit-box-orient: vertical;
                }

            </style>

            <!-- Blog List Start -->
            <div class="container bg-white pt-5">
                <?php
                // $count_blo = null;
                foreach (Database::query("SELECT *, DATE_FORMAT(blog.date_blog, '%W %M %Y ') as dTime FROM `blog` INNER JOIN member ON blog.id_mem = member.id_mem;", PDO::FETCH_OBJ) as $key) :
                    // print_r($key);
                    $count_com = Database::query("SELECT COUNT(*) as count FROM `comment` WHERE id_blog='$key->id_blog';", PDO::FETCH_OBJ)->fetch(PDO::FETCH_OBJ);
                ?>
                    <div class="row blog-item px-3 pb-5">
                        <div class="col-md-5">
                            <img class="img-fluid mb-4 mb-md-0" src="img/ิblog.png" alt="Image">
                        </div>
                        <div class="col-md-7">
                            <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"> <?php echo $key->title_blog ?></h3>
                            <div class="d-flex mb-3">
                                <small class="mr-2 text-muted"><i class="fa fa-calendar-alt"></i> <?php echo $key->dTime; ?></small>
                                <small class="mr-2 text-muted"><i class="fa fa-folder"></i> <?php echo $key->name . ' ' . $key->last_name; ?></small>
                                <small class="mr-2 text-muted"><i class="fa fa-comments"></i> <?php echo $count_com->count; ?> คอมเมนต์</small>
                            </div>
                            <p class="text">
                                <?php echo $key->delite_blog; ?>
                            </p>
                            <a class="btn btn-link p-0" href="detail_blog.php?id_blog=<?php echo $key->id_blog ?>">อ่านเพิ่มเติม<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <!-- Blog List End -->

            <!-- Footer Start -->
            <div class="container py-4 bg-secondary text-center">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">SIGNSOFT</a>. สงวนลิขสิทธิ์

                </p>
            </div>
            <!-- Footer End -->
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>