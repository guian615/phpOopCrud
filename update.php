<?php
  include_once("header.php");
?>
<?php
// include function file
include_once("function.php");
//Object
$updatedata=new DB_con();
if(isset($_POST['update']))
{
// Get the userid
$userid=intval($_GET['id']);
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
//Function Calling
$sql=$updatedata->update($fname,$lname,$emailid,$contactno,$address,$userid);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>

<body>

<div class="container m-5 text-primary">

    <div class="row">
        <div class="col-md-12">
        <h3>UPDATE DATA</h3>
        <hr />
    </div>
</div>

<?php
// Get the userid
$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<div class="container mt-5 text-center mb-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px;">

<div class="row">
  <div class="col-sm">
  <img src="https://image.freepik.com/free-vector/flat-system-update-illustration_108061-430.jpg" alt="..." class="">
  </div>
  <div class="col-sm">
  <form action="" name="insertrecord" method="POST">
          <h2 class="text-primary mt-2 mb-4">Update Data</h2>
          <div class="row">

              <div class="input-group col-lg-12 mb-4">
                  <div class="input-group-prepend">
                          <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                              <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                          </span>
                  </div>
                      <input id="name" type="text" name="firstname" placeholder="Enter Name"  value="<?php echo htmlentities($row['FirstName']);?>"
                          class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
              </div>

              <div class="input-group col-lg-12 mb-4">
                  <div class="input-group-prepend">
                          <span class="input-group-text bg-dark text-light px-4 border-md border-right-0" required>
                              <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                          </span>
                  </div>
                      <input id="name" type="text" name="lastname" placeholder="Enter Last Name" value="<?php echo htmlentities($row['LastName']);?>"
                          class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
              </div>

              <div class="input-group col-lg-12 mb-4">
                  <div class="input-group-prepend">
                          <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                              <i class="fa fa-envelope text-primary" style=" font-size:25px;padding:10px;"></i>
                          </span>
                  </div>
                      <input id="name" type="text" name="emailid" placeholder="Enter Email Address" value="<?php echo htmlentities($row['EmailId']);?>"
                          class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
              </div>

             

              <div class="input-group col-lg-12 mb-4">
                  <div class="input-group-prepend">
                      <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                          <i class="fa fa-phone text-primary" style=" font-size:25px; padding:10px;"></i>
                      </span>
                  </div>
                      <input id="contact" type="text" name="contactno" placeholder="Contact Number" value="<?php echo htmlentities($row['ContactNumber']);?>"
                          class="form-control bg-dark text-light border-left-0 border-md" required maxlength="11" style="padding:10px">
                  </div>

                  <div class="input-group col-lg-12 mb-4">
                  <div class="input-group-prepend">
                      <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                          <i class="fa fa-map-marker text-primary" style=" font-size:25px; padding:10px;"></i>
                      </span>
                  </div>
                      <input id="address" type="text" name="address" placeholder=" Address" value="<?php echo htmlentities($row['Address']);?>"
                          class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px" >
              </div>
              
                  <div class="form-group col-lg-12 mx-auto mb-0">
                      <button class="btn btn-primary mb-2" name="update" style="border-radius:10px;">
                          <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
                      </button>
                  </div>
              </div>
          </div>
      </form>
  </div>
</div>
<?php } ?>
</body>
