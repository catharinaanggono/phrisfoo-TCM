<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class='container' style='margin-left: 45%;margin-top: 15%;' id='paypal-button'></div>
    <div class='container text-center'><p>Do not reload this window. This payment window will expire in <span id="timer"></span></p></div>
    <script>
      var dt = localStorage.dt;
      var countDownDate = new Date(dt);
    // Set the date we're counting down to
    countDownDate.setMinutes(countDownDate.getMinutes() + 10)

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timer").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.body.innerHTML = "This payment window has expired. " + '<a href="./appointment.php">Return to booking page</a>';
  }
}, 1000);
    </script>
  </body>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>


<!--Paypal-->
<script>
  var request = new XMLHttpRequest()
      request.onreadystatechange = function(){
        if (this.status == 400){
          localStorage.someoneBooked = 1
          window.location.replace("appointment.php")
        }
        
      }
      request.open("POST", "http://localhost:5003/booking_pending", true)
      request.setRequestHeader("Content-type", "application/json");
      request.send(JSON.stringify({'practitionerid': localStorage.practitionerid, 'date_and_time': localStorage.date_and_time}))
    paypal.Button.render({
  
        env: 'sandbox', // sandbox | production
  
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
        client: {
            sandbox: "AY7L4S6UL93bVCgdogD5WxcUb20dELxkr8PPMklVGc1s1tGxm7IH8Z3wBCKIX8zs_vGhYDZGFmQ7gjrO"
            // production: 'AdfIVpK5DykWsVuPy9q600QOSUjrknP5h20lYCUVVtzRt0wLUdMSkndUwTmahVdP8MGq9Wbw7s3jX0Ly'
        },
  
        // Show the buyer a 'Pay Now' button in the checkout flow
        commit: true,
  
        // payment() is called when the button is clicked
        payment: function (data, actions) {
            // Make a call to the REST api to create the payment
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: {total: '2', currency: 'SGD'}
                        }
                    ]
                }
            });
          
        },
  
    onAuthorize: function (data, actions) {
      // Get the payment details
      return actions.payment.get()
      .then(function (paymentDetails) {
        // Show a confirmation using the details from paymentDetails
        // Execute the payment
        return actions.payment.execute()
          .then(function () {
            
            var name = localStorage.name
            var nric = localStorage.nric
            var phone = localStorage.phone
            var practitionerid = localStorage.practitionerid
            var email = localStorage.email
            var past_records = localStorage.past_records
            var date_and_time = localStorage.date_and_time
            var problem = localStorage.problem
            
            var send_value = {
              data: {
                name: name,
                nric: nric,
                phone: phone,
                practitionerid: practitionerid,
                email: email,
                past_records: past_records,
                date_and_time: date_and_time,
                problem: problem
              }
            }
            // Show a success page to the buyer
            document.body.innerHTML = '<div class="text-center m-5"><div class="spinner-border m-5" role="status"><span class="sr-only">Loading...</span></div><h5>Please wait while we redirect you to the confirmation page...</h5></div>';
            var request = new XMLHttpRequest()
            request.onreadystatechange = function(){
              if(request.status == 200 && request.readyState == 4){
                var response = JSON.parse(this.responseText)
                if (response.code == 201){
                  window.location.replace('booking_confirmed.php')
                }
                else{
                  window.location.replace('booking_failed.php')
                }
              }
            }
            request.open("POST", "http://localhost:5100/place_booking")
            request.setRequestHeader("Content-type", "application/json");
            request.send(JSON.stringify(send_value))
            });
        });
    },
    onCancel: function (data, actions) {
      // Show a cancel page, or return to cart
      // actions.redirect();
      alert("Transaction cancelled!");
    },
    onError: function(err) {
      alert("Error!");
    }
    
  }, '#paypal-button');


  
  </script>
</html>