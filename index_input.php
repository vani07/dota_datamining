<?php include_once "connection.php"; ?>
<html>
<head>
	<title>Input data pertandingan</title>
	<link href="assets/styles/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form action="input.php" method="post">
		<div class="row" style="width:100%; background-color:#3498db; color:white; padding-top:20px;">
			<div class="col-md-3 col-md-offset-2">
				<div class="form-group">
						<label class="form-group">Match ID</label>
						<br>
						<input type="text" class="form-control" name="matchid" required>
						<!-- <select class="form-control" name="hero1">
							<option value ="EARTHSHAKER">EARTHSHAKER</option>
							<option value ="SVEN">SVEN</option>
							<option value ="TINY">TINY</option>
						</select> -->
						<br>
				</div>
			</div>
		</div>
		<br>
		<div class="row" style="width:1200px;">	
			<div class="col-md-3 col-md-offset-2">
				<div class="form-group">
					<label class="form-group">Hero 1</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero1" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 2</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero2" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 3</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero3" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 4</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero4" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 5</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero5" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill  ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
			</div>
			<div class="col-md-3 col-md-offset">
				<div class="form-group">
					<label class="form-group">Hero 6</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero6" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 7</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero7" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 8</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero8" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 9</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero9" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>
				<div class="form-group">
					<label class="form-group">Hero 10</label>
					<br>
					<!-- <input type="text" class="form-control" placeholder="Contoh: Muka saya menjadi pucat" name="inputgejala"> -->
					<select class="form-control" name="hero10" required>
						<option></option>
						<?php 
						$query = "SELECT nama FROM skill ORDER BY nama ASC";
									 $result = mysqli_query($conn, $query);

									 if (mysqli_num_rows($result) > 0) {
										    // output data of each row
							
										    while($row = mysqli_fetch_array($result)) {
										    	$name = $row["nama"];
										    	echo "<option value='".$name."'>".$name."</option>";
										    	
										    }
									 }


					 ?>
					</select>
					<br>
				</div>

			</div>

		</div>
	<center>
		<button class="btn btn-primary" value="submit"> Submit</button>
	</center>
</form>
		
	
	
</body>
</html>
