<?php
function add_student($data)
{
    db_insert('tbl_group', $data);
}

function get_list_student($start, $num_per_page)
{
    $result = db_fetch_array("SELECT * FROM `tbl_users` LIMIT $start, $num_per_page");
    $temp = $start;
    foreach ($result as &$item) {
        $temp++;
        $item['num_order'] = $temp;
    }
    return $result;
}

function get_total_student()
{
    $result = db_fetch_row("SELECT COUNT(*) as `total` FROM `tbl_users`");
    return $result['total'];
}

function create_pagging($num_page = 0, $base_url_pagging = "", $current_page)
{
    $pagging = "<ul class=\"pagging\">";
    for ($i = 1; $i <= $num_page; $i++) {
        $class_active = "";
        if ($current_page == $i) {
            $class_active = "class='active'";
        }
        $pagging .= "<li {$class_active}><a href='{$base_url_pagging}&page={$i}'>{$i}</a> </li>";
    }
    $pagging .= "</ul>";
    return $pagging;
}