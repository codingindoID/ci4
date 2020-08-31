 <?= $this->extend('layout/index'); ?>

 <?= $this->section('content'); ?>
 <div class="container mt-4">
     <div class="row">
         <div class="col-sm-4">
             <img class="card-img-top detail" src="/img/<?= $komik['sampul']; ?>" alt="Card image cap">
         </div>
         <div class="col-sm-8">
             <h3 class="card-title"><?= $komik['judul']; ?></h3>
             <p class="card-text">Pengarang :<?= $komik['penulis']; ?></p>
             <p class="card-text">Penerbit :<?= $komik['penerbit']; ?></p>

             <a href="#" class="btn btn-warning">edit</a>
             <a href="#" class="btn btn-danger">delete</a>
             <br><br>
             <a href="\komik">Kembali ke Daftar</a>
         </div>
     </div>
 </div>

 <?= $this->endSection(); ?>