<?php

include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container py-5">
  <div class="row">
    <div class="col-lg-6">
      <h2>Not a Member? SignUp</h2>
      <form py-2 action="php/registration.php" method="POST">

        <div class="form-group">
          <label for="inputEmail4">Full Name</label>
          <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" required />
        </div>

        <div class="form-group">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email" required />
        </div>

        <div class="form-group">
          <label for="inputMobile">Mobile Number</label>
          <input type="phone" class="form-control" id="mnumber" name="mnumber" placeholder="Mobile Number" required />
        </div>

        <div class="form-group">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required />
        </div>

        <div class="form-group">
          <label for="inputPassword4">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="Confirm Password" required />
        </div>


        <div class="form-group">
          <label for="state">How do you know about us?</label>
          <select class="custom-select d-block w-100" id="state" name="state" required>
            <option value="">Choose...</option>
            <option>Google & Other Search Engines</option>
            <option>Facebook</option>
            <option>Linkedin</option>
            <option>Instagram</option>
            <option>Twitter</option>
            <option>Direct Mailer</option>
            <option>Friends & Colleagues</option>
            <option>School/College</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="form-group">
          <label for="state">Select Your Area of Interest</label>
          <select class="custom-select d-block w-100" id="ainterest" name="ainterest" multiple required>
            <option value="">Choose...</option>
            <option>Astronomy</option>
            <option>Behavioral Sciences</option>
            <option>Biomedical Sciences</option>
            <option>Business & Management</option>
            <option>Chemistry</option>
            <option>Climate</option>
            <option>Computer Science</option>
            <option>Earth Sciences</option>
            <option>Economics</option>
            <option>Education & Language</option>
            <option>Energy</option>
            <option>Engineering</option>
            <option>Environmental Sciences</option>
            <option>Food Sciences & Nutrition</option>
            <option>Geography</option>
            <option>Law</option>
            <option>Life Sciences</option>
            <option>Materials</option>
            <option>Mathematics</option>
            <option>Medicine</option>
            <option>Philosophy</option>
            <option>Physics</option>
            <option>Popular Science</option>
            <option>Public Health</option>
            <option>Social Sciences</option>
            <option>Statistics</option>
            <option>Water</option>
            <option>Others</option>
          </select>
          <div class="invalid-feedback">
            Please provide a valid state.
          </div>
        </div>
        <div class="input-group">
          <button type="submit" name="signup" class="btn btn-primary">
            Sign Up
          </button>
        </div>
      </form>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-3">
      <h2>Login</h2>
      <form action="php/validation.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="password" />
        </div>
        <div class="input-group">
          <input type="submit" class="btn btn-primary" value="Login" name="" />
          <!-- <button type="submit" value="submit" class="btn btn-primary" name="login">Login</button> -->
        </div>
      </form>
    </div>
  </div>
</div>

<?php
include "includes/footer.php";

?>