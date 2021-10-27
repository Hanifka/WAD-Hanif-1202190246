  <!DOCTYPE html>
  <html lang="en">
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
            <a class="nav-link" href="">Booking</a>
          </li>
        </ul>
      </nav>

      <!-- End Nav Bar-->

      <!-- Home-->
      <section id="jenis">
          <hr class="my-4" />
          <div class="container">
            <div class="row">
              <div class="col">
                
                <div class="d-grid gap-3">
                  <div class="p-2 border border navbar-dark" style="background-color: darkslategrey"><h6 style="color: white; text-align: center;">Reverse Your Venue Now!</h6>
                  </div>
                <br>
              </div>
          <form action="my_book.php" method="POST">
              <div class="container background-color border">
                  <div class="row">
                    <div class="col">
                      <div class="col-lg-6">
                          <img src="<?php if(isset($_POST['img'])){echo 'https://london.bridestory.com/images/c_fill,dpr_2.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/grand_ballroom_classroom_xk4cbx/novotel-tangerang_grand-ballroom1437552529_2.webp';}?>" alt="" class="gambar-build" style="width: 500px">
                      </div>
                    </div>
                    <!-- Name -->
                    <div class="col">
                      <div class="form-group">
                          <label for="inputNama" class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control" id="inputNama" placeholder="Hanif_1202190246" name="nama" value="Hanif_1202190246" readonly>
                          </div>
                      </div>
                      <!-- Check In -->
                      <div class="form-group">
                          <label for="inDate" class="col-sm-3 col-form-label">Check-In</label>
                          <div class="col-sm-12">
                            <input type="date" class="form-control" id="inputDate" name="date">
                          </div>
                      </div>
                      
                      <!-- Durasi -->
                      <div class="form-group">
                          <label for="inputDuration" class="col-sm-3 col-form-label">Duration(hours)</label>
                          <div class="col-sm-12">
                              <input required name="Duration" placeholder="Duration" class="form-control" type="number" min="1" aria-describedby="days">                            
                          </div>
                      </div>
                      <!-- No Telp -->
                      <div class="form-group">
                          <label class="col-sm-12 col-form-label">Phone Number :</label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control" id="Phone" placeholder="Nomor Telpon" name="phone" required>
                          </div>
                      <!-- Building Type -->
                      <div class="form-group row">
                  <label for="building" class="col-sm-3 col-form-label">Building Type:</label>
                  <div class="col-sm-12">
                  <?php 
                      if (isset($_POST['menu'])) {
                  $menu = $_POST['menu'];
                  }
                      if (!empty($menu)) {
                  echo '<input type="text" class="form-control" id="NusantaraHall" name="build" readonly value='.$menu.'>';
                  }
                  else {
                  echo '<select id="disabledSelect" class="form-control" id="NusantaraHall"  name="build">';
                  echo '<option value="NusantaraHall" selected>Nusantara Hall</option>';
                  echo '<option value="GarudaHall">Garuda Hall</option>'; 
                  echo '<option value="GedungSerbaGuna">Gedung Serba Guna</option>';
                  echo '</select>';
                  }
                  ?>
                  </div>

                  
                      </div>
              </div>
                    
                      <!-- Service -->
                      <div class="form-group">
                          <label class="col-sm-12 col-form-label" class="service" for="sel1">Add Service(s)</label>
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="service"  value="Catering" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Catering/$700
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="service" value="Decoration" id="flexCheckChecked">
                              <label class="form-check-label" for="flexDefault">
                                Decoration/$450
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="service" value="SoundSystem" id="flexCheckChecked">
                              <label class="form-check-label" for="flexDefault">
                                Sound System/$250
                              </label>
                              <br>
                              <br>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" style="width:100%">
                                  Book
                              </button>
                              <br>
                              <br>
                      </div>
      
                              
                              </div>
                              
                                  
                                  
                              </div>
      
                              
                                  </div>
                              </div>
      
                          </form>
                          
                          

          
                              
                                
                    </div>
                  </div>  
            
            
              
                
                  
                    
                
            </div>
          </div>
        </section>
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
