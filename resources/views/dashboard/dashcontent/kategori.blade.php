@extends('dashboard.dashlayout.app')
@section('content')
    <div class="container-fluit">
        <div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    DAFTAR KATEGORI
                                    <small>Berikut adalah daftar Kategori yang tersedia<br />
                                    Tulis terus, dan tunjukkan pada Dunia bahwa kamu JurnalisMuda yang berkualitas.</small>
                                </h2>
                                <div class="header-dropdown m-r-5">
                                <a href="#" class="btn btn-default waves-effect"><i class="material-icons">add_box</i> <span>Tambah Kategori</span></a>
                                </div>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><strong>#id</strong></th>
                                            <th><strong>Nama Kategori</strong></th>
                                            <th><strong>Deskripsi</strong></th>
                                            <th class="text-center" colspan="3"><strong>Aksi</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kategori Unik</td>
                                            <td>Ini adalah sebuah kategori yang unik kawan</td>
                                            <td><a href="#" class="btn btn-primary"><i class="material-icons">details</i></a></td>
                                            <td><a href="#" class="btn btn-primary"><i class="material-icons">mode_edit</i></a></td>
                                            <td><a href="#" class="btn btn-primary"><i class="material-icons">delete_forever</i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- {{ $artikel_show->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection