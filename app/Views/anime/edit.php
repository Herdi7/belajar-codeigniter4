<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container">
        <form action="/Anime/update/<?= $anime['id']; ?>" method="post">
            <?= csrf_field(); ?>
            <input type="hidden" name="slug" value="<?= $anime['slug']; ?>">
            <input class="mt-3 w-100 d-block form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="nama" name="judul" value="<?= old('judul', $anime['judul']); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('judul'); ?>
            </div>
            <input class="mt-3 w-100 d-block form-control" type="text" placeholder="produser" name="produser" value="<?= old('produser', $anime['produser']); ?>">
            <div class="col-12 row my-3">
                <img src="/img/<?= $anime['img']; ?>" id="imgPreview" class="col-2 border-1" style="height: 100px;">
                <div class="col-10">
                    <input class="form-control <?= ($validation->hasError('img')) ? 'is-invalid' : ''; ?>" type="file" id="imgFile" name="img" oninput="imgPreview.src=window.URL.createObjectURL(this.files[0])"  onchange="imgUrl()">
                </div>
            </div>
            <div class="invalid-feedback">
                <?= $validation->getError('img'); ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Ubah</button>
        </form>
    </div>
<?= $this->endSection(); ?> 