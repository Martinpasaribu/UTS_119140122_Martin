<?php include "header.php"; ?>
<?php
$id = $_GET['id_bangunan'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_bangunan = "";
$nama_bangunan = "";
$alamat = "";
$deskripsi = "";
$fasilitas= "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_bangunan .= $item->id_bangunan;
  $nama_bangunan .= $item->nama_bangunan;
  $alamat .= $item->alamat;
  $deskripsi .= $item->deskripsi;
  $fasilitas .= $item->fasilitas;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $nama_bangunan;
//include_once "header.php"; 
?>
<script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>

<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h1 id="firstHeading" class="firstHeading"><?php echo $nama_bangunan ?></h1>' +
      '<div id="bodyContent">' +
      '<p><?php echo $alamat ?></p>' +
      '</div>' +
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'img/markermap.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>




<!-- start banner Area -->
<section class="banner-area relative" style="background: url(img/sejarah.jpg); background-size: cover;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white"  style="font-family:segoe script">
          Detail Informasi Geografis Bangunan Sejarah
        </h1>

      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->

<section class="about-info-area section-gap">
	

  <div class="container" style="padding-top: 10px;margin-left:500px">
	
    <div class="row">


      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"  style="font-family:segoe script"><strong>Informasi Bangunan </strong></h4>
          </div></br>
          <div class="panel-body"  style="color:green">
            <table class="table" style="color:green">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Nama Bangunan</td>
                <td>
                  <h5 style="color:green"><?php echo $nama_bangunan ?></h5>
                </td>
              </tr>
              <tr>
                <td >Alamat</td>
                <td>
                  <h5 style="color:green"><?php echo $alamat ?></h5>
                </td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td>
                  <h5 style="color:green"><?php echo $deskripsi ?></h5>
                </td>
              </tr>
              <tr>
                <td>Fasilitas</td>
                <td>
                  <h5 style="color:green"> <?php echo $fasilitas ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>


</section>


<section class="about-info-area section-gap">
  <div class="container" style="padding-top: -200px;">
	
    <div class="row">
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
    
					<div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:1100px;height:780px;"></div>
          </div>
        </div>
</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- End about-info Area -->
<?php include "footer.php"; ?>


