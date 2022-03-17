<?php 
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobi = $_POST['hobi'];
        $simpan = $_POST['simpan'];

        
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
      body{
        background: whitesmoke;
      }
      .konten, .btn{
        margin-top:10px;
      }
      #pekerjaan, #hobi{
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
          <form method="POST" action="tugas2b.php">
              <div class="mb-3">
                <label for="nama">Nama</label> 
                <input id="nama" name="nama" placeholder="Nama lengkap" type="text" required="required" class="form-control">
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label> 
                <div>
                  <select id="pekerjaan" name="pekerjaan" required="required" class="custom-select">
                    <?php 
                    for ($i=1; $i <= 10 ; $i++) { 
                    ?>
                    <option value="pekerjaan <?= $i ?>"> Pekerjaan <?= $i ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
               <label for="hobi">Hobby: </label> 
                <div>
                    <?php 
                    $h=1;
                    while($h <= 10) { 
                    ?>
                    <input type="radio" name= "hobi" value="Hobby <?= $h ?>">Hobby  <?= $h ?>
			<br>
                    <?php $h++; } ?>
                  </select>
                </div>
              </div> 
              <div class="form-group">
                <input name="simpan" type="submit" class="btn btn-primary" value="Simpan">
              </div>
            </form>
				</div>
        </div>
        <?php if (!empty($simpan)) { ?>
				<div class="col-md-8">
          <div class="alert alert-info" role="alert">
            <h3 align= center>Daftar profil pekerja</h3>
          <table class="table table-light border-info">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Hobby</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><?= $nama; ?></td>
                  <td><?= $pekerjaan; ?></td>
                  <td><?= $hobi; ?></td>
                </tr>
              </tbody>

            </table>
            </div>
				</div>
        <?php } ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
