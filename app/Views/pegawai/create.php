<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="d-flex justify-content-between border-bottom py-2">
        <h3 class="pb-2 mb-0">
            Tambah Data Jabatan
        </h3>
        <a href="/jabatan" class="btn btn-dark">kembali</a>
    </div>
    <div class="pt-3">
        <form action="/jabatan/store" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="/jabatan/store" class="form-label">Nama Jabatan</label>
            <input type="text" class="form-control" name="nama_jabatan" placeholder="Masukan nama jabatan">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Deskripsi Jabatan</label>
            <input type="text" class="form-control" name="deskripsi_jabatan" placeholder="Masukan deskripsi jabatan">
        </div>
        <button type="submit" class="btn btn-dark">Simpan</button>
        </form>
        
    </div>
</div>
<?= $this->endSection(''); ?>