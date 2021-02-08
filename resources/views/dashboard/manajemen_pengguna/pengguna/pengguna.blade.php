@extends('dashboard.layouts.master', ['title' => "Pengguna "])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-user",
        'judul' => "Pengguna ",
        'link' => route('manajemen-pengguna.pengguna') ,
        'page1' => "Pengguna "
    ]
?>
@include('dashboard.layouts.page-title',$data)


<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Pengguna
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Pengguna Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="{{ route('manajemen-pengguna.tambah-pengguna') }}"><i class="fas fa-plus"></i>
                        Tambah Pengguna
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class="text-center">No.</th>
                            <th class="text-center">Aksi</th>
                            {{-- <th class="text-center">Foto</th> --}}
                            <th class="text-center">NIP</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Role</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $number => $user)
                        <tr>
                            <td class="text-center"><input type="checkbox" name="#" value="#">
                            </td>
                            <td class="text-center">{{ $number + $users->firstItem() }}</td>
                            @if ($user->roles->first()->name == 'Administrator' && $user->id == 1)
                            <td class="text-center font-italic">
                                tidak ada aksi
                            </td>
                            @else
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    <form method="POST" action="{{ route('manajemen-pengguna.akun-pengguna.activation', $user->id) }}">
                                        @csrf
                                        @method('patch')
                                        <input type="hidden" name="is_active" value="{{ $user->is_active == 1 ? 0:1 }}">
                                        <button type="submit" class="btn btn-focus btn-sm mr-1"
                                            data-toggle="tooltip" title="{{ $user->is_active == 1 ? 'Non Aktifkan Pengguna':'Aktifkan Pengguna' }}" data-placement="bottom">
                                            <i class="fas {{ $user->is_active == 1 ? 'fa-lock-open':'fa-lock' }}"></i>
                                        </button>
                                        @error('is_active')
                                        <span class="invalid-feedback mt-2" role="alert">
                                            <i>{{ $message }}</i>
                                        </span>
                                        @enderror
                                    </form>
                                    <span class="editUserRoleModal" data-toggle="modal" data-target="#editUserRoleModal" data-id="{{$user->id}}" data-roleid="{{$user->roles->first()->id}}">
                                        <button class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                            title="Ubah role pengguna " data-placement="bottom">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </span>
                                    <form id="delete-user-form" action="{{ route('manajemen-pengguna.akun-pengguna.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mr-1"
                                            data-toggle="tooltip" title="Hapus Pengguna"
                                            data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            @endif
                            {{-- <td class="text-center">
                                <img src="#" alt="" width="70">
                                <i>#</i>
                            </td> --}}
                            {{-- {{var_dump($user->employee)}} --}}
                            <td class="text-center">{{ $user->employee->nip }}</td>
                            <td class="text-center">{{ $user->employee->nama }}</td>
                            <td class="text-center">{{ $user->username }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">{{ $user->roles->first()->name }}</td>
                        </tr>
                        @endforeach
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

<script>
    $(document).on('click', '#delete-user-form', function(e) {
        var form = this;
        e.preventDefault();
        swal.fire({
            title: 'Hapus Data Ini?',
            text: "Data Tidak Akan Kembali ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Iya, hapus!',
            cancelButtonText: 'Tidak, batalkan!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                return form.submit();
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swal.fire(
                    'Dibatalkan',
                    'Data anda masih tersimpan',
                    'error'
                )
            }
        })
    });

    $(document).on("click", ".editUserRoleModal", function () {
        const id = $(this).data('id');
        const roleId = $(this).data('roleid');
        $("#editUserRoleModal .modal-body #id").val(id);
        $("#editUserRoleModal .modal-body #role-id").val(roleId);
    });
</script>

@endsection
