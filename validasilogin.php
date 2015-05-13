<?php
//koneksi ke database
session_start();
$koneksi = mysqli_connect("mysql.idhostinger.com","u636191200_dika","dikadika","u636191200_tugas");
//validasi login
$password=$_POST['password']; 
$query=mysqli_query($koneksi,"select * from login WHERE password = '$password'"); 
$cek=mysqli_fetch_array($query,MYSQLI_BOTH); 
if($_POST['password'] == $cek['password']){ 
$_SESSION['password']=$_POST['password'];
echo "<script>window.location = 'data.php'</script>"; 
}else{ 
echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
 <link href="css3/bootstrap-theme.min.css" rel="stylesheet"/>
 <!-- Bootstrap core CSS -->
    <link href="css3/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css3/style1.css" rel="stylesheet">
    <link href="css3/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<p><br/><br/><br/><br/></p>
 <div class="container">
      <div class="row">  
  <div class="col-md-4">
       <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
         <h3>Silahkan Login Dahulu</h3>
      </div>
	  <form action="validasilogin.php" method="post" accept-charset="utf-8" role="form">
   <div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true"><div class="glyphicon glyphicon-volume-off"></div></span><span class="sr-only">Close</span></button>
 Maaf,  password yang anda masukkan tidak cocok. Silahkan coba lagi!
 </div>
      <form action="validasilogin.php" method="post" accept-charset="utf-8" role="form">
         <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
		   
        </div>
		<label class="checkbox"><center>
                <input type="checkbox" value="remember-me"> Remember me
               
            </center></label>
         </div>
		 
         <hr/>
         <a href="index.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back</button></a>
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
         <p>
</p>
      </form>
       </div>
    </div>
    
     </div>
  </div>
    </div>
 
 <!-- jQuery necessary for Bootstrap -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
';
}
?>