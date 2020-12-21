<?php
include "../../header.php";

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Pesanan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= $baseUrl; ?>admin/dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Pesanan</div>
            </div>
          </div>
          <div class="section-body">

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Pesanan</h4>
                  </div>

                    <div class="clearfix mb-3"></div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                      <tr>
                        <th>Invoice</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Username</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </tr>
                      <tbody>
                                    <?php
                                    $QueryCart = mysqli_query(
                                        $koneksi,
                                        "SELECT DISTINCT invoice, total, username, tanggal FROM tbl_detail_order do INNER JOIN tbl_order o ON do.id_order = o.id_order"
                                    );
                                    while ($row = mysqli_fetch_array($QueryCart)) {
                                    ?>
                                        <tr>
                                            <td>INV-<?= $row['invoice']; ?></td>
                                            <td>Rp <?= number_format($row['total']); ?></td>
                                            <td>
                                                <?php
                                                $invoice = $row['invoice'];
                                                $QueryItems = mysqli_query($koneksi, "SELECT DISTINCT status_order FROM tbl_detail_order do INNER JOIN tbl_order o ON do.id_order = o.id_order INNER JOIN tbl_produk p ON o.id_produk = p.id_produk WHERE do.invoice = '$invoice'");;
                                                $rowItems = mysqli_fetch_array($QueryItems);
                                                if ($rowItems['status_order'] == 'P') {
                                                    $status = 'Proses';
                                                } elseif ($rowItems['status_order'] == 'K') {
                                                    $status = 'Kirim';
                                                } elseif ($rowItems['status_order'] == 'S') {
                                                    $status = 'Selesai';
                                                }
                                                echo $status;
                                                ?>
                                            </td>
                                            <td><?= $row['username']; ?></td>
                                            <td><?= $row['tanggal']; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning" href="<?= $baseUrl; ?>admin/pages/pesanan/form_edit.php?id=<?php echo $row['invoice']; ?>">Edit</a>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                        </table>
                        <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
                </div>
                <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
              </div>
            </div>
                  </div>
                </div>
              </div>
            </div>
        
        </section>
      </div>
<?php
include "../../footer.php";
?>