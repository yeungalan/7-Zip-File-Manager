<?php
include '../auth.php';
?>
<?php
if(isset($_GET["filepath"])){
    header('Location: MainUI.php?file='.$_GET["filepath"]);
}else{
    header('Location: index.php');
}
?>
