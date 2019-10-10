
<?php
include('head.php');
if(!isset($_GET['olt'])){
	$_GET['olt'] = 'GPON01-D5-GSK-3(172.27.140.25)[OLT 1, ZTE ZXA10 C220 Physical Device]';
}
?>

<!-- Main -->
<article id="main">
	<header>
		<h2>LAYOUT</h2>
		<p>Layout Digital Data <br /> ODC & FTM</p>
	</header>
	<!-- modaladddata -->
	<div class="modal fade" id="modalAddDataOLT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

					<h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Add Data OLT</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" id="formAddDataOLT">
					<div class="modal-body text-dark">
						<div class="row gtr-uniform" >

							<div class="form-group" style="margin-left: 0px; margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Type OLT</label>
								<select style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="id_olt" id="input-add-id-olt" aria-describedby="textHelp" required="">
									<option value="" class="text-dark">Select</option>
									<option value="1" class="text-dark">GPON01-D5-GSK-3(172.27.140.25)</option>
									<option value="2" class="text-dark">GPON01-D5-GSK-3(172.27.140.165)</option>
									<option value="3" class="text-dark">GPON02-D5-GSK-3(172.27.141.41)</option>
									<option value="4" class="text-dark">GPON04-D5-GSK-3(172.27.142.133)</option>
								</select>
							</div>

							<!-- <div class="form-group" style="margin-left: 0px; margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Nomor OLT</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_panel" id="input-add-id-num" aria-describedby="textHelp" placeholder="" required="">
							</div> -->

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Slot</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_col" id="input-add-col" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in OLT</label>
								<input style=" font-size: 14px; color: black;" type="number" class="form-control" name="id_row" id="input-add-row" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label style="margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in Slot</label>
								<input style=" font-size: 14px; color: black;" type="text" class="form-control" name="port" id="input-add-port" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="margin-top: -10px; margin-bottom: 0px;">
								<label for="" style=" font-size: 14px; margin-bottom: -1px;" class="text-dark">FTM</label>
								<input style=" font-size: 14px;" type="text" class="form-control" name="ftm" id="input-add-ftm" aria-describedby="textHelp" placeholder="Enter text">
							</div>

						</div>
					</div>

					<div class="modal-footer">
						<button class="primary" id="buttonSaveDataOLT" onclick="saveAddDataOLT()">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modaladddata -->

	<!-- modal edit -->
	<div class="modal fade" id="modalEditDataOLT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

					<h5 style="margin-top: 80px; margin-bottom: -10px;" class="modal-title text-dark " id="exampleModalLabel">Edit Data OLT</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form method="POST" id="formEditDataOLT">
					<div class="modal-body text-dark">
						<div class="row gtr-uniform" >
							<div class="form-group">
								<input type="hidden" name="id" id="input-edit-id-record" >
							</div>

							<div class="form-group" style="margin-left: -25px; padding-top: 20px;">
								<label for="" style=" margin-bottom: -1px; font-size: 14px;" class="text-dark">Type OLT</label>
								<select style="font-size: 14px; background-color: #e6d6d4;" class="form-control" name="id_olt" id="input-edit-id-olt" aria-describedby="textHelp" required="">
									<option value="" class="text-dark">Select</option>
									<option value="1" class="text-dark">GPON01-D5-GSK-3(172.27.140.25)</option>
									<option value="2" class="text-dark">GPON01-D5-GSK-3(172.27.140.165)</option>
									<option value="3" class="text-dark">GPON02-D5-GSK-3(172.27.141.41)</option>
									<option value="4" class="text-dark">GPON04-D5-GSK-3(172.27.142.133)</option>
								</select>
							</div>

							<!-- <div class="form-group" style="padding-top: 20px;">
								<label for="" style="margin-bottom: -1px; font-size: 14px;" class="text-dark">Nomor OLT</label>
								<input style=" font-size: 14px;" style="color: black;" type="number" class="form-control" name="id_panel" id="input-edit-id-num" aria-describedby="textHelp" placeholder="" readonly="">
							</div> -->

							<div class="form-group" style="padding-top: 0px; margin-bottom: 0px;">
								<label style=" margin-bottom: -1px; font-size: 14px;" for="" class="text-dark">Port in Slot</label>
								<input style=" font-size: 14px;" style="color: black;" type="text" class="form-control" name="port" id="input-edit-port" aria-describedby="textHelp" placeholder="Enter text" required="">
							</div>

							<div class="form-group" style="padding-top: 0px;">
								<label for="" style=" font-size: 13px; margin-bottom: -1px;" class="text-dark">FTM</label>
								<input style=" font-size: 14px;" type="text" class="form-control" name="ftm" id="input-edit-ftm" aria-describedby="textHelp" placeholder="Enter text">
							</div>

						</div>
					</div>

					<div class="modal-footer">
						<!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
						<button type="button" class="primary" data-toggle='modal' data-target='#modalDeleteDataOLT'>Delete</button>
						<!-- id="buttondeleteeditDataOLT" onclick="saveDeleteDataOLT()" -->
						<button class="primary" id="buttonSaveEditDataOLT" onclick="saveEditDataOLT()">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal edit -->

	<!-- modal delete -->
	<div class="modal fade" id="modalDeleteDataOLT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

					<h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Delete Data OLT</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" id="formDeleteDataOLT">
					<div class="modal-body text-dark">
						<div class="row gtr-uniform" >
							<div class="form-group">
								<label for="" class="text-dark">Apakah anda yakin akan menghapus data record ?</label>
								<input style=" color: red; width: 30%;" type="number" class="form-control" name="id_record" id="input-delete-id-record" aria-describedby="textHelp" placeholder="" readonly=""></input>
								<input style=" background-color: white; margin-top: -40px; margin-left: 140px; color: white; width: 30%;" type="text" class="form-control" name="tabel" readonly="" value="tb_olt"></input>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
						<button type="button" class="primary" id="buttonSaveDeleteDataOLT" onclick="saveDeleteDataOLT()">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- modal delete -->

	<div id="alert_message" style="padding-right: 250px; padding-top: 30px; "></div>
	<section class="wrapper style5">
		<div class="inner">
			<h3 style="margin-top: -20px; margin-bottom: 0px;">List Data Layout OLT</h3>
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
			<p>Berikut layout ODC & FTM dalam bentuk list data tabel. Anda dapat melihat, menambah, mengubah, dan menghapus data layout sesuai dengan apa yang telah anda kerjakan. </br> <strong>Pastikan data selalu Update!</strong></p>


			<img src="images/ftm24.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px; width: 28%;"><img src="images/ftms24.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px; width: 28%;">

			<div align="right" style="margin-right: 0px; margin-bottom: 50px; margin-top: -20px;" >
				<button class="primary" data-toggle='modal' data-target='#modalAddDataOLT'>Add Data</button>
			</div>

			<!--Tabel-->
			<h3 style="color: #b7181a; margin-bottom: 10px; margin-top: -40px; text-shadow: 0px 1px #212529; ">LAYOUT : OLT</h3>

			<table style="margin-bottom: 10px;">
				<td align="center" style="padding-top: 5px; padding-bottom: 5px;">
					<h4 style=" background-color: #de3031; padding-top: 5px; padding-bottom: 5px; margin-bottom: 0px; font-size: 13px;"><?php echo $_GET['olt']; ?></h4></td>
				</table>

				<div class="col col-24" style="overflow: auto;">
					<table style="font-size: 13px; margin-left: -18px; margin-right: -500px; background-color: white; overflow-y: scroll;" class="table table-bordered table-striped" id="tabel-halaman-layout">
						<thead>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 1</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 3</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 4</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 5</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 6</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 9</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 10</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 11</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 12</h4></th>
							<th id="color1"><h4 style="color: white; margin-top: 10px;" align="center">Slot 13</h4></th>

						</thead>
					</thead>
					<tbody>
						<?php
						$acekolt = 1;
						for($i = 1; $i < 5; $i++){
							echo '<tr style="text-align: center;">';
							include('panelolt1.php');
							echo '</tr>';
							$acekolt++;
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
		$('#formAddDataOLT').submit(function(event) {
			event.preventDefault();
			$('#buttonSaveDataOLT').text('creating...'); //change button text
	    	$('#buttonSaveDataOLT').attr('disabled',true); //set button disable
	    	var formData = new FormData($('#formAddDataOLT')[0]);
	    	$.ajax({
	    		url : "insertolt.php",
	    		type: "POST",
	    		data: formData,
	    		contentType: false,
	    		processData: false,
	    		success: function(data)
	    		{
		            $('#buttonSaveDataOLT').attr('disabled',false); //set button enable
		            $('#modalAddDataOLT').modal('hide');
		            $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
		            $("#formAddDataOLT")[0].reset();
					$('#buttonSaveDataOLT').text('Submit'); //change button text
					window.location.replace('./layoutolt1.php?olt=<?php echo $_GET['olt']; ?>');
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					console.log(jqXHR, textStatus, errorThrown);
		            $('#buttonSaveDataOLT').text('eror'); //change button text
		            $('#buttonSaveDataOLT').attr('disabled',false); //set button enable
		        }
		    });
	    });
	});


	function editDataOLT(id_record)
	{
		$.get('readsigledata.php', {id_record : id_record , tabel: 'tb_olt'} , function(res){
			var res = JSON.parse(res);
			$("#input-edit-id-record").val(res.id)
			$("#input-delete-id-record").val(res.id)
			$("#input-edit-id-olt").val(res.id_olt)
			$("#input-edit-id-num").val(res.id_num)
			$("#input-edit-port").val(res.port)
			$("#input-edit-ftm").val(res.ftm)

		});
	}

	function saveEditDataOLT(){
		$('#buttonSaveEditDataOLT').text('editting...'); //change button text
    	$('#buttonSaveEditDataOLT').attr('disabled',true); //set button disable
    	var formData = new FormData($('#formEditDataOLT')[0]);
    	$.ajax({
    		url : "submiteditdataOLT.php",
    		type: "POST",
    		data: formData,
    		contentType: false,
    		processData: false,
    		success: function(data)
    		{
	            $('#buttonSaveEditDataOLT').attr('disabled',false); //set button enable
				$('#buttonSaveEditDataOLT').text('Update'); //change button text
				$('#modalEditDataOLT').modal('hide');
				window.location.replace('./layoutolt1.php?olt=<?php echo $_GET['olt']; ?>');

				$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
				$("#formEditDataOLT")[0].reset();
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log(jqXHR, textStatus, errorThrown);
	            $('#buttonSaveEditDataOLT').text('error'); //change button text
	            $('#buttonSaveEditDataOLT').attr('disabled',false); //set button enable
	        }
	    });
    }

    function saveDeleteDataOLT(){
		$('#buttonsaveDeleteDataOLT').text('deleting...'); //change button text
    	$('#buttonsaveDeleteDataOLT').attr('disabled',true); //set button disable
    	var formData = new FormData($('#formDeleteDataOLT')[0]);
    	$.ajax({
    		url : "submitdeletedata.php",
    		type: "POST",
    		data: formData,
    		contentType: false,
    		processData: false,
    		success: function(data)
    		{
	            $('#buttonsaveDeleteDataOLT').attr('disabled',false); //set button enable
				$('#buttonsaveDeleteDataOLT').text('Delete'); //change button text
				$('#modalDeleteDataOLT').modal('hide');
				window.location.replace('./layoutolt1.php?olt=<?php echo $_GET['olt']; ?>');

				$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log(jqXHR, textStatus, errorThrown);
	            $('#buttonsaveDeleteDataOLT').text('eror'); //change button text
	            $('#buttonsaveDeleteDataOLT').attr('disabled',false); //set button enable
	        }
	    });
    }
    $('#modalDeleteDataOLT').on('shown.bs.modal', function () {
    	$('#modalEditDataOLT').modal('hide')
    })
</script>

<?php include('foot.php'); ?>
