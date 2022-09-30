
    <!-- Header -->
    <div class="header bg-default pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">SKK Lain-lain</h6>
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
                <h5 class="h3 mb-0 text-sm text-justify">SKK Lain-lain merupakan salah satu kompetensi pilihan meliputi bidang minat dan bakat serta prestasi.</h5>
              </div>
            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered" >
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Jabatan</th>
                      <th>Nama Kegiatan</th>
                      <th>Jenis</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      $total=0;
                      foreach($data_kegiatan as $dk) {
                        $jabatan = $dk['jabatan'];
                        $nama    = $dk['nama'];
                        $jenis   = $dk['jenis'];
                        $nilai   = $dk['nilai'];
                        if ($jenis!="LAIN-LAIN"){continue;}

                        $total  += $nilai;
                    ?>
                    <tr>
                      <td style="width: 20px"><?= $no ?></td>
                      <td><?= $jabatan ?></td>
                      <td><?= $nama ?></td>
                      <td><?= $jenis ?></td>
                      <td><?= $nilai ?></td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>

              <div class="d-flex">
                <table class="mx-auto h2">
                  <tr>
                    <td>TOTAL</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $total ?></td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>