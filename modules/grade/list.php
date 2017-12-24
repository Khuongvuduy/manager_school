<?php
// data
function get_groups()
{
    $sql = "SELECT * FROM `tbl_group` WHERE `tbl_group`.`parent_id` = 0";
    $groups = db_fetch_array($sql);
    return $groups;
}

function get_grades($group)
{
    $sql = "SELECT * FROM `tbl_group` WHERE `tbl_group`.`parent_id` = " . $group["id"];
    $grades = db_fetch_array($sql);
    return $grades;
}

$groups = get_groups();

echo 0;
?>

<!-- web -->
<div class="section fl-right" id="list-student-wp">
    <div class="section-head">
        <h3 class="section-title"> Danh mục</h3>
    </div>
    <div class="section-detail">
        <button type="submit" name="sm_delete_multi" id="sm_delete_multi">
            <i class="fa fa-trash-o" aria - hidden="true"></i>
        </button>
        <span class="desc"> Click checkbox để xóa một hoặc nhiều trường </span>
        <div class="table-responsive">
            <table class="table list-table-wp">
                <thead>
                <tr>
                    <td width="5%"><input type="checkbox" name="checkAll" id="checkAll"></td>
                    <td width="5%"><span class="thead-text"> STT</span></td>
                    <td width="70%" style="text-align: left;"><span class="thead-text"> Tiêu đề </span></td>
                    <td width="20%"><span class="thead-text"> Thao tác </span></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($groups as $group) { ?>
                    <tr>
                        <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                        <td><span class="tbody-text"> <?php echo $group["id"]; ?></span></td>

                        <td style="text-align: left;">
                            <span class="tbody-text"> <?php echo $group["title"]; ?></span>
                        </td>

                        <td>
                            <ul class="action clearfix">
                                <li>
                                    <a href="?mod=grade&act=edit&id=<?php echo $group["id"]; ?>"
                                    <i class="fa fa-pencil" aria - hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="?mod=grade&act=delete&id=<?php echo $group["id"]; ?>"
                                       title="Xoá"
                                       class="edit">
                                        <i class="fa fa-trash" aria - hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php foreach (get_grades($group) as $grade) { ?>
                        <tr>
                            <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                            <td><span class="tbody-text"> <?php echo $grade["id"]; ?></span></td>

                            <td style="text-align: left;">
                                <span class="tbody-text"> <?php echo "-- " . $grade["title"]; ?></span>
                            </td>

                            <td>
                                <ul class="action clearfix">
                                    <li>
                                        <a href="?mod=grade&act=edit&id=<?php echo $group["id"]; ?>"
                                        <i class="fa fa-pencil" aria - hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?mod=grade&act=delete&id=<?php echo $group["id"]; ?>"
                                           title="Xoá"
                                           class="edit">
                                            <i class="fa fa-trash" aria - hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                    <td><span class="thead-text"> STT</span></td>
                    <td style="text-align: left;"><span class="thead-text"> Tiêu đề </span></td>
                    <td><span class="thead-text"> Thao tác </span></td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div
