<h2>Input Customers</h2>

<form action="<?php echo URL; ?>/customers/save" method="post">
    <table>
        <tr>
            <td>USERNAME</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="text" name="no_telepon" required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="text" name="jenis_kelamin" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>