<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Selamat Datang!</h1>
            <p style="text-align: justify;">
                Bersama membantu Anak Tidak Sekolah daerah bagi Generasi Bangsa!
            </p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img mt-4">
            <img src="/img/logo_batang.png" class="img-fluid animated" alt="">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>