<?php

function get_header($page="") {
    if(!empty($page)){
        $path = "inc/header-{$page}.php";
    }else{
        $path = "inc/header.php";
    }
    if(file_exists($path)){
        require $path;
    }else{
        echo "File này không tồn tại {$path}";
    }  
}

function get_footer() {
    require 'inc/footer.php';
}
