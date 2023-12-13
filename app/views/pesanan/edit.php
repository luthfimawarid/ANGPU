<h2>Edit</h2>

<form action="<?php echo URL; ?>/pesanan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>RASA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['rasa']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="detail" value="<?php echo $data['row']['jumlah']; ?>" required></td>
        </tr>
        <tr>
            <td>WAKTU</td>
            <td><input type="text" name="kategori" value="<?php echo $data['row']['waktu']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>