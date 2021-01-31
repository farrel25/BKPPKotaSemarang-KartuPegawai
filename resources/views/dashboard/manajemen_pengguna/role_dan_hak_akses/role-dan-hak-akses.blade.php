@extends('dashboard.layouts.master', ['title' => "Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-network",
        'judul' => "Role dan Hak Akses ",
        'link' => route('manajemen-pengguna.role-dan-hak-akses') ,
        'page1' => "Role dan Hak Akses "
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Role
                        <div class="btn-actions-pane-right ">
                            <button type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                data-toggle="modal" data-target="#addRoleModal"><i class="fas fa-plus"></i>
                                Tambah Role
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    </th>
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Aksi</th>
                                    <th class=" text-center">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">
                                        <div class="d-flex justify-content-center">
                                            <span data-toggle="modal" data-target="#editRoleModal">
                                                <a href="#" class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                                    title="Edit Role" data-placement="bottom">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </span>
                                            <form id="delete-form" action="#" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                    data-toggle="tooltip" title="Hapus Role" data-placement="bottom">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class=" text-center">#</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class=" d-block card-footer ">
                        <div class="card-body ">
                            <nav class=" " aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    {{-- {{ $articles->links() }} --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Hak Akses
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Menu</th>
                                    <th class=" text-center">Hak Akses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body ">
                        <a href="#" class="btn btn-primary ">Ubah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
