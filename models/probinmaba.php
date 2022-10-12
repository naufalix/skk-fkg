<?php
class probinmaba{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nim,$p1,$b1,$p2,$p3)
    {
        $insert = $this->db->prepare('INSERT INTO probinmaba (nim,pk2maba,bkm,pkmmaba,penmas) VALUES (?,?,?,?,?)');
        $insert->bindParam(1, $nim);
        $insert->bindParam(2, $p1);
        $insert->bindParam(3, $b1);
        $insert->bindParam(4, $p2);
        $insert->bindParam(5, $p3);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM probinmaba ORDER BY nim");
        $show->execute();
        $data = $show->fetchAll();
        return $data;
    }
 
    public function tampil_nim($nim){
        $show = $this->db->prepare("SELECT * FROM probinmaba WHERE nim = ?");
        $show->bindParam(1, $nim);
        $show->execute();
        return $show->fetch(PDO::FETCH_ASSOC);
    }

    public function tampil_id($id){
        $show = $this->db->prepare("SELECT * FROM probinmaba WHERE id = ?");
        $show->bindParam(1, $id);
        $show->execute();
        return $show->fetch(PDO::FETCH_ASSOC);
    }

    public function ubah($id,$p1,$b1,$p2,$p3){
        $update = $this->db->prepare('UPDATE probinmaba SET pk2maba=?, bkm=?, pkmmaba=?, penmas=? WHERE `id`=?');
        $update->bindParam(1, $p1);
        $update->bindParam(2, $b1);
        $update->bindParam(3, $p2);
        $update->bindParam(4, $p3);
        $update->bindParam(5, $id);
        $update->execute();
        return $update;
    }

    public function hapus($id)
    {
        $delete = $this->db->prepare("DELETE FROM probinmaba WHERE `id`=?"); 
        $delete->bindParam(1, $id); 
        $delete->execute();
        return $delete;
    }
}
?>