<?php

$server = "sql6.freemysqlhosting.net";
$db_name = "sql6431367";
$username = "sql6431367";
$password = "hmlJ5CVNuK";
$port_number = 3306;
$table_name = "contact_form";

$connection = mysqli_connect($server, $username, $password);

if ($connection) {
    // echo "Connection successfully.";
    mysqli_select_db($connection, $db_name);

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $message = $_POST['comments'];

    $date = date("Y-m-d H:i:s");

    $insert_query = "INSERT INTO `contact_form`(`username`, `email`, `mobile`, `message`, `create_date`)
                    VALUES ('$user', '$email', '$mobile', '$message', '$date')";

    $result = mysqli_query($connection, $insert_query);

    if ($result === true) {
        header('location: ./../index.php');
    } else {
        echo "Sorry! Contact info & message not sent successfully. Something went wrong.";
    }
} else {
    echo "Sorry! something went wrong.";
}

?>
