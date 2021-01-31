@extends('dashboard.layouts.master', ['title' => "Dashboard Menu "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-photo-gallery",
        'judul' => "Dashboard Menu ",
        'link' => route('manajemen-menu.menu') ,
        'page1' => "Dashboard Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Menu
                        <div class="btn-actions-pane-right ">
                            <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#"><i class="fas fa-trash-alt"></i> Hapus Menu Terpilih</a>
                            <a type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#">+
                                Tambah Menu
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                            <thead>
                                <tr>
                                    <th class=" text-center"><input type="checkbox" onchange="checkAll(this)"
                                            name="chk[]">
                                    </th>
                                    <th class=" text-center">No.</th>
                                    <th class=" text-center">Aksi</th>
                                    <th class=" text-center">Menu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-alternate btn-sm mr-1 text-white"
                                                data-toggle="tooltip" title="Sub Menu " data-placement="bottom">
                                                <i class="fas fa-bars"></i>
                                            </a>
                                            <form method="POST" action="#">
                                                <input type="hidden" name="is_active" value="0">
                                                <button type="submit" class="btn btn-focus btn-sm mr-1"
                                                    data-toggle="tooltip" title="Non Aktifkan" data-placement="bottom">
                                                    <i class="fas fa-lock-open"></i>
                                                </button>
                                            </form>
                                            <a href="#" class="btn btn-focus btn-sm mr-1 " data-toggle="tooltip"
                                                title="Aktifkan " data-placement="bottom">
                                                <i class="fas fa-lock"></i>
                                            </a>
                                            <a href="#" class="btn btn-success btn-sm mr-1 " data-toggle="tooltip"
                                                title="Tambah Sub Menu " data-placement="bottom">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                                title="Edit Menu " data-placement="bottom">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form id="delete-form" action="#" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                    data-toggle="tooltip" title="Hapus Anggota" data-placement="bottom">
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

</div>

@endsection
