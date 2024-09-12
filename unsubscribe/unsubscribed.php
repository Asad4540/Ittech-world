<?php
  session_start();  
  if(!isset($_SESSION['user_email'])){
    header("Location: access-denied.php");
    exit();
  }

  if(isset($_POST['btn-unsbscribe'])){
    session_destroy();
    header('Location: https://curvemetrics.co');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unsubscribe Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <style>
    /* Custom CSS */
    .center-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    
    .navbar {
      position: absolute !important;
    }

    .navbar-brand{
      color: #222222;
    }

    .navbar-brand h1 span{
      color: #106eea;
    }

    /* Media query for desktop screens */
    @media (min-width: 768px) {
      .card-body {
        padding: 60px 30px;
      }
    }

    /* Media query for mobile screens */
    @media (max-width: 767px) {
      .card-body {
        padding: 40px 20px;
      }

      .container-navbar-brand{
        padding: 0;
      }
    }

    /* Custom CSS for footer */
    .footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 20px 0;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
    }

    
  </style>
</head>
<body style="background-image: url(images/hero-bg.jpg);background-repeat: no-repeat;background-size:cover;">
<nav class="navbar navbar-light">
    <div class="container-fluid container-navbar-brand">
      <a class="navbar-brand" href="#">
        <h1>Curve-Metrics<span>.</span></h1>
      </a>
    </div>
  </nav>
  <div class="center-container">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <div class="img-fluid">
                    <img src="images/unsubscribed-successfully.png" alt="Un-subscribe Successfully" class="w-100">
                </div>
                <h2 class="mt-2">You're Unsubscribed</h2>
                <p class="mb-0">We're so sorry to lose you, but we totally understand.</p>
                <p>Did you unsubscribe by mistake? Don't worry! You can resubscribe anytime.</p>
                
                <form action="unsubscribed.php" method="post">
                  <button name="btn-unsbscribe" type="submit" class="mt-5 btn btn-danger">Got it!</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container text-center">
      <div> <span>&copy; Copyright. All rights reserved.</span> &nbsp;Designed by <a href="https://curvemetrics.co" target="_blank">Curve-Metrics</a></div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
