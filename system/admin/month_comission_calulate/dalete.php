<?php 
    $menu_active =7;
    $layout_title = "Add News Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>

<?php
    $edit_id = $_GET["delete_id"];
	
    $query="DELETE FROM tbl_monthly_commission WHERE m_c_id='$edit_id'";
    
    $result = $connect->query($query);
    if ($connect->query($query) === TRUE) {

        header('Location:plan_list.php');
    } else {
        header('Location:plan_list.php');
    }
?>
<?php include_once '../layout/footer.php' ?>
