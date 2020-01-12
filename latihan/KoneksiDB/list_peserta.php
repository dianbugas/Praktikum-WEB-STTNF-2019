<?php
include_once 'dbkoneksi.php';

$sql = "SELECT * FROM prodi";
$rs = $dbh->query($sql);
?>

<table border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($rs as $row) {
            echo '<tr>';
            echo '<td name="no">' . $nomor . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td> <a href="view_peserta.php?no=' . $row['nama'] . '">View</a> </td>';
            echo '<td> <a href="#">Update</a> </td>';
            echo '<td> <a href="#">Delete</a> </td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>