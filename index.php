<?php

    include('config.php');
    include('handleData.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export to excel file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h1>Export to excel file</h1>
            </div>
            <div class="card-body">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date of birth</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $user = new userController();
                        $result = $user->index();
                        if ($result) {
                            foreach($result as $row)
                            {
                                ?>
                                    <tr>
                                        <th>
                                            <?= $row['id'] ?>
                                        </th>
                                        <td>
                                            <?= $row['username'] ?>
                                        </td>
                                        <td>
                                            <?= $row['email'] ?>
                                        </td>
                                        <td>
                                            <?= date('d-m-Y', $row['date']) ?>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
                <div class="mt-3">
                    <button class="btn btn-primary">Export file</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>