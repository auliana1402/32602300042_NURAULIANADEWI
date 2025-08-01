<!DOCTYPE html>
<html>

<head>
    <title>Hasil Form Mahasiswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 30px;
    }

    h2 {
        margin-bottom: 20px;
    }

    .hasil-container {
        max-width: 600px;
    }

    .data-row {
        margin-bottom: 10px;
    }

    .label {
        font-weight: bold;
        display: inline-block;
        width: 150px;
    }

    .value {
        display: inline-block;
    }

    .back-link {
        margin-top: 20px;
        display: inline-block;
    }
    </style>
</head>

<body>

    <div class="hasil-container">
        <h2>Hasil Formulir Mahasiswa</h2>

        <div class="data-row"><span class="label">Nama:</span> <span class="value"><?= esc($nama) ?></span></div>
        <div class="data-row"><span class="label">NIM:</span> <span class="value"><?= esc($nim) ?></span></div>
        <div class="data-row"><span class="label">Kelas:</span> <span class="value"><?= esc($kelas) ?></span></div>
        <div class="data-row"><span class="label">Mata Kuliah:</span> <span class="value"><?= esc($matakuliah) ?></span>
        </div>
        <div class="data-row"><span class="label">Dosen Pengampu:</span> <span class="value"><?= esc($dosen) ?></span>
        </div>
        <div class="data-row"><span class="label">Asisten Praktikum:</span> <span
                class="value"><?= esc($asisten) ?></span></div>

        <a href="<?= base_url('form') ?>" class="back-link">← Kembali ke Form</a>
    </div>

</body>

</html>