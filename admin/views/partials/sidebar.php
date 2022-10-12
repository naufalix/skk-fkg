<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/logo-ub.png" class="navbar-brand-img" alt="logo" style="max-height: 30px;">
          <strong class="align-middle">SKK FKG</strong>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?php if($page==='home') {echo 'bg-light';} ?>" href="home">
                <i class="ni ni-tv-2 text-default"></i>
                <span class="nav-link-text ">Homepage</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page==='probinmaba') {echo 'bg-light';} ?>" href="probinmaba">
                <i class="fa fa-book text-default"></i>
                <span class="nav-link-text">Data SKK Probinmaba</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page==='kegiatan') {echo 'bg-light';} ?>" href="kegiatan">
                <i class="fa fa-trophy text-default"></i>
                <span class="nav-link-text">Data SKK Kegiatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($page==='mahasiswa') {echo 'bg-light';} ?>" href="mahasiswa">
                <i class="fa fa-users text-default"></i>
                <span class="nav-link-text">Data Mahasiswa</span>
              </a>
            </li>
            <?php if($role=="superadmin"){ ?>
            <li class="nav-item">
              <a class="nav-link <?php if($page==='user') {echo 'bg-light';} ?>" href="kelulusan">
                <i class="fa fa-user text-default"></i>
                <span class="nav-link-text">Data Admin</span>
              </a>
            </li>
            <?php } ?>

            <!-- <li class="nav-item">
              <a data-toggle="collapse" href="#basicExamples" class="nav-link" href="#" aria-controls="basicExamples" role="button" aria-expanded="false">
                <i class="ni ni-cloud-upload-96 text-green"></i>
                <span class="nav-link-text">Submit TL / TS</span>
              </a>
              <div class="collapse " id="basicExamples">
                <ul class="nav ms-4">
                  <li class="nav-item">
                    <a class="nav-link" href="tl">
                      <i class="ni ni-cloud-upload-96 text-green"></i>
                      <span class="nav-link-text">Submit TL</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ts">
                      <i class="ni ni-cloud-upload-96 text-green"></i>
                      <span class="nav-link-text">Submit TS (zip)</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->
          </ul>
          <!-- Divider -->
          
        </div>
      </div>
    </div>
  </nav>