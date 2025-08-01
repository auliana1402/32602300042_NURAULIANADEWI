<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<main>
    <div class="tittle">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="/crud/update" method="POST">
            <!-- NIM lama untuk acuan update -->
            <input type="hidden" name="old_nim" value="<?= $edit['nim']; ?>">

            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>" required>
            </div>

            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>" required>
            </div>

            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>" required>
            </div>

            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas" value="<?= $edit['universitas']; ?>" required>
            </div>

            <div class="input">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" id="no_hp" value="<?= $edit['no_hp']; ?>" required>
            </div>

            <div class="button">
                <button type="submit">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>