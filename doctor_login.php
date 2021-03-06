<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointment Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon for header.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script>
    if (localStorage.id > 0){
      window.location.replace('doctor_appt.php')
    }
  </script>
</head>

<body>


  <main id="main" class="appointment section-bg" >

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" >
        <div class="container" style='margin-top: 5%; margin-bottom: 6%;'>
          <br>
          <br>
          <br>
          <div class="section-title">
            <h2>Practitioner Login</h2>
          </div>
  
          <!-- <form action="forms/appointment.php" method="post" role="form" class="php-email-form"> -->
            <div class="form-row" >
              <div class="col-md-4 form-group">
              </div>
              <div class="col-md-4 form-group">
                <input type="number" name="id" style="text-align: center;"  class="form-control" id="pract_id" placeholder="Enter your ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validate"></div>
              </div>
              <div class="col-md-4 form-group">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 form-group">
              </div>
              <div class="col-md-4 form-group">
                <input type="password" name="password" style="text-align: center;" id="password" class="form-control"  placeholder="Enter your password" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              <div class="col-md-4 form-group">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 form-group">
              </div>
              <div class="col-md-4 form-group" style="text-align: center;">
                <button onclick="login()" class='btn btn-primary' style="width: 100%;">Login</button>
              </div>
              <div class="col-md-4 form-group">
              </div>
            </div>
            <!-- <div class="text-center"><button type="submit">Make an Appointment</button></div> -->
          <!-- </form> -->
  
        </div>
      </section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer =======
  <div id='footer'>
    
  </div> -->
  <!-- <img src="https://preview.redd.it/kq2om9sb6rz41.jpg?width=960&crop=smart&auto=webp&s=b1254a2f2eccc056f173a35b5a61e36617c03268" width="500" height="500"> -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!---Paypal API-->
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>

  <!-- login  -->

  <script>
    function login(){
        var id = document.getElementById("pract_id").value;
        var password = document.getElementById("password").value;
        var send_value = {
            practitionerid: id,
            password: password
        }

        var request = new XMLHttpRequest();  
        request.onreadystatechange = function () {
          if (this.status == 200 && this.readyState == 4) {
            var status = JSON.parse(this.responseText).code;
            if(status == 201){
              localStorage.setItem("id", id);
              window.location.href = "doctor_appt.php"

            }
          }
        };
      
      request.open("POST", "http://localhost:5001/practitioner_login")
      request.setRequestHeader("Content-type", "application/json");
      request.send(JSON.stringify(send_value))
    }

  </script>

</body>

</html>



