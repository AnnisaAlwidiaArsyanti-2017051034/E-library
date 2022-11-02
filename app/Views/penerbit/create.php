<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Penerbit</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Penerbit</h6>
        </div>    
        <!-- form start -->
        <form action="/storePenerbit" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_penerbit">Penerbit</label>
                    <input type="text" name="nama_penerbit" class="form-control" id="nama_penerbit">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>