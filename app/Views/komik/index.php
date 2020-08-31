<?= $this->extend('layout/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">sampul</th>
                <th scope="col">judul</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($komik as $komik) : ?>
                <tr>
                    <th scope="row"><?= $komik['id'] ?></th>
                    <td><img src="\img\<?= $komik['sampul'] ?>" alt="" class="sampul"></td>
                    <td><?= $komik['judul'] ?></td>
                    <td>
                        <a href="/komik/<?= $komik['slug']; ?>" class="btn btn-success">detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endsection(); ?>