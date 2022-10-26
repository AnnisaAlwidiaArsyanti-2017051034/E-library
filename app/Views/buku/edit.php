<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?><div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Buku</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Buku</h6>
        </div>
    
        <!-- form start -->
        <form action="/updateBuku/<?= $buku['kode'] ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="judul_buku" value="<?= $buku['judul_buku'] ?>">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name = "kategori" id="kategori" class="form-control" required>
                        <option value="" hidden>--Pilih--</option>
                        <?php foreach ($kategori as $kt) : ?>
                            <option value="<?=$kt['nama_kategori']?>" <?=$buku['kategori'] == $kt['nama_kategori'] ? 'selected' :null?>><?=$kt['nama_kategori']?></option>
                        <?php endforeach; ?>
                    </select>
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
                <button type="submit" class="btn btn-warning">Edit Buku</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>