 <?php
  if(isset($_GET['trang'])){
	  $get_trang = $_GET['trang']; //nếu người dùng ấn vào trang thì gán giá trị cho biến $get_trang;
	  }else{
		  $get_trang='';
	 }
	if($get_trang==''||$get_trang==1){
	 $trang1=0;
		}else 
		{
			$trang1=($get_trang*5)-5;
		}
  $sql_tatcasp="select * from chitietsp limit $trang1,5 "; 
  $query=mysqli_query($conn,$sql_tatcasp);
 ?>
     <p style="text-align:center; color:#C00; background: #03C ; padding:10px;"> Tất cả sản phẩm  </p>
     <div class="sanphamall">
     <ul>
     <?php
	 while ($dong_tatcasp=mysqli_fetch_array($query)){
	 ?>
      <li>
      <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_tatcasp['id_sp']?>">
      <img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_tatcasp['hinhanh'] ?>" width="100px "
 height="100px"/>
      <p><?php echo $dong_tatcasp['tensp']?></p>
      <p>Giá sp:<?php echo $dong_tatcasp['gia'] ?></p>
      <p style="text-align:center">chi tiết</p>
      </a>
      </li>
      <?php 
	  }
	  ?>
      </ul>
 </div>
 <p> Trang : 
 <?php 
  $sql_trang ="select * from chitietsp ";
  $query_trang = mysqli_query($conn,$sql_trang);
  $count = mysqli_num_rows($query_trang);// lấy ra số sản phẩm có trong chi tiết sản phẩm 
  $a=ceil($count/5); // làm tròn số trang với số sản phẩm mỗi trang là 5
  for($b=1;$b<=$a;$b++){
  echo '<a href="?trang='.$b.'" style="text-decoration:none" >'.' '.$b.' '.' </a>';
  }
 ?>
 <?php 
 echo' </br> ';
 if($get_trang>=1)
 echo 'Trang hiện tại : '.$get_trang ?></p>
 