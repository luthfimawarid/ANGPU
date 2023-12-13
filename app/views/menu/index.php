<h2>Tambah Menu</h2>

<a href="<?php echo URL; ?>/menu/input" class="btn">Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>DETAIL</th>
            <th>KATEGORI</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/menu/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/menu/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Apakah Kamu Yakin?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>