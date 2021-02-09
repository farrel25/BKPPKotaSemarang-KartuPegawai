@extends('dashboard.layouts.master', ['title' => "Kartu Pegawai Selesai"])

@section('content')

<?php
    $data=[
        'icon' => "pe-7s-id",
        'judul' => "Kartu Pegawai Selesai",
        'link' => route('kartu-pegawai.kartu-pegawai-selesai') ,
        'page1' => "Kartu Pegawai Selesai"
    ]
?>
@include('dashboard.layouts.page-title',$data)

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Kartu Pegawai Selesai
                <div class="btn-actions-pane-right ">
                    <a type="button"
                        class="btn btn-lg btn-danger btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-trash-alt"></i> Hapus Kartu Terpilih</a>
                    <a type="button"
                        class="btn btn-lg btn-alternate btn-sm text-white font-weight-normal m-1 mb-2  btn-responsive"
                        href="#"><i class="fas fa-print"></i>
                        Cetak Ulang Kartu Terpilih
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
                            <th class=" text-center">Nama Pegawai</th>
                            <th class=" text-center">NIP</th>
                            <th class=" text-center">Tgl Pengajuan</th>
                            <th class=" text-center">Tgl Selesai</th>
                            {{-- <th class=" text-center">Jumlah Cetak</th> --}}
                            {{-- <th class=" text-center">Jumlah Revisi</th> --}}
                            {{-- <th class=" text-center">SK STTPL</th>
                            <th class=" text-center">Status</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finishedProposals as $number => $proposal)
                        <tr>
                            <td class=" text-center"><input type="checkbox" name="#" value="#">
                            </td>
                            <td class=" text-center">{{ $number + $finishedProposals->firstItem() }}</td>
                            <td class=" text-center">
                                <div class="d-flex justify-content-center">
                                    {{-- <a href="{{route('manajemen-pengguna.pengguna-edit')}}"
                                    class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                    title="Edit Pengguna " data-placement="bottom">
                                    <i class="fas fa-edit"></i>
                                    </a> --}}
                                    {{-- <a href="#" class="btn btn-primary btn-sm mr-1 " data-toggle="tooltip"
                                        title="Edit Pengguna" data-placement="bottom">
                                        <i class="fas fa-edit"></i>
                                    </a> --}}
                                    <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="0">
                                        <button type="submit" class="btn btn-secondary btn-sm mr-1"
                                            data-toggle="tooltip" title="Download Kartu" data-placement="bottom">
                                            <i class="fas fa-download"></i>
                                        </button>
                                    </form>
                                    <form method="POST" action="#">
                                        <input type="hidden" name="is_active" value="1">
                                        <button type="submit" class="btn btn-alternate   btn-sm mr-1"
                                            data-toggle="tooltip" title="Cetak Ulang" data-placement="bottom">
                                            <i class="fas fa-print"></i>
                                        </button>
                                    </form>
                                    {{-- <form id="delete-proposal-form" action="#" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm mr-1" data-toggle="tooltip"
                                            title="Hapus Kartu" data-placement="bottom">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form> --}}
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
                            <td class=" text-center">{{ date('d-M-Y', strtotime($proposal->created_at)) }}</td>
                            <td class=" text-center">{{ date('d-M-Y', strtotime($proposal->updated_at)) }}</td>
                            {{-- <td class=" text-center">#</td> --}}
                            {{-- <td class=" text-center">#</td>
                            <td class=" text-center">
                                <div class="badge badge-primary">Masuk</div>
                                <br>
                                <div class="badge badge-alternate">Cetak</div>
                                <br>
                                <div class="badge badge-warning text-white">Ambil</div>
                                <br>
                                <div class="badge badge-success">Selesai</div>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class=" d-block card-footer ">
                <div class="card-body ">
                    <nav class=" " aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $finishedProposals->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
