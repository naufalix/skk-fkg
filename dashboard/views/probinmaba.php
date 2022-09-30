
    <!-- Header -->
    <div class="header bg-default pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">SKK PROBINMABA</h6>
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
                <h5 class="h3 mb-0 text-sm text-justify">SKK PROBINMABA merupakan nilai SKK yang diperoleh oleh setiap mahasiswa FK UB yang telah mengikuti, menyelesaikan dan LULUS pada semua rangkaian kegiatan PROBINMABA (meliputi PK2MABA, BKM, PKM MABA dan PENMAS) sebagai peserta dan akan memperoleh nilai total sejumlah 1,00.</h5>
              </div>
            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th>No</th>
                      <th>Jenis</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      if($data_prob['pk2maba']==1)  {$s1="LULUS"; $b1="success";} else {$s1="TIDAK LULUS"; $b1="danger";}
                      if($data_prob['bkm']==1)      {$s2="LULUS"; $b2="success";} else {$s2="TIDAK LULUS"; $b2="danger";}
                      if($data_prob['pkmmaba']==1)  {$s3="LULUS"; $b3="success";} else {$s3="TIDAK LULUS"; $b3="danger";}
                      if($data_prob['penmas']==1)   {$s4="LULUS"; $b4="success";} else {$s4="TIDAK LULUS"; $b4="danger";}
                      $jenis = ["","PK2MABA","BKM","PKMMABA","PENMAS"];
                      for ($i=1; $i<=4; $i++){
                        $s = "s".$i;
                        $b = "b".$i;
                    ?>
                    <tr>
                      <td style="width: 20px"><?= $no ?></td>
                      <td><?= $jenis[$i] ?></td>
                      <td>
                        <span class="badge bg-gradient-<?= $$b ?> text-white" style="font-size: 12px;"><?= $$s ?></span>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>

              <div class="d-flex">
                <table class="mx-auto h2">
                  <?php 
                    $nilai = 0.25*($data_prob['pk2maba']+$data_prob['bkm']+$data_prob['pkmmaba']+$data_prob['penmas']);
                    if ($nilai == 1) {$status="LULUS";}
                    else { $status="TIDAK LULUS"; }
                  ?>
                  <tr>
                    <td>NILAI</td>
                    <td class="text-center" style="width: 20px;">:</td>
                    <td><?= $nilai ?></td>
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

    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          </div>
          <form method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="nama" class="form-control-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="username" class="form-control-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                  </div>
                </div>
              </div>
              <div class="form-group m-0">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="password" class="form-control-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <label class="d-none text-danger form-control-label">*kosongkan jika tidak ingin mengubah password</label>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">Role</label>
                    <select class="form-control" name="role">
                      <option class="el" value="admin">Admin</option>
                      <option class="el" value="user">User</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-danger text-white" name="submit-tambah">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="et">Edit User</h5>
          </div>
          <form method="post">
            <div class="modal-body">
              <input type="hidden" id="ei" name="id" required>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="nama" class="form-control-label">Nama</label>
                    <input type="text" class="form-control" id="en" placeholder="Nama" name="nama" required>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="username" class="form-control-label">Username</label>
                    <input type="text" class="form-control" id="eu" placeholder="Username" name="username" required>
                  </div>
                </div>
              </div>
              <div class="form-group m-0">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="password" class="form-control-label">Password</label>
                    <input type="password" class="form-control" name="password">
                    <label class="text-danger form-control-label">*kosongkan jika tidak ingin mengubah password</label>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">Role</label>
                    <select class="form-control" name="role">
                      <option class="er" value="admin">Admin</option>
                      <option class="er" value="user">User</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-danger text-white" name="submit-edit">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ft">Edit User</h5>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" id="fi" name="id" required>
              <div class="form-group m-0">
                <label for="foto" class="form-control-label">Upload foto :</label>
                <input type="file" class="form-control" name="foto" required style="height: auto">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-danger text-white" name="submit-foto">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus User</h5>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group m-0">
                <label id="ht" class="form-control-label">Apakah anda yakin ingin menghapus user ini?</label>
                <input type="hidden" class="d-none" class="form-control" id="hi" name="id" value="" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-danger text-white" name="submit-hapus">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      function edit(id){
        var data = (document.getElementById(id).textContent).split("|");
        document.getElementById("ei").value = id;
        document.getElementById("en").value = data[0];
        document.getElementById("eu").value = data[1];
        document.getElementById("et").textContent = "Edit "+data[0];
        for (var i = 0; i < document.getElementsByClassName("er").length ; i++) {
          if (document.getElementsByClassName("er")[i].value==data[2]) {
            document.getElementsByClassName("er")[i].selected = "true";
          }
        }
      }
      function foto(id){
        var data = (document.getElementById(id).textContent).split("|");
        document.getElementById("fi").value = id;
        document.getElementById("ft").textContent = 'Edit foto '+data[0];
      }
      function hapus(id){
        var data = (document.getElementById(id).textContent).split("|");
        document.getElementById("hi").value = id;
        document.getElementById("ht").textContent = 'Apakah anda yakin ingin menghapus "'+data[0]+'"?';
      }
    </script>