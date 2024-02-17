<?php

Class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];
    
    public function __construct($nrp, $nama) {
        $this->nrp = $nrp;
        $this->nama = $nama;
    }
}

Class Nilai {
    public $mapel;
    public $nilai;
    
    public function __construct($mapel, $nilai) {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

$mapel = ["indonesia", "inggris", "jepang"];
$list_siswa = [];
for($i=1; $i<=10; $i++) {
    $siswa = null;
    $nrp = rand(100000, 200000);
    $nama = uniqid();
    $siswa = new Siswa($nrp, $nama);
    
    $nilai = [];
    for($j=1; $j<=3; $j++) {
        $keyMapel = array_rand($mapel);
        $nilai[] = new Nilai($mapel[$keyMapel], rand(70, 100));
    }
    $siswa->daftarNilai = $nilai;
    var_dump("Siswa Ke-".$i."\n");
    var_dump($siswa);
}

?>