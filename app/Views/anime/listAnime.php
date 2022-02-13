<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="grid sm:grid-cols-3 gap-3">
        <?php foreach($anime as $a) : ?>
        <div class="hover:bg-blue-100 p-3">
            <a href="">
                <div class="flex gap-4">
                    <img src="/img/<?= $a['img']; ?>" class="img">
                    <div>
                        <h1><?= $a['judul']; ?></h1>
                        <h2><?= $a['produser']; ?></h2>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>