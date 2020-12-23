
<html>
	<head>
		<title> Create Resume </title>
		
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
	</head>
	<body>
		<div class="container">
			<br>
			<h2>Create Resume</h2><br>
			<form action="resume" method="POST" >
				@csrf
				
				<div class="form-group"> 
					<label>Name</label>
					<input type="text" class="form-control" name="name"  required>
				</div>
				<div class="form-group"> 
					<label>Address</label>
					<input type="text" class="form-control" name="address"  required>
				</div>
				<div class="form-group"> 
					<label>Phone Number</label>
					<input type="text" class="form-control" name="phonenumber"  required>
				</div>
				
				<div class="form-group">
					<label for="exampleFormControlInput1">Email address</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" name="email" >
				</div>      
				
				
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Career Objective</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="CareerObjective"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Job Experience</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="JobExperience"></textarea>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Academic Qualification</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="AcademicQualification"></textarea>
				</div>
				<div class="form-group"> 
					<label>Key Skills</label>
					<input type="text" class="form-control" name="KeySkills"  required>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Extra-curricular Activites</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Activites"></textarea>
				</div>
				
				
				<p align="right">
					<button  type="submit" class="btn btn-primary" name="submit"> Save Resume  </button>
				</p>
			</form>
			
		</div>
		
		
		
		
		
	</body>
</html>				