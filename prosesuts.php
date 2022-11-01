<?php
if (isset($_POST['tambah'])){
    $jumlah = $_POST['jumlah'];
    $Tanggal =$_POST['Tanggal'];
    $penghutang= $_POST['penghutang'];
    $alasan = $_POST['alasan'];
    echo "jumlah:<b>$jumlah</b></br>";
    echo "Tanggal:<b> $Tanggal</b></br>";
    echo "penghutang:<b>$penghutang</b></br>";
    echo "alasan:<b>$alasan</b></br>";
  
}
?>