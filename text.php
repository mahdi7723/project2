<?php
    require_once 'engine/db.php';
    $sql = "SELECT * FROM users,comments WHERE users.id=comments.user_id";

    $result = mysqli_query($db, $sql);
    $record_set = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($record_set, $row);
    }
    mysqli_free_result($result);
                        
    mysqli_close($db);
    echo json_encode($record_set);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کامنت</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-secondary">
    <script src="bootstrap.min.js"></script>
    <div class="container border border-5 rounded mt-5 p-2 bg-light">
        <div class="row justify-content-center">
          <div class="panel-heading display-6">Submit Your Comments</div>
            <div class="panel-body">
                <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <textarea name="subject" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">posted</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>