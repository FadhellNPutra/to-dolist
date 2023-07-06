<?php 
    if(!defined('INDEX')) die("");

    $halaman = [
        'dashboard',
        'edit',
        'hapus',
        'insert',
        'update'
    ];

    if(isset($_GET['hal'])) $hal = $_GET['hal'];
    else $hal = "index";

    foreach($halaman as $h){
        if($hal == $h){
            include "content/$h.php";
            break;
        }
    }
?>