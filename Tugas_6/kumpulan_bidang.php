<?php 
include_once('Bentuk2D.php'); 
include_once('Lingkaran.php'); 
include_once('PersegiPanjang.php'); 
include_once('Segitiga.php'); 
 
$lingkaran = new Lingkaran(7); 
$persegiPanjang = new PersegiPanjang(5, 10); 
$segitiga = new Segitiga(6, 8); 
 
$bidangArray = array( 
    array(1, $lingkaran->namaBidang(), "Jari-jari: " . $lingkaran->luasBidang(), "Keliling: " . $lingkaran->kelilingBidang()), 
    array(2, $persegiPanjang->namaBidang(), "Panjang: " . $persegiPanjang->luasBidang(), "Keliling: " . $persegiPanjang->kelilingBidang()), 
    array(3, $segitiga->namaBidang(), "Alas: " . $segitiga->luasBidang(), "Keliling: " . $segitiga->kelilingBidang()) 
); 
 
// Print table headers 
echo "<table border='1'>"; 
echo "<thead><tr><th>No</th><th>Nama Bidang</th><th>Keterangan</th><th>Luas Bidang</th><th>Keliling Bidang</th></tr></thead>"; 
echo "<tbody>"; 
 
// Print table data 
foreach ($bidangArray as $bidang) { 
    echo "<tr>"; 
    foreach ($bidang as $data) { 
        echo "<td>$data</td>"; 
    } 
    echo "</tr>"; 
} 
 
echo "</tbody></table>"; 
?>
