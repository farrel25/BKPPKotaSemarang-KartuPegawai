@extends('dashboard.layouts.master', ['title' => "Dashboard Sub Menu"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-albums",
        'judul' => "Dashboard Sub Menu ",
        'link' => route('manajemen-menu.sub-menu') ,
        'page1' => "Dashboard Sub Menu "
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Sub Menu
                        <div class="btn-actions-pane-right ">
                            <a type="button"
                                class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                href="#"><i class="fas fa-trash-alt"></i> Hapus Sub Menu Terpilih</a>
                            <button type="button"
                                class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                                data-toggle="modal" data-target="#addSubMenuModal"><i class="fas fa-plus"></i>
                                Tambah Sub Menu
                            </button>
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
                                    <th class=" text-center">Sub Menu</th>
                                    <th class=" text-center">Menu Parent</th>
                                    <th class=" text-center">URL Path</th>
                                    <th class=" text-center">Icon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class=" text-center"><input type="checkbox" name="chkbox[]" value="#">
                                    </td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-focus btn-sm mr-1 " data-toggle="tooltip"
                                                title="Non Aktifkan Sub Menu" data-placement="bottom">
                                                <i class="fas fa-unlock"></i>
                                            </a>
                                            <a href="#" class="btn btn-focus btn-sm mr-1 " data-toggle="tooltip"
                                                title="Aktifkan Sub Menu" data-placement="bottom">
                                                <i class="fas fa-lock"></i>
                                            </a>
                                            <span data-toggle="modal" data-target="#editSubMenuModal">
                                                <a href="#" class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                                    title="Edit Sub Menu" data-placement="bottom">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </span>
                                            <form id="delete-form" action="#" method="post">
                                                <button type="submit" class="btn btn-danger btn-sm mr-1"
                                                    data-toggle="tooltip" title="Hapus Sub Menu"
                                                    data-placement="bottom">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">#</td>
                                    <td class=" text-center">#</td>
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
