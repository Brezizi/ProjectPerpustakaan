<?php
if ($_POST) {
    $nisn_siswa=$_POST['nisn_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $kelas_siswa=$_POST['kelas_siswa'];
    $jk_siswa=$_POST['jk_siswa'];
    $usn_siswa=$_POST['usn_siswa'];
    $pass_siswa=$_POST['pass_siswa'];

    if (empty($nisn_siswa)) {
        echo "<script>alert('NISN cannot empty'); location.href='add_siswa.php';</script>";
    } else if (empty($usn_siswa)) {
        echo "<script>alert('Username cannot empty'); location.href='add_siswa.php';</script>";
    } else if (empty($pass_siswa)) {
        echo "<script>alert('Password cannot empty'); location.href='add_siswa.php';</script>";
    } else if (empty($nama_siswa)) {
        echo "<script>alert('Name cannot empty'); location.href='add_siswa.php';</script>";
    } else if (empty($jk_siswa)) {
        echo "<script>alert('Gender cannot empty'); location.href='add_siswa.php';</script>";
    } else {

        include_once ('connect.php');

        if (empty($pass_siswa)){
            $update=pg_query($conn,"update siswa set nisn_siswa='".$nisn_siswa."',nama_siswa='".$nama_siswa."', kelas_siswa='".$kelas_siswa."', jk_siswa='".$jk_siswa."', usn_siswa='".$usn_siswa."', pass_siswa='".md5($pass_siswa)."' where id_siswa = '".$id_siswa."' ");

            if($update){
                echo "<script>alert('Success update student data'); location.href='student_data.php';</script>";
            } else {
                echo "<script>alert('Failed update student data'); location.href='change_data.php?id_siswa=".$id_siswa."';</script>";
            }

        } else {
            $update=pg_query($conn,"update siswa set nisn_siswa='".$nisn_siswa."',nama_siswa='".$nama_siswa."', kelas_siswa='".$kelas_siswa."', jk_siswa='".$jk_siswa."', usn_siswa='".$usn_siswa."', pass_siswa='".md5($pass_siswa)."' where id_siswa = '".$id_siswa."' ");

            if($update){
                echo "<script>alert('Success update student data'); location.href='student_data.php';</script>";
            } else {
                echo "<script>alert('Failed update student data'); location.href='change_data.php?id_siswa=".$id_siswa."';</script>";
            }
        }
    } 
}
?>