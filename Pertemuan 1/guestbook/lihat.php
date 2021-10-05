<?php
echo "<head><title> My Guest book</title></head>";
$fp = fopen("guestbook.txt", "r");
echo "<table border=0>";
while ($isi = fgets($fp, 80)) {
    $pisah = explode("|", $isi);
    echo "<td><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<td><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<td><td>Email </td><td>: $pisah[2]</td></tr>";
    echo "<td><td>Status </td><td>: $pisah[3]</td></tr>";
    echo "<td><td>Komentar </td><td>: $pisah[4]</td></tr>
    <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a href=tampilan.html> Klik Disini </a>Isi Form Buku Tamu";
?>