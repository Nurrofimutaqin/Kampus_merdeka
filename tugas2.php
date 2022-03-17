<?php 
        $nama = $_POST['nama'];
        $mapel = $_POST['mapel'];
        $nilai = $_POST['nilai'];
        $simpan = $_POST['simpan'];

        $ket = ($nilai >= 60)? "LULUS" : "TIDAK LULUS";

        if ($nilai >= 85 && $nilai <=100) {
          $grade = "A";
        } elseif ($nilai >= 75 && $nilai < 85) {
          $grade = "B";
        } elseif ($nilai >= 60 && $nilai < 75) {
          $grade = "C";
        }elseif ($nilai >= 30 && $nilai < 60) {
          $grade = "D";
        }elseif ($nilai >= 0 && $nilai < 30) {
          $grade = "E";
        }else {
          $grade = "ha?";
        }

        switch ($grade) {
          case 'A':
            $predikat = "Sangat Bagus";
            break;
            case 'B':
              $predikat = "Bagus";
              break;
              case 'C':
                $predikat = "Cukup";
                break;
                case 'D':
                  $predikat = "Buruk";
                  break;
                  case 'E':
                    $predikat = "Sangat Buruk";
                    break;
                    default:
                      $predikat = " apakah kamu mengerjakan?";
                      break;
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2 PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
      .konten, .btn{
        margin-top:10px;
      }
      #mapel{
        width: 200px;
        height: 30px;
        margin-bottom: 10px;
      }
    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
      <table class="table" cellpadding= '10' cellspacing='0'>
          <tbody>
            <tr>
              <td>Nama :</td>
              <td>Nurrofi Mutaqin</td>
            </tr>
            <tr>
              <td>Kelompok :</td>
              <td>2</td>
            </tr>
            <tr>
              <td >Universitas :</td>
              <td>STMIK Indo Daya Suvana</td>
            </tr>
          </tbody>
        </table>
		</div>
	</div>
	<div class="row konten">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
          <div class="alert alert-warning" role="alert">
          <form method="POST" action="tugas2.php">
              <div class="mb-3">
                <label for="nama">Nama</label> 
                <input id="nama" name="nama" placeholder="Nama lengkap" type="text" required="required" class="form-control">
              </div>
              <div class="form-group">
                <label for="mapel">Mata Pelajaran</label> 
                <div>
                  <select id="mapel" name="mapel" required="required" class="custom-select">
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                    <option value="Matematika">Matematika</option>
                    <option value="Fisika">Fisika</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="nilai">Nilai</label> 
                <input id="nilai" name="nilai" placeholder="Nilai ulangan" type="text" class="form-control" required="required">
              </div> 
              <div class="form-group">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan">
              </div>
            </form>
				</div>
        </div>
        <?php if (!empty($simpan)) { ?>
				<div class="col-md-8">
          <div class="alert alert-danger" role="alert">
            <p>Nama : <?= $nama; ?></p>
            <p>Mata Pelajaran : <?= $mapel; ?></p>
            <p>Nilai : <?= $nilai; ?></p>
            <p>Grade : <?= $grade; ?></p>
            <p>Keterangan : <?= $ket; ?></p>
            <p>Predikat : <?= $predikat; ?></p>
            </div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div>
</div>
</body>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
</html>