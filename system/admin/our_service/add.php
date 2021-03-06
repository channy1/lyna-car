
<?php 
    $menu_active =7;
    $layout_title = "Add News Page";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
    if(isset($_POST['btn_add'])){
            $v_image = @$_FILES['txt_image'];

            if($v_image["name"] != ""){
                $new_name = date("Ymd")."_".rand(1111,9999).".png";
                move_uploaded_file($v_image["tmp_name"],"../image/our_service/".$new_name);
            }else{
                $new_name = "blank.png";
            }

            $v_title = @$connect->real_escape_string($_POST['txt_title']);
             $v_title_kh = @$connect->real_escape_string($_POST['txt_title_kh']);
             $v_price = @$connect->real_escape_string($_POST['txt_price']);
            //$v_image = @$connect->real_escape_string($_POST['txt_image']);
            $v_image1 = $new_name;
            $v_detail = @$connect->real_escape_string($_POST['txt_detail']." ");
            $v_detail_kh = @$connect->real_escape_string($_POST['txt_detail_kh']." ");
            $query_add = "INSERT INTO tbl_our_service(
                    se_title,
                    se_title_kh,
                    se_price,
                    se_image,
                    se_detail,
                    se_detail_kh
                    )
                VALUES(
                    '$v_title',
                    '$v_title_kh',
                    '$v_price',
                    '$v_image1',
                    '$v_detail',
                    '$v_detail_kh')";

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

        <div class="row">
      
      <div class="col-md-2 col-xs-12">  
        <img src="lyna.jpg" class="img_sub_logo">
      </div> 
      <div class="col-md-9 col-xs-12 mobile_fonts"> 
          <center>
                <h3><b style=";font-family: Khmer OS Muol; ">????????????????????? ?????????????????????????????????</b></h3>
                <b style="font-size: 20px;">???????????????ADD OUR SERVICE</b><br><br>
                <b style="font-family: Khmer OS Muol;">?????????????????????????????????????????????| HEAD OFFICE</b><br>
                <span> Address: Room No. 9C2 | 9th Floor</span> <br>
                <span>H Silver Building (Opposite the Khmer-Soviet Friendship Hospital)</span><br>
                <span>Street 271 | Sangkat Tumnop Teuk | Khan Chamcarmon | Phnom Penh | Kingdom of Cambodia</span> <br>
                <span>Eng/Khm: +855 (0) 12 55 42 47 | +855 (0) 92 14 30 14 | English Speaker Only: +855 (0) 12 924 517</span><br>
                <span> Skype ID: lyna-carrental.com | Line/WhatsApp/Telegram/Viber/WeChat: (+855) 12 55 42 47 | 92 14 30 14 | 12 924 517</span><br>
                <span>E-mail: info@lyna-carrental.com | Website: www.Lyna-CarRental.Com</span>
        </center>
        </div>
  </div>

    <div class="portlet-body">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Service Input Information</h3>
            </div>
            <div class="panel-body" style="background-color: #800080;">
                 <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size: 15px;" class="col-xs-12 col-md-3 col-sm-3 col-lg-2">Title In English:
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Title In English...</span>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" class="form-control" name="txt_title" placeholder="Enter Title In English"  autocomplete="off" style="background-color: white;">
                                   </div>
                                </div>
                            </div>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size: 15px;" class="col-xs-12 col-md-3 col-sm-3 col-lg-2">Title In Khmer:
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Title In Khmer...</span>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" class="form-control" name="txt_title_kh" placeholder="Enter Title In Khmer"  autocomplete="off" style="background-color: white;">
                                   </div>
                                </div>
                            </div>
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                     <label style="color:white; font-size: 15px;" class="col-xs-12 col-md-3 col-sm-3 col-lg-2">Price:
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Title...</span>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <input type="text" class="form-control" name="txt_price" placeholder="Enter Price"  autocomplete="off" style="background-color: white;">
                                   </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                       <label style="color:white; font-size: 15px;" class="col-xs-12 col-md-3 col-sm-3 col-lg-2">Choose Image
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Choose Image to Upload...</span>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                                    <input type="file" class="form-control"  name="txt_image" placeholder="Image.jpg"   autocomplete="off" style="background-color: white;">
                                 </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                    <textarea style="height: 290px;" class="form-control detail" id="detail" name="txt_detail" placeholder="http://www.facebook.com"  autocomplete="off"></textarea>
                                    <label style="color: white;font-size: 15px;">Detail In English:
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Detail In English...</span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group form-md-line-input">
                                    <textarea style="height: 290px;" class="form-control detail" id="details" name="txt_detail_kh" placeholder="http://www.facebook.com"  autocomplete="off"></textarea>
                                    <label style="color: white;font-size: 15px;">Detail In Khmer:
                                        <span class="required" aria-required="true">*</span>
                                    </label>
                                    <span class="help-block">Enter Detail In Khmer...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <button type="submit" name="btn_add" class="btn blue"><i class="fa fa-save fa-fw"></i>Save</button>
                                <button type="reset" class="btn yellow"><i class="fa fa-eraser fa-fw"></i>Reset</button>
                                <a href="index.php" class="btn red"><i class="fa fa-undo fa-fw"></i>Back</a>
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
      height: ''
        // uiColor: '#9AB8F3'
    });
    CKEDITOR.replace( 'details', {
        language: 'en',
      height: ''
        // uiColor: '#9AB8F3'
    });
</script>

<style type="text/css">
    b,span{
        color: #800080;
        font-weight: 900;
    }
</style>
<?php include_once '../layout/footer.php' ?>
