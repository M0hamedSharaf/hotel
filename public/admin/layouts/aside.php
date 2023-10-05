
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   
   <a href="index3.html" class="brand-link">
     <span class="brand-text font-weight-center">  تجهيز الفنادق</span>
   </a>

   
   <div class="sidebar">
    
  
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


         <li class="nav-item 
         <?=
          (getUrl() == getPage("users/create.php") ||
            getUrl() == getPage("users/index.php"))
            ? 'menu-open' : '' ?>">


           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("users/create.php") ||
              getUrl() == getPage("users/index.php"))
              ? 'active' : '' ?>
           ">
             <i class="nav-icon fas fa-user"></i>

             <p>
               المستخدمون
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("users/create.php") ?>" class="nav-link <?= getUrl() == getPage("users/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>

                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("users/index.php") ?>" class="nav-link <?= getUrl() == getPage("users/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




         <li class="nav-item 
         <?=
          (getUrl() == getPage("customers/create.php") ||
            getUrl() == getPage("customers/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("customers/create.php") ||
              getUrl() == getPage("customers/index.php"))
              ? 'active' : '' ?>
           ">
             
             <i class="nav-icon fas fa-couch"></i>


             <p>
          قسم الأثاث و الديكورات 

               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("decorations_and_furniture/create.php") ?>" class="nav-link <?= getUrl() == getPage("decorations_and_furniture/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("decorations_and_furniture/index.php") ?>" class="nav-link <?= getUrl() == getPage("decorations_and_furniture/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>



         <li class="nav-item 
         <?=
          (getUrl() == getPage("electrical_appliances/create.php") ||
            getUrl() == getPage("electrical_appliances/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("electrical_appliances/create.php") ||
              getUrl() == getPage("electrical_appliances/index.php"))
              ? 'active' : '' ?>
           ">
             
             <i class="nav-icon fas fa-charging-station"></i>

             <p>
              قسم الإجهزة الكهربائية 
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("electrical_appliances/create.php") ?>" class="nav-link <?= getUrl() == getPage("electrical_appliances/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("electrical_appliances/index.php") ?>" class="nav-link <?= getUrl() == getPage("electrical_appliances/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




         <li class="nav-item 
         <?=
          (getUrl() == getPage("electronic_devices/create.php") ||
            getUrl() == getPage("electronic_devices/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("electronic_devices/create.php") ||
              getUrl() == getPage("electronic_devices/index.php"))
              ? 'active' : '' ?>
           ">
             
            
             <i class="nav-icon fas fa-desktop"></i>
             <p>
              قسم الأجهزة الإلكترونية
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("electronic_devices/create.php") ?>" class="nav-link <?= getUrl() == getPage("electronic_devices/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("electronic_devices/index.php") ?>" class="nav-link <?= getUrl() == getPage("electronic_devices/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>






         <li class="nav-item 
         <?=
          (getUrl() == getPage("household_appliances_section/create.php") ||
            getUrl() == getPage("household_appliances_section/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("household_appliances_section/create.php") ||
              getUrl() == getPage("household_appliances_section/index.php"))
              ? 'active' : '' ?>
           ">
            
             <i class="nav-icon fas fa-dumpster"></i>
             <p>
             قسم الأدوات  المنزلية 
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("household_appliances_section/create.php") ?>" class="nav-link <?= getUrl() == getPage("household_appliances_section/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("household_appliances_section/index.php") ?>" class="nav-link <?= getUrl() == getPage("household_appliances_section/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>





         <li class="nav-item 
         <?=
          (getUrl() == getPage("furniture_department/create.php") ||
            getUrl() == getPage("furniture_department/index.php"))
            ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link 
           <?=
            (getUrl() == getPage("furniture_department/create.php") ||
              getUrl() == getPage("furniture_department/index.php"))
              ? 'active' : '' ?>
           ">
             
             <i class="nav-icon fas fa-chair"></i>

             <p>
              قسم المفروشات 
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= getPage("furniture_department/create.php") ?>" class="nav-link <?= getUrl() == getPage("furniture_department/create.php") ? 'active' : '' ?>">
                 <i class="far fa-edit nav-icon"></i>
                 <p>إضافة</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= getPage("furniture_department/index.php") ?>" class="nav-link <?= getUrl() == getPage("furniture_department/index.php") ? 'active' : '' ?>">
                 <i class="fas fa-users nav-icon"></i>
                 <p>إظهار الكل</p>
               </a>
             </li>
           </ul>
         </li>




       </ul>
     </nav>
     
   </div>
   
 </aside>