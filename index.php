<?php

require_once "config.php";
$msg="";

if(isset($_POST['submit'])) {
					
			$name =  mysqli_real_escape_string($link, $_POST['name']);
			$email =  mysqli_real_escape_string($link, $_POST['email']);
			$password =  mysqli_real_escape_string($link, $_POST['password']);
			
		if($name!='' && $email!='' &&$password!='' && $_FILES['file']['name']!=""){				
			if (!empty($_FILES['file']['name'])) {

				$fileName = $_FILES['file']['name'];
				$fileExt = explode('.', $fileName);
				$fileActExt = strtolower(end($fileExt));
				$allowImg = array('png','jpeg','jpg');
				$fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
				$filePath = 'uploads/'.$fileNew; 
		
	
				if (in_array($fileActExt, $allowImg)){
						if ($_FILES['file']['size'] > 0  && $_FILES['file']['error']==0) {  
									if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
											$query = "INSERT INTO `curdphp` (image, name, email, password) 
												VALUES ('$filePath', '$name', '$email', '$password')";				
												$data = mysqli_query($link, $query);	
												
												$msg ='<div class="col-sm-6 m-auto">
														<div class="alert alert-success alert-dismissible fade show" role="alert">
														<strong>Add record successfully</strong>
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
														</div></div>';
													
									}	
						}else{
							   $msg ='<div class="col-sm-6 m-auto">
							   <div class="alert alert-warning alert-dismissible fade show" role="alert">
								<strong>Unable to upload physical file & Data</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div></div>';
						}
				}
				
				
				else{	
					$msg = '<div class="col-sm-6 m-auto"><div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>This type of image is not allow</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div></div>';
				}
						
		  }	
		
 

	
}
else{
		$msg = '<div class="col-sm-6 m-auto"><div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>All Fields Required</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div></div>';
	}

	
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Google fonts CSS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
	<!-- Boostrap view js  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<style>

body{
	margin: 0%;
    padding: 0%;
    height: 100%;
	font-family: 'Nunito', sans-serif;
	background-image: linear-gradient( 109.6deg,  rgba(223,234,247,1) 11.2%, rgba(244,248,252,1) 91.1% );
}
.container{
	justify-content: center;
    margin: auto;
	margin: auto;
    width: 800px;
    
    border-radius: 6px;
    background-color: #fff;
}

@media only screen and (max-width: 490px) {
body {
   width: 100%;
  margin: 0;
  padding: 0;

}
.container {
    justify-content: center;
    margin: auto;
    width: 95%;
    
    border-radius: 6px;
    background-color: #fff;
}

}
</style>
    <title>Insert Page</title>
  </head>
  <body>


	



<div class="container mt-4 shadow-sm">	
<?php include "header.php"; ?>
<div class="text-center">
	<h1>CRUD Operation In PHP</h1>
		<span id="op"><?php echo $msg;?></span>
	</div>
<form action="" method="post" enctype="multipart/form-data">
	
	<div class="row  p-4  justify-content-center d-flex align-items-center">
		<div class="col-md-4">
		  
			<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
</svg>
		</div>
	
		<div class="col-md-4 " >
			<input type='file' name='file' id="upload-photo"/>
		</div>
	
	</div>

	
	
	<div class="col-md-8 m-auto pb-5">
		<div class="mb-3">
			<label for="Name" class="form-label">Name</label>
			<input type="text" class="form-control" name="name" >
		</div>
	
	<div class="mb-3">
		<label for="Email" class="form-label">Email address</label>
		<input type="email" class="form-control"  name="email" >
   </div>
  
    <div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="number" class="form-control"  name="password">
   </div>
  
       <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>

	
   </div>
</form>
  
	
</div>

 

   

   
  </body>
</html>