<?php session_start();?>
<html>
	<head>
		<title>Elimination GAUSS </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"></a></div>
			
			</header>

		
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						
						<?php#Membuat tampilan form input Jumlah persamaan?>
<h1>GAUSS JORDAN</h1>  
<form action="#main" method="GET">
    Jumlah Persamaan yang digunakan : <br>
    <input type ="text" name="jumlah_persamaan"><br>
    <input type="submit" value="Submit"> <br>
	</a>
	<br>
    <hr>
</form>

					</header>
					
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<a href="generic.html" class="link"><img src="images/pic01.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
									<?php

#Validasi jika input kosong
if(isset($_GET['jumlah_persamaan'])){
      if( !empty($_GET['jumlah_persamaan'])){
            $jumlah_persamaan= $_GET['jumlah_persamaan'];
           
            buatForm($jumlah_persamaan);
           
            $_SESSION['jumlah_persamaan']= $jumlah_persamaan;
            }else{
            echo 'Masukkan Jumlah Persamaan terlebih dahulu';
      }
}

#Buat Tampilan Form Matriks
function buatForm($jumlah_persamaan){
    echo '<form action="function.php" method="GET">'; #panggil function.php
            for($i=0; $i<$jumlah_persamaan;$i++){ #diulang sebanyak inputan jumlah persamaan
                echo 'Persamaan '.$i.': ';
                for($j=0; $j<$jumlah_persamaan+1;$j++){
                      if($j<$jumlah_persamaan){
                            echo '<input type="text" name="var'.$i.$j.'" size="5">X <sub>'.$j.'</sub>';
                      }else{
                            echo ' = <input type="text" name="var'.$i.$j.'" size="5">';
                      }
                }
                echo '<br>';
          }
    echo '<br><input type="submit" value="Submit"><hr>
        </form>';
}
?>
									<a href="index.php" class="button">Kembali</a>
									</div>
								</div>
						</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
