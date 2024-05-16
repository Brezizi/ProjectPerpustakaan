<?php
    include_once('connect.php');
    
    if ($_POST) {
        $nisn_siswa=$_POST['nisn_siswa'];
        $nama_siswa=$_POST['nama_siswa'];
        $kelas_siswa=$_POST['kelas_siswa'];
        $jk_siswa=$_POST['jk_siswa'];
        $usn_siswa=$_POST['usn_siswa'];
        $pass_siswa=$_POST['pass_siswa'];

        if (empty($nisn_siswa)) {
            echo "<script>alert('NISN cannot empty'); location.href='add_student.php';</script>";
        } else if (empty($nama_siswa)) {
            echo "<script>alert('Name cannot empty'); location.href='add_student.php';</script>";
        } else if (empty($kelas_siswa)) {
            echo "<script>alert('Class cannot empty'); location.href='add_student.php';</script>";
        } else if (empty($jk_siswa)) {
            echo "<script>alert('Gender cannot empty'); location.href='add_student.php';</script>";
        } else if (empty($usn_siswa)) {
            echo "<script>alert('Username cannot empty'); location.href='add_student.php';</script>";
        } else if (empty($pass_siswa)) {
            echo "<script>alert('Password cannot empty'); location.href='add_student.php';</script>";
        } else {

            $insert=pg_query($conn, "insert into siswa (nisn_siswa, usn_siswa, pass_siswa, nama_siswa, jk_siswa) values ('$nisn_siswa','$nama_siswa','$kelas_siswa','$jk_siswa','usn_siswa','pass_siswa')");

            if ($insert) {
                echo "<script>alert('Success adding student data'); location.href='add_student.php';</script>";
            } else {
                echo "<script>alert('Failed adding student data'); location.href='add_student.php';</script>";
            }
        }
    }
?>