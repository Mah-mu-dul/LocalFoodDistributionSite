<?php

include "../database/db.php";

if (isset($_POST['submit'])) {

    //  $sqlColumnName = $_POST['inputName'] 
    $Product_id = $_POST['Product_id'];
    $User_id = $_POST['User_id'];
    $Name = $_POST['Name'];
    $Quantity = $_POST['Quantity'];
    $Manufacture_date = $_POST['Manufacture_date'];
    $Expire_date = $_POST['Expire_date'];
    $Price = $_POST['Price'];
    $Vat = $_POST['Vat'];



    $sql = "INSERT INTO `Prodct_T`(`Product_id`,`User_id`,`Name`,`Quantity`,`Manufacture_date`,`Expire_date`,`Price`,`Vat`) 
    VALUES (`$Product_id`,`$User_id`,`$Name`,`$Quantity`,`$Manufacture_date`,`$Expire_date`,`$Price`,`$Vat`)";
    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully!";
        header("refresh:2; url=success.php");
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Village Vibe</title>
</head>

<body>
    <form onsubmit="handleSubmit(event)" method=" POST">
        <fieldset class="d-flex flex-wrap justify-content-between gap-2">

            <span class="mb-3">
                <label class="form-label">Product ID</label>
                <input type="number" name="Product_id" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Seller Id</label>
                <input type="number" name="User_id" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Product Name</label>
                <input name="Name" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="Quantity" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Manufacture Date</label>
                <input name="Manufacture_date" type="date" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Expire Date</label>
                <input name="Expire_date" type="date" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Price</label>
                <input name="Price" type="Number" class="form-control">
            </span>
            <span class="mb-3">
                <label class="form-label">Vat</label>
                <input name="Vat" type="Number" class="form-control">
            </span>
            <input type="submit" class="btn btn-primary"></input>
        </fieldset>
    </form>
</body>

</html> 