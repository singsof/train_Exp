<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>หน้าหลัก</title>
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


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.12.1/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-text d-flex flex-column h-100 justify-content-center ">
                <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="img/profile.jpg" alt="Image">
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
                <a href="./edit_profile.php" class="btn btn-lg btn-block btn-primary mt-auto">แก้ไขโปรไฟล์</a>
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



            <!-- Blog List Start -->
            <div class="container bg-white pt-5">
                <table id="table_id" class="table">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">หัวข้อโพสต์</th>
                            <th scope="col">วันที่โพสต์</th>
                            <th scope="col">จำนวนคนดู</th>
                            <th scope="col">คอมเมนต์</th>
                            <th scope="col"><a href="add_blog.php">เพิ่ม</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><a href="detail_blog.php?id=1">สร้างเว็บ</a></td>
                            <td>Wednesday June 15 2022</td>
                            <td>1952 คน</td>
                            <td>999 คอมเมนต์</td>
                            <td><a href="edit_blog.php?id=1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-magic" viewBox="0 0 16 16">
                                        <path d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z" />
                                    </svg></a>
                                <span style="padding-left: 10px;"></span>
                                <a href="delete_blog.php?id=1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <script>
                    // $(document).ready(function() {
                    $('#table_id').DataTable({
                        dom: 'lBfrtip',
                        // select: true,
                        lengthMenu: [
                            [10, 25, 50, 60, -1],
                            [10, 25, 50, 60, "All"]
                        ],
                        language: {
                            sProcessing: "กำลังดำเนินการ...",
                            sLengthMenu: "แสดง  _MENU_  แถว",
                            sZeroRecords: "ไม่พบข้อมูล",
                            sInfo: "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                            sInfoEmpty: "แสดง 0 ถึง 0 จาก 0 แถว",
                            sInfoFiltered: "(กรองข้อมูล _MAX_ ทุกแถว)",
                            sInfoPostFix: "",
                            sSearch: "ค้นหา: ",
                            sUrl: "",
                            oPaginate: {
                                "sFirst": "เริ่มต้น",
                                "sPrevious": "ก่อนหน้า",
                                "sNext": "ถัดไป",
                                "sLast": "สุดท้าย"
                            }
                        }, // sInfoEmpty: "แสดง 0 ถึง 0 ของ 0 เร็คคอร์ด",
                        processing: true, // แสดงข้อความกำลังดำเนินการ กรณีข้อมูลมีมากๆ จะสังเกตเห็นง่าย
                        //serverSide: true, // ใช้งานในโหมด Server-side processing
                        // กำหนดให้ไม่ต้องการส่งการเรียงข้อมูลค่าเริ่มต้น จะใช้ค่าเริ่มต้นตามค่าที่กำหนดในไฟล์ php
                        retrieve: true
                    });
                    // });
                </script>
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