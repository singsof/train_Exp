<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bloggy - Personal Blog Template</title>
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
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg"
                    alt="Image">
                <h1 class="font-weight-bold text-center">ชื่อ นามสกุล</h1>
                <div class="p-3 mb-4">
                    <div class="row">
                        <div class="col-md-5">
                            <h6>รหัสบัคร</h6>
                        </div>
                        <div class="col-md-7">
                            1234567898545
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>โพสต์ทั้งหมด</h6>
                        </div>
                        <div class="col-md-7">
                            99999
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>เบอร์</h6>
                        </div>
                        <div class="col-md-7">
                            0961632545
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <h6>อีเมล</h6>
                        </div>
                        <div class="col-md-7">
                            std.62122710108@gmail.com
                        </div>
                    </div>
                    
                </div>
                <a href="" class="btn btn-lg btn-block btn-primary mt-auto">โปรไฟล์</a>
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


            <!-- Blog Detail Start -->
            <div class="container py-5 px-2 bg-white">
                <div class="row px-4">
                    <div class="col-12">
                        <img class="img-fluid mb-4" src="img/detail.jpg" alt="Image">
                        <h2 class="mb-3 font-weight-bold">หัวข้อโพสต์</h2>
                        <div class="d-flex">
                            <p class="mr-3 text-muted"><i class="fa fa-calendar-alt"></i> Wednesday June 15 2022</p>
                            <p class="mr-3 text-muted"><i class="fa fa-folder"></i>ชื่อ นามสกุล</p>
                            <p class="mr-3 text-muted"><i class="fa fa-comments"></i> 15 คอมเมนต์</p>
                        </div>
                        <p>รายละเอียดข้อความทั้งหมด</p>
                       
                    </div>
                    <div class="col-12 py-4">
                        <div class="btn-group btn-group-lg w-100">
                            <button type="button" class="btn btn-outline-primary"><i class="fa fa-angle-left mr-2"></i> Previous</button>
                            <button type="button" class="btn btn-outline-primary">Next<i class="fa fa-angle-right ml-2"></i></button>
                        </div> 
                    </div>
                    <div class="col-12 py-4">
                        <!-- <h3 class="mb-4 font-weight-bold">3 คอมเมนต์</h3> -->
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4>ชื่อ นามสกุล<small><i> Wednesday June 15 2022</i></small></h4>
                                <p>เนื้อหาคอมเมนต์</p>
                                <!-- <button class="btn btn-sm btn-light">Reply</button> -->
                            </div>
                        </div>
                   
                    </div>
                    <div class="col-12">
                        <h3 class="mb-4 font-weight-bold">แสดงความคิดเห็น</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">ชื่อ สกุล *</label>
                                <input type="text" class="form-control" id="name" value="ชื่อ สกุล" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">อีเมล *</label>
                                <input type="email" class="form-control" id="email" value="อีเมล" disabled>
                            </div>

                            <div class="form-group">
                                <label for="message">ข้อความ *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="แสดงความคิดเห็น" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Blog Detail End -->
                
            <!-- Footer Start -->
            <div class="container py-4 bg-secondary text-center">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">SIGNSOFT</a>.  สงวนลิขสิทธิ์ 

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
