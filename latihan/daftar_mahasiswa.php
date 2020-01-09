<?php
include_once 'top.php';
require_once 'class_mahasiswa.php';
?>
<h2>Daftar Kegiatan</h2>
<?php
$obj_kegiatan = new Mahasiswa();
$rows = $obj_kegiatan->getAll();
?>
<table class="table">
    <thead>
        <tr class="active">
            <th>No</th>
            <th>Kode</th>
            <th>Judul Kegiatan</th>
            <th>Narasumber</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($rows as $row) {
            echo '<tr><td>' . $nomor . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td>' . $row['semester'] . '</td>';
            echo '<td>' . $row['kontribusi'] . '</td>';
            // echo '<td><a href="view_kegiatan.php?id=' . $row['id'] . '">View</a> |';
            // echo '<a href="form_kegiatan.php?id=' . $row['id'] . '">Update</a></td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
<?php
include_once 'bottom.php';
?>