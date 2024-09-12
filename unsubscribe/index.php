<?php
  session_start();
  session_destroy();
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
                <h2 class="mt-2">We're sorry to see you go <i class="bi bi-emoji-frown-fill"></i></h2>
                <p class="text-success">Please share your reason for unsubscribing</p>
              </div>
              <form action="insert-unsubscribe.php" method="post">
                <div class="form-group">
                  <label for="firstName">First Name:</label>
                  <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                  <label for="lastName">Last Name:</label>
                  <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="reason">Reason for Unsubscribe:</label>
                  <select class="form-control" id="reason" name="reason" required>
                    <option value="">Select Reason</option>
                    <option value="No longer interested">No longer interested</option>
                    <option value="Receiving too many emails">Receiving too many emails</option>
                    <option value="Content not relevant">Content not relevant</option>
                    <option value="other">Other (please specify)</option>
                  </select>
                </div>
                <div class="form-group" id="otherReasonGroup" style="display: none;">
                  <label for="otherReason">Other Reason:</label>
                  <input type="text" class="form-control" id="otherReason">
                </div>
                <button type="submit" class="btn btn-danger w-100 mt-4">Unsubscribe</button>
              </form>
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

  <script>
    // Show/hide other reason input based on selection
    document.getElementById('reason').addEventListener('change', function() {
      var otherReasonGroup = document.getElementById('otherReasonGroup');
      if (this.value === 'other') {
        otherReasonGroup.style.display = 'block';
        $("#reason").removeAttr('name');
        $("#otherReason").attr('name', 'reason');
      } else {
        otherReasonGroup.style.display = 'none';
        $("#reason").attr('name', 'reason');
        $("#otherReason").removeAttr('name');
        
      }
    });
  </script>
</body>
</html>
