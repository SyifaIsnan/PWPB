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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"/>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="card border-0 shadow-lg bg-light-subtle animate__animated animate__fadeInUp" style="max-width: 600px;">
        <div class="card-body text-center">
            <div class="alert alert-danger mb-0 fs-5">
                <?= $info1->getInfoSiswa(); ?>
            </div>
        </div>
    </div>

</body>
</html>
