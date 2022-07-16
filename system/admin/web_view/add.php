<?php 
    $menu_active =2;
    $layout_title = "Add Slider Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>


<?php 
    if(isset($_POST['btn_add'])){
        $v_image = @$_FILES['txt_image'];
        if($v_image["name"] != ""){
            $new_name = date("Ymd")."_".rand(1111,9999)."_".$v_image["name"];
            move_uploaded_file($v_image["tmp_name"], "../../img/img_web_view/".$new_name);
            

            $v_egc_type = @$connect->real_escape_string($_POST['txt_egc_type']);
            $v_category = @$connect->real_escape_string($_POST['txt_category']);
            $v_title = @$connect->real_escape_string($_POST['txt_title']);
            // $v_sub_title = @$connect->real_escape_string($_POST['txt_sub_title']);
            $v_price = @$connect->real_escape_string($_POST['txt_price']);
            // $v_description = @$connect->real_escape_string($_POST['txt_description']);
            // $v_note = @$connect->real_escape_string($_POST['txt_note']);
            $v_user_id = @$_SESSION['user']->user_id;


            $query_add = "INSERT INTO tbl_view_info (
                    vinfo_contact_no,
                    vinfo_type_id,
                    vinfo_title,

                    vinfo_image,

                    vinfo_price_show,
                    vinfo_view,

                    vinfo_user_id) 
                VALUES(
                    '$v_egc_type',
                    '$v_category',
                    '$v_title',

                    '$new_name',

                    '$v_price',
                    '1',

                    '$v_user_id')";
            if($connect->query($query_add)){
                $sms = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Successfull!</strong> Data inserted ...
                </div>'; 
            }else{
                $sms = '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error!</strong> Query error ...
                </div>';   
            }
        }else{
            $sms = '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error!</strong> Please Insert Image ...
                </div>';
        }
    }

 ?>


<div class="portlet light bordered">
    <div class="row">
        <div class="col-xs-12">
            <?= @$sms ?>
            <h2><i class="fa fa-plus-circle fa-fw"></i>Create Record</h2>
        </div>
    </div>
    
    <br>
    <br>

    <div class="portlet-title">
        <div class="caption font-dark">
            <a href="index.php" id="sample_editable_1_new" class="btn red"> 
                <i class="fa fa-arrow-left"></i>
                Back
            </a>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Input Information</h3>
            </div>
            <div class="panel-body">
                 <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                
                                <label>Contact No /លេខកិច្ចសន្យា
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <select class="form-control" name="txt_egc_type" required="required">
                                    <option value="">=== Please choose EGC Type ===</option>
                                    <?php 
                                        $acc_type = $connect->query("SELECT * FROM tbl_egc001_type ORDER BY et_name ASC");
                                        while ($row_acc_type = mysqli_fetch_object($acc_type)) {
                                            echo '<option value="'.$row_acc_type->et_id.'">'.$row_acc_type->et_name.'</option>';
                                        }
                                     ?>
                                </select>
                                <br>

                                <label>Urgent Status
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <select class="form-control" name="txt_category" required="required">
                                    <?php 
                                        $view_type = $connect->query("SELECT * FROM tbl_view_info_type ORDER BY vit_name ASC");
                                        while ($row_view_type = mysqli_fetch_object($view_type)) {
                                            echo '<option value="'.$row_view_type->vit_id.'">'.$row_view_type->vit_name.'</option>';
                                        }
                                     ?>
                                </select>
                                <br>


                                <label>Title
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <input type="text" class="form-control" name="txt_title" required="required" autocomplete="off">
                                <br>

                                <label>Image
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <input type="file" class="form-control" name="txt_image" required="required" autocomplete="off">
                                <br>


                                <label>Price
                                    <span class="required" aria-required="true">*</span>
                                </label>
                                <input type="text" class="form-control" name="txt_price" required="required" autocomplete="off">
                                <br>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                
<!--                                     <label>Description
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <textarea style="height: 123px;" class="form-control" name="txt_description" required="required" autocomplete="off"></textarea>
                                    <br><br>

                                    <label>Note
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <textarea style="height: 123px;" class="form-control" name="txt_note" required="required" autocomplete="off"></textarea> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="btn_add" class="btn blue"><i class="fa fa-save fa-fw"></i>Save</button>
                                <button type="reset" class="btn yellow"><i class="fa fa-eraser fa-fw"></i>Reset</button>
                                <a href="index.php" class="btn red"><i class="fa fa-undo fa-fw"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </form><br>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="../../plugin/ckeditor_4.7.0_full/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'detail', {
        language: 'en',
      height: '700'
        // uiColor: '#9AB8F3'
    });
</script>


<?php include_once '../layout/footer.php' ?>
