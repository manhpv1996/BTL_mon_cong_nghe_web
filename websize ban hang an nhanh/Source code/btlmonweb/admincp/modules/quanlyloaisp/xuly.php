<?php
include('../config.php');
$tenloaisp=$_POST['tenloaisp'];
$thutu=$_POST['thutu'];
$id=$_GET['id'];
if(isset($_POST['them'])){
	//them
	$sql= "insert into loaisp  (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisp&ac=them');
}
elseif (isset($_POST['sua'])){
	//sua
	$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
}else
{
	//xoa
	$sql="delete from loaisp where id_loaisp=$id";
	mysqli_query($conn,$sql);
	header('location:../../index.php?quanly=quanlyloaisp&ac=them');
}
?>