<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="banner-area relative" style="background: url(img/sejarah.jpg); background-size: cover;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-6 col-md-6 banner-center" style="text-align:center; margin-left:270px;margin-top:221px">
        <h6 class="text-white" style=" font-size:17px;font-family:segoe script" >SISTEM INFORMASI GEOGRAFIS BANGUNAN SEJARAH</h6>
				</br>
				<h1 class="text-white" style="font-family:segoe script">KOTA BANDAR LAMPUNG</h1>
				</br>
        <a href="#peta_wisata" style="font-family:segoe script;background-color:#16a931;border-radius:12px;" class="primary-btn text-uppercase">Lihat Detail</a>
      </div>

    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->

  

 

    
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
        });
    </script>

</body>
</html>



<main id="main">


		 <!-- ======= Counts Section ======= -->
		 <section id="counts">
      <div class="container">
        <div class="title text-center">
          <h1 class="mb-10" style="font-family:segoe script">Jumlah Tempat Bangunan Sejarah</h1>
          <br>
        </div>
        <div class="row d-flex justify-content-center">


          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $sman = "";
          foreach ($obj->results as $item) {
            $sman .= $item->sma;
          }
          ?>

          <div class="text-center" style="margin-top:20px">
            <h1 style="font-family:segoe script"><span data-toggle="counter-up"><?php echo $sman; ?></span> Bangunan</h1>
            <br>
          </div>
          <?php
          include_once "countsmk.php";
          $obj2 = json_decode($data);
          $smkn = "";
          foreach ($obj2->results as $item2) {
            $smkn .= $item2->smk;
          }
          ?>


        </div>

      </div>
    </section><!-- End Counts Section -->


		<section>
			<!DOCTYPE html>
		<html lang="en">
		<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

				<link rel="stylesheet" type="text/css" href="gaya/style1.css"/>
				<link rel="stylesheet" type="text/css" href="gaya/style2.css"/>


			<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
				<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->

				<!-- Our CSS -->
				<style>
						body {
								font-family: Verdana, Geneva, Tahoma, sans-serif;
								background: transparent !important;
						}

						.containerr {
								max-width: 900px;
								padding: 15px;
								background-color: #fff;
								margin-left: auto;
								margin-right: auto;
								border-radius:20px;
						}

						.slider .slick-slide {
								border: solid 1px #FFF;
								border-radius:80px;
						}

						.slider .slick-slide img {
								width: 100%;
						}

						/* make button larger and change their positions */
						.slick-prev, .slick-next {
								width: 50px;
								height: 50px;
								z-index: 1;
						}
						.slick-prev {
								left: 7px;
						}
						.slick-next {
								right: 27px;
						}
						.slick-prev:before, 
						.slick-next:before {
								font-size: 70px;
								text-shadow: 0 0 10px rgba(0,0,0,0.5);
						}
						
						/* move dotted nav position */
						.slick-dots {
								bottom: 35px;
						}
						/* enlarge dots and change their colors */
						.slick-dots li button:before {
								font-size: 32px;
								color: #fff;
								text-shadow: 0 0 10px rgba(0,0,0,0.5);
								opacity: 1;
						}
						.slick-dots li.slick-active button:before {
								color: #EE0808;
						}

						/* hide dots and arrow buttons when slider is not hovered */
						.slider:not(:hover) .slick-arrow,
						.slider:not(:hover) .slick-dots {
								opacity: 5;
						}
						/* transition effects for opacity */
						.slick-arrow,
						.slick-dots {
								transition: opacity 0.5s ease-out;
						}

				</style>
		</head>
		<body>
				<div class="containerr">
						<h1 style="color:black;font-family:segoe script;padding: 10px 10px 10px 10px;text-align:center;"  >Preview Bangunan Sejarah</h1>

						<div class="slider" style="border-radius:20px;">
								<div>
										<a href="#">
												<img  style="border-radius:20px;" width="1000" height="800" src="https://cdn.idntimes.com/content-images/post/20210722/198500563-1077274612800976-123628204529961497-n-990b8819d1455460b84c44450524258a.jpg" alt="Image 1">
										</a>            
								</div>
								<div>
										<a href="#">
												<img style="border-radius:20px;" width="1000" height="800"  src="https://www.ghotel.co.id/wp-content/uploads/2023/01/Taman-Purbakala-Pugung-Raharjo.jpg" alt="Image 1">
										</a>
								</div>
								<div>
										<a href="#">
												<img style="border-radius:20px;" width="1000" height="800"  src="https://traveljakartabandarlampung.com/wp-content/uploads/2020/02/1-4-4-Tempat-Bersejarah-di-Lampung-Favorit-Wisatawan.-Yuk-Liburan-1.jpg" alt="Image 3">
										</a>            
								</div>
								<div>
										<a href="#">
												<img style="border-radius:20px;" width="1000" height="800"  src="https://cdn-2.tstatic.net/lampung/foto/bank/images/monumen-66_20170606_155638.jpg" alt="Image 4">
										</a>
								</div>
								<div>
										<a href="#">
												<img style="border-radius:20px;"  width="1000" height="800"  src="https://s3.bukalapak.com/uploads/content_attachment/ded143d820e8d7621b66c1c5/w-740/5_Wisata_Sejarah_Menarik_di_Bandar_Lampung_5.jpg" alt="Image 5">
										</a>            
								</div>
						</div>
				</div>
						

				
				<!-- JQuery -->
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
				
				<!-- Slick JS -->    
				<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

				<!-- Our Script -->
				<script>
						$(document).ready(function(){
								$('.slider').slick({
										autoplay: true,
										autoplaySpeed: 2500,
										dots: true
								});
						});
				</script>

		</body>
		</html>


