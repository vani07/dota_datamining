<?php 
include_once "index.php";
include_once "connection.php";
 $query = "SELECT nama, skillsatu, skilldua, skilltiga, skillempat, skilllima, skillenam, 
				 tipe FROM skill WHERE nama = 'SVEN'";
				 $result = mysqli_query($conn, $query);

				 if (mysqli_num_rows($result) > 0) {
					    // output data of each row
				 	// echo "b";
					    while($row = mysqli_fetch_array($result)) {
					    	$name = $row["nama"];
					    	echo "<h2>".$name."</h2>";
					    	echo "<br>";
					    	echo " <img src='assets/img/".$name."/hero.png'>";
					    	echo "<br>";
					    	echo "<br>";
					    	echo "<div class='form-group'>";
							echo "<label class='form-group'>Skill 1</label>";
							echo "<br>";
							echo "<textarea rows='10' cols='50' name='inputskill1'>".$row["skillsatu"]."</textarea>";
							echo "<br></div>";
					    }
				 }


 ?>
