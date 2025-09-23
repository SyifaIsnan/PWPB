<?php
class Database {
    private $koneksi;
    private $host;
    private $username;
    private $password;
    private $database;
    
    // Constructor untuk inisialisasi koneksi database
    public function __construct($host = "localhost", $username = "root", $password = "", $database = "xiirpl1") {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connect();
    }
    
    // Method untuk membuat koneksi ke database
    private function connect() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        
        if (!$this->koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }
    
    // Method untuk menambah data
    public function tambah($data) {
        $nama = htmlspecialchars($data['nama']);
        $query = "INSERT INTO fungsi (nama) VALUES ('$nama')";
        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }
    
    // Method untuk menampilkan semua data
    public function tampil() {
        $result = mysqli_query($this->koneksi, "SELECT * FROM fungsi ORDER BY id ASC");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    
    // Method untuk menampilkan data berdasarkan ID
    public function tampilById($id) {
        $query = "SELECT * FROM fungsi WHERE id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    
    // Method untuk menghapus data
    public function hapus($id) {
        $query = "DELETE FROM fungsi WHERE id = $id";
        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }
    
    // Method untuk mengubah/edit data
    public function ubah($data) {
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $query = "UPDATE fungsi SET nama = '$nama' WHERE id = $id";
        mysqli_query($this->koneksi, $query);
        return mysqli_affected_rows($this->koneksi);
    }
    
    // Method untuk mendapatkan koneksi database (jika diperlukan)
    public function getConnection() {
        return $this->koneksi;
    }
    
    // Destructor untuk menutup koneksi database
    public function __destruct() {
        if ($this->koneksi) {
            mysqli_close($this->koneksi);
        }
    }
}

?>