<?php
include "../../header.php";

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Pembeli</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= $baseUrl; ?>admin/dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Pembeli</div>
            </div>
          </div>
          <div class="section-body">

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Pembeli</h4>
                  </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                      
                          
                          </th>
                          <?php
                    $sql = "SELECT * FROM tbl_pembeli";
                    $q = mysqli_query($koneksi, $sql);

                    ?>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>NomorHP</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                        <?php
                    while ($data = mysqli_fetch_array($q)){
                        ?>
                        <tr>
                          <td><?php echo $data['username']; ?></td>

                          <td>
                          <?php echo $data['password']; ?>
                          </td>
                          <td>
                          <?php echo $data['nama']; ?></td>
                          </td>
                          <td>
                          <?php echo $data['alamat']; ?></td>
                          </td>
                          <td>
                          <?php echo $data['email']; ?></td>
                          </td>
                          <td>
                          <?php echo $data['no_hp']; ?></td>
                          </td>
                          <td><?php
                                                    $status = $data['status'];
                                                    if ($status == 'Y') {
                                                    echo 'aktif';
                                                    } else {
                                                    echo 'expired';
                                                    }
                                                    ?></td>
                          <td>
                          <a href="<?= $baseUrl; ?>admin/pages/member/form_edit.php?id=<?php echo $data['id_pembeli']; ?>" class="btn btn-primary">Edit</a>
                          <a href="<?= $baseUrl; ?>admin/pages/member/hapus_member.php?id=<?php echo $data['id_pembeli']; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"  class="btn btn-danger">Hapus</a>
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