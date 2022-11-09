<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 font-weight-bold text-gray-800">Buku</h1><a href="/createBuku" type="button" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
  <!-- DataTables-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                  <tr>
                    <th scope="col">No</th>
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
                      $no = 1;
                      foreach ($buku as $bk) :
                  ?>
                  <tr>
                    <th scope="row"><?=$no?></th>
                    <td><?php echo $bk->kode_buku ?></td>
                    <td><?php echo $bk->judul_buku?></td>
                    <td><?php echo $bk->nama_kategori?></td>
                    <td><?php echo $bk->penulis?></td>
                    <td><?php echo $bk->penerbit?></td>
                    <td><?php echo $bk->tahun_terbit?></td>
                    <td><?php echo $bk->halaman?></td>
                    <td><?php echo $bk->jumlah_stok?></td>
                    <td><?php echo $bk->posisi_rak?></td>
                    <td><?php echo $bk->gambar?></td>
                    <td>
                      <div class="d-flex">
                        <a href="/editBuku/<?= $bk->kode_buku ?>"><button class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></button></a>&nbsp;                    
                        <form action="/deleteBuku/<?= $bk->kode_buku ?>" method="post"> 
                          <input type="hidden" name="_methode" value="DELETE">
                          <button type="submit" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <?php $no++; endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>