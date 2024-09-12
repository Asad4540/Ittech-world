<?php
    if(isset($_POST['btn-backtohome'])){
        session_destroy();
        header('Location: https://curvemetrics.co');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <title>Access Denied</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .center-container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    
    .container {
      width: 600px;
      margin: 100px auto;
      text-align: center;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #d9534f;
    }
    p {
      color: #333;
    }
  </style>
</head>
<body style="background-image:url(../images/access-denied-body.png)">
    <div class="center-container">
        <div class="container">
            <h1>Access Denied</h1>
            <p>You do not have permission to access this page.</p>
            <p>Please contact the administrator for assistance.</p>
            <form action="access-denied.php" method="post">
                  <button name="btn-backtohome" type="submit" class="mt-3 btn btn-danger">Back to homepage!</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
