<?php 
    if ($_GET['id_siswa']) {

        include_once('connect.php');

        $qry_delete=pg_query($conn,"delete from siswa where id_siswa='".$_GET['id_siswa']."'");

        if ($qry_delete) {
            echo "<script>alert('Success delete student data'); location.href='student_data.php';</script>";
        } else {
            echo "<script>alert('Failed delete student data'); location.href='student_data.php';</script>";
        }
    }
?>