<?php
// params
if (isset($_POST['sm_reg_class'])) {
    $error = array();
    if (empty($_POST['title'])) {
        $error['title'] = "Tên khối không được để trống";
    } else {
        $title = $_POST['title'];
    }
    $parent_id = $_POST['parent_id'];

    // data
    // Chèn dữ liệu vào bảng tbl_group
    if (empty($error)) {
        $sql = "insert  into tbl_group(`title`,`parent_id`)
                values('$title','$parent_id')";

        if (mysqli_query($conn, $sql)) {
            echo 'Đã thêm khối thành công';
        } else {
            echo 'Error ' . mysqli_error($conn);
        }
    }
}
?>
</div>

<!-- web -->
<div id="main-content-wp">
    <div class="wp-inner clearfix">
        <div class="section fl-left" id="add-wp">
            <div class="section-head">
                <h3 class="section-title">Thêm khối - lớp</h3>
            </div>
            <div class="section-detail">
                <form method="POST">
                    <div class="wrap-item clearfix">
                        <label for="title" class="label fl-left">Tiêu đề</label>
                        <input type="text" name="title" id="title" class="fl-right">
                    </div>
                    <div class="wrap-item clearfix">
                        <label class="label fl-left">Chọn cấp</label>
                        <select name="parent_id" class="fl-right">
                            <option value="0">----- Chọn cấp cha -----</option>
                            <option value="1">Khối 10</option>
                            <option value="2">Khối 11</option>
                        </select>
                    </div>
                    <div class="wrap-item clearfix">
                        <input type="submit" name="sm_reg_class" id="sm_reg_class" value="Thêm mới" class="fl-right">
                    </div>
                </form>
            </div>
        </div>
        <?php include "list.php"; ?>
    </div>
</div>