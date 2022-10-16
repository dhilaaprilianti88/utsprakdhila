<?php
  include "config.php";
  $id = $_GET["id"];

  
  $q =  "SELECT * FROM penerima WHERE id=$id"; 

  $hasil = mysqli_query($conn, $q);
  $r = mysqli_fetch_assoc($hasil);

  //print_r($r);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Penerima</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">DigiHelp Data Penerima</h1>
			<div class="container-xxl py-5 col-lg-6">
				<div class="container">
					<form method="Get" action="aksi_update.php">
						<div class="row g-4">
              <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control bg-light border-0" name="nik" value="<?php echo $r["nik"]; ?>" placeholder="Your Name" required>
                    <label for="nik">NIK</label>
                </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-0" name="nama" value="<?php echo $r["nama"]; ?>" placeholder="Your Email" required>
                        <label for="nama">NAMA</label>
                    </div>
                </div>												
                <div class="col-12">
                  <label for="barang">KEBUTUHAN BARANG</label>
                    <select name="jenis_barang" class="form-control form-control bg-light border-0">
                    <option value=" ">--- Pilih Jenis Barang ---</option>
                    <option value="Elektronik"
                      <?php 
                      if ($r["jenis_barang"] == "Elektronik")
                        echo "selected";
                      ?>
                    >Elektronik</option>

                    <option value="Alat Sekolah" 
                      <?php 
                      if ($r["jenis_barang"] == "Alat Sekolah")
                        echo "selected";
                      ?>>Alat Sekolah</option>
                    <option value="Furnitur" 
                      <?php 
                      if ($r["jenis_barang"] == "Furnitur")
                        echo "selected";
                      ?>>Furnitur</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="kecamatan">KECAMATAN</label>
                    <select name="kecamatan" class="form-control form-control bg-light border-0">
                    <option value=" ">--- Pilh Kecamatan ---</option>
                    <option value="Bogor Utara"
                      <?php 
                      if ($r["kecamatan"] == "Bogor Utara")
                        echo "selected";
                      ?>
                    >Bogor Utara</option>

                    <option value="Bogor Selatan" 
                      <?php 
                      if ($r["kecamatan"] == "Bogor Selatan")
                        echo "selected";
                      ?>>Bogor Selatan</option>
                    <option value="Bogor Timur" 
                      <?php 
                      if ($r["kecamatan"] == "Bogor Timur")
                        echo "selected";
                      ?>>Bogor Timur</option>
                    <option value="Bogor Barat" 
                      <?php 
                      if ($r["kecamatan"] == "Bogor Barat")
                        echo "selected";
                      ?>>Bogor Barat</option>
                  </select>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-0" name="alamat" value="<?php echo $r["alamat"]; ?>" placeholder="Your Email" required>
                        <label for="alamat">ALAMAT</label>
                    </div>
                </div>	
                  <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control bg-light border-0" name="nohprt" value="<?php echo $r["nohprt"]; ?>" placeholder="Your Email" required>
                        <label for="nohprt">NO HP RT</label>
                    </div>
                </div>
                <input type="hidden" name="i" value="<?php echo  $_GET["id"]; ?>">
                <div>
                  <input type="submit" class="btn btn-primary py-2 px-3 me-2 " name="submit" value="Submit">
                  <a href="tables.php" type="submit" class="btn btn-primary py-2 px-3 me-2 float-right" role="button">Cancel</a>
                </div>
							</div>
            </form>
				</div>
			</div>
		</div>
	</div>
    <!-- Page Header End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>