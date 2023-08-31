<?php
	session_start();
	
	
	if(isset($_POST['doimatkhau'])){
		
		$taikhoan=$_SESSION['id_khachhang'];
		$old_password=md5($_POST['old_password']);
		$new_password=md5($_POST['new_password']);
		echo $taikhoan;
		$sql="SELECT * FROM tbl_khachhang WHERE id_khachhang='".$taikhoan."' AND password='".$old_password."' LIMIT 1";
		$row=mysqli_query($mysqli,$sql);

		$count=mysqli_num_rows($row);
		
		if($count>0){
			$sql_update=mysqli_query($mysqli,"UPDATE tbl_khachhang SET password='".$new_password."'");
			echo '<p style="color:green">Mat khau da duoc thay doi</p>';

		}else{
			echo '<p style="color:red">Mat khau cu sai</p>';
			

			
		}
	}


?>

<form action="" autocomplete="off" method="POST">
	<table border="1" style="text-align: center;">
		<tr>
			<td colspan="2"><h2>Doi mat khau</h2></td>
		</tr>
		
		<tr>
			<td>Mat khau cu</td>
			<td><input type="text" name="old_password"></td>
		</tr>
		<tr>
			<td>Mat khau moi</td>
			<td><input type="text" name="new_password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="doimatkhau" value="doi mat khau"></td>
		</td>
</table>
</form>