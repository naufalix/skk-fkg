
    <!-- Header -->
    <div class="header bg-gradient-dark pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">DATA Probinmaba</h6>
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
                <h5 class="h3 mb-0 text-sm text-justify">SKK PROBINMABA merupakan nilai SKK yang diperoleh oleh setiap mahasiswa FK UB yang telah mengikuti, menyelesaikan dan LULUS pada semua rangkaian kegiatan PROBINMABA (meliputi PK2MABA, BKM, PKM MABA dan PENMAS) sebagai peserta dan akan memperoleh nilai total sejumlah 1,00.</h5>
              </div>
            </div>

            <div class="card-body">
              <!-- Light table -->
              <div class="table-responsive mb-4">
                <table class="table table-bordered" id="myTable">
                  <thead class="thead-light">
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>PK2MABA</th>
                      <th>BKM</th>
                      <th>PKM MABA</th>
                      <th>PENMAS</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data_prob as $prob){
                      $id = $prob['id'];
                      $nim = $prob['nim'];
                      $nama = $mahasiswa->tampil_nim($nim)['nama'];
                      if($prob['pk2maba']==1)  {$s1="LULUS"; $b1="success";} else {$s1="TIDAK LULUS"; $b1="danger";}
                      if($prob['bkm']==1)      {$s2="LULUS"; $b2="success";} else {$s2="TIDAK LULUS"; $b2="danger";}
                      if($prob['pkmmaba']==1)  {$s3="LULUS"; $b3="success";} else {$s3="TIDAK LULUS"; $b3="danger";}
                      if($prob['penmas']==1)   {$s4="LULUS"; $b4="success";} else {$s4="TIDAK LULUS"; $b4="danger";}
                    ?>
                    <tr>
                      <td><?= $nim ?></td>
                      <td id="n<?= $id ?>"><?= $nama ?></td>
                      <td style="width: 100px"><span class="badge bg-gradient-<?= $b1 ?> text-white" style="font-size: 12px;"><?= $s1 ?></span></td>
                      <td style="width: 100px"><span class="badge bg-gradient-<?= $b2 ?> text-white" style="font-size: 12px;"><?= $s2 ?></span></td>
                      <td style="width: 100px"><span class="badge bg-gradient-<?= $b3 ?> text-white" style="font-size: 12px;"><?= $s3 ?></span></td>
                      <td style="width: 100px"><span class="badge bg-gradient-<?= $b4 ?> text-white" style="font-size: 12px;"><?= $s4 ?></span></td>
                      <td>
                        <p class="d-none" id="<?= $id ?>"><?= $prob['pk2maba'].','.$prob['bkm'].','.$prob['pkmmaba'].','.$prob['penmas'] ?></p>
                        <button type="button" class="btn btn-sm btn-default" title="Edit" data-toggle="modal" data-target="#edit" onclick="edit(<?= $id ?>)"><i class="fa fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-danger" title="Hapus" data-toggle="modal" data-target="#hapus" onclick="hapus(<?= $id ?>)"><i class="fa fa-times"></i></button>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Probinmaba</h5>
          </div>
          <form method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-12 p-0 pr-2">
                    <label for="nama" class="form-control-label">NIM</label>
                    <input type="number" class="form-control" placeholder="NIM" name="nim" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PK2MABA</label>
                    <select class="form-control" name="pk2maba">
                      <option value="1">LULUS</option>
                      <option value="0">TIDAK LULUS</option>
                    </select>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">BKM</label>
                    <select class="form-control" name="bkm">
                      <option value="1">LULUS</option>
                      <option value="0">TIDAK LULUS</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group m-0">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PKMMABA</label>
                    <select class="form-control" name="pkmmaba">
                      <option value="1">LULUS</option>
                      <option value="0">TIDAK LULUS</option>
                    </select>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PENMAS</label>
                    <select class="form-control" name="penmas">
                      <option value="1">LULUS</option>
                      <option value="0">TIDAK LULUS</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-dark text-white" name="submit-tambah">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="et">Edit Data Probinmaba</h5>
          </div>
          <form method="post">
            <div class="modal-body">
              <input type="hidden" id="ei" name="id">
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PK2MABA</label>
                    <select class="form-control" id="ep1" name="pk2maba">
                      <option value="1" class="text-success font-weight-bold">LULUS</option>
                      <option value="0" class="text-danger font-weight-bold">TIDAK LULUS</option>
                    </select>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">BKM</label>
                    <select class="form-control" id="eb1" name="bkm">
                      <option value="1" class="text-success font-weight-bold">LULUS</option>
                      <option value="0" class="text-danger font-weight-bold">TIDAK LULUS</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group m-0">
                <div class="row m-0">
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PKMMABA</label>
                    <select class="form-control" id="ep2" name="pkmmaba">
                      <option value="1" class="text-success font-weight-bold">LULUS</option>
                      <option value="0" class="text-danger font-weight-bold">TIDAK LULUS</option>
                    </select>
                  </div>
                  <div class="col-6 p-0 pr-2">
                    <label for="role" class="form-control-label">PENMAS</label>
                    <select class="form-control" id="ep3" name="penmas">
                      <option value="1" class="text-success font-weight-bold">LULUS</option>
                      <option value="0" class="text-danger font-weight-bold">TIDAK LULUS</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn bg-gradient-dark text-white" name="submit-edit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="dt">Hapus User</h5>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group m-0">
                <label id="dd" class="form-control-label">Apakah anda yakin ingin menghapus user ini?</label>
                <input type="hidden" class="d-none" class="form-control" id="di" name="id" value="" required>
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
        var mydata = $("#"+id).text().split(",");
        $("#ei").val(id);
        $("#ep1").val(mydata[0]);
        $("#eb1").val(mydata[1]);
        $("#ep2").val(mydata[2]);
        $("#ep3").val(mydata[3]);
        $("#et").text("Edit data "+$("#n"+id).text());
      }
      function hapus(id){
        $("#di").val(id);
        $("#dt").text("Hapus "+$("#n"+id).text());
        $("#dd").text('Apakah anda yakin ingin menghapus "'+$("#n"+id).text()+'"?');
      }
    </script>