
<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Data Buku</title>
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
          <li class='launcher'>
            <i class='icon-dashboard'></i>
            <a href="<?php echo base_url('index.php/buku')?>">Dashboard</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/buku/bukuView')?>">Buku</a>
          </li>
          <li class='active launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/kategori')?>">Kategori</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="<?php echo base_url('index.php/pembelian')?>">Pembelian</a>
          </li>
           <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='<?php echo base_url('index.php/login/logout')?>'>Logout</a>
          </li>
          <!-- <li class='launcher'>
            <i class='icon-table'></i>
            <a href="tables.html">Tables</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='#'>Reports</a>
            <ul class='dropdown-menu'>
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
          </li> -->
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Pengelolaan Data Kategori</li>
          <!-- <li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li> -->
        </ul>
       
          <div class='label label-danger'>
            Danger
          </div>
          <div class='label label-info'>
            Info
          </div>
        </div>
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading'>
            <i class='icon-beer icon-large'></i>
       <!--    DashBoard
          </div>
          <div class='panel-body'>
            <div class='page-header'>
              <div class='panel-heading'>
            <i class='icon-table icon-large'></i> -->
            Dashboard Admin
          </div>
          <div class='panel-body'>
            <table class="table table-striped">

              <div class="container">
      <div class="panel-heading">
        <div class="table-striped">
           <body>
    <h1 class="text-center">Halaman Kategori</h1>

    <div class="container">
      <div class="panel-heading">
        <div class="table-striped">
           <a class="btn btn-primary" href="<?php echo base_url('index.php/kategori/create'); ?>" >Tambah</a><br></div>

      <table class="table table-striped">
    <thead>
      <tr>
      <th class= "text-center">no</th>
      <th class= "text-center">Nama Kategori</th>
      <th class= "text-center">aksi</th>
    </thead>

    <tbody>
      <?php $no=1; foreach ($Kategori as $key) : ?>
        <tr>
        <td class= "text-center"><?php echo $no ?></td>
        <td class= "text-center"><?php echo $key['kategori'] ?></td>
  
        <!-- <td><a class="btn btn-success" a href="<?php echo base_url('index.php/kategori/update/'.$key['id_kategori']) ?>"> edit</a></td> -->
        <td><a class="btn btn-success" a href="<?php echo base_url('index.php/kategori/delete/'.$key['id_kategori']) ?>"> hapus</a></td>
      
    </tr>
      <?php $no++; endforeach?>
    </tbody>
  </table>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <td><a class="btn btn-success" a href="<?php echo base_url('index.php/buku/'.$key['id_buku']) ?>"> back</a></td>

    <!-- Footer -->
    <!-- Javascripts -->
   
  </body>
</html>
