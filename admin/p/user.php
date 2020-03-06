<div class="content-wrapper" style="background: url('<?= base_url() ?>assets/gambar/symphony.png') fixed; min-height: 659px;" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <?php echo $judul; ?> </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
              <a href="#" class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#modal-tambah">Tambah</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover text-nowrap">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th>Tanggal diubah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($tampil_data as $row){
                    $tgl_update = date('Y-m-d', strtotime($row['tgl_update']));
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['password']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><?php echo tgl_indo($tgl_update, true); ?></td>
                  <td>
                    <a href="#" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-ubah" data-toggle ="tooltip"title="Ubah Data"><i class="fas fa-pencil-alt"></i></a>
                    <a href="hapus.php?id=<?php echo $row['id_user']; ?>" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" title="Hapus Data"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
                <?php 
                    }
                ?>
                </tbody>
            </table>
            </div><!-- /.card-body -->
            </div><!-- /.card -->

            <!-- Modal Untuk Tambah Data -->
            <div class="modal fade" id="modal-tambah">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- form tambah -->
                    <form role="form">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                           <select class="form-control select2bs4" style="width: 100%;">
                            <option value="admin">admin</option>
                            <option value="pengendara">pengendara</option>
                            <option value="user">user</option>
                          </select>
                        </div>
                      </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary float-right">Simpan</button>
                    </form>
                  <!-- form tambah -->
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Modal Untuk Ubah Data -->
            <div class="modal fade" id="modal-ubah">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Ubah Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- form tambah -->
                    <form role="form">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                           <select class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">File input</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                            </div>
                          </div>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                      </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary float-right">Ubah</button>
                    </form>
                  <!-- form tambah -->
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->