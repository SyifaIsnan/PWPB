<?php 
class Siswa {
    public $info;

    public function __construct($info="Alhamdulillah saya berkesempatan belajar bahasa pemrograman hari ini") {
           $this->info = $info;
           
    }

    public function getInfoSiswa(): string {
        $str = "{$this->info}";
        return $str;
    }

  }

$info1 = new Siswa(info: "Alhamdulillah saya berkesempatan belajar bahasa pemrograman hari ini");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="p-3 mb-2 bg-dark text-white"> <?= $info1->getInfoSiswa(); ?> </div>
</body>
</html>