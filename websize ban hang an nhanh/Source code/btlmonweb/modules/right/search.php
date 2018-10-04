<?php
if(isset($_POST['search'])){
	$search=$_POST['searchtext'];
	$sql_search="select * from chitietsp where tensp LIKE '%$search%'";
	$query_search=mysqli_query($conn,$sql_search);
}
?>
<p style="text-align:center; color:#C00; background: #03C ; padding:10px;">Sản phẩm tìm thấy </p>
     <div class="sanphamall">
     <?php 
	  if($count=mysqli_num_rows($query_search)==0)
	  {?>
		  <p> Không tìm thấy sản phẩm nào cả </p>
	
     <?php 
	  }else {
	 ?>
     <ul>
     <?php
	 while ($dong_search=mysqli_fetch_array($query_search)){
	 ?>
      <li>
      <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp']?>">
      <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh'] ?>" width="100px "
 height="100px"/>
      <p><?php echo $dong_search['tensp']?></p>
      <p>Giá sp:<?php echo $dong_search['gia'] ?></p>
      <p style="text-align:center">chi tiết</p>
      </a>
      </li>
      <?php 
	  }
	  }
	  ?>

      </ul>
 </div>
 