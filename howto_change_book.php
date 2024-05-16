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
        include_once('./connect.php');
        if(empty($password)){
            $update=pg_query($conn,"update buku set judul_buku='".$judul_buku."',tahun_buku='".$tahun_buku."', stok_buku='".$stok_buku."', pengarang_buku='".$pengarang_buku."', penerbit_buku='".$penerbit_buku."' ");
            if($update){
                echo "<script>alert('Sukses update buku');location.href='book_data.php';</script>";
            } else {
                echo "<script>alert('Gagal update buku');location.href='change_book.php?kd_buku=".$kd_buku."';</script>";
            }
        } else {
            $update=pg_query($conn,"update buku set judul_buku='".$judul_buku."',tahun_buku='".$tahun_buku."', stok_buku='".$stok_buku."', pengarang_buku='".$pengarang_buku."', penerbit_buku='".$penerbit_buku."' ");
            if($update){
                echo "<script>alert('Sukses update buku');location.href='book_data.php';</script>";
            } else {
                echo "<script>alert('Gagal update buku');location.href='change_book.php?kd_buku=".$kd_buku."';</script>";
            }
        }
        
    } 
}
?>