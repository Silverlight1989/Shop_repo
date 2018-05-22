<?php
include_once "../models/model.php";
if($_GET[id]){
    $id= $_GET[id];
    delete($link, $id,'goods');
    //надо еще удалять картинки
    header("Location: ../admin/index.php");
}