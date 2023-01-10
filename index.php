<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];
?>
</head>

<body>
    <table class="table">
        <thead class='table-primary'>
            <td>Nome</td>
            <td>Descrizione</td>
            <td>Parcheggio</td>
            <td>Media voti</td>
            <td>Distanza dal centro</td>
        </thead>
        <?php
            foreach ($hotels as $hotel) {
                echo ('<tr>');
                    echo ('<td>' .$hotel['name'] . '</td>');
                    echo ('<td>' .$hotel['description'] . '</td>');
                    echo ('<td>'); echo($hotel['parking'] ? 'Sì' : 'No'); echo('</td>');
                    echo ('<td>' .$hotel['vote'] . '</td>');
                    echo ('<td>' .$hotel['distance_to_center'] . '</td>');
                echo ('</tr>');
            }
        ?>
    </table>

</body>
</html>