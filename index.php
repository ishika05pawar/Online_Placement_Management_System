<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMC | Welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/font.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <?php include_once 'includes/head.php' ?>
    <script>
  // Show the modal when the page loads
  document.addEventListener("DOMContentLoaded", function () {
    var modal = new bootstrap.Modal(document.getElementById('exampleModalLong'));
    modal.show();

    // Set a timer to hide the modal after 2 seconds
    setTimeout(function () {
      modal.hide();
    }, 3000);
  });
</script>
</head>
<body>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Welcome</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Placement refers to the process of connecting the selected person and the employer in order to establish an ongoing employment relationship. Applicant Tracking, Recruitment Marketing, Sourcing and Talent CRM software are powerful alone, but unstoppable when used together! STREAMLINE YOUR HIRING!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <img src="images/homeback1.png" id="img1">
    <div style="position: absolute; margin-left:56%; margin-top:175px;">
    <img src="images/task.svg" width="430px" style="z-index: 1;">
    </div>
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 160px; margin-left: 10px;">
    	<h1 style="margin-left: 30px; font-size: 64px;"><b> </b><br> PLACEMENT <br><b> MANAGEMENT </b><br> SYSTEM</h1> <br>
        <!-- <img src="images/logo1.png" width="550px"> -->
    </div>
    <div id="users" style="z-index: 1; position: relative; margin-top: 130vh;">
            <h1 align="center"><u>USERS</u></h1> <br> <br>
            <a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>
        <div class="container">
        <div class="card-group">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.svg" class="card-img-top" alt="..." style="width: 400px;">
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">Admin</a></h5>
              <p class="card-text"><small class="text-muted">Placement Officer</small></p>
            </div>
          </div>
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/student1.svg" class="card-img-top" alt="..." style="width: 410px; margin-top: 10px;"> <br> 
            <div class="card-body">
              <h2 class="card-title" align="center"><a href="login.php">User</a></h5>
              <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <div id="contact" style="z-index: 1; position: absolute; margin-left:2%; margin-top: 30vh;">
            <div class="form-row">
             <div class="form-group" style="margin-left:270px; margin-top: 200px;"> 
                <h1>Contact Us</h1>
                <p class="lead">&nbsp;<i class="fas fa-mobile"></i>&nbsp; (+91) 989 02 34 500</p>
                <p class="lead">&nbsp;<i class="fas fa-at"></i>&nbsp; admin@gmail.com</p>
              </div>
              <div class="form-group" >
              <img src="images/contact.svg" alt="..." style="width: 600px; margin-left: 30%; margin-top: -25%;">
              </div>
            </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>