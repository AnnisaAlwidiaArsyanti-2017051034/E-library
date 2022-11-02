<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?><div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Penulis</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Penulis</h6>
        </div>
    
        <!-- form start -->
        <form action="/updatePenulis/<?= $penulis['kode_penulis'] ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_penulis">Nama Penulis</label>
                    <input type="text" name="nama_penulis" class="form-control" id="nama_penulis" value="<?= $penulis['nama_penulis'] ?>">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Edit Penulis</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>