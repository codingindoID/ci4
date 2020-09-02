<?php $this->extend('layout/index') ?>

<?php $this->section('content') ?>
<div class="container">
    <a href="/insert_mhs" class="btn btn-success my-2">tambah data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">nim</th>
                <th scope="col">nama</th>
                <th scope="col">alamat</th>
                <th scope="col">prodi</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mhs as $mhs) : ?>
                <tr>
                    <th scope="row"><?= $mhs['nim'] ?></th>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                    <td><?= $mhs['prodi'] ?></td>
                    <td>
                        <a href="/mhs/<?= $mhs['nim']; ?>" class="btn btn-success">detail</a>
                        <a href="/move/<?= $mhs['nim']; ?>" onclick="return confirm('Hapus <?= $mhs['nama']; ?> ?')" class="btn btn-danger">hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->endSection() ?>