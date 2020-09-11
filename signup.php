<?php

$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/dbh-inc.php';

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mnumber = $_POST['mnumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_pwd'];
    $fwhere = $_POST['fwhere'];
    $ainterest = $_POST['ainterest'];
    //	$exists = false;
    $existSql = "SELECT * FROM signin WHERE email='$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        //        $exists = true;
        $showError = "Email ID Already Exists";
    } else {
        //        $exists = false;    
        if (($password == $cpassword)) {
            $password = md5($password);
            $sql = "INSERT INTO signin (fullname, email, password, mnumber, fwhere, ainterest) VALUES ('$fullname', '$email', '$password', '$mnumber', '$fwhere', '$ainterest')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords Do Not Match";
        }
    }
}


include "includes/header.php";
require "includes/navigation.php";

if ($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your Account Created. You can now Login.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}
if ($showError) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> ' . $showError . '
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}

?>


<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Register</h1>
            <p class="lead">Please Register to access privileged contents.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7">
                <div class="form-group">
                    <h2></h2>
                    <form py-2 action="signup.php" method="POST">

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
                            <select class="custom-select d-block w-100" id="fwhere" name="fwhere" required>
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
                        <div class="g-recaptcha" data-sitekey="6Lcj7soZAAAAAEa7Tlj27robmMZSFpJbvXLRoa_q"></div>
                        <br>
                        <div class="input-group">
                            <button type="submit" name="signup" class="btn btn-primary">
                                Sign Up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>

<script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
</script>

<?php
include "includes/footer.php";

?>