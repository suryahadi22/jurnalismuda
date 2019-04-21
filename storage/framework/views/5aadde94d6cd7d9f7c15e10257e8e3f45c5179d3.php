<!DOCTYPE html>
<html>

<head>
    <!-- 
        HELLO, THIS IS A DASHBOARD OF JURNALISMUDA.COM

        Dashboard pengelolaan situs jurnalismuda --- BY SURYAHADI


        KONSEP PENTEMAAN                ADMIN BSB MATERIAL DESIGN
        REARANGED BY                    SURYAHADI EKO HANGGORO

        FOR                             JANGKRIK.ONLINE project


        www.jangkrik.online ------ www.jangkrik.online


        (C) 2019 Jangkrik.Online

    
                                                                -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="author" content="Suryahadi E. H">
    <title><?php echo e($judul); ?> | JurnalisMuda.Com Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/css/style.css" rel="stylesheet">

    <!-- You can choose a theme from css/themes instead of get all themes -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Silahkan Tunggu...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">PROFESIONAL DASHBOARD <b>JURNALISMUDA.COM</b></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Notifikasi</li>
                            <li class="body">
                                <ul class="menu">                    
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Siti</b> Mengomentari Artikel Anda</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 jam yang lalu
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(Auth::user()->full_name); ?>

                    </div>
                    <div class="email">
                        <?php echo e(Auth::user()->email); ?>

                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo e(route('profil')); ?>"><i class="material-icons">person</i>Profil Saya</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i><?php echo e(__('Keluar')); ?></a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li 
                    <?php if($judul === 'Dashboard'): ?>
                    class="active"
                    <?php endif; ?>
                    >
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="header">Kelola Konten</li>
                    <li 
                    <?php if($judul === 'Artikel'): ?>
                    class="active"
                    <?php endif; ?>
                    >
                        <a href="<?php echo e(route('artikel')); ?>">
                            <i class="material-icons">mode_edit</i>
                            <span>Artikel</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">pages</i>
                            <span>Halaman</span>
                        </a>
                    </li>
                    <li>
                    	<a href="#">
                    		<i class="material-icons">photo</i>
                    		<span>Galeri</span>
                    	</a>
                    </li>
                    <li class="header">Pengelompokan Konten</li>
                    <li>
                        <a href="#">
                            <i class="material-icons">label</i>
                            <span>Tag / Topik</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">domain</i>
                            <span>Kategori</span>
                        </a>
                    </li>
                   <li class="header">Tanggapan Pengunjung</li>
                   <li>
                   		<a href="#">
                   			<i class="material-icons">comment</i>
                   			<span>Komentar</span>
                   		</a>
                   		<a href="#">
                   			<i class="material-icons">email</i>
                   			<span>Isian Form Hubungi Saya</span>
                   		</a>
                   </li>
                   <li class="header">Tambahan</li>
                   <li>
                   		<a href="#">
                   			<i class="material-icons">settings</i>
                   			<span>Pengaturan</span>
                   		</a>
                   </li>

                   <!-- PANEL KHUSUS ADMINISTRATOR -->

                   <?php if(Auth::user()->level_access === 'admin'): ?>

                   <li class="header">Administrator Panel</li>
                   <li>
                   		<a href="#">
                   			<i class="material-icons">report</i>
                   			<span>Pusat Laporan</span>
                   		</a>
                   </li>
                   <li>
                   		<a href="#">
                   			<i class="material-icons">people</i>
                   			<span>Kontrol Pengguna</span>
                   		</a>
                   </li>
                   <?php endif; ?>

                   <li class="header col-pink">Aplikasi</li>
                   <li>
                        <a class="col-pink" href="#">
                            <i class="material-icons">info_outline</i>
                            <span class="col-pink">Informasi</span>
                        </a>
                    </li>
                    <li>
                        <a class="col-pink" href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span class="col-pink">Changelogs</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="#">Jangkrik.Online Developers Team</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.01
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">WARNA TEMA</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <?php if(Auth::user()->account_status === 'active'): ?>
            <?php echo $__env->yieldContent('content'); ?>
        <?php else: ?>
            <!-- AKUN INI TELAH DI BLOKIR COK -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                            <style>
                                .asu {
                                    animation-duration: 10s;
                                    animation-delay: 2s;
                                    animation-iteration-count: infinite;
                                    }
                            </style>
                            <div class="alert alert-danger animated shake asu">
                                <strong>Maaf!</strong> Akun anda saat ini sedang ditangguhkan. Karena melanggar ketentuan komunitas JurnalisMuda
                            </div>
                            <p class="align-center">Mengapa Terjadi?
                                <br/>
                                <li>Karena anda menulis sesuatu yang HOAX dan tulisan-tulisan yang mengancam kedaulatan NKRI</li>
                                <li>Karena ini bukan akun asli anda atau lebih disebut akun abal-abal</li>
                                <li>Sementara akun anda di amankan untuk sebab pelanggaran larangan agama dan negara</li>
                            </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </section>



    <!-- FOOTER LOCATION -->

    <!-- Jquery Core Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery-countto/jquery.countTo.js"></script>

    <?php if($judul === 'Buat Profil Kamu'): ?>
        
    <?php endif; ?>


    
    <!-- Custom Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/js/admin.js"></script>
    
    <!-- Demo Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/js/demo.js"></script>
</body>

</html>
<?php /**PATH /home/suryahadi/Coding Project/Data Project/Jangkrik.Online/JurnalisMuda.com/resources/views/dashboard/dashlayout/app.blade.php ENDPATH**/ ?>