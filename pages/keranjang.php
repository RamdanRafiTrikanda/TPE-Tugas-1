<?php
	$sid = session_id();
    ?>
    <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
    <h2>Keranjang Produk</h2>
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
				<a href="selesai.php" class="btn btn-primary " style=" float:right">selesai belanja</a>
			</div>
		</div>
	</section>
	<!--/#cart_items-->