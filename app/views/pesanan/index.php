<h2>Tambah Pesanan</h2>

<a href="<?php echo URL; ?>/pesanan/input" class="btn">Input Pesanan</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>RASA</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>WAKTU</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['rasa']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <td><?php echo $row['waktu']; ?></td>
                  <td><a href="<?php echo URL; ?>/pesanan/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pesanan/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are You Sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>