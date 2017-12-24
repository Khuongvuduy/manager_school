<?php
session_start();
ob_start();
require 'functions/data.php';
require 'config/database.php';
require 'functions/database.php';
require 'functions/url.php';
require 'functions/template.php';
require 'functions/user.php';
require 'functions/grade.php';

//show_array($db);
db_connect($db);

?>
<?php
require './inc/header.php';
/* CHECK - LIST
 * 1. Ghép giao diện
 *   - Module: 1. Grade
 *             2. School
 * 2. Tạo database
 *             1. Tbl_grade
 *             2. Tbl_grade
 * 3. Chức năng:
 *   - Grade - school: 1. add -> List(validate, Kiểm tra trùng , inset- thông báo)
 *                     2. Edit
 *                     3. Delete
 *                     4. Delete muti" xóa nhiều "
 * 4.
 */

$mod = isset($_GET['mod']) ? $_GET['mod'] : 'grade';
$act = isset($_GET['act']) ? $_GET['act'] : 'main';

$path = "modules/{$mod}/{$act}.php";
if (file_exists($path)) {
    require $path;
} else {
    require 'inc/404.php';
}
?>
