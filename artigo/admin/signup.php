<?php
 session_start();
//Database Configuration File
include('includes/config.php');
if(isset($_POST['signup']))
  {
 
    $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
    if($_POST["password"]==$_POST["cpassword"])
   {
       $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $phone=$_POST['phnumber'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $options = ['cost' => 12];
    $hashedpass=password_hash($password, PASSWORD_BCRYPT, $options);
    $sql =mysqli_query($con,"insert into tblusers (FirstName,LastName,PhoneNumber,EmailId,DOB,Password) values('$fname','$lname','$phone','$email','$dob','$hashedpass')");
 if($sql)
{
echo "<script>alert('Registeration successfully');</script>";
}
else{    
echo "<script>alert('Something went wrong . Please try again.');</script>";
}
   }
   else
   {  
    echo "<script>alert('Passwords dont match');</script>";  
   } 
    

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- App title -->
        <title>Artigo</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="#" class="text-success">
                                            <span><h3>Artigo Signup</h3></span>
                                        </a>
                                    </h2>
                                    </div>
                                <div class="account-content" style="height: 597px">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                Firstname<input class="form-control" type="text" required="" name="firstname" placeholder="firstname" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                Lastname<input class="form-control" type="text" required="" name="lastname" placeholder="lastname" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                Phone Number<input class="form-control" type="number" required="" name="phnumber" placeholder="Number" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                DOB<input class="form-control" type="date" required="" name="dob" placeholder="DD/MM/YYYY" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                Email<input class="form-control" type="email" required="" name="email" placeholder="Email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                Password<input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                Confirm Password<input class="form-control" type="password" name="cpassword" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>



                     
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="signup">Signup</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->
 <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>