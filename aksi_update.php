<?php
include 'config.php';

    $id = $_GET['i'];  

    $nik = $_GET['nik'];
    $nama = $_GET['nama'];
    $jenis_barang = $_GET['jenis_barang'];
    $kecamatan = $_GET['kecamatan'];
    $alamat = $_GET['alamat'];
    $nohprt = $_GET['nohprt'];
    
    //UPDATE `mahasiswa` SET `nama` = 'Fanny S', `jurusan` = 'J02' WHERE `mahasiswa`.`id` = 7;
    $q = "UPDATE `penerima` 
                  SET `nik` = '$nik', `nama` = '$nama', `jenis_barang` = '$jenis_barang',`kecamatan` = '$kecamatan', `alamat` = '$alamat', `nohprt` = '$nohprt' 
                  WHERE `penerima`.`id` = $id";

    mysqli_query($conn, $q);
    
    header("Location: tables.php");
    

 

?>