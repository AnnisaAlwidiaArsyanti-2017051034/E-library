<?= $this->extend('template/template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 font-weight-bold text-gray-800">Penerbit</h1><a href="/createPenerbit" type="button" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah</a>
  <!-- DataTables-->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Penerbit</h6>
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
                    <th scope="col">Nama Penerbit</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $no = 1;
                        foreach ($penerbit as $pb) :
                  ?>
                  <tr>
                    <th scope="row"><?=$no?></th>
                    <td><?=$pb['kode_penerbit']?></td>
                    <td><?=$pb['nama_penerbit']?></td>
                    <td>
                      <div class="d-flex">
                        <a href="/editPenerbit/<?= $pb['kode_penerbit'] ?>"><button class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></button></a> &nbsp;                 
                        <a class="btn btn-danger btn-circle" href="#" data-toggle="modal" data-target="#hapusModal-<?= $pb['kode_penerbit'] ?>"><i class="fas fa-trash"></i></a>
                        
                        <div class="modal fade" id="hapusModal-<?= $pb['kode_penerbit'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Penerbit</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form action="/deletePenerbit/<?= $pb['kode_penerbit'] ?>" method="post">
                                    <div class="modal-body">Apakah anda yakin ingin menghapus penerbit <?= $pb['nama_penerbit'] ?>?</div>
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