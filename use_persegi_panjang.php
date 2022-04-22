<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas dan Keliling Persegi Panjang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container px-4 py-3">
        <div class="col">
            <h1 class="text-center">Menghitung Luas dan Keliling Persegi Panjang</h1><br>
            <form method="POST" action="use_persegi_panjang.php">
                <div class="form-group row">
                    <label for="panjang" class="col-4 col-form-label">Panjang</label> 
                    <div class="col-8">
                    <input id="panjang" name="panjang" placeholder="Masukan Panjang" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lebar" class="col-4 col-form-label">Lebar</label> 
                    <div class="col-8">
                    <input id="lebar" name="lebar" placeholder="Masukan Lebar" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <?php
            require_once 'class_persegi-panjang.php';
            if ($_POST){
                $pp = new PersegiPanjang($_POST['panjang'],$_POST['lebar']);
                echo "Keliling persegi Panjang : " . $pp->keliling() . "</br>";
                echo "Luas Persegi Panjang : " . $pp->luas(). "</br>";
            }

            ?>
        </div>
    </div>


</body>
</html>