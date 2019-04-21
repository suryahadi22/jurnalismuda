<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Lupa Password | JurnalisMuda.com Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

     <!-- Special icon social media -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Bootstrap Core Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a href="{{ route('home') }}"><b>JurnalisMuda</b>.com</a>
            <small>Teliti, Cerdas, Menghibur, Menyenangkan</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    
                    @csrf

                    <div class="msg">
                        Masukkan alamat email yang kamu gunakan untuk mendaftar di layanan BlogLink.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">RESET PASSWORD SAYA</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">Masuk!</a>
                    </div>
                    @if ($errors->has('email'))
                    <div class="font-underline col-pink">
                        <p class="align-center">Email tersebut tidak terdaftar di sistem kami</p>
                    </div>
                    @endif
                    <div class="align-center">
                        <br />
                        <small>Copyright &copy; 2019 Jangkrik.Online</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Jquery Core Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/js/admin.js"></script>
    <script src="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/js/pages/examples/forgot-password.js"></script>
</body>

</html>