<!DOCTYPE html>
<html>

<head>
  <title>Form Data Diri</title>
  <style>
    table {
      width: 50%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid black;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <h2>Form Data Diri</h2>

  <form method="POST" action="#" id="formData" onsubmit="submitForm(event)">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" /><br /><br />

    <label for="pekerjaan">Pekerjaan:</label>
    <select id="pekerjaan" name="pekerjaan">
      <option value="Pekerjaan 1">Pekerjaan 1</option>
      <option value="Pekerjaan 2">Pekerjaan 2</option>
      <option value="Pekerjaan 3">Pekerjaan 3</option>
      <!-- Tambahkan opsi pekerjaan hingga pekerjaan10 sesuai kebutuhan -->
    </select><br /><br />

    <label>Hobby:</label><br />
    <input type="radio" id="hobby1" name="hobby" value="Hobby 1" />
    <label for="hobby1">Hobby 1</label><br />

    <input type="radio" id="hobby2" name="hobby" value="Hobby 2" />
    <label for="hobby2">Hobby 2</label><br />

    <!-- Tambahkan radio button untuk hobby hingga hobby10 sesuai kebutuhan -->

    <br /><br />

    <input type="submit" value="Simpan" name="simpan" />
  </form>

  <div id="dataTabel"></div>

  <script>
    function submitForm(event) {
      event.preventDefault();

      const formData = new FormData(event.target);
      const nama = formData.get("nama");
      const pekerjaan = formData.get("pekerjaan");
      const hobby = formData.get("hobby");

      const tabelData = `
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>${nama}</td>
                    <td>${pekerjaan}</td>
                    <td>${hobby}</td>
                </tr>
            </table>
        `;

      document.getElementById("dataTabel").innerHTML = tabelData;
    }
  </script>
</body>

</html>