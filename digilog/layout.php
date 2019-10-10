
<?php
include('head.php');
if(!isset($_GET["alpro"])){
	$_GET["alpro"] = "ODC-GSK-FAB";
}
?>

<!-- Main -->
<article id="main">
	<section class="wrapper style5">
		<div class="inner">
			<h3>List Data Layout ODC</h3>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
				img {
					width: 33%;
					height: auto;
					margin-bottom: -10px;
				}
			</style>

			<img src="images/teknis1.jpg" type="image/jpg" width="260" height="150" style="margin-top: 0px;"><img src="images/teknis.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px;"><img src="images/teknis3.jpg" type="image/jpg" width="260" height="150" style="margin-top: -20px;">

			<!-- <div id="alert_message" style="padding-right: 250px; padding-top: 30px; "></div> -->
			<hr />

			<!-- <select style="background-color: #ff1c007d; margin-left: -2px; margin-bottom: 50px; margin-top: -40px; color: white;" onChange="window.location.href=this.value" type="button" class="primary">
				<option style="background-color: #ff1c007d; color: white;" value="layout.php">Select Layout</option>
				<option style="background-color: #ff1c007d; color: white;" value="layout.php?alpro=ODC-GSK-FAB">ODC-GSK-FAB</option>
				<option style="background-color: #ff1c007d; color: white;" value="layout.php?alpro=ODC-GSK-FAK">ODC-GSK-FAK</option>
				<option style="background-color: #ff1c007d; color: white;" value="layout.php?alpro=ODC-GSK-FB">ODC-GSK-FB</option>
				<option style="background-color: #ff1c007d; color: white;" value="layout.php?alpro=ODC-GSK-FG">ODC-GSK-FG</option>
				<option style="background-color: #ff1c007d; color: white;" value="layout.php?alpro=ODC-GSK-FM">ODC-GSK-FM</option>
				<option style="background-color: #ff1c007d; color: white;" value="layoutftm.php">FTM-GSK-01</option>
			</select> -->

			<h4 style="color: #b7181a; margin-bottom: 0px; margin-top: -40px; text-shadow: 0px 1px #212529;">DIGITALISASI ODC & FTM</h4>
			<p>Berikut layout ODC & FTM dalam bentuk list data tabel. Anda dapat melihat, menambah, mengubah, dan menghapus data layout sesuai dengan apa yang telah anda kerjakan. </br> <strong>Pastikan data selalu Update!</strong></p>

			<div align="right" style="margin-right: 0px; margin-bottom: 50px; margin-top: -20px;" >
				<button class="primary" style="color: white;" data-toggle="modal" data-target="#modalAddData">Add data</button>
				<button class="primary" onclick="window.location.href='edit.php?alpro=<?php echo $_GET['alpro'];?>'">Cek Record Data</button>
			</div>

			<!--Tabel-->
			<h3 style="color: #b7181a; margin-bottom: 10px; margin-top: -40px; text-shadow: 0px 1px #212529; ">LAYOUT : <?php echo $_GET["alpro"]; ?></h3>
			<div style="overflow: auto;">
				<table style="font-size: 13px; margin-right: 0px; background-color: white; overflow-y: scroll;" class="table table-bordered table-striped" id="tabel-halaman-layout">
					<thead>
						<th id="color2" style="border-right: 0px solid white;"><h4>PANEL</h4></th>
						<th id="color2"><h4>PORT 1<h4></th>
							<th id="color2"><h4>PORT 2</h4></th>
							<th id="color2"><h4>PORT 3</h4></th>
							<th id="color2"><h4>PORT 4</h4></th>
							<th id="color2"><h4>PORT 5</h4></th>
							<th id="color2"><h4>PORT 6</h4></th>
							<th id="color2"><h4>PORT 7</h4></th>
							<th id="color2"><h4>PORT 8</h4></th>
							<th id="color2"><h4>PORT 9</h4></th>
							<th id="color2"><h4>PORT 10</h4></th>
							<th id="color2"><h4>PORT 11</h4></th>
							<th id="color2"><h4>PORT 12</h4></th>
							<th style="font-size: 11px;" id="color2"><h4>Distribusi</h4></th>
						</thead>
						<tbody style="padding: -0.25em 0.75em;">
							<?php
							$acek = 1;
							for($a = 1; $a < 26; $a++){
								echo '<tr style="text-align: center;">';
								echo "<td align='center' style='border-right: 0px solid white; border-bottom: 20px solid white;' id='color1'><h3 style='vertical-align: baseline; color: white;'>".$a."</h3></td>";
								include('panelinout.php');
								echo '</tr>';
								$acek++;
							}
							?>

						</tbody>
					</table>
					<?php include('modalpanelinout1.php'); ?>
				</div>
			</div>
		</div>
	</section>
</article>

<script type="text/javascript">
	$( document ).ready(function() {
		$('#tabel-halaman-layout').DataTable({
			fixedHeader: true,
			stateSave: true
			scrollY: 600,
			// scrollX: true,
			// scrollCollapse: true,
			paging: false,
			// fixedColumns:{
			// 	leftColumns: 1
			// },
			columnDefs:{
				targets: 0,
				orderable: false

			},

			searching: false,
			bInfo : false
		});
	});
</script>

<?php include('foot.php'); ?>
