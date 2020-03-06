<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
          <br><br><br><br><br>
        <h2 class="headline text"> 404</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Halaman tidak ditemukan.</h3>

          <p>
            Kami tidak dapat menemukan halaman yang anda cari.
            Mungkin, anda bisa <a href="<?= base_url() ?>admin/">kembali ke dashboard</a> atau menghubungi kami.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="0858-7542-7578" disabled>

              <div class="input-group-append">
                <button type="button" name="call" class="btn btn-danger"><i class="fas fa-lg fa-phone"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->