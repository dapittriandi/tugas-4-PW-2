<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora dan Fauna yang terancam punah</title>
</head>
<body>
<?php
// Membuat associative array dengan data flora dan fauna terancam punah
$floraFaunaTerancam = array(
    "Spesies 1" => array(
        "Nama" => "Harimau Sumatera",
        "Deskripsi" => "Satwa langka yang terancam punah",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../tugas2/assets/img/harimau_sumatra.jpeg"
    ),
    "Spesies 2" => array(
        "Nama" => "Orang utan Kalimantan",
        "Deskripsi" => "Primata terancam punah",
        "Lokasi Habitat" => "Kalimantan, Indonesia",
        "Populasi Tersisa" => "Kurang dari 104,700 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../tugas2/assets/img/orangutan_kalimantan.jpeg"
    ),
    "Spesies 3" => array(
        "Nama" => "Badak Jawa",
        "Deskripsi" => "Mamalia terancam punah",
        "Lokasi Habitat" => "Pulau Jawa, Indonesia",
        "Populasi Tersisa" => "Kurang dari 70 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../tugas2/assets/img/badak_jawa.jpeg"
    ),
    "Spesies 4" => array(
        "Nama" => "Gajah Sumatera",
        "Deskripsi" => "Gajah kecil yang terancam punah",
        "Lokasi Habitat" => "Pulau Sumatera, Indonesia",
        "Populasi Tersisa" => "Kurang dari 2,800 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../tugas2/assets/img/gajah_sumatra.jpeg"
    ),
    "Spesies 5" => array(
        "Nama" => "Harimau Amur",
        "Deskripsi" => "Satwa langka yang terancam punah",
        "Lokasi Habitat" => "Asia Timur",
        "Populasi Tersisa" => "Kurang dari 400 ekor",
        "Status Konservasi" => "Kritis",
        "Gambar" => "../tugas2/assets/img/harimau_amur.jpeg"
    ),
    "Spesies 6" => array(
        "Nama" => "Gajah Asia",
        "Deskripsi" => "Gajah Asia adalah mamalia besar yang ditemukan di berbagai bagian Asia. Mereka memiliki gading dan digunakan untuk kegiatan pertunjukan dan transportasi.",
        "Lokasi Habitat" => "Hutan, padang rumput, dan sungai di Asia",
        "Populasi Tersisa" => "Kurang dari 50.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/gajah_asia.jpeg"
    ),
    "Spesies 7" => array(
        "Nama" => "Harimau Siberia",
        "Deskripsi" => "Harimau Siberia adalah salah satu subspesies harimau yang ditemukan di wilayah Siberia, Rusia. Mereka memiliki bulu tebal untuk bertahan di iklim dingin.",
        "Lokasi Habitat" => "Hutan dan dataran rendah Siberia",
        "Populasi Tersisa" => "Kurang dari 600 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/harimau-siberia.jpeg"
    ),
    "Spesies 8" => array(
        "Nama" => "Orangutan",
        "Deskripsi" => "Orangutan adalah primata besar yang ditemukan di hutan-hutan tropis Asia Tenggara. Mereka sangat mirip dengan manusia.",
        "Lokasi Habitat" => "Hutan hujan tropis di Asia Tenggara",
        "Populasi Tersisa" => "Kurang dari 100.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/orangutan.jpeg"
    ),
    "Spesies 9" => array(
        "Nama" => "Panda Raksasa",
        "Deskripsi" => "Panda Raksasa adalah mamalia berbulu yang ditemukan di Tiongkok. Mereka dikenal dengan makanan utama mereka, bambu.",
        "Lokasi Habitat" => "Hutan bambu di Tiongkok",
        "Populasi Tersisa" => "Kurang dari 2.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/panda_raksasa.jpeg"
    ),
    "Spesies 10" => array(
        "Nama" => "Kura-kura Penyu Hijau",
        "Deskripsi" => "Kura-kura Penyu Hijau adalah jenis penyu laut yang ditemukan di berbagai perairan tropis. Mereka menghadapi ancaman dari perburuan dan hilangnya habitat.",
        "Lokasi Habitat" => "Perairan tropis di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 500.000 individu",
        "Status Konservasi" => "Rentan (Vulnerable)",
        "Gambar" => "../tugas2/assets/img/kura_kura_penyu_hijau.jpeg"
    ),
    "Spesies 11" => array(
        "Nama" => "Paus Biru",
        "Deskripsi" => "Paus Biru adalah mamalia laut terbesar di dunia dan ditemukan di perairan seluruh dunia. Mereka menghadapi ancaman perburuan dan penangkapan ilegal.",
        "Lokasi Habitat" => "Perairan laut di seluruh dunia",
        "Populasi Tersisa" => "Kurang dari 10.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/paus_biru.jpeg"
    ),
    "Spesies 12" => array(
        "Nama" => "Badak Hitam",
        "Deskripsi" => "Badak Hitam adalah salah satu dari dua spesies badak yang ditemukan di Afrika. Mereka terancam punah karena perburuan untuk gading mereka.",
        "Lokasi Habitat" => "Savanna dan hutan di Afrika",
        "Populasi Tersisa" => "Kurang dari 5.000 individu",
        "Status Konservasi" => "Kritis (Endangered)",
        "Gambar" => "../tugas2/assets/img/badak_hitam.jpeg"
    ),
    "Spesies 12" => array(
        "Nama" => "Komodo",
        "Deskripsi" => "Komodo adalah kadal raksasa yang ditemukan di Pulau Komodo, Indonesia. Mereka adalah karnivora dan predator puncak di ekosistem mereka.",
        "Lokasi Habitat" => "Pulau Komodo, Indonesia",
        "Populasi Tersisa" => "Kurang dari 4.000 individu",
        "Status Konservasi" => "Terancam (Endangered)",
        "Gambar" => "../tugas2/assets/img/komodo.jpeg"
    ),
    "Spesies 13" => array(
        "Nama" => "Penguin Raja",
        "Deskripsi" => "Penguin Raja adalah salah satu spesies penguin terbesar dan ditemukan di Antartika. Mereka memiliki warna bulu khas yang mencolok.",
        "Lokasi Habitat" => "Antartika",
        "Populasi Tersisa" => "Kurang dari 100.000 individu",
        "Status Konservasi" => "Rentan (Vulnerable)",
        "Gambar" => "../tugas2/assets/img/penguin_raja.jpeg"
    ),
);

// Mencetak tabel
?>

<h1 style="text-align: center;">Flora dan Fauna yang terancam punah</h1>
<table border='1' cellpadding="3" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Lokasi Habitat</th>
        <th>Populasi Tersisa</th>
        <th>Status Konversi</th>
        <th>Gambar</th>
    </tr>

    <?php 
    $nomor = 1;
    foreach ($floraFaunaTerancam as $spesies) {
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>" . $spesies["Nama"] . "</td>";
        echo "<td>" . $spesies["Deskripsi"] . "</td>";
        echo "<td>" . $spesies["Lokasi Habitat"] . "</td>";
        echo "<td>" . $spesies["Populasi Tersisa"] . "</td>";
        echo "<td>" . $spesies["Status Konservasi"] . "</td>";
        echo "<td><img src='" . $spesies["Gambar"] . "' alt='" . $spesies["Nama"] . "' width='100'></td>";
        echo "</tr>";
        $nomor++;
    };

    ?>
</table>
</body>
</html>

