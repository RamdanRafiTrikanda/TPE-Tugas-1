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
                  <h4>Manajemen Kategori</h4>
                  <div class="card-header-action">
                    <a href="<?= $baseUrl; ?>admin/pages/kategori/main.php" class="btn btn-danger">Kembali ke Data Kategori <i class="fas fa-chevron-left"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/koneksi.php";
                $id= $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$id'");
                while($q=mysqli_fetch_array($data)){

                
                ?>
                <div class="card-body">
                    <form action="edit_kategori.php" method="POST">
                        <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="hidden" name="id" value="<?php echo $q['id_kategori']; ?>">
                        <input type="text" class="form-control" name="nama_kategori" value="<?= $q['nama_kategori']; ?>">
                        </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
            <?php } ?>
                </div>
              </div>
            </div>
         
        </section>
      </div>
<?php
include "../../footer.php";
?>