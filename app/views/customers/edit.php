<h2>Edit Customers</h2>

<form action="<?php echo URL; ?>/customers/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id_cus']; ?>">
    <table>
        <tr>
            <td>USERNAME</td>
            <td><input type="text" name="username" value="<?php echo $data['row']['username']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" value="<?php echo $data['row']['email']; ?>" required></td>
        </tr>
        <tr>
            <td>NOMOR TELEPON</td>
            <td><input type="text" name="no_telepon" value="<?php echo $data['row']['no_telepon']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $data['row']['jenis_kelamin']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>