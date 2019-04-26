@if ($cok_plugins === 'formulir')
{{-- Penambahan Khusus Disini --}}
{{-- Pembuatan Profil Keren COK --}}

<!-- Jquery Core Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

<!-- Dropzone Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/nouislider/nouislider.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/node-waves/waves.js"></script>

<!-- Custom Js -->
<script src="{{ asset('scripts/custom_js/admin.js') }}"></script>
<script src="{{ asset('scripts/custom_js/pages/forms/advanced-form-elements.js') }}"></script>

<!-- Demo Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/js/demo.js"></script>


@elseif($cok_plugins === 'grafik')


{{-- Kode disini --}}


@else

{{-- Jika tidak ada definisi khusus --}}

<!-- Jquery Core Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- -------------------------------------------------- -->

<!-- Custom Js -->
<script src="{{ asset('scripts/custom_js/admin.js') }}"></script>

<!-- Demo Js -->
<script src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/js/demo.js"></script>

@endif