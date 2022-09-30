<?php
class probinmaba{
    private $db;
 
    public function __construct(){
        $this->db = new database();
        $this->db = $this->db->get_koneksi();
    }
 
    public function tambah($nama,$username,$password,$role)
    {
        $insert = $this->db->prepare('INSERT INTO users (nama,username,password,role) VALUES (?,?,?,?)');
        $insert->bindParam(1, $nama);
        $insert->bindParam(2, $username);
        $insert->bindParam(3, $password);
        $insert->bindParam(4, $role);
        $insert->execute();
        return $insert;
    }
 
    public function tampil()
    {
        $show = $this->db->prepare("SELECT * FROM users ORDER BY id");
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

    public function cek_username($username){
        $show = $this->db->prepare("SELECT * FROM users WHERE username = ?");
        $show->bindParam(1, $username);
        $show->execute();
        return $show->fetch();
    }

    public function login($username, $password){
        $show = $this->db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $show->bindParam(1, $username);
        $show->bindParam(2, $password);
        $show->execute();
        return $show->fetch();
    }
 
    public function ubah($id_user,$nama,$username,$role){
        $update = $this->db->prepare('UPDATE users SET nama=?, username=?, role=? WHERE `id`=?');
        $update->bindParam(1, $nama);
        $update->bindParam(2, $username);
        $update->bindParam(3, $role);
        $update->bindParam(4, $id_user);
        $update->execute();
        return $update;
    }

    public function foto($id_user,$foto){
        $update = $this->db->prepare('UPDATE users SET foto=? WHERE `id`=?');
        $update->bindParam(1, $foto);
        $update->bindParam(2, $id_user);
        $update->execute();
        return $update;
    }

    public function password($id_user,$password){
        $update = $this->db->prepare('UPDATE users SET password=? WHERE `id`=?');
        $update->bindParam(1, $password);
        $update->bindParam(2, $id_user);
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