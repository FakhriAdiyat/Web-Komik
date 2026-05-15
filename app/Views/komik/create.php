<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Tambah Komik</h1>
      <form action="/komik/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= validation_show_error('judul') ? 'is-invalid' : ''; ?>" value="<?= old('judul'); ?>" id="judul" name="judul" autofocus>
            <div class="invalid-feedback">
              <?= validation_show_error('judul'); ?>
            </div>
          </div>

        </div>
        <div class="row mb-3">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
          </div>
        </div>
        <div class="mb-3">
          <label for="sampul" class="form-label">Tambahkan sampul</label>
          <div class="col-sm-2">
            <img src="/img/default.jpg" class="img-thumbnail img-preview">
          </div>
          <input class="form-control <?= validation_show_error('sampul') ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
          <div class="invalid-feedback">
            <?= validation_show_error('sampul'); ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Komik</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>