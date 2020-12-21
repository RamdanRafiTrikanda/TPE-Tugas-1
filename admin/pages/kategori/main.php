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
                    <a href="form_tambah.php" class="btn btn-danger">Tambah Kategori <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <?php
                  $sql = "SELECT * FROM tbl_kategori";
                    $q = mysqli_query($koneksi, $sql);
                   

                    ?>
                    <table class="table table-striped">
                      <tr>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                      </tr>
                      <?php
                      while ($data = mysqli_fetch_array($q)){
                      ?> 
                      <tr>
                        <td><a href="#"><?php echo $data ['id_kategori']; ?></a></td>
                        <td class="font-weight-600"><?php echo $data['nama_kategori']; ?></td>
                        <td>
                          <a href="form_edit.php?id=<?php echo $data['id_kategori']; ?>" class="btn btn-primary">Edit</a>
                          <a href="hapus_kategori.php?id=<?php echo $data['id_kategori']; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>

                      <?php } ?>

                    </table>
                  </div>
                </div>
              </div>
            </div>
         
        </section>
      </div>
<?php
include "../../footer.php";
?>