<h2>Input Perusahaan</h2>

<form action="<?php echo URL; ?>/Perusahaan/save" method="post">
    <table>
        <tr>
            <td>NAMA PERUSAHAAN</td>
            <td><input type="text" name="per_namaperusahaan" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="per_alamat" required></td>
        </tr>
        <tr>
            <td>NO TELEPHONE</td>
            <td><input type="text" name="per_notelephone" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>