<?php 
class Segitiga extends Bentuk2D { 
    private $alas; 
    private $tinggi; 
 
    public function __construct($alas, $tinggi) { 
        $this->alas = $alas; 
        $this->tinggi = $tinggi; 
    } 
 
    public function namaBidang() { 
        return "Segitiga"; 
    } 
 
    public function luasBidang() { 
        return 0.5 * $this->alas * $this->tinggi; 
    } 
 
    public function kelilingBidang() { 
        // Sisi segitiga tidak disediakan, sehingga tidak dapat menghitung keliling. 
        return "Tidak dapat dihitung"; 
    } 
} 
?>
