<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <?php include_once 'includes/head.php' ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

</head>
<body>

<?php include_once 'includes/nav.php' ?>

<div class="container" style="z-index: 2;">
    <h1 class="form-row justify-content-center">View Students</h1> <br>

    <div class="table-responsive">
        <table id="studentTable" class="table border">
            <thead  class="thead-dark">
            <tr class="">
                <th>Student id</th>
                <th>Student Name</th>
                <th>Student Image</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Username</th>
                <th>Course</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "select * from studentlogin;";
            $res = mysqli_query($conn, $sql);
            $rescheck = mysqli_num_rows($res);
            $sn=1;
            if($rescheck > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $fname = $rows['fname'];
                    $phone = $rows['phone'];
                    $email = $rows['email'];
                    $uname = $rows['uname'];
                    $course = $rows['course'];
                    $image_name = $rows['image_name'];
                    ?>
                    <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $fname; ?></td>
                        <td><?php
                            if ($image_name != "") {
                                ?>
                                <img src="../images/student/<?php echo $image_name; ?>" width="100px">
                                <?php
                            } else {
                                echo "<div class='error'>Image not added.</div>";
                            }

                            ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $uname; ?></td>
                        <td><?php echo $course; ?></td>
                        <?php
                }}
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'includes/footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#studentTable').DataTable();
    });
</script>

</body>
</html>
