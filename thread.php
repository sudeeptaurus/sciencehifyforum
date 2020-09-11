<?php

session_start();

// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
//   header("location: login.php");
//   exit;
// }

include "includes/header.php";
include "includes/navigation.php";
include "includes/dbh-inc.php";

$id = $_GET['threadid'];
$sql = "SELECT * FROM threads WHERE thread_id=$id";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $title = $row['thread_title'];
    $desc = $row['thread_desc'];
}

$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comment (comment_content, thread_id, comment_by, comment_time) VALUES ('$comment', '$id', '0', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if ($showAlert) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Comment has been added
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
    }
}
// echo $method;

?>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $title; ?></h1>
        <p class="lead"><?php echo $desc; ?></p>
        <hr class="my-4">
        <p><b>Posted By: Admin</b></p>
        <hr class="my-4">
        <h4>Please follow the below Forum Rules</h4>
        <br>
        <p style="line-height:.5">No Spam / Advertising / Self-promote in the forums.</p>
        <p style="line-height:.5">Do not post copyright-infringing material.</p>
        <p style="line-height:.5">Do not post “offensive” posts, links or images.</p>
        <p style="line-height:.5">Do not cross post questions.</p>
        <p style="line-height:.5">Do not PM users asking for help.</p>
        <p style="line-height:.5">Remain respectful of other members at all times.</p>
    </div>
</div>

<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<div class="container">
    <h2>Post a Comment</h2>
    <br>
    <form action="' . $_SERVER['REQUEST_URI'] . '>" method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Type your comment here</label>
            <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
</div>';
} else {
    echo '<div class="container" id="ques">
    <h2>Post a Comment</h2>
    <p class="lead">You are not logged in. Please <a href="login.php">login</a> to be able to post comments</p>
</div>
    ';
}

?>

<div class="container my-2" id="ques">
    <h1 class="py-2">Discussions</h1>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM comment WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $noResult = false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];
        $comment_time = $row['comment_time'];

        echo '<div class="media my-3">
        <img src="img/user_img.png" width="50px" class="mr-3" alt="...">
        <div class="media-body">
            <p class="font-weight-bold my-0">Anonymous User at ' . $comment_time . '</p>
            ' . $content . '
        </div>
    </div>';
    }
    if ($noResult) {
        echo '<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">No Results Found</h1>
    <p class="lead">Be first to Start a thread for the Subject.</p>
  </div>
</div>';
    }

    ?>
</div>

<?php
include "includes/footer.php";

?>