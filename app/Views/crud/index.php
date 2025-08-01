<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="bg-danger text-white p-3">
            <strong>Nama:</strong> Nur Auliana Dewi / Teknik Informatika B / Praktikum WEB Programing B<br>
            <strong>Nim:</strong> 32602300042
        </div>

        <h3 class="mt-3">Data Mahasiswa</h3>
        <a href="<?= base_url('crud/tambah') ?>" class="btn btn-success mb-3">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Universitas</th>
                    <th>No HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($mhs['nama']) ?></td>
                        <td><?= esc($mhs['nim']) ?></td>
                        <td><?= esc($mhs['prodi']) ?></td>
                        <td><?= esc($mhs['universitas']) ?></td>
                        <td><?= esc($mhs['no_hp']) ?></td>
                        <td>
                            <a href="<?= base_url('crud/edit/' . $mhs['nim']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('crud/delete/' . $mhs['nim']) ?>" class="btn btn-danger btn-sm" <a
                                href="<?= base_url('crud/tambah') ?>" class="btn btn-success mb-3">Tambah Data</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>