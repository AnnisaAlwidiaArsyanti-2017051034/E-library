<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="col-sm-6">
    <h1>Buku</h1>
</div>
<a href="/createBuku" type="button" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Kode Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Halaman</th>
      <th scope="col">Jumlah Stok</th>
      <th scope="col">Posisi Rak</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($buku as $bk) :
    ?>
    <tr>
      <th scope="row"><?=$bk['kode']?></th>
      <td><?=$bk['judul_buku']?></td>
      <td><?=$bk['kategori']?></td>
      <td><?=$bk['penulis']?></td>
      <td><?=$bk['penerbit']?></td>
      <td><?=$bk['tahun_terbit']?></td>
      <td><?=$bk['halaman']?></td>
      <td><?=$bk['jumlah_stok']?></td>
      <td><?=$bk['posisi_rak']?></td>
      <td><?=$bk['gambar']?></td>
      <td>
        <div class="d-flex">
          <a href="/editBuku/<?= $bk['kode'] ?>"><button class="btn btn-warning mr-3"><i class="fas fa-edit"></i> Edit</button></a>                    
          <form action="/deleteBuku/<?= $bk['kode'] ?>" method="post">
            <input type="hidden" name="_methode" value="DELETE">
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
          </form>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $this->endSection(); ?>