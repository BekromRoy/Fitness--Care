<?php
          // DATABASE CONNECTION
include 'dbconn.php';
session_start();

if(isset($_SESSION['username'])) {

  header('location:dashboard.php');

       }else{

if(isset($_POST['reg_submit'])){

          // TAKING INPUT FROM USER USING FORM
     $name =  mysqli_real_escape_string($con,$_POST['reg_name']);
     $email =  mysqli_real_escape_string($con,$_POST['reg_email']);
     $mobile =  mysqli_real_escape_string($con,$_POST['reg_mobile']);
     $password =  mysqli_real_escape_string($con,$_POST['reg_pass']);
     $cpassword =  mysqli_real_escape_string($con,$_POST['reg_cpass']);
         
                    // PASSWORD HASHING
         $pass = password_hash($password, PASSWORD_BCRYPT);
         $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

                    // TOKEN GENETARING
         $token = bin2hex(random_bytes(15));


          //QUERY FOR CHECKING EXISTING EMAIL IN DATABASE
     $emailqury = " select * from fitness_table where email='$email' ";
     $query = mysqli_query($con,$emailqury);

     $emailcount = mysqli_num_rows($query);
     if($emailcount>0){

                    $_SESSION['warning'] = "Email already exists.";
                   
     }else{
              
                 if($password === $cpassword){

                    // QUERY FOR INSERT DATA
                    $insert_query = "insert into fitness_table( name, email, mobile, password, conf_pass, token, status) values('$name','$email','$mobile','$pass','$cpass','$token','inactive')";
                    
                    $iquery = mysqli_query($con,$insert_query);
          
                    if($iquery){
          
                    // SENDING EMAIL FOR ACCOUNT ACTIVATION
                    // $template_file ="ac.html";
                    $subject = "Account Activation - FITNESS CARE";
//                     $body = "<html> 
//     <head> 
//         <title>Welcome to Fitness Care</title> 
//     </head> 
//     <body> 
//         <h1>Welcome to Fitness Care </h1> 
// <h3>Hello, $name</h3>
//         <h4>Thanks you for joining with us!</h4>
//         <P> This is email from FITNESS CARE for Account Activation. Click on link to activate your account.</p> <br><br>
//         <p> <a href='http://localhost/fitness/active_ac.php?token=$token'>Active Account</a> </P>

//         <br><br>
//     </body> 
//     </html>"; 
 
// Set content-type header for sending HTML email 
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers = "Content-type:text/html; charset=UTF-8" . "\r\n";
                   $body = "Hello $name ,This is email from FITNESS CARE for Account Activation. Click on link to activate your account    http://localhost/fitness/active_ac.php?token=$token";
                    // $body = file_get_contents($template_file);
                    $headers = "From: samar80fk@gmail.com"; 
                  //  $headers = "MIME-Version: 1.0 \r\n"; 
                  //  $headers = "Content-type: text/html; charset=IOS-8859-1 \r\n"; 
                   
              if(mail($email, $subject, $body, $headers)){
                  $_SESSION['msg'] = "Acativation link has been sent to your email $email ";
              
                              header('location:login.php');
                    }else{
                       $_SESSION['warning'] = "Email sending failed...";
                              // echo "Email sending failed...";
                  }
            }else{
                               
                     $_SESSION['warning'] = " Data Not inserted.";
                            //  echo "Data Not inserted.";
                       }
                 }else { 
                    $_SESSION['warning'] = "Password not matching.";
                         //    echo "Password not matching.";
                         }
              }
     }

    }

?>


