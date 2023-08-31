<p>Xem don hang</p>
<?php
	$code=$_GET['code'];
	$sql_chitiet_donhang="SELECT * FROM  tbl_order_detail,tbl_sanpham WHERE tbl_order_detail.id_sanpham=tbl_sanpham.id_sanpham AND tbl_order_detail.id_order =$code ORDER BY tbl_order_detail.id_order_detail DESC";
	$query_chitiet_donhang=mysqli_query($mysqli,$sql_chitiet_donhang);
	
?>

<table style="width: 100%;" border="1">
	<tr>
		<th>STT</th>
		<th>Ma don hang</th>
		<th>Ten san pham</th>
		<th>So luong</th>
		<th>Gia san pham</th>
		<th>Thanh tien</th>
	</tr>

	
	<?php
	$i=0;
	$tongtien=0;
	while($row=mysqli_fetch_array($query_chitiet_donhang)){
		$i++;
		$thanhtien=$row['soluongmua']*$row['giasp'];
		$tongtien+=$thanhtien;
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['id_order']?></td>
		<td><?php echo $row['tensp']?></td>
		<td><?php echo $row['soluongmua']?></td>
		<td><?php echo number_format($row['giasp'],0,',','.').'vnd'?></td>
		<td><?php echo number_format($thanhtien,0,',','.').'vnd'?></td>
	</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="6">
		<p>Tong tien: <?php echo number_format($tongtien,0,',','.').'vnd'?></p>
		</td>
	</tr>
</table>
