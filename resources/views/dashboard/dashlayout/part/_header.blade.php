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
<title>{{ $judul }} | JurnalisMuda.Com Dashboard</title>
<!-- Favicon-->
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


@if ($judul === 'Buat Profil Kamu')
{{-- Penambahan Khusus Disini Cok --}}
{{-- Tentang Buat Profil Baru --}}
    
    <!-- Bootstrap Core Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/plugins/nouislider/nouislider.min.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="https://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/css/themes/all-themes.css" rel="stylesheet" />
@else
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

@endif
