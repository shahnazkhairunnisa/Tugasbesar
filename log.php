<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content=""> 
    <meta name="author" content=""> 
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico"> 
 
    <title>Dashboard Template for Bootstrap</title> 
 
    <!-- Bootstrap core CSS --> 
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
 
    <!-- Custom styles for this template --> 
    <link href="aa.css" rel="stylesheet"> 
 
    <!-- Just for debugging purposes. Don't actually copy this line! --> 
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]--> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head> 
 
  <body> 
  <style>
  body{
	  background-image : gandus.jpg;
  }
  </style>
 
    
   
    <div class="container-fluid"> 
      <div class="row">  
          
        </div> 
         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
          <h1 class="page-header">WELCOME TO MY BLOG (^.^)</h1> 
		  <br>
		  <br>
		  <br> 
		<div> 
			<h1>
			LETS GO !!! 
			</h1>
			 
			<div class="cols">
			  <div class="col-sm-4 col-md-4">
				<div class="thumbnail">
				  <img src="cookies/buttercook.jpg" alt="...">
				  <div class="caption">
					<h3>Butter Cookies</h3>
					<p>Butter cookie (atau Biskuit Butter; harfiahnya kue mentega) juga dikenal dengan Brysslkex, sablès dan Biskuit Denmark, adalah adalah kue yang dibuat tanpa menggunakan ragi atau pengembang, dengan bahan-bahan mentega, tepung terigu dan gula. Butter cookies dikategorikan sebagai "crisp cookie (kue renyah)" dikarenakan teksturnya yang renyah dan karena bahan pembuatnya dari mentega dan gula. Biasanya adonan perlu didinginkan agar mudah diolah atau dibentuk. Butter cookies tak menggunakan perasa namun ada yang memberi rasa vanila dan coklat. Butter cookies beragama bentuknya, mulai dari lingkaran, persegi dan oval, juga dalam bentuk bulat kecil, kotak atau rata. Di beberapa negara Eropa dan Amerika Utara, kue ini seringkali disajikan pada saat hari Natal.</p>
				 </div>
				</div>
			  </div>
			</div>
			<div class="cols">
			  <div class="col-sm-5 col-md-4">
				<div class="thumbnail">
				  <img src="cookies/kacangcook.jpg" alt="...">
				  <div class="caption">
					<h3>Kue Kacang</h3>
					<p>Kue kacang tanah adalah sejenis kue kering yang berbahan dasar kacang tanah dengan berbagai varian bentuk, seperti bentuk bulat, hati, ataupun bulan sabit. Kue kacang tanah dibuat dari adonan tepung terigu, telur, gula halus, minyak goreng, dan bahan dasarnya kacang tanah yang telah dikupas kulitnya dan kemudian dipanggang di dalam oven sampai matang.

            Kue kacang tanah biasanya menjadi sajian khas pada hari raya, seperti Idul Fitri, Natal dan tahun baru Imlek. Kue kacang tanah biasanya dijual dalam kemasan toples plastik di toko roti, toko kue, dan pasar swalayan.Adapun bahan-bahan untuk membuatnya Bahan-bahan : 1/2 kg terigu , 1/2 kg kacang, 1/2 kg gula , 2 btr telur , 1/4 vanila , 1/2 ltr minyak.  </p>
				  </div>
				</div>
			  </div>
			</div>
			<div class="cols">
			  <div class="col-sm-5 col-md-4">
				<div class="thumbnail">
				  <img src="cookies/nastar.jpg" alt="...">
				  <div class="caption">
					<h3>Nastar</h3>
					<p>Sebagai sajian Lebaran, kue nastar pasti sudah tidak asing lagi. Kue kering dengan isian selai nanas ini seolah jadi kue wajib saat menyambut Hari Raya Idul Fitri alias Lebaran. Nama nastar sendiri berasal dari bahasa Belanda ananas dan tart, gabungan dua kata tersebut akhirnya disingkat pelafalannya menjadi nastar.Terbuat dari campuran adonan terigu, mentega, gula, dan telur, kue nastar biasanya berbentuk bulat dengan tambahan cengkeh atau kismis diatasnya.Awalnya resep kue nastar terinspirasi dari kue pie khas Eropa yang biasanya dibuat dalam satu loyang besar berisi selai strawberry, blueberry, atau apel. Namun karena buah-buah tersebut susah didapatkan di Indonesia, isian pie diganti dengan buah nanas yang memiliki rasa asam manis yang serupa.Selain itu, bentuk kue pun dimodifikasi menjadi bulat-bulat kecil ukuran sekali makan sehingga jadi camilan yang lebih praktis.</p>
					  </div>
				</div>
			  </div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>APA YANG INGIN ANDA LAKUKAN ???</h4>
				  </div>

				  
				  
									  <?php 
					require 'koneksi.php';
					  $tampil = query ("SELECT * FROM blog");

					 ?>
					  
					  
					  <?php if(isset($_GET['status'])): ?>
					  <p>
						<?php
						  if($_GET['status'] == 'sukses'){
							echo "Pendaftaran  berhasil!";
						  } else {
							echo "Pendaftaran gagal!";
						  }
						?>
					  </p>
					  <?php endif; ?>
					  
				</div>
			  </div>
			</div>
         
          </div> 
	
 
          </div> 
        </div> 
      </div> 
    </div> 
         
          </div> 
 
          </div> 
        </div> 
      </div> 
    </div> 
  

    <!-- Bootstrap core JavaScript
    ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="../../assets/js/docs.min.js"></script> 
  </body> 
</html> 