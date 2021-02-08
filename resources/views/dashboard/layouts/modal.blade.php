{{-- Menu Modal --}}
<section id="Menu">

    {{-- STORE --}}
    <div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="addMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMenuModalLabel">Tambah Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('manajemen-menu.store') }}" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="name">Menu</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Nama Menu ..." />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- UPDATE --}}
    <div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.update') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" id="menu-id" name="menuId" value=""/>
                        <div class="form-group">
                            <label class="form-label" for="#">Menu</label>
                            <input id="name" name="name" value="" type="text" class="form-control" placeholder="Nama Menu ..." />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

{{-- SubMenu Modal --}}
<section id="SubMenu">
    @php
        $menus = \DB::table('dashboard_menus')->get();
    @endphp
    {{-- STORE --}}
    <div class="modal fade" id="addSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="addSubMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSubMenuModalLabel">Tambah Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.sub-menu.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label" for="name">Sub Menu</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" placeholder="Isi Sub Menu ..." />
                            @error('name')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="dashboard_menu_id" class="">Menu Parent</label>
                            <br>
                            <select name="dashboard_menu_id" id="dashboard_menu_id" class="mb-2 form-control @error('dashboard_menu_id') is-invalid @enderror">
                                <option></option>
                                @forelse ($menus as $menu)
                                    <option value="{{$menu->id}}" {{ old('dashboard_menu_id') == $menu->id ? 'selected' : '' }}>
                                        {{ $menu->name }}
                                    </option>
                                @empty
                                <option value="">Menu belum tersedia</option>
                                @endforelse
                            </select>
                            @error('dashboard_menu_id')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="url_path">URL Path</label>
                            <input id="url_path" name="url_path" type="text" class="form-control @error('url_path') is-invalid @enderror" placeholder="Isi URL Path ..." />
                            @error('url_path')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="icon">Icon</label>
                            <input id="icon" name="icon" type="text" class="form-control @error('icon') is-invalid @enderror" placeholder="Isi Pemanggilan Icon ..." />
                            @error('icon')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- UPDATE --}}
    <div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSubMenuModalLabel">Edit Sub Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('manajemen-menu.sub-menu.update') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group">
                            <label class="form-label" for="name">Sub Menu</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Isi Sub Menu ..." />
                            @error('name')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="menu-id" class="">Menu Parent</label>
                            <select name="menuId" id="menu-id" class="mb-2 form-control @error('menuId') is-invalid @enderror">
                                <option></option>
                                @forelse ($menus as $menu)
                                    <option value="{{$menu->id}}" {{ old('dashboard_menu_id') == $menu->id ? 'selected' : '' }}>
                                        {{ $menu->name }}
                                    </option>
                                @empty
                                <option value="">Menu belum tersedia</option>
                                @endforelse
                            </select>
                            @error('menuId')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="urlpath">URL Path</label>
                            <input id="urlpath" name="url_path" type="text" class="form-control @error('url_path') is-invalid @enderror" placeholder="Isi URL Path ..." />
                            @error('url_path')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="icon">Icon</label>
                            <input id="icon" name="icon" type="text" class="form-control @error('icon') is-invalid @enderror" placeholder="Isi Pemanggilan Icon ..." />
                            @error('icon')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- Role Modal --}}
<section id="Role">
    <div class="modal fade" id="addRoleModal" tabindex="-1" role="dialog" aria-labelledby="addRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Tambah Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="#">Role</label>
                        <input id="#" type="text" class="form-control" placeholder="Isi Role ..." />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="#">Role</label>
                        <input id="#" type="text" class="form-control" placeholder="Isi Role ..." />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                    <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
</section>
