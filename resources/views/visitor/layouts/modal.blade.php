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

<!-- Modal Alert -->
<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="alertLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="alertLabel">Perhatian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Silahkan login terlebih dahulu untuk mengajukan pembuatan kartu pegawai
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
            </div>
        </div>
    </div>
</div>
