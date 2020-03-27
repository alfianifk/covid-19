<?php
$data = file_get_contents("https://api.kawalcorona.com/indonesia");
$prov = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
$ina = json_decode($data, TRUE);
$prov_ina = json_decode($prov, TRUE);


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="AlfianiFk" content="">

  <link rel="icon" type="image/png" href="assets/img/virus.png" />

  <title>Covid-19 | alfianifk.my.id </title>

  <!-- Custom fonts for this template -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Custom styles for this page -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <script src="assets/vendor/chart.js/Chart.js"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container mt-3">

          <p class="teks text-gray-800">alfianifk <i class="fas fa-heart"></i> </p>
          <!-- Page Heading -->
          <h1 class="h1 mb-2 teks text-center text-gray-800">Covid-19 Indonesia</h1>
          <h4 class="teks text-center">Data akurat Covid-19 di Indonesia berdasarkan provinsi</h4>

          <p class="mb-4 teks text-center"> Data ini diambil dari API (Application Programming Interface) Kawal Corona. Anda bisa menggunakannya disini <a target="_blank" href="https://kawalcorona.com/api/">API kawalcorona.com</a>.</p>

          <div class="row mb-3">
            <div class="col-md-4 mb-2">
              <div class="card py-3 border-left-warning">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="teks">Positif</h5>
                      <p class="strong h4 teks"><?php echo $ina[0]["positif"]; ?></p>
                    </div>
                    <div class="col-md-4">
                      <img src="assets/img/sad.svg" style="max-width: 50px;" class="float-right img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card py-3 border-left-success">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="teks">Sembuh</h5>
                      <p class="strong h4 teks"><?php echo $ina[0]["sembuh"]; ?></p>
                    </div>
                    <div class="col-md-4">
                      <img src="assets/img/happy.svg" style="max-width: 50px;" class="float-right img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-2">
              <div class="card py-3 border-left-danger">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="teks">Meninggal</h5>
                      <p class="strong h4 teks"><?php echo $ina[0]["meninggal"]; ?></p>
                    </div>
                    <div class="col-md-4">
                      <img src="assets/img/cry.svg" style="max-width: 50px;" class="float-right img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark teks">Data Corona Virus di Indonesia Berdasarkan Provinsi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="teks table" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-dark">
                    <tr class="text-white">
                      <th>Nomor</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nomor</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $no = 1; ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[0]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[0]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[0]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[0]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[2]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[2]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[2]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[2]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[3]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[3]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[3]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[3]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[4]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[4]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[4]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[4]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[5]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[5]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[5]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[5]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[6]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[6]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[6]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[6]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[7]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[7]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[7]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[7]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[8]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[8]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[8]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[8]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[9]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[9]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[9]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[9]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[10]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[10]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[10]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[10]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[11]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[11]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[11]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[11]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[12]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[12]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[12]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[12]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[13]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[13]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[13]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[13]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[14]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[14]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[14]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[14]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[15]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[15]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[15]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[15]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[16]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[16]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[16]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[16]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[17]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[17]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[17]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[17]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[18]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[18]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[18]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[18]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[19]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[19]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[19]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[19]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[20]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[20]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[20]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[20]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[21]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[21]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[21]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[21]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[22]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[22]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[22]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[22]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $prov_ina[23]["attributes"]["Provinsi"]; ?></td>
                      <td><?= $prov_ina[23]["attributes"]["Kasus_Posi"]; ?></td>
                      <td><?= $prov_ina[23]["attributes"]["Kasus_Semb"]; ?></td>
                      <td><?= $prov_ina[23]["attributes"]["Kasus_Meni"]; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END TABLE -->

          <div class="row">
            <div class="col-md-6">
              <a href="https://www.unicef.org/indonesia/id/coronavirus" class="card shadow bg-primary card-link">
                <div class="card-body text-white">
                  <p class="strong teks"> Novel coronavirus (COVID-19): Hal-hal yang perlu Anda ketahui </p>
                  <p class="teks small mt-4 mb-0">Unicef Indonesia</p>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona" class="card shadow bg-warning card-link">
                <div class="card-body text-white">
                  <p class="strong teks">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</p>
                  <p class="teks small mt-4 mb-0">Kompas</p>
                </div>
              </a>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-6">
              <a href="https://infeksiemerging.kemkes.go.id/" class="card shadow bg-info card-link">
                <div class="card-body text-white">
                  <p class="strong teks"> Media Informasi Resmi Penyakit Infeksi Emerging</p>
                  <p class="teks small mt-4 mb-0">Kementrian Kesehatan</p>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="card shadow bg-success card-link">
                <div class="card-body text-white">
                  <p class="strong teks"> Coronavirus Disease (COVID-19) Advice for The Public</p>
                  <p class="teks small mt-4 mb-0">WHO</p>
                </div>
              </a>
            </div>

          </div>
          <hr>
        </div>
        <!-- END Container -->
      </div>
      <!-- End of Main Content -->

      <div class="text-center">
        <a href="http://www.facebook.com/alfianifk/"> <img src="assets/img/facebook.png"></a>
        <a href="https://api.whatsapp.com/send?phone=6282321543292"> <img src="assets/img/whatsapp.png"></a>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Dibuat dengan <i class="fas fa-heart"></i> <a href="http://alfianifk.my.id/"> alfianifk.my.id</a> <?= date("Y"); ?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/js/demo/datatables-demo.js"></script>

  <script>
    $(document).ready(function() {
      $('.table').DataTable();
    });
  </script>
</body>

</html>