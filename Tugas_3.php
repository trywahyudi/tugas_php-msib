<!DOCTYPE html>
<html>
<head>
  <title>Data Mahasiswa dan Nilai</title>
</head>
<body>

<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Mahasiswa</th>
      <th>Nilai</th>
      <th>Grade</th>
      <th>Predikat</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Data mahasiswa dan nilai
    $mahasiswa = array(
        array('Mahasiswa 1', 80),
        array('Mahasiswa 2', 45),
        array('Mahasiswa 3', 70)
        // Tambahkan data mahasiswa dan nilai lainnya sesuai kebutuhan
    );

    // Fungsi untuk menghitung grade berdasarkan nilai
    function calculateGrade($nilai) {
        if ($nilai >= 80) {
            return 'A';
        } elseif ($nilai >= 70) {
            return 'B';
        } elseif ($nilai >= 60) {
            return 'C';
        } elseif ($nilai >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }

    // Fungsi untuk menghitung predikat berdasarkan grade
    function calculatePredikat($grade) {
        switch ($grade) {
            case 'A':
                return 'Excellent';
            case 'B':
                return 'Good';
            case 'C':
                return 'Satisfactory';
            case 'D':
                return 'Pass';
            case 'E':
                return 'Fail';
            default:
                return 'N/A';
        }
    }

    // Menghitung agregat nilai
    $jumlahMahasiswa = count($mahasiswa);
    $totalNilai = 0;
    $nilaiTertinggi = PHP_INT_MIN;
    $nilaiTerendah = PHP_INT_MAX;

    foreach ($mahasiswa as $key => $data) {
        $namaMahasiswa = $data[0];
        $nilai = $data[1];
        $totalNilai += $nilai;

        // Mengupdate nilai tertinggi dan terendah
        if ($nilai > $nilaiTertinggi) {
            $nilaiTertinggi = $nilai;
        }

        if ($nilai < $nilaiTerendah) {
            $nilaiTerendah = $nilai;
        }

        $grade = calculateGrade($nilai);
        $predikat = calculatePredikat($grade);

        echo "<tr>
                  <td>$key</td>
                  <td>$namaMahasiswa</td>
                  <td>$nilai</td>
                  <td>$grade</td>
                  <td>$predikat</td>
              </tr>";
    }

    $nilaiRataRata = $totalNilai / $jumlahMahasiswa;
    ?>

  </tbody>
  <tfoot>
    <tr>
      <td colspan="2">Total</td>
      <td><?= $nilaiTertinggi ?></td>
      <td><?= $nilaiTerendah ?></td>
      <td><?= number_format($nilaiRataRata, 2) ?></td>
    </tr>
    <tr>
      <td colspan="5">Jumlah Mahasiswa: <?= $jumlahMahasiswa ?></td>
    </tr>
  </tfoot>
</table>

</body>
</html>
