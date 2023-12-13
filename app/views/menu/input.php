<h2>Menu</h2>

<form action="<?php echo URL; ?>/menu/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
            <td>DETAIL</td>
            <td><input type="text" name="detail" required></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="kategori" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>