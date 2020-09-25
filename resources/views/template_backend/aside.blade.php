 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v2</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Dashboard v3</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item @if(!empty($dataMaster)) menu-open @endif">
                     <a href="#" class="nav-link @if(!empty($dataMaster)) active @endif">
                         <i class="nav-icon fa fa-suitcase"></i>
                         <p>
                             Data Master
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('agama.index') }}"
                                 class="nav-link {{ request()->is('agama*') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Agama</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('pekerjaan.index') }}"
                                 class="nav-link {{ request()->is('pekerjaan*') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Pekerjaan</p>
                             </a>
                         </li>


                     </ul>
                 </li>
                 <li class="nav-item @if(!empty($dataMasterWilayah)) menu-open @endif">
                     <a href="#" class="nav-link @if(!empty($dataMasterWilayah)) active @endif">
                         <i class="nav-icon fa fa-globe"></i>
                         <p>
                             Data Wilayah
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('provinsi.index') }}"
                                 class="nav-link {{ request()->is('provinsi*') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Provinsi</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('kabupaten.index') }}"
                                 class="nav-link {{ request()->is('kabupaten*') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Kabupaten</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('kecamatan.index') }}"
                                 class="nav-link {{ request()->is('kecamatan*') ? 'active' : '' }}">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Kecamatan</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
