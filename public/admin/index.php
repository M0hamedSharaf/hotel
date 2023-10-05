<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/functions.php";

?>

<?php include layout("header.php"); ?>

<?php include layout("navbar.php"); ?>

<?php include layout("aside.php"); ?>

<div class="content-wrapper">
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">تجهيزات الفنادق</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item active"><a href="#">إنشاءو لتجهيز الفنادقwebsit</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  </div>
 

  
  <section class="content">
    <div class="container-fluid text-center">
      
      <img  width="800px" height="385px" src="<?=getImage("img/pexels-photo-685166.jpeg") ?>" >

    </div>
  </section>
  

  <?php include layout("footer.php"); ?>