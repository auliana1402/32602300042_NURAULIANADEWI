<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h3>Form Tambah Data Mahasiswa</h3>

        <form action="<?= base_url('crud/simpan') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Prodi</label>
                <input type="text" name="prodi" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Universitas</label>
                <input type="text" name="universitas" class="form-control" required>
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('crud') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>