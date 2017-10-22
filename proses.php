<?php 
	include_once "template/header.php";
	$inputan = $_GET["inputhero"];
	$file_transaksi="data.txt";
						$linecount= 0;
						$handle = fopen($file_transaksi, 'r');

							while(!feof($handle)){
								$line = fgets($handle, 4096);
								$linecount = $linecount + substr_count($line, PHP_EOL);
							}
							
							fclose($handle);


 ?>

 <script type="text/javascript">
 	   $(document).ready(function(){

		    $("#detail1").hide();
		    $("#detail2").hide();
		    $("#detail3").hide();
		    
		    $("#cek1").click(function(){
		        $("#detail1").slideToggle("slow");
		    });

		    $("#cek2").click(function(){
		        $("#detail2").slideToggle("slow");
		    });

		    $("#cek3").click(function(){
		        $("#detail3").slideToggle("slow");
		    });

		});
 </script>
<body style="background-color:black;color:white;">
		<div class="header-process"><center><h1 style="font-family:deColypLi;">From <?php echo $linecount; ?> Data.<br/><br/>The result is...</h1></center></div>
			  <div class="container" style="background-color:#000000;color:white;width:70%;font-family:deColypLi;">

			      <div class="row row-centered" style="padding-bottom:50px;">
			      <h1 style="font-family:deColypLi;" >If you choose <?php echo $inputan ?></h1>
			      <br/>
			        <div class="col-md-4 col-centered" style="width:300px;text-align:center;">
			          <div class="form-group">
			            <img class="img-responsive img-rounded" src="assets/img/<?php echo $inputan ?>/hero.png">
			            <label class="form-group"><?php echo $inputan ?></label>
			          </div>
			        </div>
			        <h1 style="font-family:deColypLi;">In the game, <?php echo $inputan ?> has good relationship with :</h1>

			      </div>
			      <!-- <div class="row row-centered" > -->
				<?php 
						
				/////Association
				function associationRule($x,$y,$z){
						
						$inputan = $_GET["inputhero"];
						// $inputan = "ABADDON";
					
						$hero = file('hero.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
						$data = file('data.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
						$hero1 = count($hero)-1;
						$hero2 = count($hero);
						$hero_loop = (pow($hero1,2)+ $hero1)/2;

						$item_array = array();

						



						//cek jumlah data
						$file_transaksi="data.txt";
						$linecount= 0;
						$handle = fopen($file_transaksi, 'r');

							while(!feof($handle)){
								$line = fgets($handle, 4096);
								$linecount = $linecount + substr_count($line, PHP_EOL);
							}
							
							fclose($handle);

						//cek data per hero	
						if (!empty($inputan)) {
							foreach ( $hero as $value) {
								$total_per_hero[$value] = 0;
								foreach ($data as $hero_data) {
									if (strpos($hero_data, $value) !== false){
										$total_per_hero[$value]++;
									}
								}
							}

							//hilangin keempat baris tanda garis miring dibawah ini untuk menampilkan Jumlah hero

							// echo "<pre>";
							// echo "\r\nStep 1: Jumlah hero\r\n";
							// print_r($total_per_hero);
							// echo "</pre>";

							//cek jumlah gabungan data hero 1 dengan hero lain
							for($i = 0; $i < $hero1; $i++){
								for($j = $i+1; $j < $hero2; $j++){
									$hero_array[$hero[$i].'+'.$hero[$j]] = 0;

									foreach ($data as $hero_data) {
										if ((strpos($hero_data,$hero[$i]) !== false) && (strpos($hero_data,$hero[$j])) !== false) {
											$hero_array[$hero[$i].'+'.$hero[$j]]++;
										}
									}
								}
							}

							

							// echo "<pre>";
							// echo "\r\nStep 2: Jumlah Gabungan hero\r\n";
							// print_r($hero_array);
							// echo "</pre>";

								//hero STR
							$check_confidence_terbesar = 0;
							$check_gabunganhero_terbesar_a = 0;
							$check_gabunganhero_terbesar_b = 0;
							$nama_hero_b = "";
							$check_value_a = 0;
							$check_value_b = 0;

							foreach ($hero_array as $ia_key => $ia_value) {
								foreach ($total_per_hero as $tpi_key => $tpi_value) {

									if (strpos($ia_key, $tpi_key) !== false) {
										// echo "<pre>";
										// echo "[+] $ia_key($ia_value) --> $tpi_key($tpi_value) =>". $ia_value / $tpi_value."\r\n\r\n";

										// echo "</pre>";


										//mencari gabungan terbesar hero 
										$query = "SELECT nama FROM skill WHERE tipe = $x ORDER BY nama ASC";
											
										$result = mysqli_query($y, $query);

										list($a,$b) = explode('+', $ia_key);
										// echo "$ia_key"."<br>";

										if (mysqli_num_rows($result) > 0) {
												    // output data of each row
									
												while($row = mysqli_fetch_array($result)) {
														 $name = $row["nama"];

														 //mengecek gabungan terbesar

												  		 if ($b == $inputan && $a == $name) {

															// echo "nama b : ".$b." = ".$ia_value."<br>";
															// echo "nama a : ".$a." = ".$ia_value."<br>";

															$check_value_a = $ia_value;
																if ($check_gabunganhero_terbesar_a < $check_value_a ) {
																 	$check_gabunganhero_terbesar_a = $check_value_a;
																 	// echo $check_gabunganhero_terbesar."<br>";
																 	$nama_hero_a = $a;


																 } 

															} 

														  if ($a == $inputan && $b == $name) {

															// echo "nama b : ".$b." = ".$ia_value."<br>";
															// echo "nama a : ".$a." = ".$ia_value."<br>";

															$check_value_b = $ia_value;
																if ($check_gabunganhero_terbesar_b < $check_value_b ) {
																 	$check_gabunganhero_terbesar_b = $check_value_b;
																 	// echo $check_gabunganhero_terbesar."<br>";
																 	$nama_hero_b = $b;


																 } 

															}


															//

															if ($check_gabunganhero_terbesar_a > $check_gabunganhero_terbesar_b) {

																$check_gabunganhero_terbesar = $check_gabunganhero_terbesar_a; 
																$nama_final = $nama_hero_a;
															
															}else{

																$check_gabunganhero_terbesar = $check_gabunganhero_terbesar_b; 
																$nama_final = $nama_hero_b;
															}
														}
								 			}
											
									}
								}
							}
						}
						// echo "Jumlah gabungan terbanyak hero $inputan :  ".$check_gabunganhero_terbesar." dengan $nama_herostr";
						// echo "<br>";
						// echo "jumlah data = ".$linecount;
						// echo "<br>";
						
						$detail = "Terdapat $check_gabunganhero_terbesar pertandingan dimana $inputan dan $nama_final  dalam satu pertandingan";

						//menghitung support
						$confidence = round((($check_gabunganhero_terbesar/$total_per_hero[$inputan])*100),2);
						$support = round((($check_gabunganhero_terbesar/$linecount)*100),2);
						$support = "Support: ".$support."%";
						$hasil1= "Confidence:   ".$confidence."% ";

						if ($inputan == "") {
							$hasil1 ="Maaf";
					
						}
	

						// //warna
						if ($z == "red" ) {
							$color = "str";
						} elseif ($z == "blue"){
							$color = "int";
						} else {
							$color = "agi";
						}

						echo "<div class='col-md-3 col-centered'>
			         			<div class='result' >
			            			<div class='form-group'>
			            			
							            <label >".$nama_final."</label> <img src='assets/img/type/".$color.".png' style='float:right;'>
							            <img class='img-responsive img-rounded' src='assets/img/".$nama_final."/hero.png'>
							            <br/>
							            <div>
							            <button id='cek".$x."' class='btn btn-default form-control'>Details</button>
						            	</div>
						            </div>
						            <div class='form-group'>
							            <div id='detail".$x."'>
							            <label >
							            	".$hasil1."
							            </label>
							            <br/>
							            <label >
							            	".$support."
							            </label>
							            <br/>
							            <label  style='font-size:18px';>
							            	".$detail."
							            </label>
							            </div>
							            
						            </div>
						         </div>
							</div>";

						
					};

						// show hero
					echo "<div class='row row-centered' >";

							associationRule(1,$conn,"red");

							associationRule(2,$conn,"green");
	
							associationRule(3,$conn,"blue");

					echo "<br/>
			                <h3 style='font-family:deColypLi;''>You can Ban or Pick these heroes to achieve victory </h3>
			      </div>";	

						 ?>
						

	 </div>
<div class="bottom-container">
<hr class="style17">
	 <div class="container">
	 	<div class="row row-centered bottom-col-adjust">
			 	<div class="col-md-4 col-md-centered">
			 		<div class="hero-table">
			 		<?php 
			 			$query = "SELECT nama FROM skill WHERE tipe=1 ORDER BY nama ASC ";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$kame = $row["nama"];
										    	echo "<a class='hero-bottom' href='proses.php?inputhero=".$kame."'><img src='assets/img/".$kame."/hero.png' data-toggle='tooltip' data-placement='left' title='".$kame."' width='80'></a>";
										    	
										    }
									 }


			 		 ?>
			 		 </div>
			 	</div>
			 	<div class="col-md-4 col-md-centered">
			 		<div class="hero-table">
			 		<?php 
			 			$query = "SELECT nama FROM skill WHERE tipe=2 ORDER BY nama ASC ";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$kame = $row["nama"];
										    	echo "<a class='hero-bottom' href='proses.php?inputhero=".$kame."'><img src='assets/img/".$kame."/hero.png' data-toggle='tooltip' data-placement='left' title='".$kame."' width='80'></a>";
										    	
										    }
									 }


			 		 ?>
			 		 </div>
			 	</div>
			 	<div class="col-md-4 col-md-centered">
			 		<div class="hero-table">
			 		<?php 
			 			$query = "SELECT nama FROM skill WHERE tipe=3 ORDER BY nama ASC ";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$kame = $row["nama"];
										    	echo "<a class='hero-bottom' href='proses.php?inputhero=".$kame."'><img src='assets/img/".$kame."/hero.png' data-toggle='tooltip' data-placement='left' title='".$kame."' width='80'></a>";
										    	
										    }
									 }


			 		 ?>
			 		 </div>
			 	</div>
			 </div>
		</div> 
	 </div>
			 

		<script type="text/javascript">
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip(); 
			});		
		</script>
 </body>
</html>