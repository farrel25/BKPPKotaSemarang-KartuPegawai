@extends('visitor.layouts.master', ['title' => 'Kartu Pegawai'])

@section('content')

<div class="jumbotron jumbotron-fluid bg-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-11 m-auto bg-glass" data-aos="zoom-in" data-aos-duration="1500">
                <h1 class="display-4">KARTU PEGAWAI</h1>
                <p class="lead ml-2 mr-2 ml-lg-5 mr-lg-5 d-lg-block">
                    Melayani pengajuan pembuatan Kartu Pegawai baru maupun penggantian kartu pegawai karena hilang bagi
                    Pegawai Balaikota Semarang
                </p>
                <a class="btn btn-light" href="#" role="button">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-11 info-services">
            <div class="row">
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2">
                    <h3> 24 jam</h3>
                    <p> Layanan pengajuan pembuatan kartu pegawai tersedia 24 jam</p>
                </div>
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-2.png" class="float-left mr-2">
                    <h3> Cepat</h3>
                    <p> Pembuatan kartu pegawai diproses secepat mungkin dan dapat diambil dengan segera</p>
                </div>
                <div class=" col-lg">
                    <img src="{{ asset('/visitor/images') }}/service-1.png" class="float-left mr-2">
                    <h3> Akurat</h3>
                    <p> Terjamin tidak ada kesalahan pencetakan selama data yang dikirim sesuai</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row">
        <h1 class="mb-5 text-center" style="font-weight: 700; color: #373139;" data-aos="fade-up"
            data-aos-duration="2000">
            -Persyaratan dan Pembuatan-
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-11 bg-activity mr-lg-3 mb-3" data-aos="fade-right" data-aos-duration="2000"
            data-aos-delay="500">
            <h3>Pengajuan Kartu Pegawai</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#pengajuan"
                data-whatever="@mdo">Buat</a>

        </div>
        <div class="col-lg-4 col-11 bg-activity ml-lg-3 mb-3" data-aos="fade-left" data-aos-duration="2000"
            data-aos-delay="500">
            <h3>Penggantian Karena Hilang</h3>
            <p>1. Fotokopi SK CPNS dilegalisir</p>
            <p>2. Fotokopi SAH SK PNS dilegalisir</p>
            <p>3. Foto 3x4</p>
            <p>4. Fotokopi STTPL dilegalisir</p>
            <p>5. Surat Keterangan Hilang dari Kepolisian</p>
            <a class="btn btn-activity" href="#" role="button" data-toggle="modal" data-target="#penggantian"
                data-whatever="@mdo">Buat</a>
        </div>
    </div>
</div>

{{-- modal pengajuan kartu pegawai --}}
<div class="modal fade" id="pengajuan" tabindex="-1" role="dialog" aria-labelledby="pengajuanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Kartu Pegawai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3 mr-3">
                <form>
                    <div class="form-group mb-3">
                        <label for="sk_cpns" class="mb-2">1. Fotokopi SK CPNS</label>
                        <input name="sk_cpns" id="sk_cpns" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                        {{-- @error('photo')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror --}}
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_pns" class="mb-2">2. Fotokopi SAH SK PNS dilegalisir</label>
                        <input name="sk_pns" id="sk_pns" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="photo" class="mb-2">3. Foto 3x4</label>
                        <br>
                        <input name="photo" id="photo" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sttpl" class="mb-2">4. Fotokopi STTPL dilegalisir</label>
                        <input name="sttpl" id="sttpl" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning">Kirim</button>
            </div>
        </div>
    </div>
</div>

{{-- modal penggantian karena hilang --}}
<div class="modal fade" id="penggantian" tabindex="-1" role="dialog" aria-labelledby="pengajuanLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penggantian Karena Hilang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ml-3 mr-3">
                <form>
                    <div class="form-group mb-3">
                        <label for="sk_cpns" class="mb-2">1. Fotokopi SK CPNS</label>
                        <input name="sk_cpns" id="sk_cpns" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                        {{-- @error('photo')
                        <span class="invalid-feedback mt-2" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror --}}
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_pns" class="mb-2">2. Fotokopi SAH SK PNS dilegalisir</label>
                        <input name="sk_pns" id="sk_pns" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="photo" class="mb-2">3. Foto 3x4</label>
                        <br>
                        <input name="photo" id="photo" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sttpl" class="mb-2">4. Fotokopi STTPL dilegalisir</label>
                        <input name="sttpl" id="sttpl" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_hilang" class="mb-2">5. Surat Keterangan Hilang dari Kepolisian</label>
                        <input name="sk_hilang" id="sk_hilang" type="file" class="form-control-file ">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-form-label">Pesan :</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-warning">Kirim</button>
            </div>
        </div>
    </div>
</div>
@endsection
