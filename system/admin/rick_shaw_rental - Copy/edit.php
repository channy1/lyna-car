<?php 
    $menu_active =7;
    $layout_title = "Add News Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>

<?php
   $edit_id = $_GET["edit_id"]; 
    $query="SELECT * FROM tbl_rick_shaw_rental WHERE ve_id='$edit_id'";
    $result = $connect->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $title = $row["ve_title"];
        $image = $row["ve_image"];
        $description = $row["ve_detail"];

        $no=$row["ve_ref_no"];
        $year=$row["ve_year"];
        $make=$row["ve_make"];
        $model=$row["ve_model"];
        $sub_model=$row["ve_sub_model"];
        $color=$row["ve_color"];
        $note=$row["ve_note"];
        $price_rent=$row["price_rent"];
        $vat=$row['vat'];
        $discount=$row['discount'];
        $status=$row['status'];
        $rick_price=$row['rick_price'];
        }
    }
    else{}
?>

<?php 
    
    if(isset($_POST['btn_save'])){
            $v_image = @$_FILES['txt_image'];
            if($v_image["name"] != ""){
                $new_name = date("Ymd")."_".rand(1111,9999).".png";
                move_uploaded_file($v_image["tmp_name"], "../image/vehicle_rental/".$new_name);
            }else{
                $new_name = $image;
                //echo "<script> alert ('hello'); </script> ";
            }
            
            $v_title = @$connect->real_escape_string($_POST['txt_title']);
            $v_detail = @$connect->real_escape_string($_POST['txt_detail']." ");
            $v_ref = @$connect->real_escape_string($_POST['txt_ref']);
            $v_year = @$connect->real_escape_string($_POST['txt_year']);
            $v_make = @$connect->real_escape_string($_POST['txt_make']);
            $v_model = @$connect->real_escape_string($_POST['txt_model']);
            $v_sub_model = @$connect->real_escape_string($_POST['txt_sub_model']);
            $v_color = @$connect->real_escape_string($_POST['txt_color']);
            $v_note = @$connect->real_escape_string($_POST['txt_note']);
            $v_txt_price_for_rent = @$connect->real_escape_string($_POST['txt_price_for_rent']);

            $txt_vat = @$connect->real_escape_string($_POST['txt_vat']);
            $txt_discount = @$connect->real_escape_string($_POST['txt_discount']);
            $txt_status = @$connect->real_escape_string($_POST['txt_status']);
            $txt_price = @$connect->real_escape_string($_POST['txt_price']);


            $query_add = "UPDATE tbl_rick_shaw_rental SET 
            ve_title='$v_title',
            ve_image='$new_name',
            ve_detail='$v_detail',
            ve_ref_no='$v_ref',
            ve_year='$v_year',
            ve_make='$v_make',
            ve_model='$v_model',
            ve_sub_model='$v_sub_model',
            ve_color='$v_color',
            ve_note='$v_note',
            price_rent='$v_txt_price_for_rent',
            vat='$txt_vat',
            discount='$txt_discount',
            status='$txt_status',
            rick_price='$txt_price'

            WHERE ve_id='$edit_id'";
            if($connect->query($query_add)==TRUE){
                $sms = '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Successfull!</strong> Data inserted...
                </div>';
            }else{
                $sms = '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error!</strong> Query error ...
                </div>';   
            }
    }

 ?>

