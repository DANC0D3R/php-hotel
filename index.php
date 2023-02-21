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
    $park = $_GET['parcheggio'];
    $rating = $_GET['voto'];
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
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            form > div{
                width:70%;
            }
            .dc-sel, .dc-btn, .dc-num{
                width:18%;

                margin:0 18px;
            }
        </style>
    </head>

    <body>
        <h1>Scegli il tuo Hotel</h1>
        <!-- Form -->
        <form method="GET">
            <div class="m-auto d-flex justify-content-center">
                <!-- Parcheggio -->
                <select name="parcheggio" class="form-select dc-sel" aria-label="Default select example">
                    <option value="" selected>Parcheggio Int.</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
                <!-- Voto -->
                <input type="number" min="1" max="5" name="voto" class="form-control dc-num" id="exampleFormControlInput1" placeholder="Voto min">
                <!-- Bottone Submit -->
                <button class="btn btn-info dc-btn" type="submit">Invia</button>
                <!-- Bottone Reset -->
                <input class="btn btn-warning dc-btn" type="reset" value="Reset">
            </div>
        </form>
        <!-- Tabella -->
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
            <!-- Se non vengono impostati parametri -->
            <?php if((empty($park) && empty($rating))){ ;?>
                <?php foreach($hotels as $hotel):?>
                    <tr>
                    <th scope="row"><?php echo $hotel['name']; ?></th>
                    <td><?php echo ($hotel['parking'])? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fa-solid fa-circle-xmark text-danger"></i>';?></td>
                    <td><?php echo $hotel['vote'] ?> ★</td>
                    <td><?php echo $hotel['distance_to_center'];?></td>
                    </tr>
                <?php endforeach; ?>
            
            <?php }
            // Altrimenti filtra la ricerca con parametri inseriti
            else { ?>
                <?php foreach($hotels as $key => $hotel){?>
                    <?php if($hotel['parking'] == $park && $hotel['vote'] >= $rating) {?>
                        <tr>
                            <th scope="row"><?php echo $hotel['name'] ;?></th>
                            <td><?php echo ($hotel['parking'])? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fa-solid fa-circle-xmark text-danger"></i>';?></td>
                            <td><?php echo $hotel['vote'] ;?></td>
                            <td><?php echo $hotel['distance_to_center'] ;?></td>
                        </tr>
            <?php } } } ?>
        </tbody>
    </body>
</html>