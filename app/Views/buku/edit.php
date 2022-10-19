<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="card card-primary">
    
    <div class="card-header">
        <h3 class="card-title">Edit Buku</h3>
    </div>
    <!-- /.card-header -->
    
    <!-- form start -->
    <form action="/updateBuku/<?= $buku['kode'] ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="judul_buku">Judul Buku</label>
                <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?= $buku['judul_buku'] ?>">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $buku['kategori'] ?>">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" name="penulis" class="form-control" id="penulis" value="<?= $buku['penulis'] ?>">
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" id="penerbit" value="<?= $buku['penerbit'] ?>">
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>">
            </div>
            <div class="form-group">
                <label for="halaman">Halaman</label>
                <input type="number" name="halaman" class="form-control" id="halaman" value="<?= $buku['halaman'] ?>">
            </div>
            <div class="form-group">
                <label for="jumlah_stok">Jumlah Stok</label>
                <input type="number" name="jumlah_stok" class="form-control" id="jumlah_stok" value="<?= $buku['jumlah_stok'] ?>">
            </div>
            <div class="form-group">
                <label for="posisi_rak">Posisi Rak</label>
                <input type="text" name="posisi_rak" class="form-control" id="posisi_rak" value="<?= $buku['posisi_rak'] ?>">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $buku['gambar'] ?>">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Edit</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>