<?php
$servername= "localhost";
$username= "abite7kr_veritas_cancer_care";
$password = "veritas_cancer_care";
$db_name = "abite7kr_veritas_db";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>