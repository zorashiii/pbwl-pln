<h2>GOLONGAN</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn"><i class="fa-solid fa-circle-plus"></i> Input Golongan</a>

<table>
      <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>EDIT</th>
            <th>DELETE</th>

      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn"><i class="fa-solid fa-pen-to-square"></i> </a></td>
                  <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> </a></td>
            </tr>
      <?php $no++;
      } ?>

</table>