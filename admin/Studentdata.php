<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/addcomp.css"> -->
    <?php include_once 'includes/head.php' ?>

</head>
<body>

      <?php include_once 'includes/nav.php' ?>
    <div class="container">
      <h1 class="form-row justify-content-center" style="margin-left: 100px;">Student Data</h1> <br>
       <form>
     <!-- <img src="images/1.jpg"> -->
     <div class="table-responsive">
    <table class="table">
      <thead  class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Course</th>
          <th scope="col">Contact</th>
          <th scope="col">Email</th>
          <th scope="col">Sgpa</th>
          <th scope="col">Programming Languages</th>
          <th scope="col">Resume</th>
          <th scope="col">Backlog</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $sql = "select * from studentsdata";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            if($rescheck > 0) {
              while ($row = mysqli_fetch_assoc($res)) {
                  echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['course'].'</td>';
                    echo '<td>'.$row['contact'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['sgpa'].'</td>';
                    echo '<td>'.$row['programming_languages'].'</td>';
                    echo '<td><a href="/PMS-master_ishika/PMS-master/PMS-master/student/pdf/' . $row['resume'] . '" class="btn btn-primary btn-sm" target="_blank">Resume</a></td>';

                    echo '<td>'.$row['backlog'].'</td>';
                  echo '</tr>';
              }
            }
           ?>
      </tbody>
    </table>
    </div>

   </form>
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>