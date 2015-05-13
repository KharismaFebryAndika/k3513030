<?php
//Komentar pertama
//komentar kedua
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TugasFOSS-K3513030</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
</head>

<body>
<p><br/><br/><br/><br/></p>
	<div class="container">
      <div class="row">
	 <div class="col-md-4">
	      <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-header">
         <center><h3>Silahkan Login</h3>
      </div>
      <form action="validasilogin.php" method="post" accept-charset="utf-8" role="form">
	  <?php
                                if (isset($_POST[password])) {
                                    include 'validasilogin.php';
                                    $pass = $_POST['password'];
                                    $koneksi = mysqli_connect("localhost","root","","contoh");
                                    $query = "SELECT * FROM login WHERE password = '$password'";
                                    $sintak = mysqli_query($koneksi,$query);
                                    if ($data = mysqli_fetch_array($sintak,MYSQLI_BOTH)) {
                                       
                                        $_SESSION['password'] = $password;
										
                                        echo "<meta http-equiv=refresh content='0; url='login.php'>";
                                    }
                                    else  {
                                        echo ("<div class='alert alert-danger'> password anda salah </div>");
                                    }
                                }
                                ?>
         </div>
         <div class="form-group">
            <center><label for="password">Password</label>
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <center><input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
         <hr/>
         <center><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
         <p>
</p>
      </form>
       </div>
    </div>
    
     </div>
  </div>
    </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<nav id="footer">
        <div class="container">
            <div class="pull-center fnav">
                <p>COPYRIGHT © 2014. by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Kharisma Febry Andika</a></p>
            </div>
            <div class="pull-center fnav">
            </div>
        </div>
    </nav>
