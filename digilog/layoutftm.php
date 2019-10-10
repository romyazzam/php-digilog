
<?php
include('head.php');
if(!isset($_GET['alpro'])){
	$_GET['alpro'] = 'FTM-GSK-OA-01';
}
if (!isset($_GET['tb_ftm']) && !isset($_GET['tb_panel'])){
	$_GET['tb_ftm'] = '1';
}
if (!isset($_GET['tb_panel'])){
	$_GET['tb_panel'] = 'PANEL1';
}
?>

<!-- Main -->
<article id="main">
	<!-- modaladddata -->
	<div style="margin-top: 25px;" class="modal fade" id="modalAddDataFTM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<style>
						img {
							width: 33%;
							height: auto;
							margin-bottom: -40px;
						}
					</style>

					<img src="images/logotelkom.png" type="image/jpg" width="210" height="100" style="margin-top: -20px; margin-bottom: -5px;">

					<h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Add Data FTM</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" id="formAddDataFTM">
					<div class="modal-body text-dark">
						<div class="row gtr-uniform" >

							<div class="form-group" style="margin-left: 0px; margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Lokasi FTM</label>
								<select style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="nm_ftm" id="input-add-nm-ftm" aria-describedby="textHelp" required="">
									<option value="" class="text-dark">Select</option>
									<option value="FTM-GSK-OA-01" class="text-dark">FTM-GSK-OA-01</option>
									<option value="FTM-GSK-OA-02" class="text-dark">FTM-GSK-OA-02</option>
									<option value="FTM-LKS-OA-01" class="text-dark">FTM-LKS-OA-01</option>
								</select>
							</div>

							<div class="form-group" style="margin-left: 0px; margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Type FTM</label>
								<select style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="id_kolom" id="input-add-id-tabel" aria-describedby="textHelp" required="">
									<option value="" class="text-dark">Select</option>
									<option value="1" class="text-dark">FTM 24</option>
									<option value="2" class="text-dark">FTM 12</option>
								</select>
							</div>

							<div class="form-group" style="margin-left: 0px; margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Panel</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_panel" id="input-add-id-panel" aria-describedby="textHelp" placeholder="" required="">
							</div>

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in FTM</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_row" id="input-add-row" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Slot</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_col" id="input-add-column" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="padding-top: 10px;">
								<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in Slot</label>
								<input style=" font-size: 14px; color: black;" type="text" class="form-control" name="port" id="input-add-port" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="margin-top: -20px;">
								<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">ODC</label>
								<input style=" font-size: 14px;" type="text" class="form-control" name="odc" id="input-add-odc" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="padding-top: 0px;">
								<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Core</label>
								<input style=" font-size: 14px;" type="text" class="form-control" name="core" id="input-add-core" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="padding-top: 0px;">
								<label for="" style=" font-size: 14px; margin-bottom: -1px;" class="text-dark">FTM</label>
								<input style=" font-size: 14px;" type="text" class="form-control" name="ftm" id="input-add-ftm" aria-describedby="textHelp" placeholder="Enter text">
							</div>

						</div>
					</div>

					<div class="modal-footer">
						<button class="primary" id="buttonSaveDataFTM" onclick="saveAddDataFTM()">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modaladddata -->

	<!-- modal edit -->
	<div style="margin-top: 25px;" class="modal fade" id="modalEditDataFTM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<style>
						img {
							width: 33%;
							height: auto;
							margin-bottom: -40px;
						}
					</style>

					<img src="images/logotelkom.png" type="image/jpg" width="210" height="100" style="margin-top: -20px; margin-bottom: -5px;">

					<h5 style="margin-top: 80px; margin-bottom: -10px;" class="modal-title text-dark " id="exampleModalLabel">Edit Data FTM</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" id="formEditDataFTM">
					<div class="modal-body text-dark">
						<div class="row gtr-uniform" >
							<div class="form-group">
								<input type="hidden" name="id" id="input-edit-id-record" >
							</div>

							<div class="form-group" style="margin-left: -25px; padding-top: 20px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Lokasi FTM</label>
								<input type="text" style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="nm_ftm" id="input-edit-nm_ftm" aria-describedby="textHelp" readonly="">

							</div>

							<!--<div class="form-group" style="margin-left: 0px; padding-top: 20px; margin-bottom: 0px;">-->
								<!--	<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Type FTM</label>-->
								<!--	<select type="number" style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="id_kolom" id="input-edit-id-kolom" aria-describedby="textHelp" readonly="">-->

									<!--</div>-->

									<div class="form-group" style="margin-left: 0px; padding-top: 20px; margin-bottom: 0px;">
										<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Type FTM</label>
										<input type="number" style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="id_kolom" id="input-edit-id-kolom" aria-describedby="textHelp" readonly="">
									</div>

									<div class="form-group" style="padding-top: 20px; margin-bottom: 0px;">
										<label for="" style="margin-bottom: -1px; font-size: 14px;" class="text-dark">Panel</label>
										<input style=" font-size: 14px;" style="color: black;" type="number" class="form-control" name="id_panel" id="input-edit-id-panel" aria-describedby="textHelp" placeholder="" readonly="">
									</div>

									<div class="form-group" style="padding-top: 10px; margin-bottom: 0px;">
										<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in Slot</label>
										<input style=" font-size: 14px;" style="color: black;" type="text" class="form-control" name="port" id="input-edit-port" aria-describedby="textHelp" placeholder="Enter text" readonly="">
									</div>

									<div class="form-group" style="padding-top: 10px;">
										<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">ODC</label>
										<input style=" font-size: 14px;" type="text" class="form-control" name="odc" id="input-edit-odc" aria-describedby="textHelp" placeholder="Enter text" required="">
									</div>

									<div class="form-group" style="padding-top: 0px;">
										<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Core</label>
										<input style=" font-size: 14px;" type="text" class="form-control" name="core" id="input-edit-core" aria-describedby="textHelp" placeholder="Enter text" required="">
									</div>
									<div class="form-group" style="padding-top: 0px;">
										<label for="" style=" font-size: 13px; margin-bottom: -1px;" class="text-dark">FTM</label>
										<input style=" font-size: 14px;" type="text" class="form-control" name="ftm" id="input-edit-ftm" aria-describedby="textHelp" placeholder="Enter text">
									</div>

								</div>
							</div>

							<div class="modal-footer">
								<!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
								<button type="button" class="primary" data-toggle='modal' data-target='#modalDeleteDataFTM'>Delete</button>
								<!-- id="buttondeleteEditDataFTM" onclick="saveDeleteDataFTM()" -->
								<button class="primary" id="buttonSaveEditDataFTM" onclick="saveEditDataFTM()">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- modal edit -->

			<!-- modal delete -->
			<div style="margin-top: 25px;" class="modal fade" id="modalDeleteDataFTM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<meta name="viewport" content="width=device-width, initial-scale=1.0">
							<style>
								img {
									width: 33%;
									height: auto;
									margin-bottom: -40px;
								}
							</style>

							<img src="images/logotelkom.png" type="image/jpg" width="210" height="100" style="margin-top: -20px; margin-bottom: -5px;">

							<h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Delete Data FTM</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" id="formDeleteDataFTM">
							<div class="modal-body text-dark">
								<div class="row gtr-uniform" >
									<div class="form-group">
										<label for="" class="text-dark">Apakah anda yakin akan menghapus data record ?</label>
										<input style=" color: red; width: 30%;" type="number" class="form-control" name="id_record" id="input-delete-id-record" aria-describedby="textHelp" placeholder="" readonly=""></input>
										<input style=" background-color: white; margin-top: -40px; margin-left: 140px; color: white; width: 30%;" type="text" class="form-control" name="tabel" readonly="" value="tb_ftm"></input>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
								<button type="button" class="primary" id="buttonSaveDeleteDataFTM" onclick="saveDeleteDataFTM()">Delete</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- modal delete -->

			<div id="alert_message" style="padding-right: 250px; padding-top: 0px; "></div>
			<section class="wrapper style5">
				<div class="inner">
					<h3>List Data Layout FTM</h3>
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<style>
						img {
							width: 33%;
							height: auto;
							margin-bottom: -40px;
						}
					</style>

					<img src="images/teknis1.jpg" type="image/jpg" width="260" height="150" style="margin-top: 0px;"><img src="images/teknis.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px;"><img src="images/teknis3.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px;">

					<hr />

					<h4 style="color: #b7181a; margin-bottom: 0px; margin-top: -40px; text-shadow: 0px 1px #212529;">DIGITALISASI ODC & FTM</h4>
					<p style="margin-bottom: 0px;">Berikut layout ODC & FTM dalam bentuk list data tabel. Anda dapat melihat, menambah, mengubah, dan menghapus data layout sesuai dengan apa yang telah anda kerjakan. </br> <strong>Pastikan data selalu Update!</strong></p>

					<!--<img src="images/ftm24.jpg" type="image/jpg" width="260" height="150" style="margin-top: 0px; width: 28%;"><img src="images/ftms24.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px; width: 28%;">	-->

					<!--Tabel-->
					<h3 style="color: #b7181a; margin-bottom: 10px; margin-top: 40px; text-shadow: 0px 1px #212529; ">LAYOUT : <?php echo $_GET['alpro']; ?> </h3>

					<div class="col col-24">
						<select style="background-color: #ed4933; margin-left: -10px; margin-bottom: 10px; margin-top: 10px; color: white; width: 200px; overflow: auto;" onchange="window.location.href=this.value" type="button" class="primary">
							<option style="background-color: white; color: #ed4933;" value="#" readonly="">Select Panel</option>
							<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=PANEL1">PANEL1</option>
							<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=PANEL2">PANEL2</option>
							<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>
							&tb_ftm=<?php

							if($_GET['alpro'] == 'FTM-GSK-OA-02'){
								echo '2';
								}else{
									echo '1';
								}

								?>&tb_panel=PANEL3">PANEL3</option>
								<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>
								&tb_ftm=<?php

								if($_GET['alpro'] == 'FTM-GSK-OA-02'){
									echo '2';
									}else{
										echo '1';
									}

									?>&tb_panel=PANEL4">PANEL4</option>
									<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>
									&tb_ftm=<?php

									if($_GET['alpro'] == 'FTM-GSK-OA-02'){
										echo '2';
										}else{
											echo '1';
										}

										?>&tb_panel=PANEL5">PANEL5</option>
										<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>
										&tb_ftm=<?php

										if($_GET['alpro'] == 'FTM-GSK-OA-02'){
											echo '2';
											}else{
												echo '1';
											}

											?>&tb_panel=PANEL6">PANEL6</option>
											<option style="background-color: white; color: #ed4933;" value="layoutftm.php?alpro=<?php echo $_GET['alpro'];?>
											&tb_ftm=<?php

											if($_GET['alpro'] == 'FTM-GSK-OA-02'){
												echo '2';
												}else{
													echo '1';
												}

												?>&tb_panel=PANEL7">PANEL7</option>
											</select>
											<!--<button style="margin-left: -10px; margin-bottom: 10px;" class="primary" data-toggle='modal' data-target='#modalAddDataFTM'>Add Data</button>-->
										</div>

										<table style="margin-bottom: 10px;">
				<!-- <td align="center" style="padding-top: 5px; padding-bottom: 5px;">
					<h4 style="margin-bottom: 0px;"><?php echo $_GET['tb_panel']; ?> </h4></td> -->
				</table>

				<div class="col col-24" style="overflow: auto;">
					<table style="font-size: 13px; margin-left: -18px; margin-right: -500px; background-color: white; overflow-y: scroll;" class="table table-bordered table-striped" id="tabel-halaman-layout">
						<thead>
							<?php
							$slot = $_GET['tb_panel'];
							if ($_GET['tb_ftm'] == 1){
								echo  "<th id='color3' colspan='24'><h3 style='color: white; margin-top: 10px; margin-left: 50px;'>".$slot."</h3></th>";

							}else if ($_GET['tb_ftm'] == 2){
								echo  "<th id='color3' colspan='12'><h3 style='color: white; margin-top: 10px; margin-left: 50px;'>".$slot."</h3></th>";

							}

							?>
						</thead>

						<tbody>
							<?php
							$acekftm = 1;
							$c = 0;

							if ($_GET['tb_ftm'] == 1) {
								$c=7;

							}else if ($_GET['tb_ftm'] == 2) {
								$c=13;
							}

							for($i = 1; $i < $c; $i++){
								echo '<tr style="text-align: center;">';
								include('panelftm.php');
								echo '</tr>';
								$acekftm++;
							}

							?>
						</tbody>

					</table>
				</div>
			</div>
		</section>
	</article>
	
	<script type="text/javascript">

		$( document ).ready(function() {
			$('#formAddDataFTM').submit(function(event) {
				event.preventDefault();
			$('#buttonSaveDataFTM').text('creating...'); //change button text
	    	$('#buttonSaveDataFTM').attr('disabled',true); //set button disable
	    	var formData = new FormData($('#formAddDataFTM')[0]);
	    	$.ajax({
	    		url : "insertftm.php",
	    		type: "POST",
	    		data: formData,
	    		contentType: false,
	    		processData: false,
	    		success: function(data)
	    		{
		            $('#buttonSaveDataFTM').attr('disabled',false); //set button enable
		            $('#modalAddData').modal('hide');
		            $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
		            $("#formAddDataFTM")[0].reset();
					$('#buttonSaveDataFTM').text('Submit'); //change button text
					window.location.replace('./layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=<?php echo $_GET['tb_panel'];?>');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					console.log(jqXHR, textStatus, errorThrown);
		            $('#buttonSaveDataFTM').text('eror'); //change button text
		            $('#buttonSaveDataFTM').attr('disabled',false); //set button enable
		        }
		    });
	    });
		});


		function editDataFTM(id_record)
		{
			$.get('readsigledata.php', {id_record : id_record , tabel: 'tb_ftm'} , function(res){
				var res = JSON.parse(res);
				$("#input-edit-id-record").val(res.id)
				$("#input-delete-id-record").val(res.id)
				$("#input-edit-id-kolom").val(res.id_kolom)
				$("#input-edit-id-panel").val(res.id_panel)
				$("#input-edit-nm_ftm").val(res.nm_ftm)
				$("#input-edit-port").val(res.port)
				$("#input-edit-odc").val(res.odc)
				$("#input-edit-core").val(res.core)
				$("#input-edit-ftm").val(res.ftm)

			});
		}

		function saveEditDataFTM(){
		$('#buttonSaveEditDataFTM').text('editting...'); //change button text
    	$('#buttonSaveEditDataFTM').attr('disabled',true); //set button disable
    	var formData = new FormData($('#formEditDataFTM')[0]);
    	$.ajax({
    		url : "submiteditdataFTM.php",
    		type: "POST",
    		data: formData,
    		contentType: false,
    		processData: false,
    		success: function(data)
    		{
	            $('#buttonSaveEditDataFTM').attr('disabled',false); //set button enable
				$('#buttonSaveEditDataFTM').text('Update'); //change button text
				$('#modalEditDataFTM').modal('hide');
				window.location.replace('./layoutftm.php');

				$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
				$("#formEditDataFTM")[0].reset();
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log(jqXHR, textStatus, errorThrown);
	            $('#buttonSaveEditDataFTM').text('error'); //change button text
	            $('#buttonSaveEditDataFTM').attr('disabled',false); //set button enable
	        }
	    });
    }

    function saveDeleteDataFTM(){
		$('#buttonSaveDeleteDataFTM').text('deleting...'); //change button text
    	$('#buttonSaveDeleteDataFTM').attr('disabled',true); //set button disable
    	var formData = new FormData($('#formDeleteDataFTM')[0]);
    	$.ajax({
    		url : "submitdeletedata.php",
    		type: "POST",
    		data: formData,
    		contentType: false,
    		processData: false,
    		success: function(data)
    		{
	            $('#buttonSaveDeleteDataFTM').attr('disabled',false); //set button enable
				$('#buttonSaveDeleteDataFTM').text('Delete'); //change button text
				$('#modalDeleteDataFTM').modal('hide');
				window.location.replace('./layoutftm.php?alpro=<?php echo $_GET['alpro'];?>&tb_ftm=<?php echo $_GET['tb_ftm'];?>&tb_panel=<?php echo $_GET['tb_panel'];?>');

				$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log(jqXHR, textStatus, errorThrown);
	            $('#buttonSaveDeleteDataFTM').text('eror'); //change button text
	            $('#buttonSaveDeleteDataFTM').attr('disabled',false); //set button enable
	        }
	    });
    }
    $('#modalDeleteDataFTM').on('shown.bs.modal', function () {
    	$('#modalEditDataFTM').modal('hide')
    })
</script>

<?php include('foot.php'); ?>
