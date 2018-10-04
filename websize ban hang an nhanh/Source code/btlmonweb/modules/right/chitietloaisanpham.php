<?php
 $sql_chitiet="select * from chitietsp where id_loaisp='$_GET[id]'";
 $query=mysqli_query($conn,$sql_chitiet);
?>
<?php
 $sql_loaisp="select * from loaisp where id_loaisp='$_GET[id]'";
 $query_loaisp=mysqli_query($conn,$sql_loaisp);
 $dong_loaisp=mysqli_fetch_array($query_loaisp);
?>
<p style="text-align:center; color:#C00; background: #03C ; padding:10px;"><?php echo $dong_loaisp['tenloaisp']  ?>  </p>
     <div class="sanphamall">
     <ul>
     <?php
	 while ($dong_chitiet=mysqli_fetch_array($query)){
	 ?>
      <li>
      <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp']?>">
      <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="100px "
 height="100px"/>
      <p><?php echo $dong_chitiet['tensp']?></p>
      <p>Giá sp:<?php echo $dong_chitiet['gia'] ?></p>
      <p style="text-align:center">chi tiết</p>
      </a>
      </li>
      <?php 
	  }
	  ?>
      </ul>
 </div>
 