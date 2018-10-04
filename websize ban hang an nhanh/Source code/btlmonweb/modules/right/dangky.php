
<?php
if(isset($_POST['dangky']))
{
	$tenkhachhang=$_POST['tenkhachhang'];
	$matkhau=$_POST['matkhau'];
	$email=$_POST['email'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$sql_dangky="insert into dangky (tenkhachhang,matkhau,email,diachi,dienthoai)values('$tenkhachhang','$matkhau','$email','$diachi','$dienthoai') ";
	$run_query=mysqli_query($conn,$sql_dangky);
	if($run_query){
		header('location:index.php?xem=thongbao');
		}else{
			header('location:index.php?xem=dangky');
		}
}
?>
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data">
<table  width="200" border="1" >
  <tr>
    <td colspan="2"><div align="center">Đăng ký thành viên</div></td>
  </tr>
  <tr>
    <td>Tên khách hàng</td>
    <td><input type="text" name="tenkhachhang" size="30"/></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="matkhau" size="30"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" size="30"/></td>
  </tr>
  <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="diachi" size="30"/></td>
  </tr>
  <tr>
    <td>Điện thoại</td>
    <td><input type="text" name="dienthoai" size="30"/></td>
  </tr>
  <tr>
    <td colspan="2"> <div align="center">
      <input type="submit" name="dangky" id="button" value="Đăng ký ">
    </div>
    </td>
  </tr>
</table></form>