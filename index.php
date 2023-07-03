<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Hotel</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
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
                if (empty($_GET['park']) && empty($_GET['voto'])) {
                    echo 'Hotels not found';
                } else {
                    foreach ($hotels as $key => $hotel) { ?>
                        <?php
                        if ($hotel['parking']) {
                            $hotel['parking'] = 'SI';
                        } else {
                            $hotel['parking'] = 'NO';
                        }
                        if ($_GET['park'] === $hotel['parking'] && $_GET['voto'] == $hotel['vote']) {
                        ?>
                            <tr>
                                <th scope="row"> <?php echo $key + 1 ?> </th>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?></td>
                            </tr>
                        <?php } elseif ($_GET['park'] === 'ALL' && $_GET['voto'] === 'ALL') {
                        ?>
                            <tr>
                                <th scope="row"> <?php echo $key + 1 ?> </th>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?></td>
                            </tr>
                        <?php  } ?>
                    <?php } ?>
                <?php } ?>

            </tbody>
        </table>
        <div class="form">
            <form action="./index.php" method="get">
                <label for="park"> Parcheggio</label>
                <select name="park" id="park">
                    <option selected disabled value="ALL">Choose Parking...</option>
                    <option value="SI">SI</option>
                    <option value="ALL">No Preferences</option>
                </select>

                <label for="voto"> Voto</label>
                <select name="voto" id="voto">
                    <option selected disabled value="ALL">Choose Vote...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="ALL">No Preferences</option>
                </select>
                <input type="submit" value="Cerca">
            </form>
        </div>
    </div>

</body>

</html>