<?php 
    $menu_active =7;
    $layout_title = "Add News Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>

<?php
   $id = $_GET["id"]; 
  
    $query="DELETE FROM  tbl_contact_comment  WHERE comment_id='$id'";
    $result = $connect->query($query);
    if ($connect->query($query) === TRUE) {
        header('Location:index.php');
    } else {
        header('Location:index.php');
    }
?>
<?php include_once '../layout/footer.php' ?>
