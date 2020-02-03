<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php date_default_timezone_set('Africa/Johannesburg');
$current_date = date('Y-m-d');?>
 <?php
 include('connect.php');
if(isset($_POST["btn_submit"]))
{
  extract($_POST);

  if($_FILES['image']['name']!=''){
      $file_name = $_FILES['image']['name'];
      $file_type = $_FILES['image']['type'];
      $file_size = $_FILES['image']['size'];
      $file_tem_loc = $_FILES['image']['tmp_name'];
      $file_store = "uploadImage/Profile/".$file_name;

      if (move_uploaded_file($file_tem_loc, $file_store)) {
        echo "file uploaded successfully";
      }
  }
  else{
    $file_name=$_POST['old_image'];
  } 
      $folder = "uploadImage/Profile/";

      if (is_dir($folder)) 
      {
         if ($open = opendir($folder))

          while (($image=readdir($open)) !=false) {
              
              if($image=='.'|| $image=="..") continue;

              echo '<img src="uploadImage/Profile/'.$image.'" width="150" height="150">';
          }

          closedir($open);
        } 

         if($_POST['password']!='')
            {
             function createSalt()
             {
               return '2123293dsj2hu2nikhiljdsd';
             }
         $passw = hash('sha256', $_POST['val-password']);
         $salt = createSalt();
         $password = hash('sha256', $salt . $passw);   
         
          }
           else
      {
         $password=$_POST['old_pass'];
      }
  //UPDATE `admin` SET `id`=[value-1],`username`=[value-2],`email`=[value-3],`password`=[value-4],`fname`=[value-5],`lname`=[value-6],`gender`=[value-7],`dob`=[value-8],`contact`=[value-9],`address`=[value-10],`image`=[value-11],`created_on`=[value-12] WHERE 1
   $q1="UPDATE `admin` SET `fname`='$fname',`lname`='$lname',`email`='$email',`password`='$password',`gender`='$gender',`dob`='$dob',`contact`='$contact' ,`address`='$address' ,`image`='".$file_name."', `updated_on`= CURDATE() WHERE `id`='".$_GET['id']."'";
  //$query1=$conn->query($q1);
//echo "<pre>";print_r($q1); exit;
    if ($conn->query($q1) === TRUE) {
   
      $_SESSION['success']='Record Successfully Updated';
      ?>
<script type="text/javascript">
window.location="view_admin.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_admin.php";
</script>
<?php
}
}

?>

<?php
$que="select * from admin where id='".$_GET["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    //print_r($row);
    extract($row);
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$address = $row['address'];
$gender = $row['gender'];
$contact = $row['contact'];
$dob = $row['dob'];
$image = $row['image'];
$updated_on = $row['updated_on'];
}

?> 
<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->     
                                
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  method="post"  enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">First name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="fname" value="<?php echo $fname; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Last name <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="lname" value="<?php echo $lname; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $email ;?>" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Password<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                                                <input type="hidden" name="old_pass" value="<?php echo $password;?>">
                                            </div>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Repeat Password<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" onkeyup='check();'>
                                            </div><br>
                                            <div><span id="message" ></span></div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Gender<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="gender" required="">
                                                    <option value="">Please select</option>
                                                    <option value="Male" <?php if($gender=='Male'){ echo "Selected";}?>>Male</option>
                                                    <option value="Female" <?php if($gender=='Female'){ echo "Selected";}?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">Contact<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="contact" value="<?php echo $contact; ?>"minlength="10" maxlength="10" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Birthdate<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="val-currency" name="dob" value="<?php echo $dob; ?>" required="">`
                                            </div>
                                        </div>

                                        
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Address<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-digits" name="address" value="<?php echo $address; ?>" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Image<span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                
                                                <img src="uploadImage/Profile/<?php echo $image; ?>" style="width: 200px;height: 200px;"><br>
<input type="file" class="form-control" name="image">
<input type="hidden" value="<?php echo $image;?>"  name="old_image">
                                            </div>
                                          </div>

                                        
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>

                                        
                <!-- /# row -->


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
         
</body>

</html>
<?php include('footer.php');?>
<script>
  var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'NOT Matching';
  }
}
</script>