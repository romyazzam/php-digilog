
<?php include('head.php'); ?>

<!-- Main -->
<article id="main">
	<header>
		<h2>LOGBOOK Pengunjung</h2>
		<p>Logbook Digital Data <br /> ODC & FTM</p>
		<button class="primary" onclick="window.location.href='tblogbook.php'">Cek Record DATA</button>
	</header>
	<section class="wrapper style5">
		<div class="inner">

			<h3>LOGBOOK ALAT PRODUKSI </h3>
			<i class="icon fa-calendar"></i> <?php echo date("d / M / Y"); ?>

			<hr style="margin-top: 10px; margin-bottom: 0px;" />

			<p style="margin-bottom: 15px;"> Jika melakukan perubahan, harap mengupdate data pada menu <strong><a href="Layout.php?alpro=">layout</a></strong> dan juga melaporkan kegiatan pada menu<strong><a href="Pelaporan.php"> pelaporan</a></strong>.
				Silahkan isi form dibawah ini!
			</p>

			<form method="post" action="models/submit_logbook.php" enctype="multipart/form-data" id="formAddLogbook">
				<div class="row gtr-uniform">
					
					<div class="col-12">
						<b>Pilih Alat Produksi * </b>
						<input type="radio" id="radio-odc" name="alpro" onclick="dissableFTM()"><label for="radio-odc">ODC</label>

						<input type="radio" id="radio-ftm" name="alpro" onclick="dissableODC()"><label for="radio-ftm">FTM</label>	

						<select id="sto" class="select" name="sto">
							<option value="0">Pilih STO</option>
							<?php include_once('loadSTO.php');?>
						</select>

						<select style="margin-top: 10px;" id="odc" class="select" name="alpro">';
							<option value="0">Pilih ODC</option>';
							<?php include_once('loadODC.php');?>
						</select><br>

						<select style="margin-top: -15px;" id="ftm" class="select" name="alpro">';
							<option value="0">Pilih FTM</option>';
							<?php include_once('loadFTM.php');?>
						</select><br>

					</div> 
					
					<div style="margin-top: -20px;" class="col-12">
						<b>Nama Lengkap dan NIK *</b>
					</div>
					<div class="col 12 col-12-xsmall">
						<input style="margin-bottom: -10px;" type="text" name="nama" id="nama" value="" placeholder="Nama Lengkap" required /><br />
						<input style="background-color: #f5f5f5; border-color: #2e384200; " class="form-control" type="number" name="nik" id="nik" value="" placeholder="NIK" required />
					</div>
					<div class="col-12">
						<b><br>Unit / Mitra *</b>
						<br>Pilih Unit Anda atau Tuliskan nama perusahaan jika Non TA
					</div>
					<div class="col-12">
						<input type="radio" value="Provisioning" id="radio1" name="loker" value="Provisioning"><label for="radio1">Provisioning</label><br>
						<input type="radio" value="Assurance" id="radio2" name="loker" value="Assurance"><label for="radio2">Assurance</label><br>
						<input type="radio" value="Deployment" id="radio3" name="loker" value="Deployment"><label for="radio3">Deployment</label><br>
						<input type="radio" value="Maintenance" id="radio4" name="loker" value="Maintenance"><label for="radio4">Maintenance</label><br>
						<input type="radio" id="unit-loker-lain" name="unit-loker" onclick="radioFunction()" /><label for="unit-loker-lain">Lainnya : </label>
						<input type="hidden" name="unit-loker-mitra" id="unit-loker-mitra" value="" placeholder="Mitra" required />

					</div>

					<div class="col-12">
						<b><br>Aktivitas/Kegiatan yang dilakukan *</b>
					</div>
					<div class="col-12">
						<input type="text" name="aktifitas" id="aktifitas" value="" placeholder="Aktivitas" required />
					</div>
					<div class="col-12">
						<b><br>Hasil kegiatan yang dilakukan *</b>
					</div>
					<div class="col-12">
						<input type="radio" id="hasil-aktifitas-1" name="hasil" value="LOOK" >
						<label for="hasil-aktifitas-1">Tidak ada perubahan konektivitas (Hanya melihat)</label>
					</div>
					<div class="col-12">
						<input type="radio" id="hasil-aktifitas-2" name="hasil" value="SWAP">
						<label for="hasil-aktifitas-2">Melakukan perubahan / Swap konektivitas</label>
					</div>
					<div class="col-12">
						<input type="radio" id="hasil-aktifitas-3" name="hasil" value="ADDCON">
						<label for="hasil-aktifitas-3">Menambahkan konektivitas baru dan melakukan perubahan</label>
					</div> 
					<div class="col-12">
						<b><br>Upload file pendukung hasil pekerjaan yang dilakukan</b>
						<br>*Upload foto diri, foto ODC sebelum dan sesudah kegiatan, dan file pendukung (Redline hasil swap dll/jika ada)
						<br>dalam format<strong> (jpeg/jpg/png)*</strong>
					</div>	    
					<div class="col-12">  
						<label style="margin-bottom: 0px; color: red;">File Sebelum Validasi</label>	
						<input style="color: black; font-size: 15px; background-color: rgba(144, 144, 144, 0.25);" type="file" id="file" name="file" multiple="multiple" />
						<i class="fa fa-file-image-o"></i>
					</div>

					<div class="col-12">  
						<label style="margin-bottom: 0px; color: green;">File Sesudah Validasi</label>	
						<input style="color: black; font-size: 15px; background-color: rgba(144, 144, 144, 0.25);" type="file" id="file_after"name="file_after" multiple="multiple" />
						<i class="fa fa-file-image-o"></i>
					</div>

					<div class="col-12">
						<ul class="actions">
							<li><br><button type="submit" class="primary" id="">Submit</button>
							</li>
						</ul>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>



<script>
	function radioFunction() {
		if(document.getElementById("unit-loker-lain").checked){
			var x = document.getElementById("unit-loker-mitra");
			x.setAttribute("type", "text");
		}
	}

	function dissableFTM(){
		$("#odc").removeAttr('hidden');
		$("#ftm").attr({'hidden':'hidden','name':''});
		
	}
	function dissableODC(){
		$("#odc").attr({'hidden':'hidden','name':''});
		$("#ftm").removeAttr('hidden');
	}

	$("#sto").change(function(){
		var id_sto = $(this).val();
		$.post("loadODC.php",
		{
			id_sto_ajax: id_sto,
			test_ajax: "cek"
		},
		function(data){
			document.getElementById("odc").innerHTML = data;
		});
	});


	$("#sto").change(function(){
		var id_ftm = $(this).val();
		$.post("loadFTM.php",
		{
			id_ftm_ajax: id_ftm,
			test_ajax: "cek"
		},
		function(data){
			document.getElementById("ftm").innerHTML = data;
		});
	});


</script>

<?php include('foot.php'); ?>
