<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mb-5">
    <?php if( session()->getFlashData('tambah') ) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashData('tambah'); ?>
        </div>
    <?php endif; ?>
    <h1 class="my-3 border-bottom">List Anime</h1>
    <div class="col-12">
        <div class="row">
            <?php foreach($anime as $a) : ?>
            <div class="col-4 mb-3">
                <a href="/Anime/<?= $a['slug']; ?>" class="text-decoration-none">
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