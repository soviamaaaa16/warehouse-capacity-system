<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- additional resources -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="../assets/css/additional.css" rel="stylesheet" />
    <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color= "blue" data-image="../assets/img/sidebar-warehouse.jpeg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                        <img src="../assets/img/ipg-logo.png"  width="80px" alt="logo-ipg">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <i class="nc-icon nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="denah">
                            <i class="nc-icon nc-map-big"></i>
                            <p>Denah Rak</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="kedatangan">
                            <i class="nc-icon nc-delivery-fast"></i>
                            <p>Kedatangan</p>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-ruler-pencil"></i>
                            <p>Manajemen Kapasitas</p>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="rak">Kapasitas Rak</a>
                            <a class="dropdown-item" href="material">Kapasitas Material</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <span class="nc-icon nc-circle-09">2208W02 - IFA</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Content -->
            @yield('content')
            <!-- End Content -->
<<<<<<< HEAD


=======
            
            <!-- Footer
>>>>>>> e8aada1a858d1939bc0f85a429fb988ce4531e41
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            JTI Polinema
                        </p>
                    </nav>
                </div>
            </footer>
            End Footer -->

        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<<<<<<< HEAD
<script src="../assets/js/demo.js"></script>
=======
<script src="{{asset('assets/js/demo.js')}}"></script>
<script src="../assets/js/Chart.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>
>>>>>>> e8aada1a858d1939bc0f85a429fb988ce4531e41

</html>