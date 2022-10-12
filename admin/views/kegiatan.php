
    <!-- Header -->
    <div class="header bg-gradient-dark pt-4 pb-6">
    	
      <div class="container-fluid">
      	<div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data SKK Kegiatan</h6>
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
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Nama Kegiatan</th>
                      <th>Jabatan</th>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>Nilai</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach($data_kegiatan as $kg){
                      $id = $kg['id'];
                      $nim = $kg['nim'];
                      if($kg['status'])  {$s1="VERIFIED"; $b1="success";} else {$s1="UNVERIFIED"; $b1="danger";}
                      $nama = $mahasiswa->tampil_nim($nim)['nama'];
                    ?>
                    <tr>
                      <td><?= $nim ?></td>
                      <td><?= $nama ?></td>
                      <td id="nm<?= $id ?>"><?= $kg['nama'] ?></td>
                      <td id="jb<?= $id ?>"><?= $kg['jabatan'] ?></td>
                      <td id="jn<?= $id ?>"><?= $kg['jenis'] ?></td>
                      <td style="width: 100px"><span class="badge bg-gradient-<?= $b1 ?> text-white" style="font-size: 12px;"><?= $s1 ?></span></td>
                      <td id="ni<?= $id ?>"><?= $kg['nilai'] ?></td>
                      <td>
                        <p id="st<?= $id ?>" class="d-none"><?= $kg['status'] ?></p>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah SKK Kegiatan</h5>
          </div>
          <form method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-5 p-0 pr-2">
                    <label for="nama" class="form-control-label">NIM</label>
                    <input type="number" class="form-control" placeholder="NIM" name="nim" required>
                  </div>
                  <div class="col-7 p-0 pr-2">
                    <label for="nama" class="form-control-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Nama kegiatan..." name="nama" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-5 p-0 pr-2">
                    <label for="role" class="form-control-label">Jabatan</label>
                    <input type="text" class="form-control" placeholder="Jabatan..." name="jabatan" required>
                  </div>
                  <div class="col-7 p-0 pr-2">
                    <label for="role" class="form-control-label">Jenis</label>
                    <select class="form-control" name="jenis">
                      <option value="ORGANISASI">Organisasi dan Kepemimpinan</option>
                      <option value="PENALARAN">Penalaran</option>
                      <option value="PENMAS">Pengabdian Masyarakat</option>
                      <option value="LAIN-LAIN">Lain-lain</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-5 p-0 pr-2">
                    <label for="role" class="form-control-label">Nilai</label>
                    <input type="text" class="form-control" placeholder="0.3..." name="nilai" required>
                  </div>
                  <div class="col-7 p-0 pr-2">
                    <label for="role" class="form-control-label">Status</label>
                    <select class="form-control" name="status">
                      <option value="1">Verified</option>
                      <option value="0">Unverified</option>
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
            <h5 class="modal-title" id="et">Edit data SKK Kegiatan</h5>
          </div>
          <form method="post">
            <input type="hidden" id="eid" name="id">
            <div class="modal-body">
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-12 p-0 pr-2">
                    <label for="nama" class="form-control-label">Nama Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Nama kegiatan..." id="enam" name="nama" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-5 p-0 pr-2">
                    <label for="role" class="form-control-label">Jabatan</label>
                    <input type="text" class="form-control" placeholder="Jabatan..." id="ejab" name="jabatan" required>
                  </div>
                  <div class="col-7 p-0 pr-2">
                    <label for="role" class="form-control-label">Jenis</label>
                    <select class="form-control" id="ejen" name="jenis">
                      <option value="ORGANISASI">Organisasi dan Kepemimpinan</option>
                      <option value="PENALARAN">Penalaran</option>
                      <option value="PENMAS">Pengabdian Masyarakat</option>
                      <option value="LAIN-LAIN">Lain-lain</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row m-0">
                  <div class="col-5 p-0 pr-2">
                    <label for="role" class="form-control-label">Nilai</label>
                    <input type="text" class="form-control" placeholder="0.3..." id="enil" name="nilai" required>
                  </div>
                  <div class="col-7 p-0 pr-2">
                    <label for="role" class="form-control-label">Status</label>
                    <select class="form-control" id="esta" name="status">
                      <option value="1">Verified</option>
                      <option value="0">Unverified</option>
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
            <h5 class="modal-title" id="dt">Hapus Kegiatan</h5>
          </div>
          <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group m-0">
                <label id="dd" class="form-control-label">Apakah anda yakin ingin kegiatan ini?</label>
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
        $("#eid").val(id);
        $("#enam").val($("#nm"+id).text());
        $("#ejab").val($("#jb"+id).text());
        $("#ejen").val($("#jn"+id).text());
        $("#enil").val($("#ni"+id).text());
        $("#esta").val($("#st"+id).text());
      }
      function hapus(id){
        $("#di").val(id);
        //$("#dt").text("Hapus "+$("#n"+id).text());
        //$("#dd").text('Apakah anda yakin ingin menghapus "'+$("#n"+id).text()+'"?');
      }
    </script>