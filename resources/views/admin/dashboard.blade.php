<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (optional for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
@include('partials.nav')

<div class="container mt-5">
    <h1 class="mb-4">Dashboard Admin</h1>

    {{-- SECTION: CRUD Questions --}}
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <h2>Daftar Questions</h2>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAddQuestion">
                <i class="fa fa-plus"></i> Tambah Question
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Teks Soal</th>
                        <th>Dimension</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $q)
                        <tr>
                            <td>{{ $q->id }}</td>
                            <td>{{ $q->kode }}</td>
                            <td>{{ Str::limit($q->teks_soal, 40) }}</td>
                            <td>{{ $q->dimension }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-question"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalEditQuestion"
                                    data-id="{{ $q->id }}"
                                    data-kode="{{ $q->kode }}"
                                    data-teks="{{ $q->teks_soal }}"
                                    data-dimension="{{ $q->dimension }}">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('admin.hapussoal', $q->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- SECTION: CRUD Questions Weight --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h2>Daftar Questions Weight</h2>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAddWeight">
                <i class="fa fa-plus"></i> Tambah Weight
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Soal</th>
                        <th>Indikator</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($question_weights as $w)
                        <tr>
                            <td>{{ $w->id }}</td>
                            <td>{{ $w->kode_soal }}</td>
                            <td>{{ $w->indikator }}</td>
                            <td>{{ $w->bobot }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm edit-weight"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalEditWeight"
                                    data-id="{{ $w->id }}"
                                    data-kode="{{ $w->kode_soal }}"
                                    data-indikator="{{ $w->indikator }}"
                                    data-bobot="{{ $w->bobot }}">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('admin.hapusbobot', $w->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH & EDIT --}}
@include('partials.modals') {{-- pisahkan modal agar rapi --}}

@include('partials.footer')

<!-- Bootstrap Bundle (JS + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // Edit Question Modal
    $('.edit-question').on('click', function() {
        $('#edit_kode').val($(this).data('kode'));
        $('#edit_teks').val($(this).data('teks'));
        $('#edit_dimension').val($(this).data('dimension'));
        $('#formEditQuestion').attr('action', '/questions/' + $(this).data('id'));
    });

    // Edit Weight Modal
    $('.edit-weight').on('click', function() {
        $('#edit_kode_weight').val($(this).data('kode'));
        $('#edit_indikator').val($(this).data('indikator'));
        $('#edit_bobot').val($(this).data('bobot'));
        $('#formEditWeight').attr('action', '/questions_weight/' + $(this).data('id'));
    });
</script>
</body>
</html>