<?php
   $edit_id = $_GET["edit_id"]; 
    $query="SELECT * FROM tbl_vehicle_rantal WHERE ve_id='$edit_id'";
    $result = $connect->query($query);
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            $title = $row["ve_title"];
            $image = $row["ve_image"];
            $description = $row["ve_detail"];

            $no=$row["ve_ref_no"];
            $year=$row["ve_year"];
            $make=$row["ve_make"];
            $model=$row["ve_model"];
            $sub_model=$row["ve_sub_model"];
            $color=$row["ve_color"];
            $power=$row["ve_horse_pow"];
            $seat=$row["ve_no_of_seat"];
            $tran_type=$row["ve_transmission_type"];
            $ve_type=$row["ve_vehical_type"];
            $type=$row["ve_type"];
            $max=$row["ve_maximum_weight"];
            $steering=$row["ve_steering_wheel_type"];
            $no_ax=$row["ve_no_of_axles"];
            $no_ey=$row["ve_no_of_eylinders"];
            $cy_disp=$row["ve_cylinders_disp"];
            $test_drive=$row["ve_test_drive_url"];
            $show=$row["ve_show_url"];
            $note=$row["ve_note"];
            $day1=$row["ve_days(1-7)"];
            $ex_day1=$row["ve_extra_days(1-7)"];
            $day2=$row["ve_day(15-26)"];
            $ex_day2=$row["ve_extra_day(15-26)"];
            $monthly=$row["ve_monthly"];
            $ex_monthly=$row["ve_monthy_extra_days"];
            $yearly=$row["ve_yearly"];
            $ex_yearly=$row["ve_yearly_extra_days"];
        }
    }
    else{}
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

     <div style=" border: solid; border-right: 0; border-left: 0; border-top: 0;">
        <div class="text-center" style="float: left; "><img src="lyna.jpg" style="width: 150px;height: 150px;"></div>
        <div style="text-align: center; width: 100%;margin-left: -50px;">
                <b style="font-size: 30px;font-family: Khmer OS Muol; color:#2F05A5"> ???????????????????????? ????????????????????????  </b><br>
                <b style="font-size: 20px;color:#2F05A5">EDIT VEHICLE RENTAL</b><br><br>
                <b style="font-family: Khmer OS Muol;">????????????????????????????????????????????? / Head Quarter:</b><br>
                E-mail:info@lyna-carrental.com , skype:Skype: lyna-carrental.com<br>
               <h5 style="padding-left: 65px;">  tel:Cambodian: +855 (0)12 55 42 47 , tel:English: +855 (0)12 92 45 17 , tel:Booking: +855 (0)92 14 30 14</h5>
        </div>
        <div class="row">
             <div class="col-xs-4 col-sm-4 col-md-4">
             </div>
             <div class="col-xs-4 col-sm-4 col-md-4">
             </div>
             <div class="col-xs-4 col-sm-4 col-md-4">

             </div>
        </div>
    </div>

    <div class="portlet-body">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Input Information</h3>
            </div>
            <div class="panel-body" style="background-color: #800080;">
                 <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Title
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Title...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_title" placeholder="Enter Title" value="<?php echo ($title); ?>"  required="required" autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white;font-size:15px;"class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Choose Image
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Choose Image to Upload...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="file" class="form-control" name="txt_image" placeholder="Enter Icon name"  autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <img src="../image/vehicle_rental/<?php echo $image;?>" alt="<?php echo $image; ?>" style="width:100%;height:100px;border:2px solid black; border-radius:5px !important ;">
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white;font-size:15px;"class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Vehical_Ref_No
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Vehical Ref No...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_ref" value="<?php echo ($no); ?>" placeholder="Enter Ref No"  autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white;font-size:15px;"class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Year
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Year...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_year" value="<?php echo $year; ?>" placeholder="Enter Year"  autocomplete="off" style="background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Make
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Make...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo ($make); ?>" name="txt_make" placeholder="Enter Make"  autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Model
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Model...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_model" value="<?php echo ($model); ?>" placeholder="Enter Model"  autocomplete="off" style="background-color:white;">
                                   
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Sub Model
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Model...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_sub_model" value="<?php echo ($sub_model); ?>" placeholder="Enter Sub Model"  autocomplete="off" style="background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Color
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Color...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_color" value="<?php echo ($color); ?>" placeholder="Enter Color"  autocomplete="off" style="background-color:white;">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Note
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Note...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <textarea class="form-control" name="txt_note" placeholder="Enter Note"  autocomplete="off" style="background-color: white;"><?php echo ($note); ?></textarea>
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Price For Rent (1/Days)
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Price...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" name="txt_price_for_rent" placeholder="Enter Price" value="<?php echo $price_rent; ?>"  autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                           
                           
                          
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">VAT
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Vat...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo $vat; ?>" name="txt_vat" placeholder="Enter Title"  autocomplete="off" style="background-color:white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Discount
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Discount...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" value="<?php echo $discount; ?>" name="txt_discount" placeholder="Enter Title"  autocomplete="off" style="background-color:white;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Status
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter status...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <select class="form-control" name="txt_status" style="background-color: white;">
                                         <option <?php if($status=="1") {echo "selected='selected'";} ?> value="1">Rent</option>
                                         <option <?php if($status=="2") {echo "selected='selected'";} ?> value="2">Sale</option>
                                    </select>
                                   </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group form-md-line-input">
                                    <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Price for Sale
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Price...</span>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                   <input type="text" value="<?php echo $rick_price; ?>" name="txt_price" class="form-control" style="background-color:white;">
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                    <textarea style="height: 290px;" class="form-control detail" id="detail" name="txt_detail" placeholder="Repeat your password" required="required" autocomplete="off"><?php echo ($description); ?></textarea>
                                    <label style="color:white; font-size:15px;" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">Detail
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Detail...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <button type="submit" name="btn_save" class="btn blue"><i class="fa fa-plus fa-fw"></i>Save</button>
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
