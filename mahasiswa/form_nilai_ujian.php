<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai Ujian</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header mt-4 mb-5">
                    <h1>
                        Form Nilai Ujian
                    </h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="form_nilai_ujian.php">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" type="text" class="form-control" placeholder="NIM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="MK" class="col-4 col-form-label">Pilih MK</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Pemrograman Web">Pemrograman Web</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-4 col-form-label">Nilai</label>
                        <div class="col-8">
                            <input id="nilai" name="nilai" type="text" class="form-control" placeholder="Nilai" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-success">
                        </div>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>

    <?php

    require_once 'class_nilaiMahasiswa.php';
    if ($_POST) {
        $ns = new NilaiMahasiswa($_POST['matkul'], $_POST['nilai'], $_POST['nim']);
        $keterangan = $ns->hitungNilai();
        $hasil = $ns->grade($keterangan);
        $hasil2 = $ns->predikat($keterangan);

        echo "<div class=\"container\"";
        echo "<p>NIM :       "     . $ns->nim . "</p>";
        echo "<p>Mata Kuliah :       "     . $ns->matkul . "</p>";
        echo "<p>Nilai :       "     . $ns->nilai . "</p>";
        echo "<p>Hasil Ujian :    "     . $hasil . "</p>";
        echo "<p>Grade :     "     . $hasil2 . "</p>";
    }
    ?>
</body>

</html>