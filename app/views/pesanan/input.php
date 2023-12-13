<h2>Pesanan</h2>

<form action="<?php echo URL; ?>/pesanan/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>RASA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="detail" required></td>
        </tr>
        <tr>
            <td>WAKTU</td>
            <td><input type="text" name="kategori" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>