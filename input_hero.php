<?php 
	include_once "connection.php";
 ?>

<html>
<head>
	<title>Input data pertandingan</title>
	<link href="assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/styles/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form action="insert.php" method="post">
		<div class="row" style="width:100%; background-color:#3498db; color:white; padding-top:20px;">
			<div class="col-md-3 col-md-offset-2">
				<div class="form-group">
					<label class="form-group">Hero's name</label>
					<br>
					<input type="text" class="form-control"  name="inputnama">
					<br>
					<br>
					<label class="form-group">Hero's type</label>
					<br>
					<select class="form-control" name="inputtipe" style="color:black;">
						<option value="1">Strength</option>
						<option value="2">Agility</option>
						<option value="3">Intelligence</option>
					</select>
				<br>
				<button class="btn btn-success" value="submit"> Submit</button>
				</div>
				

			</div>
		</div>
		<br>
		<!-- <div class="row" style="width:1200px;">	
			<div class="col-md-3 col-md-offset-2">
				<div class="form-group">
					<label class="form-group">Skill 1</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill1"></textarea>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Skill 2</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill2"></textarea>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Skill 3</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill3"></textarea>
					<br>
				</div>
				
			</div>	
			<div class="col-md-3 col-md-offset-2">
				<div class="form-group">
					<label class="form-group">Skill 4</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill4"></textarea>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Skill 5</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill5"></textarea>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Skill 6</label>
					<br>
					<textarea rows="15" cols="50" name="inputskill6"></textarea>
					<br>
				</div>
			</div>

		</div> -->
	<center>
		
	</center>
</form>
	<div class="row" style="width:1200px;">	
			<div class="col-md-3 col-md-offset-2">	
				<h2> Strength</h2>
				<br>		
					<?php 
					$query = "SELECT nama FROM skill WHERE tipe = 1 ORDER BY nama ASC";
								 $result = mysqli_query($conn, $query);

								 if (mysqli_num_rows($result) > 0) {
									    // output data of each row
								 	// echo "b";
									    while($row = mysqli_fetch_array($result)) {
									    	$name = $row["nama"];
									    	echo "<p>".$name."</p>";
									    	echo "<br>";
									    }
								 }


					 ?>
			</div>
			<div class="col-md-3 ">
				<h2>Agility</h2>
				<br>
					<?php 
					$query = "SELECT nama FROM skill WHERE tipe = 2 ORDER BY nama ASC";
								 $result = mysqli_query($conn, $query);

								 if (mysqli_num_rows($result) > 0) {
									    // output data of each row
								 	// echo "b";
									    while($row = mysqli_fetch_array($result)) {
									    	$name = $row["nama"];
									    	echo "<p>".$name."</p>";
									    	echo "<br>";
									    }
								 }


					 ?>
			</div>
			<div class="col-md-3">
				<h2>Intelligence</h2>
				<br>
					<?php 
					$query = "SELECT nama FROM skill WHERE tipe = 3 ORDER BY nama ASC";
								 $result = mysqli_query($conn, $query);

								 if (mysqli_num_rows($result) > 0) {
									    // output data of each row
								 	// echo "b";
									    while($row = mysqli_fetch_array($result)) {
									    	$name = $row["nama"];
									    	echo "<p>".$name."</p>";
									    	echo "<br>";
									    }
								 }


					 ?>
			</div>
	</div>
	
</body>
</html>
