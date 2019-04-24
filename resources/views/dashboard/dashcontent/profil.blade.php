@extends('dashboard.dashlayout.app')
@section('content')

@if (Auth::user()->id == $user->id)
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="http://jurnalismuda-com.assets-file-storage.jangkrik.online/assets_dashboard/images/user.png" alt="{{ auth::user()->full_name }}" />
                        </div>
                        <div class="content-area">
                            <h3>{{ auth::user()->full_name }}</h3>
                            <p>{{ auth::user()->username }}</p>
                            <p>{{ strtoupper(auth::user()->level_access) }}</p>
                        </div>
                    </div>
                    <div class="profile-footer">
                        <ul>
                            <li>
                                <span>Jumlah Tulisan</span>
                                <span>1.234</span>
                            </li>
                        </ul>
                        <button class="btn btn-primary btn-lg waves-effect btn-block">Dung Enek Gunane</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#informasi_dasar" aria-controls="home" role="tab" data-toggle="tab">Informasi Dasar</a></li>
                                <li role="presentation"><a href="#foto_profil" aria-controls="foto_profil" role="tab" data-toggle="tab">Foto Profil</a></li>
                                <li role="presentation"><a href="#ganti_password" aria-controls="ganti_password" role="tab" data-toggle="tab">Ganti Password</a></li>
                            </ul>
                            <div class="tab-content">
                                {{-- Informasi Dasar --}}
                                <div role="tabpanel" class="tab-pane fade in active" id="informasi_dasar">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="full_name" class="col-sm-2 control-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nama Lengkap" value="{{ Auth::user()->full_name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="{{ Auth::user()->email }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- Foto Profil --}}
                                <div role="tabpanel" class="tab-pane fade in" id="foto_profil">
                                    <form action="{{ url('/dashboard/profil/update', $user) }}" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="dz-message">
                                            <div class="drag-icon-cph">
                                                <i class="material-icons">photo</i>
                                            </div>
                                            <h3>Tarik foto kamu disini atau Klik untuk Mengunggah.</h3>
                                            <em>(Pastikan foto profil kamu yang paling kece ya. Karena terlihat publik.)</em>
                                        </div>
                                        <div class="fallback">
                                            {{-- <input name="file" type="file" multiple /> --}}
                                            <input name="avatar" type="file" />
                                        </div>
                                    </form>
                                </div>


                                <div role="tabpanel" class="tab-pane fade in" id="ganti_password">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else 
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
@endsection