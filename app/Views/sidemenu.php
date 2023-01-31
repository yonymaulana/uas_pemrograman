<!DOCTYPE html>
<?php $session       = \Config\Services::session();?>
<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse"> 

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url('');?>/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                        <a class="dropdown-item" href="<?= base_url('dashboard'); ?>">
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar avatar-online">
                                <img src="<?= base_url('');?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <span class="fw-semibold d-block">John Doe</span>
                              <small class="text-muted">Admin</small>
                            </div>
                          </div>
                        </a>
                      </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                                  <li>
                                    <a class="dropdown-item" href="#">
                                      <i class="bx bx-user me-2"></i>
                                      <span class="align-middle">My Profile</span>
                                    </a>
                                  </li>
                    <li>
                    </li>
                      <li>
                        <div class="dropdown-divider"></div>
                      </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo base_url('home/logout');?>">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                              </a>
                            </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?= base_url('dashboard'); ?>" class="app-brand-link">
              <span class="app-brand-logo demo">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">MOSQUE.id</span>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->

            <li class="menu-item">
        <a class="menu-link <?php if ($location == 'dashboard') {
                              echo "";
                            } else {
                              echo "collapsed";
                            } ?>" href="<?= base_url('dashboard'); ?>">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <span>Dashboard</span>
        </a>
      </li>

            <!-- Layouts -->
      <li class="menu-item">
        <a class="menu-link <?php if ($location == 'masjid') {
                              echo "";
                            } else {
                              echo "collapsed";
                            } ?>" href="<?= base_url('masjid'); ?>">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <span>Data Masjid</span>
        </a>
      </li>
      
      <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Grafik Masjid</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?= base_url('grafik_kategori'); ?> <?php if ($location == 'grafik_kategori') {
                                                              echo 'class="active"';
                                                            } ?>" class="menu-link">
                    <div data-i18n="Without menu">Berdasarkan Kategori</div>
                  </a>
                </li>
                <li class="menu-item">
                <a href="<?= base_url('grafik_tipologi'); ?> <?php if ($location == 'grafik_tipologi') {
                                                              echo 'class="active"';
                                                            } ?>" class="menu-link">
                    <div data-i18n="Without navbar">Berdasarkan Tipologi</div>
                  </a>
                </li>
                <li class="menu-item">
                <a href="<?= base_url('grafik_provinsi'); ?> <?php if ($location == 'grafik_provinsi') {
                                                              echo 'class="active"';
                                                            } ?>" class="menu-link">
                    <div data-i18n="Container">Berdasarkan Provinsi</div>
                  </a>
                </li>
                <li class="menu-item">
                <a href="<?= base_url('grafik_tglresmi'); ?> <?php if ($location == 'grafik_tglresmi') {
                                                              echo 'class="active"';
                                                            } ?>" class="menu-link">
                    <div data-i18n="Fluid">Berdasarkan Tahun Peresmian</div>
                  </a>
                </li>
                <li class="menu-item">
                <a href="<?= base_url('grafik_tgldata'); ?> <?php if ($location == 'grafik_tgldata') {
                                                              echo 'class="active"';
                                                            } ?>" class="menu-link">
                    <div data-i18n="Blank">Berdasarkan Tahun Pendataan </div>
                  </a>
                </li>
              </ul>
            </li>
        </aside>
        
        <!-- / Menu -->

