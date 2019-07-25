<?php 
session_start();
$id = $_GET['id'];

if (isset($_SESSION['keranjang']['$id'])) {
	$_SESSION['keranjang']['$id'] +=1 ;
} else {
	$_SESSION['keranjang']['$id'] = 1;
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
 echo "
			<script>
			alert('Produk telah masuk keranjang belanja');
			window.location = 'keranjang.php';
			</script>
		";
 ?>
