<?php session_start();?>
<html>
	<head>
		<title>Elimination GAUSS JORDAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			
					
<h1 align="center">Hasil dalam bentuk matriks</h1>  

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
											<a href="#" class="link"><img src="images/pic01.jpg" alt="" /></a>
										</div>
									</div>
									<div class="col col2">
									<?php
    $koefisien = array(array());
    
    #panggil semua fungsi yang telah dibuat
    if(isset($_SESSION['jumlah_persamaan'])){
        $jumlah_persamaan = $_SESSION['jumlah_persamaan'];
        buatArray($jumlah_persamaan);
        echo '<h3>Tampilan Matrik Pertama</h3>';

        tampilkanMatrik($koefisien); #memanggil function yang telah dibuat "tampilkanMatrik,ubah dan kesimpulan
        ubah($jumlah_persamaan);
        kesimpulan($jumlah_persamaan);
    }
    
    #hasil kesimpulan
    function kesimpulan($jumlah_persamaan){
        global $koefisien ;
        echo 'Sehingga: ' ;
        for($i=0; $i<$jumlah_persamaan;$i++){
            echo '<br>X<sub>'.$i .'</sub>: ' ;
            for($j=0; $j<$jumlah_persamaan+1;$j++){
                if ($j==$jumlah_persamaan){
                    echo $koefisien[$i][$j];
                }
            }
        }
    }

    #Buat Array
    function buatArray($jumlah_persamaan){
        global $koefisien ;
        for($i=0; $i<$jumlah_persamaan;$i++){
            for($j=0; $j<$jumlah_persamaan+1;$j++){
                if(isset($_GET['var'.$i.$j])){
                    $koefisien[$i][$j] = $_GET['var'.$i.$j];
                }
            }
        }
    }
    
    #handle tampilan matrik (border,kolom,baris)
    function tampilkanMatrik($koefisien){
        echo '<table border="2">';
        $rows = count($koefisien);
        for($i=0; $i<$rows;$i++){
            $cols = count($koefisien[$i]);
            echo '<tr>';
            for($j=0; $j<$cols;$j++){
                echo '<td>';
                echo $koefisien[$i][$j] .'   ';
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '<hr>';
    }
    
    #operasi gauss
    function ubah($persamaan){
      global $koefisien ;
      for($i=0;$i<$persamaan;$i++){
          $persamaan_pivot = $i + 1;
          echo 'Persamaan '.$persamaan_pivot.' menjadi pivot dan ';
          $pivot = $koefisien[$i][$i];
          for($j=0;$j<$persamaan+1;$j++){
              $koefisien[$i][$j]=$koefisien[$i][$j] /$pivot;
            }
            for($k=0;$k<$persamaan;$k++){
                if($k!=$i){
                    $pivot = $koefisien[$k][$i];
                    for($l=0;$l<$persamaan+1;$l++){
                        $koefisien[$k][$l]=$koefisien[$k][$l]-$pivot*$koefisien[$i][$l];
                    }
                }
                $persamaan_ubah = $k +1 ;
                echo 'Persamaan '. $persamaan_ubah .' telah dirubah';
                tampilkanMatrik($koefisien);
            }     
        }    
    }
?>
<div class="col align-center">
									
									<a href="index.php" class="button">Kembali</a>
									</div>
									
									</div>
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




?>



