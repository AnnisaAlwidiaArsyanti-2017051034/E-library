<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 font-weight-bold text-gray-800">Kategori</h1><a href="/createKategori" type="button" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
  <!-- DataTables-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
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
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $no = 1;
                        foreach ($kategori as $kt) :
                  ?>
                  <tr>
                    <th scope="row"><?=$no?></th>
                    <td><?=$kt['kode_kategori']?></td>
                    <td><?=$kt['nama_kategori']?></td>
                    <td>
                      <div class="d-flex">
                        <a href="/editKategori/<?= $kt['kode_kategori'] ?>"><button class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></button></a> &nbsp;                    
                        <a class="btn btn-danger btn-circle" href="#" data-toggle="modal" data-target="#hapusModal-<?= $kt['kode_kategori'] ?>"><i class="fas fa-trash"></i></a>
                        
                        <div class="modal fade" id="hapusModal-<?= $kt['kode_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="/deleteKategori/<?= $kt['kode_kategori'] ?>" method="post">
                                    <div class="modal-body">Apakah anda yakin ingin menghapus kategori <?= $kt['nama_kategori'] ?>?</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                        <input type="hidden" name="_methode" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Hapus</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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