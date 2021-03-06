<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="<?php echo base_url()?>assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    
     
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='active launcher'>
            <i class='icon-dashboard'></i>
            <a href="<?php echo base_url('index.php/user')?>">Dashboard</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/user/datatable')?>">Buku</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/user/pembelian')?>">Pembelian</a>
          </li>
          <li class='launcher'>
            <i class='icon-table'></i>
            <a href="<?php echo base_url('index.php/user/profil')?>">Profil</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='<?php echo base_url('index.php/login/logout')?>'>Logout</a>
            <!-- <ul class='dropdown-menu'>
              <li class='dropdown-header'>Launcher description</li>
              <li>
                <a href='#'>Action</a>
              </li>
              <li>
                <a href='#'>Another action</a>
              </li>
              <li>
                <a href='#'>Something else here</a>
              </li>
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-bookmark'></i>
            <a href='#'>Bookmarks</a>
          </li>
          <li class='launcher'>
            <i class='icon-cloud'></i>
            <a href='#'>Backup</a>
          </li>
          <li class='launcher'>
            <i class='icon-bug'></i>
            <a href='#'>Feedback</a>
          </li>
        </ul> -->
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>
              Selamat datang <?php echo $username; ?> sebagai <?php echo $level ?></li>
          
        </ul>
       
         
          </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
           Buku terbaru
            
          </div>
          <div class='panel-body'>
            

            <div class="row">
               <?php
          foreach($buku_list as $row) {?>
            <div class="col-md-3">

            <div class="thumbnail">
           <?php   echo "<img src='".base_url('assets/uploads/').$row['gambar']."' style='height:150px;'>" ;
          ?>
              <div class="caption">
                <h1> <?php   echo $row['judul'] ;?>
                </h1>
                <a href="<?php echo base_url('index.php/pembelian/beli/'.$row['id_buku']) ?>" class=" btn btn-success">Beli</a>
              </div>
              </div>

            <div class="block" >

            </div>
          
          </div>
          <?php } ?>

     </div>
           <div class='panel-heading'  >
            <i class='icon-beer icon-large'></i>
           Buku Terlaris
            
          </div>

            

            <div class="row">
               <?php
          foreach($buku_laris as $row) {?>
            <div class="col-md-3">

            <div class="thumbnail">
           <?php   echo "<img src='".base_url('assets/uploads/').$row['gambar']."' style='height:150px;'>" ;
          ?>
              <div class="caption">
                <h1> <?php   echo $row['judul'] ;?>
                </h1>
                <a class="btn btn-success" href="#">Beli</a>
              </div>
              </div>

            <div class="block" >

            </div>
          
          </div>
          <?php } ?>

            
         
            
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Footer -->
    <!-- Javascripts -->
   
  </body>
</html>
