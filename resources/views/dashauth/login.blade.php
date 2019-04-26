<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Masuk | JurnalisMuda.com Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    {{-- <!-- Special icon social media -->  DISABLE SEMENTARA KARENA ADA PROSES REKONSTRUKSI
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> --}}


    <!-- Bootstrap Core Css -->
    <link href="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="{{ route('home') }}"><b>JurnalisMuda</b>.com</a>
            <small>Teliti, Cerdas, Menghibur, Menyenangkan</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="post" action="{{ route('login') }}">
                    @csrf


                    <div class="msg">Masuk untuk mulai Berkarya<br />
                    Karena tulisan, dapat mengubah dunia</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink">
                                <label for="remember">Ingat Saya</label>
                            </div>
                            <div class="col-xs-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">MASUK</button>
                            </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{ route('register') }}">Daftar Sekarang!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{ route('password.request') }}">Lupa Password?</a>
                        </div>
                    </div>
                     <!-- WAIT... THIS IS FOR VALIDATION MESSAGE -->
                    @if ($errors->has('username'))
                    <div class="font-underline col-pink">
                        <p class="align-center">Username atau Password anda salah</p>
                    </div>
                    @endif


                    @if ($errors->has('password'))
                    <div class="font-underline col-pink">
                        <p class="align-center">Username atau Password anda salah</p>
                    </div>
                    @endif

                    {{-- <style type="text/css">
                            :root {
                              --input-padding-x: 1.5rem;
                              --input-padding-y: .75rem;
                            }

                            body {
                              background: #007bff;
                              background: linear-gradient(to right, #0062E6, #33AEFF);
                            }

                            .card-signin {
                              border: 0;
                              border-radius: 1rem;
                              box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
                            }

                            .card-signin .card-title {
                              margin-bottom: 2rem;
                              font-weight: 300;
                              font-size: 1.5rem;
                            }

                            .card-signin .card-body {
                              padding: 2rem;
                            }

                            .form-signin {
                              width: 100%;
                            }

                            .form-signin .btn {
                              font-size: 80%;
                              border-radius: 5rem;
                              letter-spacing: .1rem;
                              font-weight: bold;
                              padding: 1rem;
                              transition: all 0.2s;
                            }

                            .form-label-group {
                              position: relative;
                              margin-bottom: 1rem;
                            }

                            .form-label-group input {
                              height: auto;
                              border-radius: 2rem;
                            }

                            .form-label-group>input,
                            .form-label-group>label {
                              padding: var(--input-padding-y) var(--input-padding-x);
                            }

                            .form-label-group>label {
                              position: absolute;
                              top: 0;
                              left: 0;
                              display: block;
                              width: 100%;
                              margin-bottom: 0;
                              /* Override default `<label>` margin */
                              line-height: 1.5;
                              color: #495057;
                              border: 1px solid transparent;
                              border-radius: .25rem;
                              transition: all .1s ease-in-out;
                            }

                            .form-label-group input::-webkit-input-placeholder {
                              color: transparent;
                            }

                            .form-label-group input:-ms-input-placeholder {
                              color: transparent;
                            }

                            .form-label-group input::-ms-input-placeholder {
                              color: transparent;
                            }

                            .form-label-group input::-moz-placeholder {
                              color: transparent;
                            }

                            .form-label-group input::placeholder {
                              color: transparent;
                            }

                            .form-label-group input:not(:placeholder-shown) {
                              padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
                              padding-bottom: calc(var(--input-padding-y) / 3);
                            }

                            .form-label-group input:not(:placeholder-shown)~label {
                              padding-top: calc(var(--input-padding-y) / 3);
                              padding-bottom: calc(var(--input-padding-y) / 3);
                              font-size: 12px;
                              color: #777;
                            }

                            .btn-google {
                              color: white;
                              background-color: #ea4335;
                            }

                            .btn-facebook {
                              color: white;
                              background-color: #3b5998;
                            }
                        </style>

                        <div>
                             <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Masuk dengan Google</button>
                             <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Masuk dengan Facebook</button>
                        </div> --}}

                    <div class="align-center">
                        <br />
                        <small>Copyright &copy; 2019 Jangkrik.Online</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/js/admin.js"></script>
    <script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/js/pages/examples/sign-in.js"></script>
</body>

</html>