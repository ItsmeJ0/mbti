{{-- MODAL TAMBAH QUESTION --}}
<div class="modal fade" id="modalAddQuestion" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.tambahsoal') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Teks Soal</label>
                    <textarea name="teks_soal" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Dimension</label>
                    <input type="text" name="dimension" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL EDIT QUESTION --}}
<div class="modal fade" id="modalEditQuestion" tabindex="-1">
    <div class="modal-dialog">
        <form id="formEditQuestion" method="POST" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Kode</label>
                    <input type="text" name="kode" id="edit_kode" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Teks Soal</label>
                    <textarea name="teks_soal" id="edit_teks" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label>Dimension</label>
                    <input type="text" name="dimension" id="edit_dimension" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL TAMBAH WEIGHT --}}
<div class="modal fade" id="modalAddWeight" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.tambahbobot') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Tambah Weight</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Kode Soal</label>
                    <input type="text" name="kode_soal" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Indikator</label>
                    <input type="text" name="indikator" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Bobot</label>
                    <input type="number" step="0.01" name="bobot" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

{{-- MODAL EDIT WEIGHT --}}
<div class="modal fade" id="modalEditWeight" tabindex="-1">
    <div class="modal-dialog">
        <form id="formEditWeight" method="POST" class="modal-content">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title">Edit Weight</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label>Kode Soal</label>
                    <input type="text" name="kode_soal" id="edit_kode_weight" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Indikator</label>
                    <input type="text" name="indikator" id="edit_indikator" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Bobot</label>
                    <input type="number" step="0.01" name="bobot" id="edit_bobot" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>