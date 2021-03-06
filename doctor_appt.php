<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    option:disabled{
      background-color: lightgrey;
    }
    
  </style>
  <script>

    if (!localStorage.id || localStorage.id == 0){
        window.location.replace("doctor_login.php")
    }

  </script>
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

  <!-- date time -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Medilab - v2.1.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">phrisctcm@example.com</a>
        <i class="icofont-phone"></i> +65 1234 1234
        <i class="icofont-google-map"></i> 80 Stamford Rd, SG
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">PhrisFoo TCM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#doctors">Practitioners</a></li>
          <li><a href="index.php#services">Treatments</a></li>
          <li><a href="index.php#location">Locate Us</a></li>
          <li> <button onclick='logout()' class='btn btn-primary ml-2'> Logout </button></li>

        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" style='margin-top: 100px;'>
          <br>
          <br>
          <br>
          <br>
          <div class="section-title">
            <h2>Practitioner's Appointment</h2>
            <p>ESD Team B Premier TCM Centres</p>

            <p>Please select your unavailable time slot(s) for the chosen date. Thank you</p>
          </div>
  
          <!-- <form action="forms/appointment.php" method="post" role="form" class="php-email-form"> -->
            <div class="form-row">
              <div class="col-md-4 form-group">
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="date" onchange="check()" class="form-control datepicker" id='date'  autocomplete="off" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              
              <div class="col-md-4 form-group">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 form-group">
              </div>
              <div class="col-md-4 form-group">
                <select name="time" id="time_available" class="form-control" multiple>
                </select>
              </div>
              <div class="col-md-4 form-group">
              </div>
            </div>
            <!-- <div class="text-center"><button type="submit">Make an Appointment</button></div> -->
          <!-- </form> -->

          <div class="form-row">
            <div class="col-md-4 form-group">
            </div>
            <div class="col-md-4 form-group" style="text-align: center;">
              <button onclick="try_this()" class='btn btn-primary' style="width: 100%;">Submit</button>
            </div>
            <div class="col-md-4 form-group">
            </div>
          </div>

          <div class='row'>
            <div class="col-md-4 form-group">
            </div>
            <div class="col-md-4 form-group" style="text-align: center;">
              <div id='scheduleResult'>

              </div>
            </div>
            <div class="col-md-4 form-group">
            </div>
          </div>
        </div>
      </section><!-- End Appointment Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <div id='footer'>

  </div>

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

  <!-- NAVBAR -->
  <script>
    // to make home button not active
    var nav_sections = $('section');
    var main_nav = $('.nav-menu, .mobile-nav');

    $(window).on('scroll', function() {
      var cur_pos = $(this).scrollTop() + 200;

      nav_sections.each(function() {
        var top = $(this).offset().top,
          bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
          if (cur_pos <= bottom) {
            main_nav.find('li').removeClass('active');
          }
        }
      });
    });

    $(function(){
      $("#footer").load("footer.php");
    });
  </script>

  <!-- Time Form -->
  <script>

      function getdate(){
        var d = document.getElementById("date").value;
        var d_convert = formatDate(d);
        return d_convert;
      }

      var list = []

      function getpractid(){
        list = [];
        var pract_id = localStorage.id

        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

              var success = JSON.parse(this.responseText);
              for (item of success.data.practitioner){
                list.push(item)
              }
              check();        

            } 
        };

        request.open("GET", "http://localhost:5002/unavailable-schedule/" + pract_id, true);
        request.send();
      }

      // function to check if timing is avaialable
      function check(){
        for (timing of timings){
          document.getElementById(timing).removeAttribute('disabled')
        }
        var selected_date = getdate();
        var unavailable_time_list = [];
        for(record of list){
          let time  = record.date_and_time.slice(17,22);
          let date = formatDate(record.date_and_time.slice(4,16));

          if(date == selected_date){
            unavailable_time_list.push(time);
          }
        }

        for (unavailable_time of unavailable_time_list){
          document.getElementById(unavailable_time).setAttribute('disabled', 'disabled')
        }
      }

    function logout(){
      localStorage.id = 0
      window.location.replace("doctor_appt.php")
    }

    function try_this(){
      var dropdown = document.getElementById('time_available')
      var options = dropdown.getElementsByTagName('option')
      var return_array = []
      for (let option in options){
        
        if (options[option].selected){
          return_array.push(options[option].id)
        }
      }
      unavailable_schedule(return_array)
    }
    var timings = ["08:00", "08:30", "09:00", "09:30", "10:00", "10:30", "11:00", "11:30", "12:00", "12:30", "13:00", "13:30", "14:00", "14:30", "15:00", "15:30", "16:00", "16:30", "17:00", "17:30", "18:00", "18:30", "19:00", "19:30", "20:00", "20:30", "21:00", "21:30"];
    var optionsAvailable = "";
    var i;
    text = "";
    for (i = 0; i < timings.length; i++) {
      text += "<option id='" + timings[i] + "'>" + timings[i] + " </option>" + "<br>";
    }
    document.getElementById("time_available").innerHTML = text;
  </script>

  <script>
    function unavailable_schedule(return_array){
      var id = localStorage.id;
      var date = formatDate(document.getElementById("date").value);
      var time = document.getElementById("time_available").value + ":00";
      if (date == "NaN-NaN-NaN" || time == ":00"){
        document.getElementById('scheduleResult').style.color = 'red'
        document.getElementById('scheduleResult').innerHTML = "Please select both the date and time of your unavailability!"
        return 
      }
      document.getElementById('scheduleResult').style.color = ''
      for (timing of return_array){
        var send_value = {
            practitionerid: id,
            date_and_time: date + " " + timing,
        }


        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.status == 201 && this.readyState == 4){
                var response = this.responseText;
                if (return_array.length == 1){
                  document.getElementById('scheduleResult').innerText = `Your status update for ${date} ${time} is successful!`;
                }
                else if (return_array.length > 1){
                  document.getElementById('scheduleResult').innerText = `Your status update for ${date} ${return_array[0]}:00 - ${return_array[return_array.length - 1]}:00 is successful!`;
                }
                getpractid();
                document.getElementById('time_available').value = '';
            }
        };
        request.open("POST", "http://localhost:5002/unavailable-schedule")
        request.setRequestHeader("Content-type", "application/json");
        request.send(JSON.stringify(send_value))
      }
    }

    function formatDate(date) {
      var d = new Date(date),
          month = '' + (d.getMonth() + 1),
          day = '' + d.getDate(),
          year = d.getFullYear();

      if (month.length < 2) 
          month = '0' + month;
      if (day.length < 2) 
          day = '0' + day;

      return [year, month, day].join('-');
    }
    getpractid();
  </script>

  <script>
  var date = new Date();
  date.setDate(date.getDate() +1);
  $('#date').datepicker({ 
        startDate: date
      });
  </script>

</body>

</html>
