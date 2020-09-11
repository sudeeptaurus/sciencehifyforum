<?php

session_start();

$page = 'forum';
include "includes/header.php";
include "includes/navigation.php";
include "includes/dbh-inc.php";

?>

<div class="container my-2">
    <br>
    <h2 class="text-center">ScienceHiFY Forum</h2>
    <br>
    <h3>Categories</h3>
    <br>
    <div class="row">

        <?php

        $sql = "SELECT * FROM forumcategory";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            // echo $row['category_id'];
            // echo $row['category_name'];
            $id = $row['category_id'];
            $cat = $row['category_name'];
            $desc = $row['category_description'];
            echo '<div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/600x400/?' . $cat . ',science" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                    <p class="card-text">' . substr($desc, 0, 100) . '....</p>
                    <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                </div>
            </div>
        </div>';
        }
        ?>



    </div>
</div>

<?php
include "includes/footer.php";

?>