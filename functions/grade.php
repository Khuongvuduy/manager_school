<?php
function get_grade_select()
{
    $result = db_fetch_array("SELECT * FROM `tbl_group` WHERE `parent_id`=0");
    $data_option = array();
    if (!empty($result)) {
        foreach ($result as $k => $v) {
            $data_option[$v['grade_id']] = $v['title'];
        }
    }
    return $data_option;
}