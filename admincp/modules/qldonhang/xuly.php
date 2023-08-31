<?php 
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$id_order=$_GET['code'];
		$sql_update="UPDATE tbl_order SET status=1 WHERE id_order='".$id_order."'";
		$query=mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=qldonhang&query=lietke');	
}