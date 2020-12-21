<?php
include "../../header.php";

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Pemateri</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= $baseUrl; ?>admin/dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Pemateri</div>
            </div>
          </div>
          <div class="section-body">

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Pemateri</h4>
                  </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                      
                          
                          </th>
                          <?php
                    $sql = "SELECT * FROM tbl_pemateri";
                    $q = mysqli_query($koneksi, $sql);

                    ?>
                        <th>ID Pemateri</th>
                        <th>Nama Pemateri</th>
                        <th>Email</th>
                        <th>Nomor HP</th>
                        <th>Foto Pemateri</th>
                        <th>Action</th>
                        </tr>
                        <?php
                    while ($data = mysqli_fetch_array($q)){
                        ?>
                        <tr>
                          <td><?php echo $data['id_pemateri']; ?></td>

                          <td>
                          <?php echo $data['nama']; ?>
                          </td>
                          <td>
                          <?php echo $data['email']; ?></td>
                          </td>
                          <td>
                          <?php echo $data['no_hp']; ?></td>
                          </td>
                          <td>
                          <img src="<?= $baseUrl; ?>admin/pages/produk/foto/<?=$data['gambar']; ?>"height="80" width="120">
                          </td>
                          <td>
                          <a href="<?= $baseUrl; ?>admin/pages/pemateri/form_tambah.php" class="btn btn-primary">Tambah</a>
                          <a href="<?= $baseUrl; ?>admin/pages/pemateri/form_edit.php?id=<?php echo $data['id_pemateri']; ?>" class="btn btn-warning">Edit</a>
                          <a href="<?= $baseUrl; ?>admin/pages/pemateri/hapus_pemateri.php?id=<?php echo $data['id_pemateri']; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"  class="btn btn-danger">Hapus</a>
                        </t>

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