<?php
include_once 'dbkoneksi.php';

$sql = "SELECT * FROM prodi";
$rs = $dbh->query($sql);
?>

<table border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($rs as $row) {
            echo '<tr>';
            echo '<td>' . $nomor . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>