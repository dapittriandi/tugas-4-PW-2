<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <?php
    $multiDimensi =[
        [
           "Negara" => "Indonesia",
           "Ibukota" => "D.K.I Jakarta",
           "Kode Telepon" => "+62"

        ],
        [
           "Negara" => "Singapura",
           "Ibukota" => "Singapura",
           "Kode Telepon" => "+65"

        ],
        [
           "Negara" => "Malaysia",
           "Ibukota" => "Kuala Lumpur",
           "Kode Telepon" => "+60"

        ],
        [
           "Negara" => "Brunei",
           "Ibukota" => "Bandar Seri Begawan",
           "Kode Telepon" => "+673"

        ],
        [
           "Negara" => "Thailand",
           "Ibukota" => "Bangkok",
           "Kode Telepon" => "+66"

        ],
        [
           "Negara" => "Laos",
           "Ibukota" => "Vientiane",
           "Kode Telepon" => "+856"

        ],
        [
           "Negara" => "Filipina",
           "Ibukota" => "Manila",
           "Kode Telepon" => "+63"

        ],
        [
           "Negara" => "Myanmar",
           "Ibukota" => "Naypyidaw",
           "Kode Telepon" => "+95"

        ],
        ];

    ?>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Negara</th>
            <th>Ibukota</th>
            <th>Kode Telepon</th>
        </tr>

        <?php foreach ($multiDimensi as $NegaraAsean) { ?>
        <tr>
            <?php
                 echo "<td>".$NegaraAsean['Negara']."</td>";
                 echo "<td>".$NegaraAsean['Ibukota']."</td>";
                 echo "<td>".$NegaraAsean['Kode Telepon']."</td>";
            ?>
        </tr>
    <?php }; ?>
        
    </table>
</body>

</html>