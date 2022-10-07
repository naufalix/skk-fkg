
    <!-- Header -->
    <div class="header bg-default pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">SKK Kegiatan</h6>
            </div>
            <a href="#" class="btn btn-white ml-auto mr-3" data-toggle="modal" data-target="#tambah">
              <span><i class="fa fa-plus-circle"></i><span> Tambah</span>
            </a>
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
                <h5 class="h3 mb-0 text-sm text-justify">SKK Kegiatan adalah SKK yang diberikan kepada mahasiswa yang ikut berperan aktif dalam kegiatan kemahasiswaan yang berada di lingkungan FKUB maupun ekstra FK UB dengan persyaratan tertentu yang lebih khusus, baik itu dari tingkat jurusan hingga tingkat internasional. Bidang SKK Kegiatan terbagi menjadi 3 kompetensi wajib, meliputi bidang : organisasi dan kepemimpinan, Penalaran serta Pengabdian Masyarakat.</h5>
              </div>
            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered" id="myTable">
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
                      $total1=0;
                      $total2=0;
                      $total3=0;
                      foreach($data_kegiatan as $dk) {
                        $jabatan = $dk['jabatan'];
                        $nama    = $dk['nama'];
                        $jenis   = $dk['jenis'];
                        $nilai   = $dk['nilai'];
                        $status  = $dk['status'];
                        if ($jenis=="LAIN-LAIN"){continue;}

                        if($status){
                          $total  += $nilai;
                          if ($jenis=="ORGANISASI"){$total1 += $nilai;}
                          if ($jenis=="PENALARAN") {$total2 += $nilai;}
                          if ($jenis=="PENMAS")    {$total3 += $nilai;}
                        } else {
                          $nilai   = 'Menunggu diverifikasi';
                        }
                          
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
                  <?php
                    if ($total>=4&&$total1>=0.5&&$total2>=0.5&&$total3>=0.5) {$status="LULUS";}
                    else { $status="TIDAK LULUS"; }
                  ?>
                  <tr>
                    <td>Organisasi dan Kepemimpinan</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $total1 ?></td>
                  </tr>
                  <tr>
                    <td>Penalaran</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $total2 ?></td>
                  </tr>
                  <tr style="border-bottom: 1px solid black">
                    <td>Pengabdian Masyarakat</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $total3 ?></td>
                  </tr>
                  <tr>
                    <td>TOTAL</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $total ?> / 4.00</td>
                  </tr>
                  <tr>
                    <td>STATUS</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $status ?></td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Tambah Kegiatan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="forms-sample" method="post">
              <div class="form-group">
                <div class="row">
                  <div class="col-12">
                    <label for="nama">Nama Kegiatan</label>
                    <input type="text" class="form-control"name="nama" placeholder="Nama kegiatan..." required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="Jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan..." required>
                  </div>
                  <div class="col-6">
                    <label for="jenis">Jenis</label>
                    <select class="form-control" name="jenis" required>
                      <option value="ORGANISASI">Organisasi dan Kepemimpinan</option>
                      <option value="PENMAS">Pengabdian Masyarakat</option>
                      <option value="PENALARAN">Penalaran</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-default" name="submit-tambah" ><i class="fa fa-check"></i><span> Submit</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>