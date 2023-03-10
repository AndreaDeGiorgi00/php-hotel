

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Hotels</title>
</head>
<body>
    <form action="" >
        <div class="d-flex flex-column align-items-start">
            
            <input type="number" name="stars" >

            <select name="hasParking" >
                <option value="free">con e senza parcheggio</option>
                <option value="true">presenza di parcheggio</option>
                <option value="false">assenza di parcheggio</option>
            </select>

        </div>
        

        <button>filtra</button>
    </form>

    <div class="container border mt-5">
            <div class="row g-3 d-flex justify-content-between">
                <h3 class="col-2"> Name </h3>
                <h3 class="col-2"> Description </h3>
                <h3 class="col-2"> vote </h3>
                <h3 class="col-2"> parking </h3>
                <h3 class="col-2"> distance to the center </h3>
                
            </div>
            
    </div>
    <?php foreach($hotels as $hotel): ?>
        <div class="container border ">

        
         <!--controllo per permettere il filtraggio in base al parcheggio-->
            <?php if(!$_GET || $_GET['hasParking'] == 'true' &&   $hotel['parking'] || $_GET['hasParking'] == 'false' && !$hotel['parking'] || $_GET['hasParking'] == 'free') { ?>
         <!--controllo che permette il filtraggio attraverso il voto-->   
            <?php if(!$_GET || $hotel['vote'] > $_GET['stars']) { ?>

                <div class="row g-3 d-flex justify-content-between">
                    <h3 class="col-2"> <?php echo $hotel['name'] ?> </h3>
                    <h3 class="col-2"> <?php echo $hotel['description'] ?> </h3>
                    <h3 class="col-2"> <?php echo $hotel['vote'] ?> </h3>
                    <h3 class="col-2">

                        <?php if($hotel['parking']){ ?> 
                        presente

                        <?php } else{ ?>
                        assente
                        <?php }?>
                        
                    </h3>
                    <h3 class="col-2"> <?php echo $hotel['distance_to_center'] ?> </h3>
                    
                </div>
            <?php } ?>
            <?php } ?>
        </div>


    <?php endforeach; ?>
</body>
</html>


