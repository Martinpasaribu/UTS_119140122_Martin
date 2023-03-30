<?php include "header.php"; ?>
<!-- start banner Area -->
<section class="banner-area relative" style="background: url(img/sejarah.jpg); background-size: cover;">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Data Bangunan Sejarah
        </h1>
        <p class="text-white link-nav">Berikut adalah beberapa data bangunan sejarah yang tersedia </p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 info-left">
        <img class="img-fluid" src="img/about/info-img.jpg" alt="">
      </div>

      <div class="col-lg-30 into-right" data-aos="fade-up" data-aos-delay="100">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">

            </div>
            <div class="panel-body">
						<style>
table, th, td {
  border: 1px solid white;
}
</style>
              <table border="10">




								<thead>	
                  <tr style="background-color:white;text-align:center;  border: 1px solid white;"  hight="60%" >
									 <br>
                    <th style="background-color:white;text-align:center; " width="-8%">No.</th>
                    <th width="30%">Nama Bangunan Sejarah</th>
                    <th width="50%">Lokasi</th>
                    <th width="40%"> Fasilitas Yang tersedia</th>
						
										<th width="20%"></th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                   include_once "ambildata.php";
                  $no = 1;
                  if (json_decode($data, true)) {
                    $obj = json_decode($data);
                    foreach ($obj->results as $item) {
                  ?>
                      <tr>
                        <td style="padding-bottom: 20px; "><?php echo $no; ?></td>
                        <td style="padding-bottom: 20px; " ><?php echo $item->nama_bangunan; ?></td>
                        <td style="padding-bottom: 20px; " ><?php echo $item->alamat; ?></td>
                        <td style="padding-bottom: 20px; "> <?php echo $item->fasilitas; ?></td>
                        <td  style="padding-bottom: 20px; " class="ctr">
                          <div class="btn-group">
                            <a href="detail.php?id_bangunan=<?php echo $item->id_bangunan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                              <i > </i> CEK</a>&nbsp;
                          </div>
                        </td>
                      </tr>
                  <?php $no++;
                    }
                  } else {
                    echo "data tidak ada.";
                  } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>
