<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Buku</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Buku</h6>
        </div>    
        <!-- form start -->
        <form action="/storeBuku" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="judul_buku">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name = "kategori" id="kategori" class="form-control" required>
                        <option value="" hidden>--Pilih--</option>
                        <?php foreach ($kategori as $kt) : ?>
                            <option value="<?=$kt['nama_kategori']?>"><?=$kt['nama_kategori']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <select name = "penulis" id="penulis" class="form-control" required>
                        <option value="" hidden>--Pilih--</option>
                        <?php foreach ($penulis as $pn) : ?>
                            <option value="<?=$pn['nama_penulis']?>"><?=$pn['nama_penulis']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <select name = "penerbit" id="penerbit" class="form-control" required>
                        <option value="" hidden>--Pilih--</option>
                        <?php foreach ($penerbit as $pb) : ?>
                            <option value="<?=$pb['nama_penerbit']?>"><?=$pb['nama_penerbit']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" class="form-control" id="tahun_terbit">
                </div>
                <div class="form-group">
                    <label for="halaman">Halaman</label>
                    <input type="number" name="halaman" class="form-control" id="halaman">
                </div>
                <div class="form-group">
                    <label for="jumlah_stok">Jumlah Stok</label>
                    <input type="number" name="jumlah_stok" class="form-control" id="jumlah_stok">
                </div>
                <div class="form-group">
                    <label for="posisi_rak">Posisi Rak</label>
                    <input type="text" name="posisi_rak" class="form-control" id="posisi_rak">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" name="gambar" class="form-control" id="gambar">
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