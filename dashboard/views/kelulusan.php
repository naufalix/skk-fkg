
    <!-- Header -->
    <div class="header bg-default pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Detail Kelulusan</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header bg-transparent" style="border-bottom: 0px">
              <div class="align-items-center">
                <h5 class="h3 mb-0 text-justify">Detail Kelulusan</h5>
              </div>
            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered" >
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Jenis SKK</th>
                      <th>Nilai</th>
                      <th style="width: 100px">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      // SKK PROBINMABA
                      if ($data_prob) {
                        $tp=0.25*($data_prob['pk2maba']+$data_prob['bkm']+$data_prob['pkmmaba']+$data_prob['penmas']);
                        if ($tp == 1) {$sp="LULUS"; $bp="success";}
                        else { $sp="TIDAK LULUS"; $bp="danger";}
                      } else { $sp="TIDAK LULUS"; $bp="danger"; $tp=0;}
                    ?>
                    <tr>
                      <td style="width: 20px">1</td>
                      <td>SKK Probinmaba</td>
                      <td><?= $tp ?></td>
                      <td>
                        <span class="badge bg-gradient-<?= $bp ?> text-white" style="font-size: 12px;"><?= $sp ?></span>
                      </td>
                    </tr>

                    <?php
                      // SKK KEGIATAN
                      if ($data_kegiatan) {
                        $tk=0; 
                        $tk1=0;
                        $tk2=0;
                        $tk3=0;
                        foreach($data_kegiatan as $dk) {
                          $jenis   = $dk['jenis'];
                          $nilai   = $dk['nilai'];
                          if ($jenis=="LAIN-LAIN"){continue;}

                          $tk  += $nilai;
                          if ($jenis=="ORGANISASI"){$tk1 += $nilai;}
                          if ($jenis=="PENALARAN") {$tk2 += $nilai;}
                          if ($jenis=="PENMAS")    {$tk3 += $nilai;}

                          if ($tk>=4&&$tk1>=0.5&&$tk2>=0.5&&$tk3>=0.5) {$sk="LULUS"; $bk="success";}
                          else { $sk="TIDAK LULUS"; $bk="danger";}
                        }
                      } else { $sk="TIDAK LULUS"; $bk="danger"; $tk=0; }
                    ?>
                    <tr>
                      <td style="width: 20px">2</td>
                      <td>SKK Kegiatan</td>
                      <td><?= $tk ?></td>
                      <td>
                        <span class="badge bg-gradient-<?= $bk ?> text-white" style="font-size: 12px;"><?= $sk ?></span>
                      </td>
                    </tr>

                    <?php
                      // SKK LAIN-LAIN
                      $tl=0; 
                      foreach($data_kegiatan as $dk) {
                        $jenis   = $dk['jenis'];
                        $nilai   = $dk['nilai'];
                        if ($jenis!="LAIN-LAIN"){continue;}
                        $tl  += $nilai;
                      }
                    ?>
                    <tr>
                      <td style="width: 20px">3</td>
                      <td>SKK Lain</td>
                      <td><?= $tl ?></td>
                      <td></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>

              <div class="d-flex">
                <table class="mx-auto h2">
                  <?php
                    if ($sp=="LULUS"&&$sk=="LULUS") {$sa="LULUS"; $ba="success";}
                    else {$sa="TIDAK LULUS"; $ba="danger";}
                  ?>
                  <tr>
                    <td>NILAI AKHIR</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $tp+$tk+$tl ?></td>
                  </tr>
                  <tr>
                    <td>STATUS</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td>
                      <?= $sa ?>
                      <!-- <span class="badge bg-gradient-<?= $ba ?> text-white" style="font-size: 12px;"><?= $sa ?></span> -->
                    </td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>