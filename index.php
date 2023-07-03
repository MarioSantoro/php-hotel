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

foreach ($hotels as $key => $hotel) { ?>
    <?php
    if ($hotel['parking']) {
        $hotel['parking'] = 'vero';
    } else {
        $hotel['parking'] = 'falso';
    }
    ?>
    <div>
        <h1>
            Hotel <?php echo $key + 1; ?>
        </h1>
        <ul>
            <li>
                Nome :
                <?php echo $hotel['name']; ?>
            </li>
            <li>
                Descrizione :
                <?php echo $hotel['description']; ?>
            </li>
            <li>
                C'è parcheggio :
                <?php echo $hotel['parking']; ?>
            </li>
            <li>
                Voto :
                <?php echo $hotel['vote']; ?>
            </li>
            <li>
                Distanza dal centro :
                <?php echo $hotel['distance_to_center']; ?>
            </li>
        </ul>
    </div>
<?php } ?>