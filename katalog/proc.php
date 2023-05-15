<?php
require "../connect.php";

if (isset($_POST['cat'])) {

    $cat = $_POST['cat'];
    if ($cat == 'semua') {
        // Jika mengambil semua
        $sql = "SELECT * FROM produk";
        $result = mysqli_query($con, $sql);

        // Memulai pembukaan tag div untuk row
        echo '<div class="row">';

        $counter = 1;

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-4'>
            <div class='card'>
                <img class='card-img-top' src='$row[gambar]' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[namaServis]</h5>
                    <p class='card-price'>Rp $row[harga]</p>
                    <a href='booking.php?id=".$row['id']."' class='btn btn-primary'>Lihat detail</a>
                </div>
            </div>
        </div>";

            if ($counter % 4 == 0) {
                // Menutup tag div setelah 4 kolom
                echo '</div><div class="row">';
            }
            $counter++;
        }
        // Menutup tag div untuk row
        echo '</div>';
    } else {
        $sql = "SELECT * FROM produk WHERE category = '$cat'";
        $result = mysqli_query($con, $sql);

        // Memulai pembukaan tag div untuk row
        echo '<div class="row">';

        $counter = 1;

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='col-lg-3 col-md-6 col-sm-12 mb-4'>
            <div class='card'>
                <img class='card-img-top' src='$row[gambar]' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[namaServis]</h5>
                    <p class='card-price'>Rp $row[harga]</p>
                    <a href='booking.php?id=".$row['id']."' class='btn btn-primary'>Lihat detail</a>
                </div>
            </div>
        </div>";

            if ($counter % 4 == 0) {
                // Menutup tag div setelah 4 kolom
                echo '</div><div class="row">';
            }
            $counter++;
        }
        // Menutup tag div untuk row
        echo '</div>';
    }
}
?>

