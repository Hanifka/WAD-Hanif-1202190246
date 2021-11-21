<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />
    <!-- CSS LINK -->
    <link rel="stylesheet" href="MODUL 1 HANIF.css" />
  </head>
  <body>
    <!-- Nav Bar -->

    <nav class="fixed-top navbar navbar-dark" style="background-color: darkslategrey" shadow-sm>
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="150  " /></a>
        <form method="get"class="d-flex" action="Hanif_form.php">
          <button type="submit" class="btn btn-primary">Tambah Buku</button>
        </form>
      </div>
    </nav>
   <!-- Nav Bar -->

    <div class="container py-5">
      <div class="row mt-5 my-4">

            <?php
            require 'koneksi.php';
            
            $query = "SELECT * FROM buku_table";
            $query_run = mysqli_query($koneksi, $query);
            $check = mysqli_num_rows($query_run) > 0;

            if($check)
            {
              while($row = mysqli_fetch_assoc ($query_run))
              {
                  ?>
                  <div class="col-md-4">
                      <div class="card">
                          <div class="card-body">
                              <img src="gambar/<?php echo $row['gambar'];?>" class="card-img-top" alt="Gambar Broken" >
                              <h4 class="card-title"> <?php echo $row['judul_buku'];?> </h4>
                              <p class="card-title"> <?php echo $row['deskripsi'];?> </p>
                              <form action="" method="GET">
                                <a href="hanif_detail.php?id_buku=<?php echo $row['id_buku']?>" class="btn btn-primary">Lihat Detail</a>
                              </form>
                          </div>
                       </div>
                   </div> 
                  

                  <?php
                  
                  
              }
            }
            else  
            { ?>

              <div class=" d-flex justify-content-center align-items-center">   
                
                <h1 class="" style="margin-top: 200px;">Buku Kosong<hr></h1> 
                
                <?php
            }
            ?>
        </div>
     </div>


           
            
    <!-- FOOTER! -->
    <footer class="text-center ">
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="150  " />
      <h3>Perpustakaan EAD</h3>
      <p class="fs-7">Dibuat oleh Hanif Kurniawan_1202190246</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>
