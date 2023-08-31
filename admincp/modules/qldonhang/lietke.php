<p>Liet ke don hang</p>
<?php
	$sql_lietke_donhang="SELECT * FROM tbl_order, tbl_khachhang WHERE tbl_order.id_khachhang=tbl_khachhang.id_khachhang ORDER BY tbl_order.id_order";
	$query_lietke_donhang=mysqli_query($mysqli,$sql_lietke_donhang);
?>

<table style="width:100%" border="1">
	<tr>
		<th>STT</th>
		<th>Ma don hang</th>
		<th>Ten khach hang</th>
		<th>Dia chi</th>
		<th>Email</th>
		<th>So dien thoai</th>
		<th>Trang thai</th>
		<th>Quan ly</th>
	</tr>
	<?php
	$i=0;
	while($row=mysqli_fetch_array($query_lietke_donhang)){
		$i++;
	?>

	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['id_order']?></td>
		<td><?php echo $row['username']?></td>
		<td><?php echo $row['address']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['phone']?></td>
		<td>
			<?php if($row['status']==0){
				echo '<a href="modules/qldonhang/xuly.php?code='.$row['id_order'].'">Don hang moi</a>';
			}else{
				echo 'Da thanh toan';
			}
			?>
		</td>
		<td>
			<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['id_order']?>">Xem don hang</a>
		</td>
	</tr>
	<?php 
	}
	?>
</table>


