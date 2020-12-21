<?php
include "../../header.php";

?>
 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
         
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Manajemen Pemateri</h4>
                  <div class="card-header-action">
                    <a href="<?= $baseUrl; ?>admin/pages/pemateri/main.php" class="btn btn-danger">Kembali ke Data Pemateri <i class="fas fa-chevron-left"></i></a>
                  </div>
                </div>
                <div class="card-body">
                    <form action="simpan_pemateri.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        <label>Nama Pemateri</label>
                        <input type="text" class="form-control" name="nama">
                        </div>

                        <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                        </div>

                        <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp">
                        </div>
                        
                        <div class="form-group">
                        <label>Foto Pemateri</label>
                        <input type="file" class="form-control" name="gambar">
                        </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
      
        </section>
      </div>
<?php
include "../../footer.php";
?>