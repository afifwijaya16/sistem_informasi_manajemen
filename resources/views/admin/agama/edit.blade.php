<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Perbarui Data @yield('sub-breadcrumb')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('agama.perbarui') }}" method="POST">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">

                        <label class="d-none">Id</label>
                        <input type="hidden" class="form-control form-control-sm @error('id') is-invalid @enderror EditInputId"
                            id="EditInputId" name="id">

                        <label>Agama</label>
                        <input type="text" class="form-control form-control-sm @error('agama') is-invalid @enderror EditInputAgam"
                            id="EditInputAgama" name="agama" placeholder="Masukan Agama">
                        <!-- @error('agama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror -->
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                        Tutup</button>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>