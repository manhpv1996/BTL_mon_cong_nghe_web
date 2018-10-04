<?php 
$sql_chitietsp="select * from chitietsp where id_sp='$_GET[id]'";
$query=mysqli_query($conn,$sql_chitietsp);
$dong_chitietsp=mysqli_fetch_array($query);

?>
<table width="400" border="1" style="border-collapse:collapse">
  <tr>
    <td colspan="2"><div align="center">Chi tiết sản phẩm </div></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh'] ?>" width="200" height="200"/></td>
    <td style="color:#03C">Tên sp: <?php echo $dong_chitietsp['tensp']?></td>
  </tr>
  <tr>
    <td style="color:red">Giá:<?php echo $dong_chitietsp['gia'].' VNĐ '?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông tin về sản phẩm </div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['mota']?></td>
  </tr>
  <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp']?>" style="float:right"><button >Mua hàng </button></a>
  </table>
