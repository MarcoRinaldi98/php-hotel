<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Hotel</title>
</head>
<body class="bg-secondary">

    <form action="index.php" method="GET" class="container-lg py-5">
        <div class="row">
            <div class="col-6 col-md-2 text-end">
                <label for="parking" class="col-form-label text-white">Parcheggio</label>
            </div>
            <div class="col-6 col-md-2">
                <select name="parking" id="parking" class="form-select w-75">
                    <option value="" selected></option>
                    <option value="true">Si</option>
                    <option value="false">No</option>
                </select>
            </div>

            <div class="col-6 col-md-2 text-end pt-2 pt-md-0">
                <label for="vote" class="col-form-label text-white">Voto</label>
            </div>
            <div class="col-6 col-md-2 pt-2 pt-md-0">
                <select name="vote" id="vote" class="form-select w-75">
                    <option value="" selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-12 col-md-4 text-center pt-3 pt-md-0">
                <button type="submit" class="btn btn-dark">CERCA</button>
                <button type="reset" class="btn btn-light">ANNULLA</button>
            </div>
        </div>
    </form>


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

                foreach($hotels as $element) {
                    if ($element['parking']) {
                        echo "<tr>
                        <th scope='row'>" . $element['name'] . "</th>
                        <td>" . $element['description'] . "</td>
                        <td> Si </td>
                        <td>" . $element['vote'] . "</td>
                        <td>" . $element['distance_to_center'] . "</td>
                        </tr>";
                    } else {
                        echo "<tr>
                        <th scope='row'>" . $element['name'] . "</th>
                        <td>" . $element['description'] . "</td>
                        <td> No </td>
                        <td>" . $element['vote'] . "</td>
                        <td>" . $element['distance_to_center'] . "</td>
                        </tr>";
                    }
                }
            ?>

        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>