<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal UMKM Randu</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
.center-block {
    height: 200px;
    width: 400px;
}
    </style>

</head>

<body>

    <?php 
    
    include("header.php");
	include("slide.php");
    
    ?>
   
    
    <div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Selamat Datang di Portal UMKM Randu
                </h1>
            	<div style="float:left;">
                	<h4>
                		Portal UMKM Randu adalah sebuah website yang menyediakan <br>
                		layanan iklan UMKM yang berada di dusun Randu. Website ini <br>
                		menyediakan berbagai macam produk yang ditawarkan dan <br>
                		mempermudah pelanggan ingin mengetahui harga maupun <br>
                		produk yang dijual.
                	</h4>
            	</div>
                
                <div style="float:right;">
                	<a href="kontak.php"><img src="img/reg.png" width="320" height="160"></a>
                </div>
            </div>
        </div>
        

        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Berita Terkini</h2>
            </div>
				<?php
				$con=mysqli_connect("localhost","root","","umkm_randu");
				
				include_once('pagination.php');
			 
					$page = 1;
					if (isset($_GET['page']) && !empty($_GET['page']))
					$page = (int)$_GET['page'];
			 
					$dataPerPage = 6;
					if (isset($_GET['perPage']) && !empty($_GET['perPage']))
					$dataPerPage = (int)$_GET['perPage'];
			 
					$dataTable = getTableData($page, $dataPerPage);
					
					foreach ($dataTable as $i => $data){ 
				?> 
	        <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5><b><?php echo substr($data['judul'],0,35); ?>...</b></h5>
                    </div>
                    <div class="panel-body">
                    	<img src="<?php echo $data['gambar']; ?>"  class="img-responsive center-block" >
                        <br>
                        <p align="justify"><?php echo substr($data['isi'],0,250); ?>...</p>
                        <a href="Detailberita.php?id=<?php echo $data['id_berita'] ; ?>" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div> 
               <?php } ?>
        </div>
        
				<?php showPagination($dataPerPage); ?>
        
	</div>



    
   

    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

    
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div id="container">
                    <div id="footer"></div>
                    <div class="row">
                        <div class="col-lg-12" align="center" >
                        <p>Copyright &copy;UMKM RANDU </p>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
</body>

</html>
