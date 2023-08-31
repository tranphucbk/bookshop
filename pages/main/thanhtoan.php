<?php 
	
	session_start();
	echo "1";
	include('../../admincp/config/config.php');
	$id_khachhang=$_SESSION['id_khachhang'];
	$order_date=date("Y-m-d h:i");
	echo $id_khachhang;
	

	$insert_order="INSERT INTO tbl_order(id_khachhang,order_date,status) VALUE('".$id_khachhang."','".$order_date."',0)";
	
	$query_order=mysqli_query($mysqli,$insert_order);
	$idorder=mysqli_insert_id($mysqli);
	echo $idorder;


	if($query_order){
		foreach($_SESSION['cart'] as $key=> $value){
			$id_sanpham=$value['id'];
			$soluong=$value['soluong'];
			$insert_order_detail="INSERT INTO tbl_order_detail(id_order,id_sanpham,soluong) VALUE('".$idorder."','".$id_sanpham."','".$soluongmua."')";
				mysqli_query($mysqli,$insert_order_detail);
		}



	}

	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=thankyou');


?>