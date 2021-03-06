<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Online BookStore</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
 
   
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/DataTables/css/dataTables.bootstrap.min.css" />


   <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/css/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>assets/DataTables/js/dataTables.bootstrap.min.js"></script>
    
    
  </head>
  <body class='main page'>
    <!-- Navbar -->
    
      <!-- Sidebar -->
      <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='launcher'>
            <i class='icon-dashboard'></i>
             <a href="<?php echo base_url('index.php/user')?>">Dashboard</a>
          </li>
          <li class='active launcher'>
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
          
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Tables</li>
          <li><a href="#">Lorem</a></li>
          <li class='active'><a href="#">ipsum</a></li>
        </ul>
        
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default grid'>
          <div class='panel-heading'>
            <i class='icon-table icon-large'></i>
            Data Buku  <i class='icon-dashboard'></i>
           
            <a href="<?php echo base_url('index.php/cart/addCart') ?>" class=" btn btn-success"> Keranjang Belanja <font color="red" style="box-shadow: red"><?php echo count($this->cart->contents()); ?></shadow></font></a>
          </div>
        
           
          <div class='panel-body'>
               
         
         <div style="width: 100%;" class="table-responsive">
          <table align="center" width="800" class="table table-bordered" id="example">
           <thead>
             <tr >
               <th width="25%">Buku</th>
               <th width="75%">Detail Buku</th>
             </tr>
           </thead>
           <tbody>
          <?php
          foreach ($buku_list as $row) : ?>
             <tr><td width="50">
               <img src="../../assets/uploads/<?php echo $row['gambar'] ?>" style="width:200px; height:200px">
          </td><td>           
            <font face='calibri' size='3'>Judul : <?php echo $row['judul']; ?><br>
            Pengarang : <?php echo $row['pengarang']; ?><br>
            Sinopsis : <?php echo $row['sinopsis']; ?><br>
            Penerbit : <?php echo $row['penerbit']; ?><br>
             Tahun Terbit : <?php echo $row['tahun_terbit']; ?><br>
             Jumlah Halaman : <?php echo $row['jumlah_halaman']; ?><br>
            Stok : <?php echo $row['stok']; ?><br>
             Harga : <?php echo $row['harga']; ?><br>
          
           <a href="<?php echo base_url('index.php/cart/belicart/'.$row['id_buku']) ?>" class=" btn btn-primary">Add To Cart</a>
           <a href="<?php echo base_url('index.php/pembelian/beli/'.$row['id_buku']) ?>" class=" btn btn-success">Beli</a>
            </font></td></tr>
          <?php endforeach; ?> 
              
          </tbody>
        </table>
          </div>
        </div>
      
           <script type="text/javascript">
  $(document).ready(function(){
    $('#example').DataTable();
  });
</script>
  </body>
</html>
