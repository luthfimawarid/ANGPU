<h2>Customers</h2>

<a href="<?php echo URL; ?>/customers/input" class="btn">Input Customers</a>

<table>
      <tr>
            <th>NO</th>
            <th>USERNAME</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>NOMOR TELEPON</th>
            <th>JENIS KELAMIN</th>
            <th>DELETED</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['no_telepon']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><a href="<?php echo URL; ?>/customers/edit/<?php echo $row['id_cus']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/customers/delete/<?php echo $row['id_cus']; ?>" class="btn">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>