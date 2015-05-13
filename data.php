<?php 
$koneksi = mysqli_connect("mysql.idhostinger.com","u636191200_dika","dikadika","u636191200_tugas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.png"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
         <!--/.well -->
        </div><!--/span-->		
        <div class="span9">
		
		<br>
			<div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Welcome on <strong><span class="color">my Blog</span></strong></h1>
                <p class="lead">Kharisma Febry Andika<br><strong>PTIK 2013</strong></br></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

<div class="container">
	<div class="row">
		<div id="data-mahasiswa"></div>
	</div>
</div>

<div id="dialog-mahasiswa" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Tambah Data Mahasiswa</h3>
	</div>
	<div class="modal-body"></div>
	<div class="modal-footer">
		<button id="simpan-mahasiswa" class="btn btn-success">Save</button>
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
		
	</div>
</div>

<center><a href="#dialog-mahasiswa" id="0" class="btn tambah" data-toggle="modal"><strong>Insert Data</strong></a></center>

<br>
<center><a href="javascript:window.print()"><strong><input id="tombol" type="submit" value="Print" name="Cetak"></strong></a></center>

<script src="jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="aplikasi.js"></script>

</body>
</html>

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<nav id="footer">
        <div class="container">
            <div class="pull-center fnav">
                <center><p>COPYRIGHT © 2014. by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Kharisma Febry Andika</a></p></center>
            </div>
            <div class="pull-center fnav">
            </div>
        </div>
    </nav>
	

