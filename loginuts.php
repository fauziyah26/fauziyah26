<?php
if (isset($_POST['Login'])){
$un = $_POST['Username'];
$pw= $_POST["Password"];
if($un== "ade" && $pw =="12345") {
    header('location:inpututs.php');
//echo "Login Berhasil";
}else {
    echo "Login Gagal";
}
}
?>