<?php 
class KonversiSuhu { 
    private $satuanSuhuAwal; 
    private $besaranSuhu; 
    private $satuanSuhuTujuan; 
 
    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) { 
        $this->satuanSuhuAwal = $satuanSuhuAwal; 
        $this->besaranSuhu = $besaranSuhu; 
        $this->satuanSuhuTujuan = $satuanSuhuTujuan; 
    } 
 
    public function celciusToFahrenheit() { 
        return ($this->besaranSuhu * 9/5) + 32; 
    } 
 
    public function fahrenheitToCelcius() { 
        return ($this->besaranSuhu - 32) * 5/9; 
    } 
 
    public function celciusToRheamur() { 
        return $this->besaranSuhu * 4/5; 
    } 
 
    public function rheamurToCelcius() { 
        return $this->besaranSuhu * 5/4; 
    } 
 
    public function cetak() { 
        $hasilKonversi = null; 
        if ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Fahrenheit') { 
            $hasilKonversi = $this->celciusToFahrenheit(); 
        } elseif ($this->satuanSuhuAwal == 'Fahrenheit' && $this->satuanSuhuTujuan == 'Celcius') { 
            $hasilKonversi = $this->fahrenheitToCelcius(); 
        } elseif ($this->satuanSuhuAwal == 'Celcius' && $this->satuanSuhuTujuan == 'Rheamur') { 
            $hasilKonversi = $this->celciusToRheamur(); 
        } elseif ($this->satuanSuhuAwal == 'Rheamur' && $this->satuanSuhuTujuan == 'Celcius') { 
            $hasilKonversi = $this->rheamurToCelcius(); 
        } 
 
        echo "<tr><td>{$this->satuanSuhuAwal}</td><td>{$this->besaranSuhu}°</td><td>{$this->satuanSuhuTujuan}</td><td>{$hasilKonversi}°</td></tr>"; 
    } 
} 
 
// Buat objek dataKonversiSuhu 
$dataKonversiSuhu = array( 
    new KonversiSuhu('Celcius', 30, 'Fahrenheit'), 
    new KonversiSuhu('Celcius', 20, 'Fahrenheit'), 
    new KonversiSuhu('Fahrenheit', 100, 'Celcius'), 
    new KonversiSuhu('Fahrenheit', 80, 'Celcius'), 
    new KonversiSuhu('Celcius', 25, 'Rheamur'), 
    new KonversiSuhu('Celcius', 35, 'Rheamur'), 
    new KonversiSuhu('Rheamur', 10, 'Celcius'), 
    new KonversiSuhu('Rheamur', 15, 'Celcius') 
); 
 
// Cetak hasil konversi dalam format tabel 
echo '<table border="1"> 
        <tr> 
            <th>Satuan Awal</th> 
            <th>Besaran</th> 
            <th>Satuan Tujuan</th> 
            <th>Hasil Konversi</th> 
        </tr>'; 
foreach ($dataKonversiSuhu as $konversi) { 
    $konversi->cetak(); 
} 
echo '</table>'; 
?>
