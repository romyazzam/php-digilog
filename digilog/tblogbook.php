
<?php include('head.php'); ?>

<!-- Main -->
<article id="main">
	<header>
		<h2>LOGBOOK</h2>
		<p>LOGBOOK Digital Data <br /> ODC & FTM</p>
	</header>
	<section class="wrapper style5">
		<div class="inner">
			<h3 style="margin-top: -30px; margin-bottom: -40px;">Record Data LOGBOOK</h3>
			<hr />
			<h5 style="color: #b7181a; margin-top: -35px; text-shadow: 0px 1px #212529;">DATA LOGBOOK</h5>
			<div class="container-box">	
				<div class="table-resposive">
					<br />
					<div align="right" style="margin-left: 50px; margin-bottom: -45px; margin-top: -40px;">
						<button class="primary" onclick="window.location.href='logbook.php'">LOGBOOK</button>
					</div>
					<div id="alert_message" style="padding-right: 250px; padding-top: 30px; "></div>		
					<br />
					<div style="overflow: auto;">	
						<table style="font-size: 13px; margin-right: 300px; margin-left: 10px; margin-top: 10px; background-color: white;" id="tabel-logbook" class="table table-striped table-hover">
							<thead>
								<tr>
									<th>STO</th>
									<th>ALPRO</th>
									<th>NAMA</th>
									<th>NIK</th>
									<th>LOKER</th>
									<th>AKTIVITAS</th>
									<th>HASIL</th>
									<th>TANGGAL</th>
									<th>IMAGE BEFORE</th>
									<th>IMAGE AFTER</th>
									<th>OPSI</th>

								</tr>
							</thead>
						</table>
					</div>	
				</div>	
			</div>		
		</div>
	</section>
</article>

<!-- deletedatamodal -->
<div class="modal fade" id="modalDeleteData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

				<h5 style="margin-top: 80px; margin-bottom: -5px;" class="modal-title text-dark " id="exampleModalLabel">Delete Data logbook</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" id="formDeleteDataLogbook">
				<div class="modal-body text-dark">
					<div class="row gtr-uniform" >
						<div class="form-group">
							<label for="" class="text-dark">Apakah anda yakin akan menghapus data record ?</label>
							<input style=" color: red; width: 30%;" type="number" class="form-control" name="id_record" id="input-delete-id-record" aria-describedby="textHelp" placeholder="" readonly=""></input>
							<input style=" background-color: white; margin-top: -40px; margin-left: 140px; color: white; width: 30%;" type="text" class="form-control" name="tabel" readonly="" value="logbook"></input>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <a class="btn btn-secondary" data-dismiss="modal">Close</a> -->
					<button type="submit" class="primary" id="buttonDeleteDataLogbook">Delete</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	function deleteData(id_record)
	{
		$.get('readsigledata.php', {id_record : id_record, tabel: "logbook"} , function(res){
			var res = JSON.parse(res);
			$("#modalDeleteData").modal("show");
			$("#input-delete-id-record").val(res.id);
		});
	}

	$(document).ready(function() {
		fetch_data_logbook();
	});

	$('#formDeleteDataLogbook').submit(function(event) {
		event.preventDefault();
		$('#buttonDeleteDataLogbook').text('deleting...'); //change button text
    	$('#buttonDeleteDataLogbook').attr('disabled',true); //set button disable
    	var formData = new FormData($('#formDeleteDataLogbook')[0]);
    	$.ajax({
    		url : "submitdeletedata.php",
    		type: "POST",
    		data: formData,
    		contentType: false,
    		processData: false,
    		success: function(data)
    		{
	            $('#buttonDeleteDataLogbook').attr('disabled',false); //set button enable 
				$('#buttonDeleteDataLogbook').text('delete'); //change button text
				$('#modalDeleteData').modal('hide');
				$('#tabel-logbook').DataTable().destroy();
				fetch_data_logbook();
				$('#alert_message').html('<div class="alert alert-danger">'+data+'</div>');
				$("#formDeleteDataLogbook")[0].reset();
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				console.log(jqXHR, textStatus, errorThrown);
	            $('#buttonDeleteDataLogbook').text('eror'); //change button text
	            $('#buttonDeleteDataLogbook').attr('disabled',false); //set button enable 
	        }
	    });
    });
</script>

<?php include('foot.php'); ?>



