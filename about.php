

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
    height: 600px;
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
    height: auto;
    border-radius: 6px;
    background-color: #fff;
}

}

#img{
	width:40%;
	height:50%;
}
</style>
    <title>Insert Page</title>
  </head>
  <body>


	
<div class="container mt-4 p-2 shadow-sm border">
<?php include "header.php"; ?>
<div class="text-center">
	<h1>About Us</h1>
	<h6>Crafted with love by <a href="https://github.com/starkverma111" target="_blank" style="text-decoration:none;">Stark Verma</a></h6>
	<span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></span>
	<p>This is a Simple and Serure <b>Pure Php CURD application</b>..<br/>
	In this application you can Add, update, read or delete data also you can Search and find records<br/>
	In this project i used Php or MySQL for database or front-end like Html Css<br/> & Bootstrap 5 also little bit javascript code.
	</p>
	<img src="uploads/mypic.png" id="img"/>
	</div>



</div>

    
   
  </body>
</html>