<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h1>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_customer.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_customer.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>
  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Customer</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Customer</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                                        
                 <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer Details</h4>
                                
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="50%">
                                        <thead>
                                            <tr>
                                                <th width="20">Date</th>
                                                <th>IMPORTER</th>
                                                <th>BORDER</th>
                                                <th>PERMIT NO.</th>
                                                <th>VEHICLE NO.</th>
                                                <th>SAD500 No.</th>
                                               <th>PRODUCTS</th>
                                               <th>INVOICE</th>
											   <th>QTY(KG/L)</th>
											   <th>LEVY</th>
											   <th>INV AMOUNT</th>
											   
											   
                                        </thead>
                                        <tfoot>
                                            <tr>
                                               <th>Date</th>
                                                <th>IMPORTER</th>
                                                <th>BORDER POST</th>
                                                <th>PERMIT NO.</th>
                                                <th>VEHICLE NO.</th>
                                                <th>SAD500 No.</th>
                                               <th>DAIRY PRODUCTS</th>
                                               <th>INVOICE NO</th>
											   <th>QTY (KG/L)</th>
											   <th>LEVY (E)</th>
											   <th>INVOICE AMOUNT (E)</th>
                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                                    if($_SESSION["id"]=='1') {
                                    $sql = "SELECT *,sum(amount)as tot_amount FROM `products`";
                                  }else
                                  {
                                   $sql = "SELECT *,sum(amount)as tot_amount FROM `products` where user_id = '".$_SESSION['id']."' ";
                                  }
                                     $result = $conn->query($sql);
                                  $i=1;
                                   while($row = $result->fetch_assoc()) { 
                               
                                      ?>
                                            <tr>
                                                <td width="20"><?php echo $row['created_date'];?></td>
                                                <td><?php echo $row['importer']; ?></td>
                                                <td><?php echo $row['borderpost']; ?></td>
                                                <td><?php echo $row['permitNo']; ?></td>
                                                <td><?php echo $row['hevicle']; ?></td>
                                                <td><?php echo $row['sad500']; ?></td>
                                                <td><?php echo $row['dairy']; ?></td>
												<td><?php echo $row['invoiceNo']; ?></td>
												<td><?php echo $row['qty']; ?></td>
												<td><?php echo $row['levy']; ?></td>
												<td><?php echo $row['amount']; ?></td>
												
                                            </tr>
											
											
									
                                          <?php  $i++;} 
										  
                                          ?>
                                          <tr>  
											<td>NAME.............................................. </td>
											<td></td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td> </td>
											<td>TOTAL </td>
											<td> </td>
											<td></td>
											<td></td>
											<td><?php echo $row['tot_amount']; ?> </td>
										
											
											</tr>
											
											
											
                                        </tbody>
										
                                    </table>
                                  </form>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('footer.php');?>


<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>