<?php 
include("Bentuk2D.php"); 
include("Lingkaran.php"); 
include("PersegiPanjang.php"); 
include("Segitiga.php"); 
 
$lingkaran = new Lingkaran(5); 
$persegiPanjang = new PersegiPanjang(4, 6); 
$segitiga = new Segitiga(3, 4); 
 
$bidang2D = [$lingkaran, $persegiPanjang, $segitiga]; 
 
echo "<table border='1'>"; 
echo "<thead>"; 
echo "<tr><th>No</th><th>Nama Bidang</th><th>Luas Bidang</th><th>Keliling Bidang</th></tr>"; 
echo "</thead>"; 
echo "<tbody>"; 
foreach ($bidang2D as $key => $bidang) { 
    echo "<tr>"; 
    echo "<td>" . ($key + 1) . "</td>"; 
    echo "<td>" . $bidang->namaBidang() . "</td>"; 
    echo "<td>" . $bidang->luasBidang() . "</td>"; 
    echo "<td>" . ($bidang->kelilingBidang() ?? "Tidak Ada") . "</td>"; 
    echo "</tr>"; 
} 
echo "</tbody>"; 
echo "</table>"; 
?>
