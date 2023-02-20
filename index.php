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

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniele Minieri">
        <title>PHP Hotels</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- Stile -->
        <style>
            body{
                font-family: 'Phudu', cursive;
            }
            h1{
                text-align: center;

                margin: 20px auto;

                color: #FF385C;
            }
            th[scope="col"]{
                width: calc(100% / 4);

                font-weight: bold;

                color: #FF385C;
            }
            .dc-table{
                width: 70%;

                margin: 20px auto;
            }
        </style>
    </head>

    <body>
        <h1>Scegli il tuo Hotel</h1>

        <table class="table table-striped dc-table">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Parcheggio Interno</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro (km)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($hotels as $hotel):?>
                <tr>
                <th scope="row"><?php echo $hotel['name'] ?></th>
                <td><?php echo ($hotel['parking'])? 'Sì' : 'No';?></td>
                <td><?php echo $hotel['vote'] ?></td>
                <td><?php echo $hotel['distance_to_center'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </body>
</html>