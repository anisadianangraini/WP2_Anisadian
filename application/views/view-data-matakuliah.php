<html>

<head>
    <tittle>Tampil Data Matakuliah</tittle>
</head>

<body>
    <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Matakuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?=$kode; ?>
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <?$nama; ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                       <?= $sks; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah'); ?>">kembali</a>   
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>