</section>  
  <!-- Start about-info Area -->
  <section class="price-area section-gap" style="margin-top:-200px">

    <section id="peta_wisata" class="about-info-area section-gap">
      <div class="container">

        <div class="title text-center" >
          <h1 class="mb-10" style="background-color:#090909;border-radius:80px;color:aliceblue;font-family:segoe script;padding: 10px 10px 10px 10px;" >Peta API Google MAPS</h1>
          <br>
        </div>

        <div class="row align-items-center">

          <div id="map" style="width:750%;height:780px;"></div>
          <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap "></script>

          <script type="text/javascript">
            function initialize() {

              var mapOptions = {
                zoom: 12.2,
                center: new google.maps.LatLng(-5.406175461700294,105.27002486378655),
                disableDefaultUI: false
              };
						
              var mapElement = document.getElementById('map');

              var map = new google.maps.Map(mapElement, mapOptions);

              setMarkers(map, officeLocations);

            }

            var officeLocations = [
              <?php
               include_once "ambildata.php";
              $no = 1;
              if (json_decode($data, true)) {
                $obj = json_decode($data);
                foreach ($obj->results as $item) {
              ?>[<?php echo $item->id_bangunan ?>, '<?php echo $item->nama_bangunan ?>', '<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
              <?php
                }
              }
              ?>
            ];

            function setMarkers(map, locations) {
              var globalPin = 'img/marker.png';

              for (var i = 0; i < locations.length; i++) {

                var office = locations[i];
                var myLatLng = new google.maps.LatLng(office[4], office[3]);
                var infowindow = new google.maps.InfoWindow({
                  content: contentString
                });

                var contentString =
                  '<div id="content">' +
                  '<div id="siteNotice">' +
                  '</div>' +
                  '<h5 id="firstHeading" class="firstHeading">' + office[1] + '</h5>' +
                  '<div id="bodyContent">' +
                  '<a href=detail.php?id_bangunan=' + office[0] + '>Info Detail</a>' +
                  '</div>' +
                  '</div>';

                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: office[1],
                  icon: 'img/markermap.png'
                });

                google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
              }
            }

            function getInfoCallback(map, content) {
              var infowindow = new google.maps.InfoWindow({
                content: content
              });
              return function() {
                infowindow.setContent(content);
                infowindow.open(map, this);
              };
            }

            initialize();
          </script>

        </div>


      </div>
    </section>
    <!-- End about-info Area -->


    <!-- Start price Area -->

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
          <div class="title text-center">
            <h1 class="mb-10" style="font-family:segoe script;">Jangkauan Peta</h1>
            <p>Peta geografi kota Bandar Lampung meliputi wilayah geografis dan topografi kota tersebut. Kota Bandar Lampung terletak di ujung selatan Pulau Sumatra dan berbatasan dengan Teluk Lampung di sebelah barat, Kabupaten Lampung Selatan di sebelah selatan, Kabupaten Lampung Timur di sebelah timur, serta Kabupaten Lampung Barat di sebelah utara.

Secara umum, kota Bandar Lampung terdiri dari daerah dataran rendah dan dataran tinggi. Daerah dataran rendah terletak di sepanjang pantai, sedangkan dataran tinggi terletak di bagian dalam kota.
            </p>
          </div>
        </div>
      </div>

      <!-- End other-issue Area -->

    </div>
    </div>

    </div>
  </section>
  <!-- End testimonial Area -->






	
