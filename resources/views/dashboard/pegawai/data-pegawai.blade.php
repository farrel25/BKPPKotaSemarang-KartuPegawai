@extends('dashboard.layouts.master', ['title' => "Data Pegawai "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-user",
        'judul' => "Data Pegawai ",
        'link' => route('pegawai.data-pegawai') ,
        'page1' => "Data Pegawai"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Data Pegawai
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Pegawai Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-file-excel"></i>
                        Cetak Excel
                    </a>
                    <a type="button"
                        class="btn btn-lg btn-focus btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-file-excel"></i>
                        Tambah Excel
                    </a>
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-plus"></i>
                        Tambah Pegawai
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Foto</th>
                            <th class=" text-center">NIP</th>
                            <th class=" text-center">Nama</th>
                            <th class=" text-center">Email</th>
                            <th class=" text-center">Role</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class=" text-center"><input type="checkbox" name="#" value="#">
                            </td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    {{-- <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="0">
                                        <button type="submit" class="btn btn-focus btn-sm mr-1" data-toggle="tooltip"
                                            title="Non Aktifkan Pengguna" data-placement="bottom">
                                            <i class="fas fa-lock-open"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="1">
                                        <button type="submit" class="btn btn-focus btn-sm mr-1" data-toggle="tooltip"
                                            title="Aktifkan Pengguna" data-placement="bottom">
                                            <i class="fas fa-lock"></i>
                                        </button>
                                    </form> --}}
                                    <a href="#" class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                        title="Edit Pengguna " data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Pengguna" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">
                                <img src="#" alt="" width="70">
                                <i>#</i>
                            </td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="badge badge-success">Aktif</div>
                                <br>
                                <div class="badge badge-secondary text-white">Non Aktif</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- {{ $users->links() }} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
