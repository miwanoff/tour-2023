<?php
include_once "db";
$v = "US";
if (isset($_POST['formSubmit'])) {
    $v = $_POST['formCountry'];
    $stars = $_POST['stars'];
    $price = $_POST['price'];
    $redir = "US.php";
    $country = "US";
    switch ($v) {
        case "US":
            $redir = "US.php";
            $country = "US";
            break;
        case "UK":
            $redir = "UK.php";
            $country = "UK";
            break;
        case "France":
            $redir = "France.php";
            $country = "France";
            break;
        case "Mexico":$redir = "Mexico.php";
            break;
        case "Japan":$redir = "Japan.php";
            break;
        default:echo ("Error!");exit();
            break;
    }

    $tour_keys = [];
    foreach ($tours as $key => $tour) {
        if ($tour['name'] == "USA") {
            $tour_keys[] = $key;
        }
    }
    header("Location: $redir?country=$country&stars=$stars");
    exit();
}