<?php

$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../includes/dbh-inc.php';

    // $subscription = $_POST['plans'];
    // echo $subscription;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $addr_1 = $_POST['addr_1'];
    $addr_2 = $_POST['addr_2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $mphone = $_POST['mphone'];
    $paymentMethod = $_POST['paymentMethod'];
    $recipient_bank = $_POST['recipient_bank'];
    $chq_date = $_POST['chq_date'];
    $recipient_dd = $_POST['recipient_dd'];
    $dd_date = $_POST['dd_date'];


    $existSql = "SELECT * FROM subsriber WHERE email='$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    // echo $numExistRows;
    if ($numExistRows > 0) {
        $showError = "Subscription Already Exists for the given E-Mail.";
    } else {
        $sql = "INSERT INTO subsriber(fname, lname, email, addr_1, addr_2 , city, country, state, zip, mphone, paymentMethod, recipient_bank, chq_date, recipient_dd, dd_date) VALUES ('$fname', '$lname', '$email', '$addr_1', '$addr_2', '$city', '$country', '$state', '$zip', '$mphone', '$paymentMethod', '$recipient_bank', '$chq_date', '$recipient_dd', '$dd_date')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
?>
            <script>
                alert("Data Inserted");
            </script>

        <?php

        } else {
        ?>

            <script>
                alert("Data Not Inserted");
            </script>
<?php

        }
    }
}
?>