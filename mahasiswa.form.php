<?php
require 'koneksi.php';


$koneksi = mysqli_connect("mysql.idhostinger.com","u636191200_dika","dikadika","u636191200_tugas");
$kd_mhs = $_POST['id'];

$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE kd_mhs=".$kd_mhs
), MYSQLI_BOTH);

if($kd_mhs> 0) { 
	$nim = $data['nim'];
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$kelas = $data['kelas'];
	$kd_status = $data['status'];
	
	if($data['status']==1) {
		$status = "Aktif";
	} else {
		$status = "Tidak Aktif";
	}

} else {
	$nim ="";
	$nama ="";
	$alamat ="";
	$kelas ="";
	$status = "";
}

?>
<form class="form-horizontal" id="form-mahasiswa">
	<div class="control-group">
		<label class="control-label" for="nim">NIM</label>
		<div class="controls">
			<input type="text" id="nim" class="input-medium" name="nim" value="<?php echo $nim ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Nama</label>
		<div class="controls">
			<input type="text" id="nama" class="input-xlarge" name="nama" value="<?php echo $nama ?>">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="alamat">Alamat</label>
		<div class="controls">
			<textarea id="alamat" name="alamat"><?php echo $alamat ?></textarea>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="kelas">Kelas</label>
		<div class="controls">
			<select class="input-small" name="kelas">
				<?php 
				if($kd_mhs > 0) { ?>
					<option value="<?php echo $kelas ?>"><?php echo $kelas ?></option>
				<?php } ?>
				<option value="A">A</option>
				<option value="B">B</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="status">Status</label>
		<div class="controls">
			<select class="input-medium" name="status">
				<?php 
				if($kd_mhs > 0) { ?>
					<option value="<?php echo $kd_status ?>"><?php echo $status ?></option>
				<?php } ?>
				<option value="1">Aktif</option>
				<option value="0">Tidak Aktif</option>
			</select>
		</div>
	</div>
</form>

<?php

?>
