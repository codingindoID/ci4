<?php $this->extend('layout/index') ?>

<?php $this->section('content') ?>

<div class="container">
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
                        <a href="#" class="btn btn-success">detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php $this->endSection() ?>