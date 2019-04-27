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
                                @if (Auth::user()->avatar === null)
                                <img src="https://assets-file-storage.jangkrik.online/surya-repository/assets_dashboard/images/user.png" width="128" height="128" alt="User" />
                                @else
                                <img src="{{ asset('/data/user/avatar/'. auth::user()->avatar) }}" alt="{{ auth::user()->full_name }}" width="128" height="128" />
                                @endif
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

                            {{-- DEBUG START --}}
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                {{ $error }} <br/>
                                @endforeach
                            </div>
                            @endif

                            {{-- DEBUG END --}}

                            {{-- INFO SUCCESS START --}}
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                            @endif

                            {{-- INFO SUCCESS END --}}
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#informasi_dasar" aria-controls="home" role="tab" data-toggle="tab">Informasi Dasar</a></li>
                                <li role="presentation"><a href="#foto_profil" aria-controls="foto_profil" role="tab" data-toggle="tab">Foto Profil</a></li>
                                <li role="presentation"><a href="#social_media" aria-controls="social_media" role="tab" data-toggle="tab">Media Sosial</a></li>
                                <li role="presentation"><a href="#ganti_password" aria-controls="ganti_password" role="tab" data-toggle="tab">Ganti Password</a></li>
                            </ul>
                            <div class="tab-content">
                                {{-- Informasi Dasar --}}
                                <div role="tabpanel" class="tab-pane fade in active" id="informasi_dasar">
                                    <form class="form-horizontal" method="POST" action="{{ url('/dashboard/profil/updateinfo', $user) }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="full_name" class="control-label">Nama Lengkap</label>
                                            {{-- <div class="col-sm-10"> --}}
                                                <div class="form-line">
                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Nama Lengkap" value="{{ Auth::user()->full_name }}" required>
                                                </div>
                                            {{-- </div> --}}
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobs_status" class="control-panel">Status Pekerjaan</label>
                                            {{-- <div class="col-sm-10"> --}}
                                                <div class="form-line">
                                                        <select class="form-control show-tick" name="jobs_status">
                                                            <option value="pelajar"
                                                            @if (Auth::user()->jobs_status === 'pelajar')
                                                            selected
                                                            @endif
                                                            >
                                                            Pelajar
                                                            </option>
                                                            <option value="mahasiswa"
                                                            @if (Auth::user()->jobs_status === 'mahasiswa')
                                                            selected
                                                            @endif
                                                            >
                                                            Mahasiswa
                                                        </option>
                                                            <option value="bekerja"
                                                            @if (Auth::user()->jobs_status === 'bekerja')
                                                            selected
                                                            @endif
                                                            >
                                                            Bekerja
                                                        </option>
                                                        </select>
                                                {{-- </div> --}}
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobs" class="control-label">Sebagai / Posisi / Jurusan</label>
                                            {{-- <div class="col-sm-10"> --}}
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="jobs" name="jobs" placeholder="Posisi / Jurusan" value="{{ Auth::user()->jobs }}">
                                                </div>
                                            {{-- </div> --}}
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobs_where" class="control-label">Tempat Kerja / Belajar</label>
                                            {{-- <div class="col-sm-10"> --}}
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="jobs_where" name="jobs_where" placeholder="Tempat Kerja / Belajar" value="{{ Auth::user()->jobs_where }}">
                                                </div>
                                            {{-- </div> --}}
                                            <br><br>
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
                                    <form action="{{ url('/dashboard/profil/ppupdate', $user) }}" id="ppFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
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
                                <div role="tabpanel" class="tab-pane fade in" id="social_media">
                                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
                                    <form action="{{ url('/dashboard/profil/socialupdate', $user) }}" class="form-horizontal" method="POST">
                                        @csrf
                                        {{-- Facebook --}}
                                        <div class="form-group">
                                            <label for="facebook" class="col-sm3 control-label"><i class="fab fa-facebook fa-2x"></i></label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Masukkan Username Facebook kamu" value="{{ Auth::user()->social_facebook }}">
                                                </div>
                                                <span><small>facebook.com/<em>username_kamu</em></small></span>
                                            </div>
                                        </div>
                                        {{-- Twitter --}}
                                        <div class="form-group">
                                            <label for="twitter" class="col-sm3 control-label"><i class="fab fa-twitter fa-2x"></i></label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukkan Username Twitter kamu" value="{{ Auth::user()->social_twitter }}">
                                                </div>
                                                <span><small>twitter.com/<em>username_kamu</em></small></span>
                                            </div>
                                        </div>
                                        {{-- Instagram --}}
                                        <div class="form-group">
                                            <label for="instagram" class="col-sm3 control-label"><i class="fab fa-instagram fa-2x"></i></label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="test" class="form-control" id="instagram" name="instagram" placeholder="Masukkan Username Instagram kamu" value="{{ Auth::user()->social_instagran }}">
                                                </div>
                                                <span><small>instagram.com/<em>username_kamu</em></small></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">SUBMIT</button>
                                            </div>
                                        </div>
                                        {{-- Youtube --}}
                                        {{-- <div class="form-group">
                                            <label for="facebook" class="col-sm3 control-label"><i class="fab fa-facebook fa-2x"></i></label>
                                            <div class="col-sm-9">
                                                <div class="form-line">
                                                    <input type="test" class="form-control" id="facebook" name="facebook" placeholder="Masukkan Username Facebook kamu" value="{{ Auth::user()->social_facebook }}">
                                                </div>
                                                <span><small>facebook.com/<em>username_kamu</em></small></span>
                                            </div>
                                        </div> --}}
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