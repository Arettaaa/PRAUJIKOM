<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>PPDB SMK WIKRAMA BOGOR</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            }
            , custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"]
                , urls: ['../assets/css/fonts.min.css']
            }
            , active: function() {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css">
</head>
<body data-background-color="dark">
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">
                <a href="index.html" class="logo">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/usr.png" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/usr.png" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Admin</h4>
                                                <p class="text-muted">admin@gmail.com</p>
                                            </div>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/usr.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Admin
                                    <span class="user-level">Admin PPDB</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h2 class="text-white pb-2">Welcome back, Admin!</h2>
                        <h5 class="text-white op-7 mb-4">Berikut adalah data siswa PPDB SMK Wikrama Bogor</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-dark bg-primary-gradient">
                                <div class="h1 fw-bold card-body pb-0">
                                    <h2 class="mb-2">{{count($data)}}</h2>
                                    <p>Total Data</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row row-card-no-pd">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <h4 class="card-title">Daftar Siswa PPDB SMK Wikrama Bogor</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive table-hover table-sales">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>NISN</th>
                                                            <th>NAMA</th>
                                                            <th>SEKOLAH</th>
                                                            <th>JENIS KELAMIN</th>
                                                            <th>JURUSAN</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $dt)
                                                        <tr>
                                                            <td>{{$dt->nisn}}</td>
                                                            <td>{{$dt->name}}</td>
                                                            <td>{{$dt->school}}</td>
                                                            <td>{{$dt->gender}}</td>
                                                            <td>{{$dt->major}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--   Core JS Files   -->
                    <script src="../assets/js/core/jquery.3.2.1.min.js"></script>
                    <script src="../assets/js/core/popper.min.js"></script>
                    <script src="../assets/js/core/bootstrap.min.js"></script>

                    <!-- jQuery UI -->
                    <script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
                    <script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

                    <!-- jQuery Scrollbar -->
                    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


                    <!-- Chart JS -->
                    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

                    <!-- jQuery Sparkline -->
                    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

                    <!-- Chart Circle -->
                    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

                    <!-- Datatables -->
                    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

                    <!-- Bootstrap Notify -->
                    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

                    <!-- jQuery Vector Maps -->
                    <script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
                    <script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

                    <!-- Sweet Alert -->
                    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

                    <!-- Atlantis JS -->
                    <script src="../assets/js/atlantis.min.js"></script>

                    <!-- Atlantis DEMO methods, don't include it in your project! -->
                    <script src="../assets/js/setting-demo.js"></script>
                    <script src="../assets/js/demo.js"></script>
                    <script>
                        $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
                            type: 'line'
                            , height: '70'
                            , width: '100%'
                            , lineWidth: '2'
                            , lineColor: 'rgba(255, 255, 255, .5)'
                            , fillColor: 'rgba(255, 255, 255, .15)'
                        });

                        $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
                            type: 'line'
                            , height: '70'
                            , width: '100%'
                            , lineWidth: '2'
                            , lineColor: 'rgba(255, 255, 255, .5)'
                            , fillColor: 'rgba(255, 255, 255, .15)'
                        });

                        $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
                            type: 'line'
                            , height: '70'
                            , width: '100%'
                            , lineWidth: '2'
                            , lineColor: 'rgba(255, 255, 255, .5)'
                            , fillColor: 'rgba(255, 255, 255, .15)'
                        });

                    </script>
</body>
</html>
