<?php
	$menu_active =7;
    $layout_title = "Welcome...";
	require_once '../../system/config/database.php';
	require '../config.php'; 
	require '../editor_header.php'; 
	require '../sidebar.php';	
	$v_sql 	= "SELECT * FROM tbl_website_info";
	$result = $connect->query($v_sql);
	
    
?>

<?php
if(isset($_POST['search'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $v_current_year_month=date('Y-m');
    $sql = "SELECT * FROM tbl_expen_request AS A
      LEFT JOIN tbl_expense_category AS B ON A.ex_category=B.exca_id
      LEFT JOIN tbl_users AS C ON A.em_id=C.user_id
      WHERE DATE_FORMAT(date_record,'%Y-%m-%d') BETWEEN '$from' AND '$to'
      ORDER BY A.date_record DESC
      ";   
  }else{
    $v_current_year_month=date('Y-m');
    $sql = "SELECT * FROM tbl_expen_request AS A
      LEFT JOIN tbl_expense_category AS B ON A.ex_category=B.exca_id
      LEFT JOIN tbl_users AS C ON A.em_id=C.user_id
      WHERE DATE_FORMAT(date_record,'%Y-%m')='$v_current_year_month'
      ORDER BY A.date_record DESC
      ";    
  }


  $result = $connect->query($sql);
  
  if(isset($_POST["btnadd"])){
    $v_date_record = $_POST["txt_date_record"];
    $v_description = $_POST["txt_description"];
    $v_expense_category = $_POST["txt_expense_category"];
    $v_amount = $_POST["txt_amount"];
    $v_employee = $_POST["txt_employee"];
    $v_note = $_POST["txt_note"];
    $v_txt_u_price = $_POST["txt_u_price"];
    $v_qty = $_POST["txt_qty"];
    $v_inv=$_POST['txt_inv'];
    $v_pcv=$_POST['txt_pcv'];

	$sql = "INSERT INTO tbl_expen_request 
                          (
                          em_id
                            , date_record
                            , description
                            , ex_category
                            , ex_price
                            , ex_amount
                            , ex_note
                            , ex_qty
                            , inv_no
                            , pcv
                            ) 
                        VALUES 
                          ('$v_employee'
                            , '$v_date_record'
                            , '$v_description'
                            , '$v_expense_category'
                            , '$v_txt_u_price'
                            , '$v_amount'
                            , '$v_note'
                            , '$v_qty'
                            , '$v_inv'
                            , '$pcv'
                            )";

     $result = mysqli_query($connect, $sql);
     header('location:expense_request.php?message=success');
 }
    if(isset($_GET["id"])){
    $id = $_GET["id"];
      
    $sql = "DELETE FROM tbl_expen_request WHERE id = '$id'" ;
    $result = mysqli_query($connect, $sql);
    header("location:expense_request.php?message=delete");  
} 
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
					<div ><h2 class="col-sm-6 float-sm-left"  class="text-primary">Expense Request </h2></div>
					<div class="col-sm-4 float-sm-right">
						<select class="form-control" onchange="window.location=this.value">
							<option value="" selected>-- Select --</option>
							<option value="expense_list.php">Rent</option>
							<option value="expense_list.php">Input</option>
							<!--<option selected="" value="expense_list.php">Input</option>-->
						</select>
					</div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Expense Request</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
				<div class = "col-12">
				<?php
					if (!empty($_GET['message']) && $_GET['message'] == 'success') {
						echo '<div class="alert alert-success">' ;
						echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
						echo '<h4>Success Add Record</h4>';
						echo '</div>';
					}else if (!empty($_GET['message']) && $_GET['message'] == 'update') {
						echo '<div class="alert alert-info">' ;
						echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
						echo '<h4>Success Update Record</h4>';
						echo '</div>';
					}else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
						echo '<div class="alert alert-danger">' ;
						echo '<button type="button" class="close" data-dismiss="alert">&times;</button>'; 
						echo '<h4>Success Delete Record</h4>';
						echo '</div>';
					}
				?>
				</div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
							<hr>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add New</button>
							<!-- Modal -->
							<div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title"><i class="fa fa-plus-square-o" aria-hidden="true"></i>Add New</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<div class="col-md-12">
												<form method="post" enctype="multipart/form-data" action="">     
													<div class="form-group col-xs-12">
														<label for ="">Date Record :</label>                           
														<input class="form-control" required  name="txt_date_record" type="date" placeholder="date...">          
													  </div>
													   <div class="form-group col-xs-12">
														<label for ="">PCV :</label>
														<input class="form-control" required  name="txt_pcv" type="text" placeholder="pcv...">          
													  </div>

													  <div class="form-group col-xs-12">
														<label for ="">Description :</label>
														<input class="form-control" required  name="txt_description" type="text" placeholder="description...">          
													  </div>
													  <div class="form-group col-xs-12">
														<label for ="">Expense Category :</label>      
															<select class = "form-control select2" style = "width:100%" name = "txt_expense_category">
																<option value="">====Select and Choose====</option>
																	<?php
																	  $v_select = mysqli_query($connect,"SELECT * FROM tbl_expense_category");
																	  while ($row1 = mysqli_fetch_assoc($v_select)) { ?>
																	  <option value="<?php echo $row1['exca_id']; ?>"><?php echo $row1['exca_name'] ;?></option>
																	<?php 
																	}
																	 ?>   
															</select>           
													  </div>
													   <div class="form-group col-xs-12">
														<label for ="">Qty :</label>
														<input class="form-control" required  name="txt_qty" type="text" placeholder="Qty...">          
													  </div>
													  <div class="form-group col-xs-12">
														<label for ="">U. Price :</label>
														<input class="form-control" required  name="txt_u_price" type="text" placeholder="Price...">          
													  </div>

													  <div class="form-group col-xs-12">
														<label for ="">Amount :</label>                                          
														<input class="form-control" required  name="txt_amount" type="text" placeholder="amount...">          
													  </div>
													  <div class="form-group col-xs-12">
														<label for ="">Employee :</label>                                          
															  <select class = "form-control select2" style = "width:100%" name = "txt_employee">
																<option value="">====Select and Choose====</option>
																	<?php
																	  $v_select = mysqli_query($connect,"SELECT * FROM tbl_users WHERE user_position='1' ");
																	  while ($row1 = mysqli_fetch_assoc($v_select)) { ?>
																	  <option value="<?php echo $row1['user_id']; ?>"><?php echo $row1['user_first_name'] ;?> <?php echo $row1['user_last_name'] ;?></option>
																	<?php 
																	}
																	 ?>   
															  </select>           
													  </div>
													<div class="form-group col-xs-12">
														<label for="note">Note :</label>
														 <textarea class="form-control" rows="4" name = "txt_note"></textarea>
													</div>
													<div class="form-group col-xs-6">
														<button type="submit" name="btnadd" class="btn btn-primary"><i class="fa fa-save fa-fw"></i>Save</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div> 
												</form>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							<!-- <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-danger"><i class="fa fa-undo" aria-hidden="true"></i> Clear</a> -->
							<form class="form-inline" method = "post" action="" style="display:inline-flex;">
								<div class="form-group">
									<input type="date" data-provide="datepicker" placeholder="DATE START" autocomplete="off" data-date-format="yyyy-mm-dd" class="form-control" required="" name="from" value="<?= @$_POST['from'] ?>" id="from">
								</div>
								<div class="form-group">
									<input type="date" data-provide="datepicker" placeholder="DATE END" autocomplete="off" data-date-format="yyyy-mm-dd" class="form-control" required="" name="to" value="<?= @$_POST['to'] ?>" id="to"> 
								</div>
								<button  type="submit" name="search" class="btn btn-success m-2"> Search</button>
								<a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-danger"><i class="fa fa-undo" aria-hidden="true"></i> Clear</a>
							</form> 
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
										<th style="width: 10px;">No</th>
										<th>Date Record</th>                                         
										<th>Expense Category</th>
										<th>Qty</th>
										<th>Price</th>
										<th>Amount</th>
										<th>Employee</th>
										<th>Note</th>
									   <th><i class="fa fa-cog" aria-hidden="true"></i></th>
									</tr>
                                </thead>
                                <tbody>
									<?php									
										$i=1;
										$v_sum_amount = 0; 
										while($row = $result->fetch_assoc()){ 										 
										  $v1=$row["id"];
										  $v2=$row["date_record"];
										  $v3=$row["description"];
										  $v4=$row["exca_name"];

										  $v5=$row["ex_amount"];
										  $v6=$row["user_first_name"].' '.$row['user_last_name'];
										  $v7=$row["ex_note"];
										  $v_sum_amount += $row["ex_amount"];
									  ?>
									  <tr>
										<td><?php echo ($i++) ;?></td> 
									   
										<td><?php echo $row["date_record"];?></td>
										<td><?php echo $row["exca_name"];?></td>
										<td><?php echo $row["ex_qty"];?></td>
										<td style="text-align: right;">$<?php echo number_format($row["ex_price"],2);?></td>
									  
										<th style="text-align: right;">$<?= number_format($v5,2) ?></th>
										<td><?php echo $v6;?></td>
										<td><?php echo $v7;?></td>
										<td align = "center">
										<a href="edit_expense_request.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
										
										<a onclick = "return confirm('Are you sure to delete ?');" href="expense_request.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
										</td>
									  </tr> 
									  <?php
										}  
									  ?>
								</tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include '../footer.php'; ?>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo $base_url; ?>admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $base_url; ?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $base_url; ?>admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $base_url; ?>admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $base_url; ?>admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $base_url; ?>admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_url; ?>admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $base_url; ?>admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>

</body>
</html>