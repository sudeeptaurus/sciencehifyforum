<?php

session_start();

include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Subscriber Registration</h1>
      <p class="lead">Please enter your information and proceed to the next step so we can build your account.</p>
    </div>
  </div>

  <div class="row">


    <div class="col-md-12 order-md-1">

      <h3>Your Subscription is: <span id="plans"></span></h3>

      <form py-2 action="./php/checkout.php" method="POST">

        <div class="row form-group">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3 form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          <div class="invalid-feedback">
            Please enter your email address.
          </div>
        </div>

        <div class="mb-3 form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="addr_1" name="addr_1" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3 form-group">
          <label for="address">Address 2</label>
          <input type="text" class="form-control" id="addr_2" name="addr_2" placeholder="Landmark">
        </div>


        <div class="row form-group">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              <option value="">India</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option>Andhra Pradesh</option>
              <option>Andaman and Nicobar Islands</option>
              <option>Arunachal Pradesh</option>
              <option>Assam</option>
              <option>Bihar</option>
              <option>Chandigarh</option>
              <option>Chhattisgarh</option>
              <option>Dadra & Nagar Haveli and Daman & Diu</option>
              <option>Delhi</option>
              <option>Goa</option>
              <option>Gujarat</option>
              <option>Haryana</option>
              <option>Himachal Pradesh</option>
              <option>Jammu and Kashmir</option>
              <option>Jharkhand</option>
              <option>Karnataka</option>
              <option>Kerala</option>
              <option>Ladakh</option>
              <option>Lakshadweep</option>
              <option>Madhya Pradesh</option>
              <option>Maharashtra</option>
              <option>Manipur</option>
              <option>Meghalaya</option>
              <option>Mizoram</option>
              <option>Nagaland</option>
              <option>Odisha</option>
              <option>Punjab</option>
              <option>Puducherry</option>
              <option>Rajasthan</option>
              <option>Sikkim</option>
              <option>Tamil Nadu</option>
              <option>Telangana</option>
              <option>Tripura</option>
              <option>Uttar Pradesh</option>
              <option>Uttarakhand</option>
              <option>West Bengal</option>
            </select>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="mb-3 form-group">
          <label for="city">City</label>
          <input class="form-control" id="city" name="city" placeholder="Enter City" required>
          <div class="invalid-feedback">
            Please enter your mobile number.
          </div>
        </div>


        <div class="mb-3 form-group">
          <label for="mobile">Mobile</label>
          <input class="form-control" id="mphone" name="mphone" placeholder="Enter Mobile No." required>
          <div class="invalid-feedback">
            Please enter your City.
          </div>
        </div>

        <div class="input-group">
          <button type="submit" name="signup" class="btn btn-primary btn-lg btn-block">
            Continue to Checkout
          </button>
        </div>
      </form>





      <p></p>

      <h4 class="mb-3">Payment</h4>

      <div class="d-block my-3">
        <div class="custom-control custom-radio">
          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
          <label class="custom-control-label" for="credit">Payment Gateway(Gateway Charges Apply.)</label>
        </div>
        <br>
        <div class="custom-control custom-radio">
          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="debit">Bank Transfer</label>

          <!-- Button trigger modal -->

          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Provide Transaction Details
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Bank Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Beneficiary Name: Taurus Hard Soft Solutions Pvt Ltd
                    <br> Bank Name: Bank of Maharashtra
                    <br> Account No: 20004900327
                    <br> IFSC: MAHB0000403
                    <br> Branch: Brigade Road,Bangalore</p>
                  <br>
                  <form action="">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Enter the Transaction ID:</label>
                      <input type="text" class="form-control" id="recipient-bank">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Date</label>
                      <input type="text" class="form-control" id="chq-date">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="custom-control custom-radio">
          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
          <label class="custom-control-label" for="paypal">DD/Cheque(Subject to Realization)</label>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#staticBackdrop1">
            Provide DD/Cheque Details
          </button>

          <!-- Modal -->
          <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">DD/Cheque In Name of</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>In favour of: Taurus Hard Soft Solutions Pvt Ltd
                    <br> Bank Name: Bank of Maharashtra
                    <br> Account No: 20004900327
                    <br> IFSC: MAHB0000403
                    <br> Branch: Brigade Road,Bangalore</p>
                  <br>
                  <form action="">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">DD / Cheque Details</label>
                      <input type="text" class="form-control" id="recipient-dd">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Date</label>
                      <input type="text" class="form-control" id="dd-date">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Taurus Hard Soft Solutions 2020</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/main.js"></script>

<script>
  var url = decodeURI(window.location.search);
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
  var arr = queryString.split('&');
  var message = arr[0].split('=')[1] + " - ";
  message = message + arr[1].split('=')[1] + " Year - ";
  message = message + " Rs." + arr[2].split('=')[1];
  // console.log(message);
  $('#plans').text(message);
</script>



</body>

</html>