<?php 
    $layout_title = "Welcome Dashboard";
    $menu_active =0;
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';
?>


<div class="portlet light bordered">
    <div class="row">
        <div class="col-xs-12">
            <h2><i class="fa fa-dashboard fa-fw"></i> Partner's Profile</h2>
        </div>
    </div>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-sm-6 panel-heading rounded-4">
					<div class="row">
						<div class="col-sm-3 margin-top-10">
							<img src="../../img/img_partner/<?php echo trim(@$_SESSION['user']->user_photo) ?>" 
				style=" width: 120px; height: 120px; box-shadow: 0 0 1px 1px rgba(0,0,0,.1); border-radius: 10px;" alt="Profile Photo">
						</div>
						<div class="col-sm-9">
							<p style=" text-transform: capitalize; margin-top: 5px; margin-bottom: 0px; font-size: 20px; font-weight: 600;">Hi! <?php echo trim(@$_SESSION['user']->user_last_name)." ". trim(@$_SESSION['user']->user_first_name) ?></p>
							<b>Username : </b> <?php echo trim(@$_SESSION['user']->user_name) ?><br>
							<b>User ID N&deg; : </b> <span> <?php echo trim(@$_SESSION['user']->user_id_number) ?> </span>
							<br><b>Introducer ID N&deg; : </b> <span> <?php echo trim(@$_SESSION['user']->user_introducer_id) ?> </span>
							<br><b>Account Type : </b>
							<?php 
								if(@$_SESSION['user']->user_position == 1){
									echo "Admin";
								}else{
									echo "Normal Partner.";
								} 
							?><br>
							<b>Connect with : </b><?php echo "Email Account."; ?>
						</div>
					</div>
				</div>
				<div class="col-sm-6 rounded-4 margin-top-20">
				   <div class="row">
						<div class="col-sm-12">
							<b>Register Phone : </b> <span> <?php echo trim(@$_SESSION['user']->user_phone_number) ?> </span>	
							<br><b>Register Email : </b> <span> <?php echo trim(@$_SESSION['user']->user_email) ?> </span>
							<br><b>Account Status : </b> <span> 
							<?php 
								if(@$_SESSION['user']->user_status == "1"){
									echo "Active Account.";
								}else if(@$_SESSION['user']->user_status == "2"){
									echo "Inactive Account.";
								}else {
									echo "Pending Account.";
								}
							?> </span>
							<br><b>Register Email : </b> <span> <?php echo trim(@$_SESSION['user']->user_email) ?> </span>
						</div>
				   </div>
				</div>
			</div>
		</div>
	</div>
    <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
  

         
        </div>
        
    </div>
</div>

<?php include_once '../layout/footer.php' ?>
