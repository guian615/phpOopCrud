<body>

<?php
    include("header.php");
?>
<?php
// include database connection file
require_once'function.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
//Function Calling
$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address);
if($sql)
{
// Message for successfull insertion
// echo "<script>swal('Good job!', 'Successfully Added!', 'success');</script>";
echo "<script>alert('You Added Successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
?>

<div class="container mt-5 text-center mb-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:20px;">

  <div class="row">
    <div class="col-sm">
    <img src="https://image.freepik.com/free-vector/concept-online-exam-online-testing-questionnaire-form-online-education-survey-internet-quiz_269730-35.jpg" alt="..." class="">
    </div>
    <div class="col-sm">
    <form action="" name="insertrecord" method="POST">
            <h2 class="text-primary mt-2 mb-4">Insert Data</h2>
            <div class="row">

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                    </div>
                        <input id="name" type="text" name="firstname" placeholder="Enter Name"
                            class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
                </div>

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0" required>
                                <i class="fa fa-user text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                    </div>
                        <input id="name" type="text" name="lastname" placeholder="Enter Last Name"
                            class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
                </div>

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                            <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-primary" style=" font-size:25px;padding:10px;"></i>
                            </span>
                    </div>
                        <input id="name" type="text" name="emailid" placeholder="Enter Email Address"
                            class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px">
                </div>

               

                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                            <i class="fa fa-phone text-primary" style=" font-size:25px; padding:10px;"></i>
                        </span>
                    </div>
                        <input id="contact" type="text" name="contactno" placeholder="Contact Number"
                            class="form-control bg-dark text-light border-left-0 border-md" required maxlength="11" style="padding:10px">
                    </div>

                    <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-light px-4 border-md border-right-0">
                            <i class="fa fa-map-marker text-primary" style=" font-size:25px; padding:10px;"></i>
                        </span>
                    </div>
                        <input id="address" type="text" name="address" placeholder=" Address"
                            class="form-control bg-dark text-light border-left-0 border-md" required style="padding:10px" >
                </div>
              
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button class="btn btn-primary mb-2" name="insert" style="border-radius:10px;">
                            <h4><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</h4>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
  </div>
</div>
     
</body>
