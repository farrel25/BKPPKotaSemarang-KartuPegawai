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

            <form action="{{ route('home.store-new') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="modal-body ml-3 mr-3">
                    <div class="form-group mb-3">
                        <label for="sk_cpns" class="mb-2">1. Fotokopi SK CPNS</label>
                        <input name="sk_cpns" id="sk_cpns" type="file"
                            class="form-control-file @error('sk_cpns') is-invalid @enderror"
                            value="{{ old('sk_cpns') }}">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sk_cpns')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_pns" class="mb-2">2. Fotokopi SAH SK PNS dilegalisir</label>
                        <input name="sk_pns" id="sk_pns" type="file"
                            class="form-control-file @error('sk_pns') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sk_pns')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="sttpl" class="mb-2">3. Fotokopi STTPL dilegalisir</label>
                        <input name="sttpl" id="sttpl" type="file"
                            class="form-control-file @error('sttpl') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sttpl')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="photo" class="mb-2">4. Foto 3x4</label>
                        <br>
                        <input name="photo" id="photo" type="file"
                            class="form-control-file @error('photo') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                        <br>
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="message" class="col-form-label">Pesan</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Kirim</button>
                </div>
            </form>

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

            <form action="{{ route('home.store-change') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body ml-3 mr-3">
                    <div class="form-group mb-3">
                        <label for="sk_cpns" class="mb-2">1. Fotokopi SK CPNS dilegalisir</label>
                        <input name="sk_cpns" id="sk_cpns" type="file"
                            class="form-control-file @error('sk_cpns') is-invalid @enderror"
                            value="{{ old('sk_cpns') }}">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sk_cpns')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_pns" class="mb-2">2. Fotokopi SAH SK PNS dilegalisir</label>
                        <input name="sk_pns" id="sk_pns" type="file"
                            class="form-control-file @error('sk_pns') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sk_pns')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="sttpl" class="mb-2">3. Fotokopi STTPL dilegalisir</label>
                        <input name="sttpl" id="sttpl" type="file"
                            class="form-control-file @error('sttpl') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sttpl')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="sk_hilang" class="mb-2">4. Surat Keterangan Hilang dari Kepolisian</label>
                        <input name="sk_hilang" id="sk_hilang" type="file"
                            class="form-control-file @error('sk_hilang') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 3MB</small>
                        <br>
                        @error('sk_hilang')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="photo" class="mb-2">5. Foto 3x4</label>
                        <br>
                        <input name="photo" id="photo" type="file"
                            class="form-control-file @error('photo') is-invalid @enderror">
                        <br>
                        <small class="form-text text-muted">Ukuran Maksimal : 1MB</small>
                        <br>
                        @error('photo')
                        <span class="invalid-feedback" role="alert">
                            <i>{{ $message }}</i>
                        </span>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="message" class="col-form-label">Pesan :</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-warning">Kirim</button>
                </div>
            </form>

        </div>
    </div>
</div>
