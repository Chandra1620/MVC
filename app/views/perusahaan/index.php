<h2>perusahaan</h2>

<a href="<?php echo URL; ?>/perusahaan/input" class="btn">Input Post</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NAMA PERUSAHAAN</th>
                  <th>ALAMAT</th>
                  <th>NO TELEPHONE</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['per_namaperusahaan']; ?></td>
                        <td><?php echo $row['per_alamat']; ?></td>
                        <td><?php echo $row['per_notelephone']; ?></td>
                        <td><a href="<?php echo URL; ?>/perusahaan/edit/<?php echo $row['per_id']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/perusahaan/delete/<?php echo $row['per_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>