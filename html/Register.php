<?php

include "../database/db.php";

if (isset($_POST['submit'])) {

    $User_id = $_POST['user_id'];
    $F_name = $_POST['firstname'];
    $L_name = $_POST['lastname'];
    $Phone = $_POST['Phone'];
    $House = $_POST['House'];
    $Road = $_POST['Road'];
    $Area = $_POST['Area'];
    $City = $_POST['City'];
    $City = $_POST['City'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $User_type = $_POST['User_type'];
    $Dob = $_POST['dob'];
    $NID = $_POST['NID'];



    $sql = "INSERT INTO `User_T`(`User_id`,`F_name`,`L_name`,`Phone`,`House`,`Road`,`Area`,`City`,`City`,`Email`,`Password`,`User_type`,`Dob`,`NID`) 
    VALUES ('$user_id','$user_id','$firstname','$lastname','$Phone','$House','$Road','$Area','$City','$City','$Email','$Password','$User_type','$dob','$NID')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully!";
        header("refresh:2; url=./view.php");
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Village Vibe</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <h1>Village Vibe</h1>
                                <p class="text-center">Your Social Campaigns</p>
                                <form action="" method="POST">
                                    <fieldset class="d-flex flex-wrap justify-content-between gap-2">
                                        <legend>Personal information:</legend>
                                        <span>
                                            UserId:<br>
                                            <input type="number" name="user_id">
                                            <br>
                                        </span>
                                        <span>
                                            First name:<br>
                                            <input type="text" name="firstname">
                                            <br>
                                        </span>
                                        <span>
                                            Last name:<br>
                                            <input type="text" name="lastname">
                                            <br>
                                        </span>
                                        <span>
                                            Phone:<br>
                                            <input type="text" name="Phone">
                                            <br>
                                        </span>
                                        <span>
                                            House:<br>
                                            <input type="text" name="House">
                                            <br>
                                        </span>
                                        <span>
                                            Road:<br>
                                            <input type="text" name="Road">
                                            <br>
                                        </span>
                                        <span>
                                            Area:<br>
                                            <input type="text" name="Area">
                                            <br>
                                        </span>
                                        <span>
                                            City:<br>
                                            <input type="text" name="City">
                                            <br>
                                        </span>
                                        <span>
                                            Email:<br>
                                            <input type="email" name="email">
                                            <br>
                                        </span>
                                        <span>
                                            Password:<br>
                                            <input type="password" name="password">
                                            <br>
                                        </span>
                                        <span>
                                            User type:<br>
                                            <select name="uesr_type" id="">
                                                <option value="Admin">Admin</option>
                                                <option value="Seller">Seller</option>
                                                <option value="Buyer">Buyer</option>
                                            </select>
                                        </span>
                                        <span>
                                            Date f Birth<br>
                                            <input type="date" name="dob">
                                        </span>
                                        <span>
                                            NID<br>
                                            <input type="number" name="NID">
                                        </span>
                                        <input type="submit" name="submit" value="Submit">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>