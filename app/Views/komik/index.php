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
            <tr>
                <th scope="row">1</th>
                <td><img src="\img\naruto.jpg" alt="" class="sampul"></td>
                <td>naruto</td>
                <td>
                    <a href="#" class="btn btn-success">detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endsection(); ?>