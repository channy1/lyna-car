<?php 
    $menu_active =7;
    $layout_title = "Add News Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>

<?php
   $id = $_GET["delete_id"]; 
  
    $query="DELETE FROM  tbl_carrental_pickup_price  WHERE air_id='$id'";
    $result = $connect->query($query);
    if ($connect->query($query) === TRUE) {
        header('Location:add.php');
    } else {
        header('Location:add.php');
    }
?>
<?php include_once '../layout/footer.php' ?>