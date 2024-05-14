<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include_once('./connect.php');
    $qry_get_buku=pg_query($conn,"select * from siswa where 
kd_buku = '".$_GET['kd_buku']."'");
    $data_buku=pg_fetch_assoc($qry_get_buku);
    ?>
    <h3>Ubah buku</h3>
    <form action="proces_update_buku.php" method="post">
        <input type="hidden" name="kd_buku" value= 
  "<?=$data_buku['kd_buku']?>">
        judul buku :
  <input type="text" name="judul_buku" value=   "<?=$data_buku['judul_buku']?>" class="form-control">
        tahun buku : 
  <input type="date" name="tahun_buku" value="<?=$data_buku['tahun_buku']?>" class="form-control">
        Gender buku: 
        <?php 
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_siswa['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
             ?>
<option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
            <?php endforeach ?>
        </select>
        Alamat : 
<textarea name="alamat" class="form-control" rows="4"><?=$dt_siswa['alamat']?></textarea>
        Kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            $qry_kelas=pg_query($conn,"select * from kelas");
            while($data_kelas=pg_fetch_assoc($qry_kelas)){
                if($data_kelas['id_kelas']==$dt_siswa['id_kelas']){
                    $selek="selected";
                } else {
                    $selek="";
                }
echo '<option value="'.$data_kelas['id_kelas'].'" '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
        </select>
        Username : 
<input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password : 
<input type="password" name="password" value="" class="form-control">
<input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>