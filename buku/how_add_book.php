<?php
    include_once('./connect.php');
    if($_POST){
        $judul_buku=$_POST['judul_buku'];
        $tahun_buku=$_POST['tahun_buku'];
        $stok_buku=$_POST['tahun_buku'];
        $pengarang_buku=$_POST['pengarang_buku'];
        $penerbit_buku=$_POST['penerbit_buku'];
        if(empty($judul_buku)){
            echo "<script>alert('judul buku tidak boleh kosong');location.href='add_book.php';</script>";
        } elseif(empty($tahun_buku)){
            echo "<script>alert('tahun buku tidak boleh kosong');location.href='add_book.php';</script>";
        } elseif(empty($pengarang_buku)){
            echo "<script>alert('pengarang buku tidak boleh kosong');location.href='add_book.php';</script>";
        } elseif(empty($penerbit_buku)){
            echo "<script>alert('penerbit buku tidak boleh kosong');location.href='add_book.php';</script>";
        } else {
            $insert=pg_query($conn,"insert into kelas (judul_buku, tahun_buku, stok_buku, pengarang_buku, penerbit_buku) values ('$judul_buku','$tahun_buku','$stok_buku','$pengarang_buku','$penerbit_buku')");
            if($insert){
                echo "<script>alert('Sukses menambahkan buku');location.href='add_book.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan buku');location.href='add_book.php';</script>";
            }
        }
    }
?>