<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/login.css"> -->
    <?php include_once 'includes/head.php' ?>
    <style>
        #loginnav {
            border-color: black;
            color: black;
            transition: 0.5s ease;
        }
        #loginnav:hover {
            border-color: black;
            background-color: black;
            color: white;
            transition: 0.5s ease;
        }
    </style>
</head>
<body>
    <?php 
            include_once 'includes/db.inc.php';
            if (isset($_POST['signup'])) {
                $uname = $_POST['username'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['mailid'];
                $checkEmailQuery = "SELECT * FROM studentlogin WHERE email=?";
                $stmt = mysqli_prepare($conn, $checkEmailQuery);
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $phone = $_POST['phone'];
                $pwd1 = $_POST['pwd1'];
                $pwd2 = $_POST['pwd2'];
                $encpwd1=md5($pwd1);
                 $encpwd2=md5($pwd2);
                $secque = $_POST['secque'];
                $secans = $_POST['secans'];
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    // Email already exists, show an alert message
                    ?>
                    <script>
                        alert('Email already exists. Please use a different email address.');
                        window.location.href = 'register.php';
                    </script>
                    <?php
                    exit();
                }
            
                 if (isset($_FILES['image']['name']))
                {
                $image_name=$_FILES['image']['name'];
                if ($image_name!="") 
                {
                    @$ext=end(explode('.', $image_name));
                    $image_name="student_name_".rand(0000,9999).".".$ext;
                    $src=$_FILES['image']['tmp_name'];
                    $dst="./images/student/".$image_name;
                    $upload=move_uploaded_file($src, $dst);
                    if ($upload==false)
                     {
                        $_SESSION['upload']="<div class='error'>faield to uploade</div>";
                        header('location:register.php');
                        die();
                    }
                }
                
    }
            else
            {
                $image_name ="";
            }
                if ($pwd1 == $pwd2) {
                   
                    $sql = "insert into studentlogin(uname, pwd, fname, lname, email, phone, secque, secans,image_name) values('$uname', '$encpwd1', '$fname', '$lname', '$email', '$phone', '$secque', '$secans','$image_name');";
                    mysqli_query($conn, $sql);
                   
                    ?>           
                <img src="images/success2.png" id="img1" style="position: fixed; margin-top: 140px;" width="500px">
                    <?php include_once 'includes/nav.php' ?>
                <div class="container" style="margin-top: 130px; margin-left: 270px;">
                    <h1 align="center" style="margin-left: 60px;">SignUp Successful!</h1> <br>
                    <div class="alert alert-success" role="alert" style="width: 600px; margin-left: 300px;">
                      <h4 class="alert-heading">Well done!</h4>
                      <p>You have successfully registered your account!</p>
                      <hr>
                      <p class="mb-0"><b>Login</b> to explore more.</p>
                    </div>
                </div>
                    <?php
                } else {
            ?>
        <img src="images/404b.png" id="img1" style="position: fixed; margin-top: 140px;" width="500px">
                    <?php include_once 'includes/nav.php' ?>
                <div class="container" style="margin-top: 130px; margin-left: 270px;">
                    <h1 align="center" style="margin-left: 60px;">SignUp Faied!</h1> <br>
                    <div class="alert alert-danger" role="alert" style="width: 600px; margin-left: 300px;">
                      <h4 class="alert-heading">Try Again!</h4>
                      <p>There was an error, please fill the fields correctly and signup!</p>
                      <hr>
                      <a href="register.php" class="alert-link"><b>Get back to register</a>
                    </div>
                </div>
                <?php
            }
            } 
        ?>

    <?php include_once 'includes/footer.php' ?>
</body>
</html>