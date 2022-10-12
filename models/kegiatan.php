<?php
class kegiatan{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nim,$jabatan,$nilai,$nama,$jenis,$status)
    {
        $insert = $this->db->prepare('INSERT INTO kegiatan (nim,jabatan,nilai,nama,jenis,status) VALUES (?,?,?,?,?,?)');
        $insert->bindParam(1, $nim);
        $insert->bindParam(2, $jabatan);
        $insert->bindParam(3, $nilai);
        $insert->bindParam(4, $nama);
        $insert->bindParam(5, $jenis);
        $insert->bindParam(6, $status);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM kegiatan ORDER BY id DESC");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function tampil_nim($nim){
        $show = $this->db->prepare("SELECT * FROM kegiatan WHERE nim = ?");
        $show->bindParam(1, $nim);
        $show->execute();
        return $show->fetchAll();
    }

    public function tampil_id($id){
        $show = $this->db->prepare("SELECT * FROM kegiatan WHERE id = ?");
        $show->bindParam(1, $id);
        $show->execute();
        return $show->fetchAll();
    }
 
    public function ubah($id,$jab,$nil,$nam,$jen,$sta){
        $update = $this->db->prepare('UPDATE kegiatan SET jabatan=?, nilai=?, nama=?, jenis=?, status=? WHERE `id`=?');
        $update->bindParam(1, $jab);
        $update->bindParam(2, $nil);
        $update->bindParam(3, $nam);
        $update->bindParam(4, $jen);
        $update->bindParam(5, $sta);
        $update->bindParam(6, $id);
        $update->execute();
        return $update;
    }

    public function hapus($id_user)
    {
        $delete = $this->db->prepare("DELETE FROM users WHERE `id`=?"); 
        $delete->bindParam(1, $id_user); 
        $delete->execute();
        return $delete;
    }
}
?>