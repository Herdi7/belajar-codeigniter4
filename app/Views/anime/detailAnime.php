<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mb-5">
    <h1><?= $anime['judul']; ?></h1>  
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="/img/<?= $anime['img']; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title"><?= $anime['judul']; ?></h5>
            <p class="card-text"><?= $anime['produser']; ?></p>
            <p class="card-text"><small class="text-muted"><?= $anime['create_at']; ?></small></p>
            <a href="/Anime">Kembali</a>
        </div>
        </div>
    </div>
    </div>
</div>
<?= $this->endSection(); ?>