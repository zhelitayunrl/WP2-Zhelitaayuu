<html>

<head>
    <title>Form input Mata kuliah</title>
</head>

<body>
    <center>
    <form action="<?= base_url('Matakuliah/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">Form Input Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MK</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode" placeholder="Required">
                    <div style="color: red;"> <?= form_error('kode'); ?></div>
                </td>
            </tr>
            <tr>
                <th>Nama MK</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Input">
                    <div  style="color: red;"> <?= form_error('nama'); ?></div>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <td><select name="sks" id="sks">
                <option value="">Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>

</html>