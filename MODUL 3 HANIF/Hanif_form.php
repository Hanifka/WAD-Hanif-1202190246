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
        <form class="d-flex">
          <button type="button" class="btn btn-primary">Tambah Buku</button>
        </form>
      </div>
    </nav>
    <!-- END Nav Bar -->
    <br><br><br><br>
    <!-- Form -->
    
        
        <div class="container p-5 shadow-lg p-3 mb-5 bg-body rounded">
          <div class="row text-center">
            <div class="col">
              
              <h3>Tambah Data Buku</h3>
              
              </div>
            </div>
            <div class="row justify-content-center p-1 ">
              <div class="container">
                <form method="post" action="hanif_tambah.php" enctype="multipart/form-data">
                     <!-- Judul -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Judul Buku</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="judul_buku" aria-describedby="emailHelp">
                        
                      </div>
                     <!-- penulis-->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Penulis</b></label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Hanif_1202190246" name="penulis_buku" value="Hanif_1202190246" readonly>
                        
                    </div>
                     <!-- taun -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Tahun Terbit</b></label>
                        <input type="year" class="form-control" id="exampleInputEmail1" name="tahun_terbit" aria-describedby="emailHelp" value="">
                        
                    </div>
                     <!-- desk -->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"><b>Deskripsi</b></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Contoh : Buku ini menjelaskan tentang" name="deskripsi"></textarea>
                      </div>
                    <!-- bahas-->
                    <div class="mb-3 p-1">
                        <div class="input-group">
                        <label for="Nama" class="col-sm-1"><b>Bahasa</b></label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="bahasa" id="inlineRadio1" value="Indonesia">
                          <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                        </div>
  
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" Name="bahasa" id="inlineRadio2" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                      </div>
                    </div>
                       <!-- Tagg-->
                  
                   <div class="mb-3 mt-3">
                        <div class="input-group">
                          <label for="Nama" class="col-sm-1"><b>Tag</b></label>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" name ="tag[]" id="inlineCheckbox1" value="Pemrograman">
                              <label class="form-check-label" for="inlineCheckbox1">Pemrograman</label>
                            </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name ="tag[]" value="Website">
                              <label class="form-check-label" for="inlineCheckbox2">Website</label>
                          </div>  
                          
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name ="tag[]" value="java">
                              <label class="form-check-label" for="inlineCheckbox2">Java </label>
                          </div>
                          
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name ="tag[]" value="Website">
                              <label class="form-check-label" for="inlineCheckbox2">OOP</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name ="tag[]" value="Kalkulus">
                              <label class="form-check-label" for="inlineCheckbox2">Kalkulus</label>
                          </div>

                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name ="tag[]" value="Lainnya">
                              <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                          </div>
                        
                      <!-- gambarr-->    
                    </div>
                        <div class="mt-3">
                            <label for="formFile" class="form-label"><b>Gambar</b> </label>
                            <input class="form-control" type="file" id="formFile" name="gambar">
                        </div>
                    


                      <div class="row p-5">
                        <div class="col-6 col-md-4"></div>
                        <div class="col-6 col-md-4">
                            <button type="submit" class="btn btn-primary" value ="simpan"style="width:100%">
                                + Tambah
                            </button>
                        </div>
                        <div class="col-6 col-md-4"></div>
                    </div>
                      
                </form>

                  </div>
                </div>
              </div>
    <!-- ENd Form-->
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- FOOTER! -->
    <div class="container mt-3">
      <footer class="text-center">
        <br> <br>
        <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="150  " />
        <h3>Perpustakaan EAD</h3>
        <p class="fs-7">Dibuat oleh Hanif Kurniawan_1202190246</p>
      </footer>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>
