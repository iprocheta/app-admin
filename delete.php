<?php
    require_once 'product.php';
    $p = new product();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $p->delete($id);
    }
?>