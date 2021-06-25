<?php
require_once "config.php";
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
    border-radius: 8px;
	width:60%;
    background-color:#fff;
}
table{color:pink;
    border-radius: 20px;
 
}
#img{
	height:80px;
	width:80px;
	border-radius: 50px;
	padding: 2px;
	background-color:pink;
	object-fit: cover;
}
#sh{width:40%;}
@media only screen and (max-width: 560px) {
  .container{
    width:100%;
	
  }
  
  #sh{
    width:80%;
	margin:0px
	padding:0px;
}

.

</style>
    <title>Insert Page</title>
  </head>
  <body>
  
<?php include "search.php"; ?>

<div class="container mt-2 p-2 ">
<?php include "header.php"; ?>
<div class="jumbotron text-center">
	<h3>Show all tables</h3>
	  <form action="" method="post"> 
  <div class="d-flex mb-3 m-auto"  id="sh">
 
          
			<input type="text" class="form-control" placeholder="Search" name="search">&nbsp;&nbsp;
		        <button type="submit" name="submit" class="btn btn-primary">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
				</svg>
			</button>
	
  </div> </form>
	</div>
<div class="table-responsive">

		<table class="table text-center">
		  <thead>
			<tr>
			  <th scope="col">id</th>
			  <th scope="col">Image</th>
			  <th scope="col">Name</th>
			  <th scope="col">Email</th>
			  <th scope="col">Password</th>
			  <th scope="col">Edit</th>
			  <th scope="col">Delete</th>
			</tr>
		  </thead>
		  <tbody>

		 <?php


		  $sql = "SELECT * FROM curdphp";
		  $result = $link->query($sql);
		  if ($result->num_rows > 0) {
		   // output data of each row
		   while($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>" . $row["id"]. "</td>
			<td><img src=" . $row["image"]. " id='img'/></td>
			<td>" . $row["name"]. "</td>
			<td>" . $row["email"] . "</td>
			<td>" . $row["password"] . "</td>

			<td><a href='update.php?id=$row[id] &image=$row[image] &name=$row[name] &email=$row[email] &password=$row[password]' target='_blank' 
			class='btn btn-warning'>
			<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' 
			viewBox='0 0 16 16'>
		  <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
		</svg>
			
			</a></td>
			<td><a href='delete.php?id=$row[id]' onclick='return checkdelete()' class='btn btn-danger'>
			
			
			<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' 
			class='bi bi-trash-fill' viewBox='0 0 16 16'>
		  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
		</svg>
			
			</a></td>
			</tr>";
			}
			echo "</table>";
			} 
else 
{ 
echo "0 results"; }

?>
</table>
</div>
</div>
    	<script> 
		
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this data from database ??');
		}
		
		
		
		</script>
   
  </body>
</html>