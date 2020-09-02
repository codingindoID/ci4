<?php $this->extend('layout/index'); ?>
<?php $this->section('content'); ?>
<div class="container mt-4">
    <form action="/update" method="post">
        <input type="hidden" class="form-control" id="inputNama3" name="nim" value="<?= $mhs['nim']; ?>">
        <div class="form-group row">
            <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama3" name="nama" value="<?= $mhs['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mhs['alamat']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Prodi</label>
            <div class="col-sm-10">
                <select name="prodi" class="form-control">
                    <?php foreach ($prodi as $prodi) :  ?>
                        <option value="<?= $prodi['id']; ?>" <?= $mhs['prodi'] == $prodi['id'] ? 'selected' : '' ?>><?= $prodi['prodi']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </div>
    </form>
</div>
<?php $this->endSection(); ?>