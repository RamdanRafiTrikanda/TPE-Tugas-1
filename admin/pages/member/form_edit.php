<?php
include "../../header.php";

$id=$_GET['id'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_pembeli WHERE id_pembeli='$id'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$username=$hasilQuery['username'];  
$password=$hasilQuery['password'];  
$nama=$hasilQuery['nama'];
$alamat=$hasilQuery['alamat'];  
$email=$hasilQuery['email'];  
$hp=$hasilQuery['no_hp'];
//$status=$hasilQuery['status'];
if ($hasilQuery['status'] == 'Y') {
    $status = 'Aktif';
} elseif ($hasilQuery['status'] == 'N') {
    $status = 'Expeired';
}

?>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
         
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Member</h4>
                  <div class="card-header-action">
                    <a href="<?= $baseUrl; ?>admin/pages/member/main.php" class="btn btn-danger">Kembali ke Data Member <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <?php
                include "../../lib/koneksi.php";
                $id= $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_pembeli WHERE id_pembeli='$id'");
                while($q=mysqli_fetch_array($data)){

                
                ?>
                <div class="card-body">
                    <form action="edit_member.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_pembeli" value="<?php echo $id; ?>"> 
                        <div class="form-group">
                        <label>Username</label>
                        <input type="hidden" name="username" value="<?php echo $q['username']; ?>">
                        <input type="text" class="form-control" name="username" value="<?= $q['username']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Password</label>
                        <input type="hidden" name="password" value="<?php echo $q['password']; ?>">
                        <input type="text" class="form-control" name="password" value="<?= $q['password']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="nama" value="<?php echo $q['nama']; ?>">
                        <input type="text" class="form-control" name="nama" value="<?= $q['nama']; ?>">
                        </div>

                        <div class="form-group">
                        <label>Alamat</label>
                        <input type="hidden" name="alamat" value="<?php echo $q['alamat']; ?>">
                        <input type="text" class="form-control" name="alamat" value="<?= $q['alamat']; ?>">
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

                        <div class="form-group">
                        <label>Status</label>
                        <div class="col-sm-10">
                                    <select class="form-control" name="status" id="status">
                                        <option value="<?= $rowEdit['status']; ?>"><?= $status; ?></option>
                                        <option value="Y">Aktif</option>
                                        <option value="N">Experied</option>
                                    </select>
                                </div>
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