<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mb-5">
    <?php if( session()->getFlashData('tambah') ) : ?>
        <div class="alert alert-success mt-4" role="alert">
            <?= session()->getFlashData('tambah'); ?>
        </div>
    <?php endif; ?>
    <h1 class="my-3 border-bottom">List Anime</h1>

    <div class="col-12">
        <div class="row g-2">
            <?php foreach($anime as $a) : ?>
            <div class="col-md-4 col-sm-6 col-12">
                    <a href="/Anime/<?= $a['slug']; ?>" class="text-decoration-none d-block">
                        <div class="card text-black-50" style="width: 18rem;">
                            <img src="/img/<?= $a['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1><?= $a['judul']; ?></h1>
                                <p><?= $a['produser']; ?></p>
                            </div>
                        </div>
                    </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
        <a href="/Anime/create" class="btn btn-primary">Tambah</a>
</div>

<?= $this->endSection(); ?>