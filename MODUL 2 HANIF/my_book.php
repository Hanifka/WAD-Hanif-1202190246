  <!DOCTYPE html>
  <html lang="en">
  <?php
  $total_price = 0;
  $cst_service = 0;
  $price = 0;



  if (isset($_GET['build'])) {
      $build = $_GET['build'];
  }

  if (isset($_GET['Duration'])) {
      $Duration = $_GET['Duration'];
  }

  if (isset($_GET['date'])) {
      $date = $_GET['date'];
  }

  if (isset($_GET['Duration'])) {
      $Duration = $_GET['Duration'];
      $rangeDay = $_GET['Duration'];
  }

  if (isset($_GET['nama'])) {
      $nama = $_GET['nama'];
  }


  if (isset($_GET['service'])) {
      $service = $_GET['service'];
  }

  if (isset($_GET['phone'])) {
      $phone = $_GET['phone'];
  }

  ?>
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      <link rel="stylesheet" href="MODUL 2 HANIF.css" />
      <title></title>
    </head>
    <body>
      <!-- Nav Bar -->
      <nav class="" style="background-color: darkslategrey" shadow-sm>
        <ul class="nav justify-content-center navbar-dark">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Booking</a>
          </li>
        </ul>
      </nav>

      <!-- End Nav Bar-->

      <!-- Home-->
      <br />
      <p class="h3 text-center">Thank You Hanif_1202190246 for Reserving</p>
      <p class="h4 text-center">Please Double Check Your Reservation Details</p>
      <?php 
      $id=rand();
      $nama=$_GET['nama'];
      $date=date_create($_GET['date']);
      $checkIn = date_format($date,"d/m/Y");
      $checkOut = date_format($date,"d/m/Y" );
      
      $buildtyp = $_GET['build'];
      $service="";
      $phone=$_GET['phone'];
      $total = 0;

      //Formula for Bulding
      if($buildtyp == "NusantaraHall"){
          $total = 2000 * $_GET['Duration']; 
      }else if($buildtyp == "GarudaHall"){
          $total = 1000 * $_GET['Duration'];
      }else if($buildtyp == "GedungSerbaGuna"){
          $total = 2000 * $_GET['Duration'];
      }

      //Formula for Services
      if(isset($_GET['service'])){
          $services=$_GET['service'];
          foreach($services as $cost){
              $service = $service.'<li>'.$cost. '</li>';
              if($cost == "Catering"){
                  $total += 700; 
                }else if($cost == "Decoration"){
                  $total += 450;
                }else if($cost == "SoundSystem"){
                  $total += 250;
                }
          }
        }else {
          $service = 'no service';
      }
      ?>
      <br>

      
      <div class="container-sm">
          <fieldset>
          <table class="table" style="margin-top: 1cm; margin-left: 0.5cm">
              <thead>
                  <tr>
                      <th scope="col">Booking Number</th>
                      <th scope="col">name</th>
                      <th scope="col">Check-in</th>
                      <th scope="col">Check-out</th>
                      <th scope="col">Building Type</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Service</th>
                      <th scope="col">Total Price</th>
                  </tr>
              </thead>
          
          <!-- Table Content -->
      
          <tr>
              <td><?= $id ?></td>
              <td><?= $nama ?></td>
              <td><?= $checkIn ?></td>
              <td><?= $checkOut ?></td>
              <td><?= $buildtyp ?></td>
              <td><?= $phone ?></td>
              <td><?= $service ?></td>
              <td>$ <?= $total ?></td>
          </tr>
          </fieldset>
          </div>
      
          </body>
      
      </html>
      <!-- End Home-->

      

















      <!-- Footer-->
      <br></br>
      <footer class="text-center">
        <p class="fs-7">Dibuat oleh Hanif Kurniawan_1202190246</p>
      </footer>
      <!-- End  Footer-->

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
  </html>
