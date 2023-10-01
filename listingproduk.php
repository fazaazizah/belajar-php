<?php
		// Set variable untuk list bunga
		$bunga1 = "Bunga Matahari";
		$keterangan1 = "Tanaman Bunga Matahari Lokal";
		$harga1 = "Rp 200.000";

        $bunga2 = "Bunga Mawar";
		$keterangan2 = "Tanaman Hias Bunga Mawar";
		$harga2 = "Rp 140.000";

        $bunga3 = "Bunga Kamboja";
		$keterangan3 = "Tanaman Hias Bibit Kamboja Putih";
		$harga3 = "Rp 50.000";

        $bunga4 = "Bunga Tulip";
		$keterangan4 = "Tanaman Hias Kucai Tulip Bunga Pink";
		$harga4 = "Rp 100.000";

        $bunga5 = "Bunga Edelweiss" ;
		$keterangan5 = "Tanaman Hias Bunga Edelweiss Asli";
		$harga5 = "Rp 900.000";

        $bunga6 = "Bunga Melati" ;
		$keterangan6 = "Tanaman Bunga melati jasmine Putih";
		$harga6 = "Rp 500.000";

        $bunga7 = "Bunga Sepatu" ;
		$keterangan7 = "Tanaman Hias Bunga Sepatu Merah";
		$harga7 = "Rp 70.000";

        $bunga8 = "Bunga Telang" ;
		$keterangan8 = "Tanaman Herbal Bunga Telang Ungu";
		$harga8 = "Rp 40.000";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Galeri Product</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale-1.0">
        <link rel="stylesheet" href="assets/product.css">
    </head>

    <body class="bunga">
        <h1>Daftar Harga Bunga</h1>
        <div class="center">
            <div class="menu">
                <div class="kolom">
                    <div class="card1">
                        <img src="assets/image/bungamatahari.jpg" style="width: 50%;">
                        <h2><?php echo $bunga1; ?></h2>
                        <p><?php echo $keterangan1; ?></p>
                        <h2><?php echo $harga1; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card2">
                        <img src="assets/image/mawar.jpg" style="width: 45%;">
                        <h2><?php echo $bunga2; ?></h2>
                        <p><?php echo $keterangan2; ?></p>
                        <h2><?php echo $harga2; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card3">
                        <img src="assets/image/kamboja.jpg" style="width: 45%;">
                        <h2><?php echo $bunga3; ?></h2>
                        <p><?php echo $keterangan3; ?></p>
                        <h2><?php echo $harga3; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card4">
                        <img src="assets/image/tulip.jpg" style="width: 40%;">
                        <h2><?php echo $bunga4; ?></h2>
                        <p><?php echo $keterangan4; ?></p>
                        <h2><?php echo $harga4; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card5">
                        <img src="assets/image/edelwis.jpg" style="width: 50%;">
                        <h2><?php echo $bunga5; ?></h2>
                        <p><?php echo $keterangan5; ?></p>
                        <h2><?php echo $harga5; ?></h2>

                    </div>
                </div>

                <div class="kolom">
                    <div class="card6">
                        <img src="assets/image/melati.jpg" style="width: 55%;">
                        <h2><?php echo $bunga6; ?></h2>
                        <p><?php echo $keterangan6; ?></p>
                        <h2><?php echo $harga6; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card7">
                        <img src="assets/image/sepatu.jpg" style="width: 50%;">
                        <h2><?php echo $bunga7; ?></h2>
                        <p><?php echo $keterangan7; ?></p>
                        <h2><?php echo $harga7; ?></h2>
                    </div>
                </div>

                <div class="kolom">
                    <div class="card8">
                        <img src="assets/image/telang.jpg" style="width: 55%;">
                        <h2><?php echo $bunga8; ?></h2>
                        <p><?php echo $keterangan8; ?></p>
                        <h2><?php echo $harga8; ?></h2>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>