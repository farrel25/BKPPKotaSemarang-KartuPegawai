@extends('dashboard.layouts.master', ['title' => "Pengajuan Kartu Pegawai"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-download",
        'judul' => "Pengajuan Kartu Pegawai ",
        'link' => route('kartu-pegawai.pengajuan-kartu-pegawai') ,
        'page1' => "Pengajuan Kartu Pegawai"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Pengajuan Kartu Pegawai
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Kartu Pegawai Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-print"></i> Cetak Kartu Pegawai Terpilih</a>
                    {{-- <a type="button"
                        class="btn btn-lg btn-success btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="{{ route('kartu-pegawai.tambah-pengajuan-kartu-pegawai') }}"><i class="fas fa-plus"></i>
                    Tambah Kartu Pegawai
                    </a> --}}
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover p-5">
                    <thead>
                        <tr>
                            <th class=" text-center"><input type="checkbox" onchange="checkAll(this)" name="chk[]"></th>
                            <th class=" text-center">No.</th>
                            <th class=" text-center">Aksi</th>
                            <th class=" text-center">Foto 3x4</th>
                            <th class=" text-center">Nama Pegawai</th>
                            <th class=" text-center">NIP</th>
                            <!--<th class=" text-center">SK CPNS</th>
                            <th class=" text-center">SK PNS</th>
                            <th class=" text-center">STTPL</th>
                            <th class=" text-center">SK Hilang</th>-->
                            <th class=" text-center">Keterangan</th>
                            <th class=" text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proposals as $number => $proposal)
                        <tr>
                            <td class=" text-center">
                                <input type="checkbox" name="#" value="#">
                            </td>
                            <td class=" text-center">{{ $number + $proposals->firstItem() }}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    {{-- <a href="{{route('manajemen-pengguna.pengguna-edit')}}"
                                    class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                    title="Edit Pengguna " data-placement="bottom">
                                    <i class="fas fa-edit"></i>
                                    </a> --}}
                                    <a href="{{ route('kartu-pegawai.edit-pengajuan-kartu-pegawai') }}"
                                        class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip" title="Edit Kartu "
                                        data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Download Kartu" data-placement="bottom">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="1">
                                        <button type="submit" class="btn btn-alternate btn-sm mr-1"
                                            data-toggle="tooltip" title="Cetak Kartu" data-placement="bottom">
                                            <i class="fas fa-print"></i>
                                        </button>
                                    </form>
                                    <form id="delete-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Kartu" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td class=" text-center">
                                <img src="{{ asset('storage/' . $proposal->photo) }}" alt="" width="70">
                            </td>
                            @php
                            $employeeId = $proposal->user->employee_id;
                            $employeeData = \DB::table('employees')->where('id', $employeeId)->first();
                            // var_dump($employeeData);
                            @endphp
                            <td class=" text-center">{{ $employeeData->nama }}</td>
                            <td class=" text-center">{{ $employeeData->nip }}</td>
                            <td class=" text-center">
                                {{ $proposal->sk_hilang == null ? "Buat baru":"Penggantian karena hilang" }}
                            </td>
                            <td class=" text-center">
                                @if ($proposal->sk_cpns_acc == null && $proposal->sk_pns_acc == null &&
                                $proposal->sttpl_acc == null && $proposal->photo_acc == null)
                                <div class="badge badge-primary">Masuk</div>
                                @elseif($proposal->sk_cpns_acc === 1 || $proposal->sk_pns_acc === 1 ||
                                $proposal->sttpl_acc === 1 || $proposal->photo_acc === 1)
                                <div class="badge badge-warning text-white">Revisi</div>
                                @elseif($proposal->sk_cpns_acc === 1 && $proposal->sk_pns_acc === 1 &&
                                $proposal->sttpl_acc === 1 && $proposal->photo_acc === 1)
                                <div class="badge badge-alternate">Proses Cetak</div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $proposals->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
