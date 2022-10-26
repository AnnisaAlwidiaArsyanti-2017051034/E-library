<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?><div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kategori</h6>
        </div>
    
        <!-- form start -->
        <form action="/updateKategori/<?= $kategori['kode_kategori'] ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="<?= $kategori['nama_kategori'] ?>">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Edit Kategori</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>