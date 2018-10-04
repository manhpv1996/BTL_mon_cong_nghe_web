<?php
 if(isset($_GET['ac'])&& $_GET['ac']=='dangxuat'){
	 unset($_SESSION['dangnhap']);
	 header('location:login.php');
 }
?>
<div class="menu">
    <ul>
    <li><a href="index.php">Trang chủ </a></li>
    <li><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sp</a></li>
    <li><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sp</a></li>
     <li style="margin-left:30px"><a href="index.php?ac=dangxuat">Đăng xuất</a></li>
    </ul> 
  </div>