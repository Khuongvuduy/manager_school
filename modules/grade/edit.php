<?php
// params
$id=(int)$_GET['id'];

// data
$sql = "SELECT * FROM `tbl_group` WHERE `tbl_group`.`id` = $id";
$group = mysqli_fetch_assoc(mysqli_query($conn, $sql));
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    echo "$title<br/>";
    $sql = "UPDATE `tbl_group` SET `title` = '$title' WHERE `tbl_group`.`id` = $id";
    mysqli_query($conn, $sql);
    redirect("?mod=grade&act=main");
}
?>
<!-- web -->
<div id="main-content-wp">
    <div class="wp-inner clearfix">
        <div class="section fl-left" id="add-wp">
            <div class="section-head">
                <h3 class="section-title">Sửa khối lớp</h3>
            </div>
            <div class="section-detail">
                <form method="POST">
                    <div class="wrap-item clearfix">
                        <label for="title" class="label fl-left" style="width: 25%;">Tiêu đề cũ</label>
                        <input type="text" name="" id="title" class="fl-right" value="<?php echo $group["title"]; ?>" style="width: 70%;">
                    </div>
                    <div class="wrap-item clearfix">
                        <label for="title" class="label fl-left" style="width: 25%;">Tiêu đề mới</label>
                        <input type="text" name="title" id="title" class="fl-right" value="<?php echo $group["title"]; ?>" style="width: 70%;">
                    </div>
                    <div class="wrap-item clearfix">
                        <input type="submit" name="submit" id="sm_reg_class" value="Đổi tên khối" class="fl-right" style="width: 70%;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div
