@extends('dashboard.dashlayout.app')
@section('content')
<!-- Basic Example | Horizontal Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Lengkapi Profil Kamu Sekarang</h2>
                <small>Biarkan dunia mengenal anda lebih dekat
                </small>
            </div>
                @if (Auth::user()->id == $user->id)
                <div class="body">
                        <!--  REGISTRASIKAN DIRI ANDA   -->
                        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
                        <style>
                        * {
                        box-sizing: border-box;
                        }
    
                        body {
                        background-color: #f1f1f1;
                        }
    
                        #regForm {
                        background-color: #ffffff;
                        margin: auto;
                        font-family: Raleway;
                        padding: 40px;
                        width: 70%;
                        min-width: 300px;
                        }
    
                        h1 {
                        text-align: center;  
                        }
    
                        input {
                        padding: 10px;
                        width: 100%;
                        font-size: 17px;
                        font-family: Raleway;
                        border: 1px solid #aaaaaa;
                        }
    
                        /* Mark input boxes that gets an error on validation: */
                        input.invalid {
                        background-color: #ffdddd;
                        }
    
                        /* Hide all steps by default: */
                        .tab {
                        display: none;
                        }
    
                        button {
                        background-color: #4CAF50;
                        color: #ffffff;
                        border: none;
                        padding: 10px 20px;
                        font-size: 17px;
                        font-family: Raleway;
                        cursor: pointer;
                        }
    
                        button:hover {
                        opacity: 0.8;
                        }
    
                        #prevBtn {
                        background-color: #bbbbbb;
                        }
    
                        /* Make circles that indicate the steps of the form: */
                        .step {
                        height: 15px;
                        width: 15px;
                        margin: 0 2px;
                        background-color: #bbbbbb;
                        border: none;  
                        border-radius: 50%;
                        display: inline-block;
                        opacity: 0.5;
                        }
    
                        .step.active {
                        opacity: 1;
                        }
    
                        /* Mark the steps that are finished and valid: */
                        .step.finish {
                        background-color: #4CAF50;
                        }
                        </style>
                        <body>
    
                        <form id="regForm" class="animated bounce" action="{{ url('/register/buat-profil/store', $user) }}" method="POST">
                        {{-- Berulang-ulang gunakan class="animated infinite bounce" --}}
                        <!-- One "tab" for each step in the form: -->
                        {!! csrf_field() !!}
                        <div class="tab align-center">
                            <div class="alert alert-success">Selamat! Kamu sudah menjadi MediaBebas</div>
                            Sebelum lanjut menuliskan artikel, izinkan kami dan rekan-rekan pembaca artikel kamu mengenalmu lebih dalam.<br /><br />
                            Dengan menekan tombol <b>Selanjutnya</b>, kamu sudah mulai mengisi informasi tentang kamu.<br/><br />
                            Dan memulai menulis hal hebatmu.

                            {{-- @if ($errors->any())
                                    {{ implode('', $errors->all('<div>:message</div>')) }}
                            @endif --}}
                            {{-- DIATAS DIGUNAKAN UNTUK OPEN BUG JIKA ADA YANG SALAH DI FORM NYA --}}

                        <br/><br /><br />
                        </div>
                        {{-- Form Pekerjaan --}}
                        <div class="tab animated fadeInUp">Kamu pelajar, mahasiswa, atau sudah bekerja?
                            <select class="form-control show-tick" name="jobs_status">
                                <option value="pelajar">Pelajar</option>
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="bekerja">Bekerja</option>
                            </select>
                            Kalau Boleh tahu, sebagai apa / jurusan apa?
                            <p><input placeholder="Pekerjaan saya adalah..." name="jobs"></p>
                            Dimana itu?
                            <p><input placeholder="Saya Bekerja atau Pelajar di..." name="jobs_where"></input></p>
                        </div>
                        {{-- Form Alamat --}}
                        <div class="tab demo-masked-input animated fadeInUp">Kamu tinggal dimana?
                            <p><input placeholder="Nama Jalan, RT / RW, Dusun / Komplek / Blok" name="address_line1"></p>
                            <p><input placeholder="Desa / Kelurahan, Kecamatan" name="address_line2"></p>
                            <p><input placeholder="Kota / Kabupaten" name="address_city"></p>
                            <p><input placeholder="Provinsi" name="address_province"></p>
                            <p><input placeholder="Kode Pos" type="number" name="address_zipcode"></p>
                            <br >
                            Nomor HP nya sekalian dong
                            <div class="form-line">
                                <input type="text" name="contact_phone_number" class="form-control mobile-nomor-telepon" placeholder="Ex: 0858-0660-2320">
                            </div>
                        </div>

                        {{-- Form Tanggal Lahir --}}
                        <div class="tab demo-masked-input animated fadeInUp">
                            <p>Tulis tanggal lahir kamu disini
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" name="birthday" class="form-control birth-date" placeholder="Contoh: 1999-03-22">
                                    </div>
                                </div>
                                Kamu Cowok atau Cewek?
                                <select class="form-control show-tick" name="sex">
                                    <option value="cowok">Cowok</option>
                                    <option value="cewek">Cewek</option>
                                </select>
                            </p>
                        </div>
                       
                        <div style="overflow:auto;">
                            <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Sebelumnya</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Lanjutkan</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                        </form>
                        <!-- Jquery Core Js -->
                        <script>
                        var currentTab = 0; // Current tab is set to be the first tab (0)
                        showTab(currentTab); // Display the current tab
    
                        function showTab(n) {
                        // This function will display the specified tab of the form...
                        var x = document.getElementsByClassName("tab");
                        x[n].style.display = "block";
                        //... and fix the Previous/Next buttons:
                        if (n == 0) {
                            document.getElementById("prevBtn").style.display = "none";
                        } else {
                            document.getElementById("prevBtn").style.display = "inline";
                        }
                        if (n == (x.length - 1)) {
                            document.getElementById("nextBtn").innerHTML = "Kirim";
                        } else {
                            document.getElementById("nextBtn").innerHTML = "Lanjutkan";
                        }
                        //... and run a function that will display the correct step indicator:
                        fixStepIndicator(n)
                        }
    
                        function nextPrev(n) {
                        // This function will figure out which tab to display
                        var x = document.getElementsByClassName("tab");
                        // Exit the function if any field in the current tab is invalid:
                        if (n == 1 && !validateForm()) return false;
                        // Hide the current tab:
                        x[currentTab].style.display = "none";
                        // Increase or decrease the current tab by 1:
                        currentTab = currentTab + n;
                        // if you have reached the end of the form...
                        if (currentTab >= x.length) {
                            // ... the form gets submitted:
                            document.getElementById("regForm").submit();
                            return false;
                        }
                        // Otherwise, display the correct tab:
                        showTab(currentTab);
                        }
    
                        function validateForm() {
                        // This function deals with validation of the form fields
                        var x, y, i, valid = true;
                        x = document.getElementsByClassName("tab");
                        y = x[currentTab].getElementsByTagName("input");
                        // A loop that checks every input field in the current tab:
                        for (i = 0; i < y.length; i++) {
                            // If a field is empty...
                            if (y[i].value == "") {
                            // add an "invalid" class to the field:
                            y[i].className += " invalid";
                            // and set the current valid status to false
                            valid = false;
                            }
                        }
                        // If the valid status is true, mark the step as finished and valid:
                        if (valid) {
                            document.getElementsByClassName("step")[currentTab].className += " finish";
                        }
                        return valid; // return the valid status
                        }
    
                        function fixStepIndicator(n) {
                        // This function removes the "active" class of all steps...
                        var i, x = document.getElementsByClassName("step");
                        for (i = 0; i < x.length; i++) {
                            x[i].className = x[i].className.replace(" active", "");
                        }
                        //... and adds the "active" class on the current step:
                        x[n].className += " active";
                        }
                        </script>
                    </div>
                @else
                {{-- Akun Salah --}}
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
                                        <strong>URL TIDAK VALID</strong>
                                    </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>


@endsection