<?php
	$sid = session_id();
    ?>
    <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
    <h2>Detail Keranjang Produk</h2>
    </div>
</div><!-- End Breadcrumbs -->
	<section id="cart_items">
		<div class="container">

			<div class="table-responsive cart_info mb-5">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">gambar</td>
							<td class="description">nama produk</td>
							<td class="price">harga</td>
							<td class="quantity">jumlah</td>
							<td class="total">sub total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                        
					</tbody>
				</table>
                <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2>Invoice</h2>
                      <div class="invoice-number">Order #12345</div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Billed To:</strong><br>
                            Admin Dayabaya<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Malang, Indonesia
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Shipped To:</strong><br>
                          Muhamad Nauval Azhar<br>
                          1234 Main<br>
                          Apt. 4B<br>
                          Bogor Barat, Indonesia
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Payment Method:</strong><br>
                          Visa ending **** 4242<br>
                          ujang@maman.com
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Order Date:</strong><br>
                          September 19, 2018<br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                      <div class="col-lg-8">
                        <div class="section-title">Payment Method</div>
                        <p class="section-lead">The payment method that we provide is to make it easier for you to pay invoices.</p>
                        <div class="d-flex">
                          <div class="mr-2 bg-visa" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-jcb" data-width="61" data-height="38"></div>
                          <div class="mr-2 bg-mastercard" data-width="61" data-height="38"></div>
                          <div class="bg-paypal" data-width="61" data-height="38"></div>
                        </div>
                      </div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Subtotal</div>
                          <div class="invoice-detail-value">$670.99</div>
                        </div>
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Shipping</div>
                          <div class="invoice-detail-value">$15</div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Total</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">$685.99</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
				<a href="selesai.php" class="btn btn-primary " style=" float:right">Confirm Order</a>
			</div>
		</div>
	</section>
	<!--/#cart_items-->