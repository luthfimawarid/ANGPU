<h2>Edit</h2>

<form action="<?php echo URL; ?>/menu/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td>DETAIL</td>
            <td><input type="text" name="detail" value="<?php echo $data['row']['detail']; ?>" required></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="kategori" value="<?php echo $data['row']['kategori']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>