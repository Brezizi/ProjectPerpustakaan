<?php 
    if($_GET['id_siswa']){
        include "./connect.php";
        $qry_hapus=pg_query($conn,"delete from buku where kd_buku='".$_GET['kd_buku']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus buku');location.href='book_data.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus buku');location.href='book_data.php';</script>";
        }
    }
?>