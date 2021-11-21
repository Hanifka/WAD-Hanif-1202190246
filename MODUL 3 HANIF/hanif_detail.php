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

   <!-- Home -->

 <div class="container mt-1000">
        <?php
        include 'koneksi.php';
        $id_buku = $_GET['id_buku'];
        $query = "SELECT * FROM buku_table where id_buku=$id_buku";
        $query_run = mysqli_query($koneksi, $query);
        ?>
        <div class="row ">
            <?php if ($row = mysqli_fetch_assoc($query_run))
        { ?>
            <div class="col-md-8 col-lg-offset-8 " style="margin: 100px 200px;">
            <div class="card cards">
                <h1 style="text-align:center; margin-bottom: 50px;">Detail Buku
                </h1>
                <img class="card-img-top img-poster justify-content-center" src="gambar/<?php echo $row['gambar'] ?>" alt="gambar rusak">
                <div class="card-body">
            
                <div class="row">
                    <div class="col-md-8">
                    <p> 
                        <strong> Judul: 
                        </strong>
                    </p>
                    <p>
                        <i class="fa fax fa-calendar">
                        </i>
                        <?php echo $row['judul_buku'] ?>
                    </p>
                    <p> 
                        <strong> Penulis: 
                        </strong>
                    </p>
                    <p>
                        <i class="fa fax fa-calendar">
                        </i>
                        <?php echo $row['penulis_buku'] ?>
                    </p>
                    <p> 
                        <strong> Tahun Terbit: 
                        </strong>
                    </p>
                    <p>
                        <i class="fa fax fa-calendar">
                        </i>
                        <?php echo $row['tahun_terbit'] ?>
                    </p>
                    <p> 
                        <strong> Deskripsi: 
                        </strong>
                    </p>
                    <p>
                        <i class="fa fax fa-calendar">
                        </i>
                        <?php echo $row['deskripsi'] ?>
                    </p>
                    <p> 
                        <strong> Bahasa: 
                        </strong>
                    </p>
                    <p>
                        <i class="fa fax fa-calendar">
                        </i>
                        <?php echo $row['bahasa'] ?>
                    </p>
                    <p> 
                        <strong> Tag: 
                        </strong>
                        
                    </p>
                    <i class="fa fax fa-calendar">
                    </i>
                        <?php echo $row['tag'] ?>
                    </p>
                    <p> 
                    
                    <!-- Button eddit-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Edit</button>

                    <a href="hanif_hapus.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                <!-- Modal -->
                
                

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Data Buku</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div action=>
                    <div class="modal-body">
                        <form method="post" action="hanif_update.php">
                                <input type="hidden" name="id_buku" value="<?php echo $row['id_buku'];?>">
                            <div class="px-3">
                                <label for="recipient-name" class="col-form-label">Judul Buku</label>
                                
                                <input required type="text" name="judul_buku" id="" class="form-control" value="<?php echo $row['judul_buku']; ?>" placeholder="" aria-describedby="helpId">
                                
                            </div>
                            <div class="px-3">
                                <label for="recipient-name" class="col-form-label">Penulis Buku</label>
                                
                                <input type="text" name="penulis_buku" id="" class="form-control" placeholder="" value="<?php echo $row['penulis_buku']; ?>" aria-describedby="helpId">   
                            </div>
                
                            </div>
                            <div class="px-3">
                                <label for="recipient-name" class="col-form-label">Tahun Terbit</label>
                                
                                <input required type="text" name="tahun_terbit" id="" class="form-control" placeholder="" value="<?php echo $row['tahun_terbit']; ?>"aria-describedby="helpId">   
                            </div>
                            <div class="px-3">
                                <label for="recipient-name" class="col-form-label">Tahun Terbit</label>
                                <textarea required class="form-control" name="deskripsi" id="" rows="3" value=""><?php echo $row['deskripsi']; ?></textarea>
                            </div>

                            <div class="px-3">
                                <label for="kategori"><b>Bahasa</b></label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline mr-5">
                                            <input class="form-check-input" type="radio" name="bahasa" value="Indonesia">
                                            <label class="form-check-label" for="inlineCheckbox1">Indonesia</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="bahasa" value="Lainnya">
                                            <label class="form-check-label" for="inlineCheckbox2">Lainnya</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 px-2 mt-3">
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

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name ="updatedata" class="btn btn-primary">Save changes</button>
                            </div>
                            
                        </form>

                           
                    </div>
                    
                    </div>
                </div>
                </div>
                

                                            
                           
                </div>
            <?php } ?>
        </div>




    </div>

    <!-- FOOTER! -->
    <footer class="text-center mt-3">
      <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="" width="150  " />
      <h3>Perpustakaan EAD</h3>
      <p class="fs-7">Dibuat oleh Hanif Kurniawan_1202190246</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  </body>
</html>