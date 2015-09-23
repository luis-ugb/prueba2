<?php
if (!isset($_POST['id'])) {
    header("Location: ../");
} else {
 
    require_once '../class/users.class.php';
 
    $usuarios = Users::singleton();
 
    $id = $_POST['id'];
    $usuarios->delete_usuario($id);
}
?>