<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
    <script>
    // Show the modal when the page loads
    document.addEventListener("DOMContentLoaded", function () {
      var modal = new bootstrap.Modal(document.getElementById('exampleModalLong'));
      modal.show();
    });
  </script>
<style>
        .dropdown {
            position: relative;
            /* display: inline-block; */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100%;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content label {
            display: block;
            padding: 8px 12px;
            cursor: pointer;
        }

        .dropdown-content label:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
  
</head>
<body>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<form action="process_form.php" method="POST" enctype="multipart/form-data">
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div>
        <input type="text" class="form-control" placeholder="Name" name="name">
      </div>
    
      <div class="my-2">
        <select  id="" class='form-control' name="course">
            <option value="bca">BCA</option>
            <option value="bsc it">BSC it</option>
            <option value="msc it">Msc it</option>
            <option value="msc ict">Msc ict</option>
        </select>
      </div>
      <div class="my-2">
        <input type="text" class="form-control" placeholder="contact" name='contact'>
      </div>
      <div class="my-2">
        <input type="text" class="form-control" placeholder="email" name="email">
      </div>
      <div class="my-2">
        <input type="text" class="form-control" placeholder="SGPA" name="sgpa">
      </div>
      <div class="dropdown">
          <input type="text" class="form-control" placeholder="" value="Select Programming Languages" >
   
    <div class="dropdown-content">
        <label><input type="checkbox" name="programming_languages[]" value="Android"> Android</label>
        <label><input type="checkbox" name="programming_languages[]" value="DotNet Core"> DotNet Core</label>
        <label><input type="checkbox" name="programming_languages[]" value="IOS"> IOS</label>
        <label><input type="checkbox" name="programming_languages[]" value="Java"> Java</label>
        <label><input type="checkbox" name="programming_languages[]" value="MERN"> MERN</label>
        <label><input type="checkbox" name="programming_languages[]" value="Flutter"> Flutter</label>
        <label><input type="checkbox" name="programming_languages[]" value="DevOPS"> DevOPS</label>
        <label><input type="checkbox" name="programming_languages[]" value="Python"> Python</label>
        <label><input type="checkbox" name="programming_languages[]" value="PHP"> PHP</label>
        <label><input type="checkbox" name="programming_languages[]" value="AI/ML"> AI/ML</label>
        <label><input type="checkbox" name="programming_languages[]" value="React"> React</label>
        <label><input type="checkbox" name="programming_languages[]" value="Node"> Node</label>
        <label><input type="checkbox" name="programming_languages[]" value="Other"> Other</label>
    </div>
    
</div>

      <div class="my-2">
        <input type="file" class="form-control" placeholder="resume" name="resume">
      </div>
      <div class="p-3">
        <label for="">Any Backlog ?</label><br>
       Yes <input type="radio" name="back" value="yes"><br>
       No <input type="radio" name="back" value='no'>
    </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
    </form>
    <div>
    	<img id="img2" src="../images/feedicon.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 18vh;">
    </div>
    <img src="../images/feed.png" id="img1" style="position: fixed;">
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 20px; margin-left: 10px;">
    	<h1 class="form-row justify-content-center">FEED</h1> <br>
    	<div class="pre-scrollable" style="width: 750px; height: 400px; scroll-behavior: auto;">
         <div style="max-height: 90vh;">
             <div class="card" style="border: none;">
          <div class="card-body">
            <?php
                $sql = "select * from feed order by date desc, time desc;";
                $res = mysqli_query($conn, $sql);
                $rescheck = mysqli_num_rows($res);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <h5 class="card-title"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['user']; ?></h5>
                        <p class="card-text"><?php echo $row['message']; ?></p>
                        <!-- <a href="php/heart.php?heart=<?php echo $row['id']; ?>" class="btn" style="margin-left: -15px;margin-top: -15px;" name="heart"><i class="<?php echo $row['heart']; ?>" id="heart"></i>&nbsp;<small class="lead"><?php echo $row['likes']; ?></small></a> -->
                        <p><small><?php echo $row['date']; ?></small></p> <br>
                        <?php
                    }
                }
            ?>
          </div>
        </div>  
        </div>    
        </div> 
    	 
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script type="text/javascript" src="includes/jquery31.js"></script>
    <script>
      $(document).ready(function() {
         $("#add").removeClass("active");
        $("#cat").addClass("active");
        $("#heart").click(function() {
            $("#heart").toggleClass("far fa-heart");
            $("#heart").toggleClass("fas fa-heart");
        })
      });
    </script>
</body>
</html>