<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
          
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

          <title>Singup</title>
          <style>
                    body{
                              height: 100vh;
                              background-color: #0a71f8 !important;
                              display: flex;
                              flex-direction: column;
                              align-items: center;
                              justify-content: center;
                    }
                    .card{
                              overflow: hidden;
                              border: 0 !important;
                              border-radius: 30px !important;
                              box-shadow: 0 1rem 3rem 0 rgb(12, 12, 12);
                    }
           .img-left{
                    width: 45%;
                    background:url('gym.jpg') center;
                    background-size: cover;
                    }
          .card-body{
                    padding: 1rem;
          }
          .title{
                    margin-bottom: 0.5rem;
          }
          .form-input{
                    position: relative;

          }
          .form-input input{
                    width: 100%; height: 45px;
                    padding-left: 40px; margin-bottom: 10px;
                    box-sizing: border-box; 
                    box-shadow: 0 0.2rem 0.4rem 0 rgb(12, 12, 12);
                    border: 1px solid black; border-radius: 50px;
                    outline: none; background: transparent;
          }
                    .form-input span{
                              position: absolute; top: 15px;
                              padding-left: 15px; 
                              color: blue;
                    }
          .form-input input::placeholder{
                    color: black;
                    padding-left: 0px;
                    }
          .form-input input:focus, .form-input input:valid{
                    border: 2px solid #007bff;
          }
          .form-input input:focus::placeholder{
                    color: #454b69;
          }
          .form.box button[type="submit"]{
                    margin-top: 100px; border: none;
                    cursor: pointer;
                    border-radius: 50px;
                    background-color: #007bff;
                    color: #fff;
                    font-size: 90%;
                    font-weight: bold;
                    letter-spacing: .1rem;
                    transition: 0.5s;
                    padding: 12px;
          }
          .forget-link, .register-link{
                    color: #007bff;
                    font-weight: bold;
          }
          .btn1{
              border: none; outline: none; width: 100%;
              background-color: rgb(255, 106, 0);
              color: aliceblue;
              border-radius: 20px;
              font-weight: bold;
    }
    .btn1:hover{
              background-color:rgb(2, 140, 253);
              color: rgb(255, 255, 255);
              
    }
    a{
      text-decoration: none;
    }

    #sesn{
      text-align:center;
      width: 100%; height:auto;
      /* background-color:lightgreen;
      border-radius:25px; */
      font-weight:bold;
      color :red;
      padding: 15px 20px 10px 15px;
    }
          </style>
</head>

<body>
   <div class="container">

     <div class="row px-3">
        <div class="col-lg-12 col-xl-9 card flex-row mx-auto px-0">
          <div class="img-left d-none d-md-flex"></div>

        <div class="card-body"> 
           <h4 class="title text-center mt-4" style="color:#007bff;">Create a free account.</h4>
           <div>
        <p id="sesn">
        <?php
           if(isset($_SESSION['warning'])) {
            echo $_SESSION['warning'];
            }
          ?>
        </p>
      </div>
           <!-- FORM TAG START -->
      <form class="form-box px-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="on">
            <!-- For name input -->
        <div class="form-input">
          <span><i class="fa fa-user-circle"></i></span>
            <input type="text" name="reg_name" id="" placeholder="Enter full name here" tabindex="10" autofocus required>
                    </div>
                    <!-- For email input -->
        <div class="form-input">
          <span><i class="fa fa-envelope-o"></i></span>
            <input type="email" name="reg_email" id="" placeholder="Enter email here"  required>
                    </div>
                   <!-- For mobile input -->
        <div class="form-input">
          <span><i class="fa fa-phone"></i></span>
            <input type="text" name="reg_mobile" id="" placeholder="Enter mobile number" required>
                    </div>
                    <!-- For password input -->
        <div class="form-input">
          <span><i class="fa fa-key"></i></span>
            <input type="password" name="reg_pass" id="" placeholder="Creare password more than 6 characters" required>
                    </div>
                    <!-- For comfirm password input -->
        <div class="form-input">
          <span><i class="fa fa-key"></i></span>
            <input type="password" name="reg_cpass" id="" placeholder="Enter comfirm password" required>
                    </div>
                    <!-- For submit button -->
        <div class="mb-3">
            <button type="submit" name="reg_submit" class="btn btn-primary text-center btn1"> Create</button>
                    </div>

                    </form>
             </div>
          </div>
      </div>
    </div>
    
      <!-- jQuery program -->
      <script>
          $(document).ready(function(){
         $("input").focus(function(){
          $(this).css("background-color", "yellow");
        });
           $("input").blur(function(){
          $(this).css("background-color", "lightgreen");
        });
          });
           </script>
</body>

</html>

