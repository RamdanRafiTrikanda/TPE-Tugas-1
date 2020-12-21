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
                  <h4>Form Edit Pemateri</h4>
                  <div class="card-header-action">
                    <a href="<?= $baseUrl; ?>admin/pages/pemateri/main.php" class="btn btn-danger">Kembali ke Data Pemateri <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/koneksi.php";
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_pemateri WHERE id_pemateri='$id'");
                while($q=mysqli_fetch_array($data)){

                
                ?>
                <div class="card-body">
                    <form action="edit_pemateri.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_pemateri" value="<?php echo $id; ?>"> 
                        <div class="form-group">

                        <div class="form-group">
                        <label>Nama Pemateri</label>
                        <input type="hidden" name="nama" value="<?php echo $q['nama']; ?>">
                        <input type="text" class="form-control" name="nama" value="<?= $q['nama']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Email</label>
                        <input type="hidden" name="email" value="<?php echo $q['email']; ?>">
                        <input type="text" class="form-control" name="email" value="<?= $q['email']; ?>">
                        </div>

                        <div class="form-group">
                        <label>No HP</label>
                        <input type="hidden" name="no_hp" value="<?php echo $q['no_hp']; ?>">
                        <input type="text" class="form-control" name="no_hp" value="<?= $q['no_hp']; ?>">
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