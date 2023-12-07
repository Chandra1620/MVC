<h2>Edit Nama Perusahaan</h2>

<form action="<?php echo URL; ?>/perusahaan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['per_id']; ?>">
    <table>
        <tr>
            <td>NAMA PERUSAHAAN</td>
            <td><input type="text" name="per_namaperusahaan" value="<?php echo $data['row']['per_namaperusahaan']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="per_alamat" value="<?php echo $data['row']['per_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO TELEPHONE</td>
            <td><input type="text" name="per_notelephone" value="<?php echo $data['row']['per_notelephone']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>