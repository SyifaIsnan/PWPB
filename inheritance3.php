<?php 
class Siswa {
    public $info;

    public function __construct($info="Alhamdulillah saya berkesempatan belajar bahasa pemrograman hari ini") {
        $this->info = $info;
    }

    public function getInfoSiswa(): string {
        return "{$this->info}";
    }
}

$info1 = new Siswa(info: "Alhamdulillah saya berkesempatan belajar bahasa pemrograman hari ini");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .alert-pink {
            background-color: #ffc0cb;
            color: #000;
            border-color: #f8a8b6;
        }
    </style>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="alert alert-pink shadow-lg rounded-4 p-4 w-75 text-center fs-5">
        <?= $info1->getInfoSiswa(); ?>
    </div>
</body>
</html>
