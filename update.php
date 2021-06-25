<?php

require_once "config.php";

			$id = 	mysqli_real_escape_string($link, $_GET['id']);
		  $image =  mysqli_real_escape_string($link, $_GET['image']);
		   $name =  mysqli_real_escape_string($link, $_GET['name']);
		  $email =  mysqli_real_escape_string($link, $_GET['email']);
	   $password =  mysqli_real_escape_string($link, $_GET['password']);
			

$msg="";

if(isset($_POST['submit'])) {
					
			$nname =  mysqli_real_escape_string($link, $_POST['name']);
			$eemail =  mysqli_real_escape_string($link, $_POST['email']);
			$ppassword =  mysqli_real_escape_string($link, $_POST['password']);
			
		if($nname!='' && $eemail!='' && $ppassword!=''){				
	

				$fileName = $_FILES['file']['name'];
				$fileExt = explode('.', $fileName);
				$fileActExt = strtolower(end($fileExt));
				$allowImg = array('png','jpeg','jpg');
				$fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
				$filePath = 'uploads/'.$fileNew; 
		
	
				if (in_array($fileActExt, $allowImg)){
						if ($_FILES['file']['size'] > 0  && $_FILES['file']['error']==0) {  
									if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
											$query = "UPDATE curdphp
											SET image='$filePath', name='$nname', email='$eemail',password='$ppassword'
											WHERE id='$id'";				
												$data = mysqli_query($link, $query);	
												
												$msg ='<div class="col-sm-6 m-auto">
														<div class="alert alert-success alert-dismissible fade show" role="alert">
														<strong>Update record successfully</strong>
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

#img{
	height:90px;
	width:90px;
	border-radius: 50px;
	padding: 2px;
	
	object-fit: cover;
}
</style>
    <title>Insert Page</title>
  </head>
  <body>


	

	

<div class="container mt-4 shadow-sm">	
<?php include "header.php"; ?>
<div class="jumbotron text-center">
	<h1>CURD OPRATION IN PHP</h1>
		<span id="op"><?php echo $msg;?></span>
	</div>
<form action="" method="POST" enctype="multipart/form-data">
	
	<div class="row  p-4  justify-content-center d-flex align-items-center">
		<div class="col-md-4">
	<img src="<?php echo $image;?>" id="img"/>
		</div>
	
		<div class="col-md-4 " >
			<input type='file' name='file' id="upload-photo"/>
		</div>
	
	</div>

	
	
	<div class="col-md-8 m-auto pb-5">
		<div class="mb-3">
			<label for="Name" class="form-label">Name</label>
			<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
			<input type="text" class="form-control" name="name"  value="<?php echo $name;?>" >
		</div>
	
	<div class="mb-3">
		<label for="Email" class="form-label">Email address</label>
		<input type="email" class="form-control"  name="email" value="<?php echo $email;?> ">
   </div>
  
    <div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="number" class="form-control"  name="password" value="<?php echo $password;?>">
   </div>
  
       <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>

	
   </div>
</form>
  
	
</div>

 

   

   
  </body>
</html>