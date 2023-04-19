<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link di collegamento al cdn di bootstrtap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Titolo -->
    <title> Hotel </title>
</head>
<body class="bg-secondary">
    <!-- FORM -->
    <form action="index.php" method="GET" class="container-lg py-5">
        <div class="row">
            <div class="col-6 col-md-2 text-end">
                <label for="parking" class="col-form-label text-white fw-semibold">Parcheggio</label>
            </div>
            <div class="col-6 col-md-2">
                <select name="parking" id="parking" class="form-select w-75">
                    <option value="" selected></option>
                    <option value="true">Si</option>
                    <option value="false">No</option>
                </select>
            </div>

            <div class="col-6 col-md-2 text-end pt-2 pt-md-0">
                <label for="vote" class="col-form-label text-white  fw-semibold">Voto</label>
            </div>
            <div class="col-6 col-md-2 pt-2 pt-md-0">
                <input type="number" name="vote" id="vote" min="1" max="5" class="form-control w-75">
            </div>
            <div class="col-12 col-md-4 text-center pt-3 pt-md-0">
                <button type="submit" class="btn btn-dark">CERCA</button>
                <button type="reset" class="btn btn-light">ANNULLA</button>
            </div>
        </div>
    </form>

    <!-- TABELLA -->
    <table class="table table-dark container-lg">
        <thead>
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance</th>
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
                    ]
                ];

                $parkingFilter = null;
                if (!empty($_GET['parking'])) {
                    $parkingFilter = $_GET['parking'];
                }

                $voteFilter = null;
                if (!empty($_GET['vote'])) {
                    $voteFilter = $_GET['vote'];
                }

                $filteredHotels = [];
                foreach ($hotels as $hotel) {
                    if ($parkingFilter == '' || ($parkingFilter == 'true' && $hotel['parking'] == true) || ( $parkingFilter == 'false' && $hotel['parking'] == false ) ) {
                        if ($voteFilter == '' || $hotel['vote'] >= $voteFilter) {
                            $filteredHotels[] = $hotel;
                        }
                    }
                }

                foreach($filteredHotels as $hotel) { ?>
                <tr>
                    <th scope='row'><?php echo $hotel['name'] ?></th>
                    <td><?php echo $hotel['description'] ?></td>
                    <td><?php echo $hotel['parking']?'Si':'No' ?></td>
                    <td><?php echo $hotel['vote'] ?></td>
                    <td><?php echo $hotel['distance_to_center'] ?></td>
                </tr>
                
            <?php } ?>

        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>