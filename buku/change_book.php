<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include_once('./connect.php');
    $qry_get_buku=pg_query($conn,"select * from buku where 
kd_buku = '".$_GET['kd_buku']."'");
    $data_buku=pg_fetch_assoc($qry_get_buku);
    ?>
    <h3>Ubah buku</h3>
    <form action="howto_change_book.php" method="post">
        <input type="hidden" name="kd_buku" value= 
  "<?=$data_buku['kd_buku']?>">
        judul buku :
  <input type="text" name="judul_buku" value=   "<?=$data_buku['judul_buku']?>" class="form-control">
        tahun buku : 
  <input type="text" name="tahun_buku" value="<?=$data_buku['tahun_buku']?>" class="form-control">
        stok buku : 
  <input type="number" name="stok_buku" value="<?=$data_buku['stok_buku']?>" class="form-control">
        pengarang buku : 
  <input type="text" name="pengarang_buku" value="<?=$data_buku['pengarang_buku']?>" class="form-control">
        penerbit buku : 
  <input type="text" name="penerbit_buku" value="<?=$data_buku['penerbit_buku']?>" class="form-control">
<input type="submit" name="simpan" value="Ubah Buku" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>