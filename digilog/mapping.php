
<?php include('head.php'); ?>

<!-- Main -->
<article id="main">
	<header>
		<h2>MAPPING</h2>
		<p>Lokasi ALPRO</p>
	</header>

	<script src="https://starclick.telkom.co.id/noss_prod/login.php"></script>
	<section class="wrapper style5">
		<div class="inner">
			<h3 style="margin-top: -30px; margin-bottom: -40px;">MAPPING ALPRO</h3>
			<hr />
			<h5 style="color: #b7181a; margin-top: -35px; text-shadow: 0px 1px #212529;"> CEK LOKASI ALPRO KLIK <a style="text-decoration: none;" href="https://starclick.telkom.co.id/noss_prod/login.php">URL</a></h5>	
			<iframe src="https://starclick.telkom.co.id/noss_prod/login.php" style="width:100%;height:600px;"></iframe>
		</div>
	</section>
</article>

<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script>
	var myMap;
	var myLatlng = new google.maps.LatLng(52.518903284520796,-1.450427753967233);
	function initialize() {
		var mapOptions = {
			zoom: 13,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP  ,
			scrollwheel: false
		}
		myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: myMap,
			title: 'Name Of Business',
			icon: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png'
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
-->

<!-- <script type="text/javascript">
	protected void Application_PreSendRequestHeaders()
	{
		Response.Headers.Remove("X-Frame-Options");
		Response.AddHeader("X-Frame-Options", "AllowAll");

	}
</script>
-->
<?php include('foot.php'); ?>
