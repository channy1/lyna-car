<?php 
    $menu_active =1;
    $layout_title = "Welcome Quotations";
    include_once '../../config/database.php';
    include_once '../../config/athonication.php';
    include_once '../layout/header.php';

    $day_tr = array();
    $opt_checked = array();
    $opt = array();

    if(isset($_POST['btn_view'])){
      $date_start = $_POST['txt_month'];
      $date_end = $_POST['txt_year'];

      $get = "SELECT * FROM tbl_daily_duties WHERE date_re BETWEEN '$date_start' AND '$date_end' ORDER BY date_re";

      $get_result = $connect->query($get);

      while($row = mysqli_fetch_object($get_result)){
        $r[] = $row;
        $str = strtotime($row->date_re);
        array_push($day_tr, date('d', $str));
        array_push($opt_checked, explode(',', $row->opt_checked));
      }
    } 
?>
<div class="portlet light bordered">
  <div class="row">
    <div class="col-xs-12">
      <center><h2>DAILY DUTIES</h2></center>
    </div>
  </div>

  <!-- calender start -->
  <div class="row">
    <div class="col-md-8">
      <form method="post">    
        <?php
          $s_input_month=@$connect->real_escape_string($_POST['txt_month']);
          $s_input_year=@$connect->real_escape_string($_POST['txt_year']);
          // $s_txt_parner_name=@$connect->real_escape_string($_POST['txt_parner_name']);
          // $type=@$connect->real_escape_string($_POST['txt_type']);
          // $sql = "SELECT * FROM tbl_daily_duties WHERE date_re BETWEEN '$s_input_month' AND '$s_input_year'";
          // $result = $connect->query($sql);
          // while ($row = mysqli_fetch_object($result)) {
          //   $r[] = $row;         
          // }
        ?>
          <label for="staticEmail" class="col-md-1 col-form-label">FROM:</label>
          <div class="col-md-3">     
              <input value="<?php echo $s_input_month ?>" type="text" class="form-control" name="txt_month" data-provide="datepicker" data-date-format="yyyy-mm-dd" readonly="">
          </div>

          <label for="staticEmail" class="col-md-1 col-form-label">TO:</label>
          <div class="col-md-3">        
              <input value="<?php echo $s_input_year ?>" type="text" class="form-control" name="txt_year" data-provide="datepicker" data-date-format="yyyy-mm-dd" readonly="">
          </div>
          <div class="col-md-2">

              <button style='float: right;margin-right: -25px;' type="submit" name="btn_view" class="btn btn-primary"><i class="fa fa-eye"></i> View Now</button>
          </div>
      </form>
      </div>
      <div class="col-md-4">

        
        <div class="col-md-2" style="float:left;">
        <a target="_blank" class="btn btn-danger" href="add_daily_duties.php"><i class="fa fa-calendar"></i> Add</a>
           
            
        </div>

        <div class="col-md-2" style="float:left;margin-left:33px;">
          <a target="_blank" class="btn btn-danger" href="print_letter.php?start_date=<?=$date_start;?>&end_date=<?=$date_end;?>">
          <i class="fa fa-calendar"></i> Print</a>    
        </div>

    </div>
  </div>
    <!-- end calendar -->
   
    <br><br><br>
    <?php
      $day = cal_days_in_month ( CAL_GREGORIAN , date('m') , date('Y') );      
    ?>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Descriptions</th>
          <?php
            
            $i=1;
            while($i<=$day){
              ?>
                <th><?=$i?></th>
              <?php
              $i++;
            }
          ?>
          <th>Remarks</th>              
        </tr>
      </thead>
      <tbody>
        <?php
          $sub_j_id = array(
                            'រថយន្ដប្ដូប្រេងម៉ាស៊ីន (ធម្មតា)'=>'1.1',
                            'រថយន្ដប្រើសេវាថែទាំតាមកាលកំណត់ A B C D'=>'1.2',
                            'ប័ណ្ណបើកបររថយន្ដ'=>'1.3',
                            'ឈៀករថយន្ដប្រចាំឆ្នាំ'=>'1.4',
                            'ពន្ធផ្លូវរថយន្ដប្រចាំឆ្នាំ'=>'1.5',
                            'បន្ដទិដ្ឋាការប្រចាំខែឬ ឆ្នាំ'=>'1.6',
                            'កាត់លេខកុងទ័រ រថយន្ដទាំងភ្ញៀវ និង រថយន្ដ LCRC ក្នុងសៀវភៅកត់ត្រា និង SYSTEM'=>'1.7',
                            'សរសេរ ប័ណ្ណប្ដូរប្រេង ម៉ាស៊ីនពាក់ ក ច្ងកូតរថយន្ដ'=>'1.8',
                            'កត់ត្រារំលឹកបង់ថ្លៃភ្លើងប្រចាំខែ'=>'1.12',
                            'កត់ត្រារំលឹកបង់ថ្លែ INTERNET ប្រចាំខែ'=>'1.9',
                            'កត់ត្រាបង់ថ្លៃ ទឹកប្រចាំខែ'=>'1.33',
                            'កត់ត្រាថ្លៃបង់អគារ'=>'1.11',
                            'កត់ត្រាថ្លៃបង់ METFONE ប្រចាំខែ'=>'1.13',
                            ''=>'0',
                            'ទទួលបដិសណ្ឋារកិច្ច​ ភ្ញៀវខ្មែរនិងបរទេស'=>'2.1',
                            'មិត្តរួមការងារផ្មែក LGC និង LCRC'=>'2.2',
                            'រាយការណ៍ដោយផ្ទាល់ទៅអ្នកគ្រប់គ្រង'=>'2.3',
                            'ទទួលបន្ទុកផ្នែកស្វាគមន៍ភ្ញៀវផ្នែកជួលរថយន្ដ​ និង ភ្ញៀវខាងយានដ្ឋាន'=>'2.4',
                            'ទទួលបន្ទុកផ្នែកជួលរថយន្ដ​ Care Hire'=>'2.5',
                            'ទទួលបន្ទុកផ្នែកទំនាក់ទំនងភ្ញៀវផ្នែកជួលរថយន្ដតាមរយ៖អ៊ីម៉ែល Sending e-mail'=>'2.6',
                            'ទទួលបន្ទុកផ្នែកធ្វើកិច្ចសន្យាជួលរថយន្ដ Preparing Vehicle Rental Agreement'=>'2.7',
                            'ទទួលបន្ទុកផ្នែកចេញខ្វូថេហ្ិនជួលរថយន្ដ (QUOTATION) Preparing Quotation'=>'2.8',
                            'ទទួលបន្ទុកផ្នែកចេញ​អ៊ិនវ៉យជួលរថយន្ដ​ (INVOICE) Preparing Recipt'=>'2.9',
                            'ទទួលបន្ទុកផ្នែកចេញ​ រីសីុបជួលរថយន្ដ (RECEIPT) Preparing Receipt'=>'2.23',
                            'ទទួលបន្ទុកផ្នែកវាយបញ្ជូលក្នុងសីស្ដែម'=>'2.11',
                            'ទទួលបន្ទុកផ្នែកចេញប័ណ្ណបើកបររថយន្ដនិងទោរច័ក្រយានយន្ដទាំងថ្មីនិងបន្ដ'=>'2.12',
                            'ទទួលបន្ទុកផ្នែកបន្ដទិដ្ឋការជនបរទេស Visa Extension'=>'2.13',
                            'ទទួលបន្ទុកផ្នែកជួយរៀបចំឯកសារសម្ភាសន៏បុគ្គលិក'=>'2.14',
                            'ទទួលបន្ទុកផ្នែកកត់ត្រាចាត់ចែងរថយន្ដជួល'=>'2.15',
                            'ទទួលបន្ទុកចាត់ចែងអ្នកបើកបរ Driver Magagement'=>'2.16',
                            'ទទួលបន្ទុកត្រួតពិនិត្យភាពស្អាតនៃរងយន្ដក្រោយពីលាងរួច​ ឬ ត្រឡប់មកពីលាង'=>'2.17',
                            'ទទួលបន្ទុកស្វែងរករថយន្ដជួលពីដៃគូរ'=>'2.18',
                            'ជួយបំរើភេសជ្ជដល់ភ្ញៀវទាំងផ្នែកជួលរថយន្ដនិងយានដ្ឋាន'=>'2.19',
                            'ធ្វើការងារផ្សេងៗទៀតដែលមានការស្នើសុំ ដោយប្រធាន'=>'2.22'
                            );
          foreach($sub_j_id as $key=>$value){
            ?>
              <tr>
                <td><?=$key;?></td>  <!-- echo row (subject) -->
                <?php
                  $j = 1;  // day 1, 2, 3, ...
                  $x = 0;
                  while($j<=$day){
                    if(in_array('0'.$j, $day_tr)){
                      ?>
                        <td>
                          <?php
                            if(in_array($value, $opt_checked[$x])){
                              ?>
                                <input type="checkbox" name="tick" checked="">
                              <?php
                            }else{
                              echo "";
                            }
                          ?>
                        </td>
                      </tr>
                      <?php
                      $x++;
                    }else{
                      echo "<td></td>";
                    }
                    $j++;
                  }
                  echo "<td></td>";
                ?>
                
              </tr>
            <?php
            // $i++;
          }
        ?>
      </tbody>               
    </table>
  </div>
