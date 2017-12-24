<?php
// params
$id=(int)$_GET['id'];

// data
$sql = "DELETE FROM `tbl_group` WHERE `tbl_group`.`id` = $id";
$groups = mysqli_query($conn, $sql);

// web
redirect("?mod=grade&act=main");
