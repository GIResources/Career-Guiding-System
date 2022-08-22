<?php

//Connecting to database///
error_reporting();

require_once("includes/dbcon.php");


?>

<?php
    
$date = date('Y');

?>

<?php

//Applicant Login begins here....!

    if(isset($_POST['signin-btn'])){
        
        $loginregnum = $_POST['regnum'];
        $loginpass = $_POST['password'];
        
        //Checking for blank fields///
        
        if(empty($loginregnum || $loginpass)){
            echo "All fields required";
        }else{
            /// Binds the Login details to the session variables from the signup table
            $query = " SELECT * FROM register WHERE reg_no = '{$loginregnum}' AND password = '{$loginpass}' ";
            $run_query = mysqli_query($connection, $query);
            
            
            ///Testing to see if the user is present////
            if($result = $run_query) {
           
            if(mysqli_num_rows($run_query) == 1){
                                
                  
                 session_start();
                ///To fetch back user details from the database///
                
                while($result = mysqli_fetch_assoc($run_query)){
                /// Using associative arrays to fetch individuals field as variables////
                    $user_id = $result['id'];
                    
                    //Storing the session id ///
                    
                    $_SESSION['user'] = $user_id;
                    
                    ///redirecting to the profile page if the login was successfu///
                    
                    header("location: dashboard/");
                    
                }
            }
        }
    }
}

    //Applicant Login ends here....!
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Christian Akpan">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Log In</title>
    <link rel="stylesheet" href="resources 1\resb\bootstrap.min.css">
    <link rel="stylesheet" href="loginapp.css">
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
                     <a class="nav-link text-white-50 disabled">Sign in</a>
                </div>
                <div class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <a class="btn btn-bd-reg d-lg-inline-block my-2 my-md-0 ms-md-3" href="register.php">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container form-div">
        <h2 class="">Enter Sign-in Details</h2>
        <form action=" " method="POST" enctype="multipart/form-data" >

            <div class="container">
                <label class="form-label" for="regnum">Registration Number</label>
                <input class="form-control" type="text" placeholder="Enter your Registration Number" id="regnum"
                    name="regnum" required>
            </div>

            <div class="container">
                <label for="password" class="form-label mt-2">Password</label>
                <input class="form-control" type="password" placeholder="Enter Password" id="password" name="password"
                    required>
            </div>

            <div class="container mb-3">
                <input type="submit" id="btn-custom" class="btn btn-primary mt-3 mb-3" name="signin-btn" value="Sign-in" >
            </div>
        </form>
    </div>

    <footer class="bd-footer py-1 mt-5 bg-gradient bg-light">
        <div class="container py-0">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="index.html"
                        aria-label="Nassarawa State Polytechnic"><img width="100" height="100"
                            src="resources 2\logo.png" alt="Nassarawa State Polytechnic Logo"><span><b>Nassarawa State
                                Polytechnic</b></span>
                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2"><img src="resources 2\copyright-solid.svg" width="15" height="15" class="me-2"
                                role="img">All
                            Right Reserved</li>
                        <!--<li class="mb-2">Geekie I-Solution Resources</li>-->
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