<h2>Detail Pembelian</h2>
<?php 
	$koneksi = mysqli_connect("localhost","root","","dbpenjualan");
	$id = $_GET['id'];
		$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pelanggan ='$id'");
		$detail = $ambil-> fetch_assoc();
 ?>
 <pre><?php print_r($detail); ?></pre>
 <strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
 <p>
 	No Telepon :0<?php echo $detail['no_telepon']; ?><br>
 	Email : <?php echo $detail['email']; ?><br>
 	Alamat : <?php echo $detail['alamat']; ?><br>
 	Tanggal Penjualan : <?php echo $detail['tanggal_pembelian']; ?>
 </p>

<!-- <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>No Penjualan</th>
 			<th>Nama Produk</th>
 			<th>Harga</th>
 			<th>Diskon</th>
 			<th>Jumlah</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$no = 1;
 		$ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk = produk.id_produk WHERE pembelian_produk.id_produk ='$id'"); 
 		var_dump($ambil);
 		?>

 		<?php while($pecah = $ambil->fetch_assoc()) { ?>
 		<tr>
 			<td><?php echo $no++; ?></td>
 			<td><?php echo $pecah['id_pembelian'] ?></td>
 			<td><?php echo $pecah['nama_produk'] ?></td>
 			<td>Rp : <?php echo number_format($pecah['harga']) ?></td>
 			<td><?php echo $pecah['diskon'] ?>%</td>
 			<td>Rp : <?php echo Number_format($pecah['harga'] - ($pecah['harga'] * $pecah['diskon'] / 100))  ?></td>
 		</tr>
 		<?php } ?>
 	</tbody>
 </table> -->