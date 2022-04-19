<?php
class PersegiPanjang{
    private $panjangPersegi;
    private $lebarPersegi;

     function luas(){
        $luas = $this->panjang * $this->lebar;
        return "Luas Persegi Panjang : " .$luas;
    }
     function keliling(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return "Keliling Persegi Panjang : " .$keliling;
    }

     function getlebar($lebarPersegi){
        return $this->lebar = $lebarPersegi;
    }
    
     function getpanjang($panjangPersegi){
        return $this->panjang = $panjangPersegi;
    }
}
?>