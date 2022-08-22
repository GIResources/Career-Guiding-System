<?php

error_reporting(0);

?>

<?php
require_once("includes/dbcon.php");
?>

<?php
     

if(isset($_POST["register-btn"])){

    $regnum = $_POST['regnum'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $department = $_POST['department'];
    $level = $_POST['level'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}
    
$mysql = "INSERT INTO register (id, reg_no, firstname, lastname, department, level, phoneNo, emailAddress, password) VALUES('', '{$regnum}', '{$firstname}', '{$lastname}', '{$department}', '{$level}', '{$phone}', '{$email}', '{$password}')";
    
   
            $run_mysql = mysqli_query($connection, $mysql);
                
                if($run_mysql){ 
                    
                $msg= "Your Registration is successful. Click here to Login!";

                }else{
                echo "Registration Attempt failed.";
                }  
    //}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Guidance Registry</title>
    <link rel="stylesheet" href="resources 1\resb\bootstrap.min.css">
    <link rel="stylesheet" href="registerapp.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                     <a class="nav-link text-white-50 disabled">Register</a>
                </div>
                <div class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <a class="btn btn-bd-reg d-lg-inline-block my-2 my-md-0 ms-md-3" href="login.php">Sign in</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container form-div">
        <h2 align="center">Enter Registration Details</h2>
        
        <form action=" " method="POST" enctype="multipart/form-data" >
            
            <div class="alert alert-success">
            <p align="center"> <a href="login.php" class="alert-link"> <?php echo $msg;?></a> </p>
            </div>
            
            <div class="container">
                <label class="form-label" for="regnum">Registration Number</label>
                <input class="form-control" type="text" placeholder="Tell us your Registration Number. Example 'NSP/CS/2022/0019' " id="regnum" name="regnum" required>
            </div>
            
            <div class="container">
                <label class="form-label" for="firstname">First Name</label>
                <input class="form-control" type="text" placeholder="Type your First Name. Example 'Christian' " id="firstname" name="firstname" required>
            </div>
            <div class="container">
                <label class="form-label" for="lastname">Last Name</label>
                <input class="form-control" type="text" placeholder="Type your Last Name. Example 'Akpan' " id="lastname" name="lastname" required>
            </div>

            <div class="container">
                <label class="form-label" for="department">Department</label>
                <input class="form-control" type="text" placeholder="Which Department do you belong? Example 'Computer Science' " id="department" name="department" required>
            </div>
            
            <div class="container">
                <label class="form-label" for="level">Level</label>
                <input class="form-control" type="text" placeholder="Tell us your Level e.g 300Level" id="level" name="level" required>
            </div>
            
            <div class="container">
                <label class="form-label" for="Phone No">Phone Number</label>
                <input class="form-control" type="text" placeholder="Type Your Phone Number. Example '07039485184' " id="phone" name="phone" required>
            </div>
            
            <div class="container">
                <label class="form-label" for="email">Email Address</label>
                <input class="form-control" type="email" placeholder="Type Your Email Address. Example 'example@gmail.com' " id="email" name="email" required>
            </div>
            
            <div class="container">
                <label for="password" class="form-label mt-2">Create Password</label>
                <input class="form-control" type="password" placeholder="Choose a Password. Example 'somethingsimple2remember' " id="password" name="password" required>
            </div>
           
            <div class="container mb-3">
                <input id="btn-custom" class="btn btn-primary mt-3 mb-3" type="submit" value="Register" name="register-btn">
            </div>
        </form>
    </div>

  
    <footer class="bd-footer py-1 mt-5 bg-gradient bg-light">
      
        <div class="container py-0">
            
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="index.html"
                        aria-label="Nassarawa State Polytechnic"><img width="100" height="100"
                            src="resources 2\logo.png" alt="Nassarawa State Polytechnic Logo"><span><b>Isa Mustapha Agwai I Polytechnic</b></span>
                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2"><img src="resources 2\copyright-solid.svg" width="15" height="15" class="me-2"
                                role="img">All
                            Right Reserved</li>
                        <!--<li class="mb-2">Geekie I-Solution Resources</li> -->
                        <li class="mb-2">Project Management and Allocation</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Academic</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.html">Home</a></li>
                        <li class="mb-2"><a href="">Courses</a></li>
                        <li class="mb-2"><a href="login.php">Login</a></li>
                        <li class="mb-2"><a href="/payments-portal">Payment-Portal</a></li>
                        <li class="mb-2"><a href="#" disabled>Result Checker</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Social</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://wwww.facebook.com/">Facebook</a></li>
                        <li class="mb-2"><a href="https://wwww.twitter.com/">Twitter</a></li>
                        <li class="mb-2"><a href="https://wwww.instagram.com/">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
     
    </footer>
   
    <script src="resources 1\resb (2)\bootstrap.min.js"></script>

</body>

</html>