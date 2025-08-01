<!DOCTYPE html>
<html>

<head>
    <title>Form Mahasiswa</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 30px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    form {
        width: 100%;
        max-width: 600px;
    }

    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        margin-top: 5px;
        border: 1px solid #000;
        border-radius: 3px;
    }

    button {
        margin-top: 15px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    </style>
</head>

<body>

    <h1>Form Mahasiswa</h1>
    <form action="<?= base_url('process-form') ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" required>

        <label for="matakuliah">Mata Kuliah:</label>
        <input type="text" name="matakuliah" id="matakuliah" required>

        <label for="dosen">Dosen Pengampu:</label>
        <input type="text" name="dosen" id="dosen" required>

        <label for="asisten">Asisten Praktikum:</label>
        <input type="text" name="asisten" id="asisten" required>

        <button type="submit">Submit</button>
    </form>

</body>

</html>