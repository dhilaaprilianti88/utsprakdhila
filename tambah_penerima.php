<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Add'])) {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jenis_barang = $_POST['jenis_barang'];
        $kecamatan = $_POST['kecamatan'];
        $alamat = $_POST['alamat'];
        $nohprt = $_POST['nohprt'];
        header("Location: tables.php");
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, 
                "INSERT INTO penerima(nik, nama, jenis_barang, kecamatan, alamat, nohprt) 
                VALUES('$nik', '$nama','$jenis_barang','$kecamatan','$alamat', '$nohprt')");
        
        // Show message when user added
        echo "User added successfully. <a href='tables.php'>View Users</a>";
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Penerima</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/1.png" rel="icon">

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
					<form action="tambah_penerima.php" method="post" name="form1">
						<div class="row g-4">
                        <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="nik" value="" placeholder="Your Name" required>
                                        <label for="nik">NIK</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="nama" value="" placeholder="Your Email" required>
                                        <label for="nama">NAMA</label>
                                    </div>
                                </div>												
								<div class="col-12">
									<label for="barang">KEBUTUHAN BARANG</label>
									  <select name="jenis_barang" class="form-control form-control bg-light border-0">
										<option value=" ">--- Pilih Jenis Barang ---</option>
										<option value="Elektronik">Elektronik</option>
										<option value="Alat Sekolah">Furnitur</option>
                                        <option value="Alat Sekolah">Alat Sekolah</option>
									</select>
								</div>
								<div class="col-12">
									<label for="kecamatan">KECAMATAN</label>
									  <select name="kecamatan" class="form-control form-control bg-light border-0">
										<option value=" ">--- Pilh Kecamatan ---</option>
										<option value="Bogor Utara">Bogor Utara</option>
										<option value="Bogor Selatan">Bogor Selatan</option>
										<option value="Bogor Timur">Bogor Timur</option>
										<option value="Bogor Barat">Bogor Barat</option>
									</select>
								</div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="alamat" value="" placeholder="Your Email" required>
                                        <label for="alamat">ALAMAT</label>
                                    </div>
                                </div>	
								<div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="nohprt" value="" placeholder="Your Email" required>
                                        <label for="nohprt">NO HP RT</label>
                                    </div>
                                </div>
                                <div>
								    <input type="submit" class="btn btn-primary py-2 px-3 me-2 " name="Add" value="Submit">
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