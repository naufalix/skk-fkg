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
 
    // public function tampil()
    // {
    //     $show = $this->db->prepare("SELECT * FROM users ORDER BY id");
    //     $show->execute();
    //     $data = $show->fetchAll();
    //     return $data;
    // }
 
    public function tampil_nim($nim){
        $show = $this->db->prepare("SELECT * FROM kegiatan WHERE nim = ?");
        $show->bindParam(1, $nim);
        $show->execute();
        return $show->fetchAll();
    }
 
    // public function ubah($id_user,$nama,$username,$role){
    //     $update = $this->db->prepare('UPDATE users SET nama=?, username=?, role=? WHERE `id`=?');
    //     $update->bindParam(1, $nama);
    //     $update->bindParam(2, $username);
    //     $update->bindParam(3, $role);
    //     $update->bindParam(4, $id_user);
    //     $update->execute();
    //     return $update;
    // }

    // public function hapus($id_user)
    // {
    //     $delete = $this->db->prepare("DELETE FROM users WHERE `id`=?"); 
    //     $delete->bindParam(1, $id_user); 
    //     $delete->execute();
    //     return $delete;
    // }
}
?>