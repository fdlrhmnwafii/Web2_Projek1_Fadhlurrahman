<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="col">
            <form action="form.php" method="POST">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Masukan Nilai UTS" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    

<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'],$_POST['matkul'],$_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);

    echo "NIM : " . $ns->nim . "<br/>";
    echo "Matkul : " . $ns->matkul . "<br/>";
    echo "Nilai : " . $ns->nilai . "<br/>";
    echo "Status : " . $hasil . "<br/>";
    echo "grade : " . $hasil2 . "<br/>";


}


?>

</body>
</html>