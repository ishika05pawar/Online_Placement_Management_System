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

<div class="container">
    <h1 class="form-row justify-content-center" style="margin-left: 100px;">View Company</h1> <br>
    <form>
        <div class="table-responsive">
            <table id="companyTable" class="table border">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "select * from applied;";
                $res = mysqli_query($conn, $sql);
                $rescheck = mysqli_num_rows($res);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['company'] . '</td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        if ($.fn.dataTable.isDataTable('#companyTable')) {
            $('#companyTable').DataTable().destroy();
        }
        $('#companyTable').DataTable();
    });
</script>
</body>
</html>
