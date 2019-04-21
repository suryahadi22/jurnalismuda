<?php $__env->startSection('content'); ?>
<!-- Basic Example | Horizontal Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Lengkapi Profil Kamu Sekarang</h2>
                <small>Biarkan dunia mengenal anda lebih dekat</small>
            </div>
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

                    <form id="regForm" class="animated bounce" action="<?php echo e(url('store')); ?>">
                    
                    <!-- One "tab" for each step in the form: -->
                    <?php echo csrf_field(); ?>

                    <div class="tab align-center">
                        <div class="alert alert-success">Selamat! Kamu sudah menjadi JurnalisMuda</div>
                        Sebelum lanjut menuliskan artikel, izinkan kami dan rekan-rekan pembaca artikel kamu mengenalmu lebih dalam.<br /><br />
                        Dengan menekan tombol <b>Selanjutnya</b>, kamu sudah mulai mengisi informasi tentang kamu.<br/><br />
                        Dan memulai menulis hal hebatmu.
                    <br/><br /><br />
                    </div>
                    
                    <div class="tab animated fadeInUp">Kalau Boleh tahu, apa pekerjaan kamu?
                        <p><input placeholder="Pekerjaan saya adalah..." oninput="this.className = ''" name="jobs"></p>
                        Dimana itu?
                        <p><input placeholder="Saya Bekerja atau Pelajar di..." name="jobs_where"></input></p>
                    </div>
                    <div class="tab animated fadeInUp">Kamu tinggal dimana?
                        <p><input placeholder="Nama Jalan, RT / RW, Dusun / Komplek / Blok" name="address_line1"></p>
                        <p><input placeholder="Desa / Kelurahan, Kecamatan" name="address_line2"></p>
                        <p><input placeholder="Kota / Kabupaten" name="address_city"></p>
                        <p><input placeholder="Provinsi" name="address_province"></p>
                        <p><input placeholder="Kode Pos" type="number" name="address_zipcode"></p>
                        
                    </div>
                    <div class="tab">
                        <p>Tulis tanggal lahir kamu disini
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                </div>
                            </div>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashlayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/suryahadi/Coding Project/Data Project/Jangkrik.Online/JurnalisMuda.com/resources/views/dashboard/dashcontent/profil/buat.blade.php ENDPATH**/ ?>