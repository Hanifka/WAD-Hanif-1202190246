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
          <a class="nav-link" href="form.php">Booking</a>
        </li>
      </ul>
    </nav>

    <!-- End Nav Bar-->

    <!-- Home-->
    <br />
    <p class="h6 text-center">Welcome To ESD VENUE RESERVATION</p>

    
    
      <section id="jenis">
        <hr class="my-4" />
        <div class="container justify-content-center">
          <div class="row text-center justify-content-center">
            <div class="col">
              
              <div class="d-grid gap-3 text-center">
                <div class="p-2 border border navbar-dark" style="background-color: darkslategrey"><h6 style="color: white;">Find Your best Deal For your event, here!</h6>
                </div>
              <br>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              
                <div class="card" style="width: 18rem;">
                  <img src="https://london.bridestory.com/images/c_fill,dpr_2.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/grand_ballroom_classroom_xk4cbx/novotel-tangerang_grand-ballroom1437552529_2.webp" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="text-left">Nusantara Hall</h5>
                    <p class="text-left">$2000/hour<br>5000 Capacity</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-success">Free Parking</li>
                    <li class="list-group-item text-success">Full AC</li>
                    <li class="list-group-item text-success">Cleaning Service</li>
                    <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                  </ul>
                  <div class="card-footer">
                    <form action="form.php" method="POST">
                      <input type="hidden" name="img" value="https://london.bridestory.com/images/c_fill,dpr_2.0,f_auto,fl_progressive,pg_1,q_80,w_680/v1/assets/grand_ballroom_classroom_xk4cbx/novotel-tangerang_grand-ballroom1437552529_2.webp">
                      <small class="text-muted"><button type="submit" value="NusantaraHall" name="menu" class="card-link btn btn-primary text-center">Book Now</button></small>
                    </form>
                  </div>
                </div>
              </div>
                <div class="col-4">
                  
                    <div class="card" style="width: 18rem;">
                      <img src="https://sutasomahotel.com/wp-content/uploads/sites/154/2021/01/opus-grandballroom6-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="text-left">Garuda Hall</h5>
                    <p class="text-left">$1000/hour<br>2000 Capacity</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-success">Free Parking</li>
                    <li class="list-group-item text-success">Full AC</li>
                    <li class="list-group-item text-danger">No Cleaning Service</li>
                    <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                  </ul>
                      <div class="card-footer">
                        <form action="form.php" method="POST">
                          <input type="hidden" name="img" value="https://sutasomahotel.com/wp-content/uploads/sites/154/2021/01/opus-grandballroom6-1.jpg">
                          <small class="text-muted"><button type="submit" value="GarudaHall" name="menu" class="card-link btn btn-primary text-center">Book Now</button></small>
                        </form>
                      </div>
                    </div>
                  </div>
                    <div class="col-4">
                      
                        <div class="card" style="width: 18rem;">
                          <img src="https://venuemagz.com/wp-content/uploads/2020/02/Samisara-1-800x533_c.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="text-left">Gedung Serba Guna</h5>
                    <p class="text-left">$500/hour<br>500 Capacity</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger">Free Parking</li>
                    <li class="list-group-item text-danger">Full AC</li>
                    <li class="list-group-item text-danger">No Cleaning Service</li>
                    <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                  </ul>
                  
                  <div class="card-footer">
                    <form action="form.php" method="POST">
                      <input type="hidden" name="img" value="https://venuemagz.com/wp-content/uploads/2020/02/Samisara-1-800x533_c.jpg">
                      <small class="text-muted"><button type="submit" value="GedungSerbaGuna" name="menu" class="card-link btn btn-primary text-center">Book Now</button></small>
                    </form>
                    
                          </div>
                        </div>
                     </div>
                  <br></br>
  
                
               
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