</div>
<style type="text/css">
    
    table th ,td {
        border: 1px solid black;
        text-align:center;
    }
    input
    {
      border: 1px solid #ccc;
      border-top: 0px;
      border-right: 0px;
      border-left: 0px;
      outline: none;
      text-align: left;     
    }

.tip-content {
  font-weight: 100 !important;
  font-size: 10px;
}

    /* Hover tooltips */
.field-tip {
    position:relative;
    cursor:help;
}
    .field-tip .tip-content {
        position:absolute;
        top:-10px; /* - top padding */
        right:9999px;
        width:200px;
        margin-right:-220px; /* width + left/right padding */
        padding:10px;
        color:#fff;
        background:#333;
        -webkit-box-shadow:2px 2px 5px #aaa;
           -moz-box-shadow:2px 2px 5px #aaa;
                box-shadow:2px 2px 5px #aaa;
        opacity:0;
        -webkit-transition:opacity 250ms ease-out;
           -moz-transition:opacity 250ms ease-out;
            -ms-transition:opacity 250ms ease-out;
             -o-transition:opacity 250ms ease-out;
                transition:opacity 250ms ease-out;
    }
        /* <http://css-tricks.com/snippets/css/css-triangle/> */
        .field-tip .tip-content:before {
            content:' '; /* Must have content to display */
            position:absolute;
            top:50%;
            left:-16px; /* 2 x border width */
            width:0;
            height:0;
            margin-top:-8px; /* - border width */
            border:8px solid transparent;
            border-right-color:#333;
        }
        .field-tip:hover .tip-content {
            right:-20px;
            opacity:1;
        }
   
</style>
<?php include_once '../layout/footer.php' ?>

<script type="text/javascript">
$('.class_tooltips').tooltip('show');
</script>