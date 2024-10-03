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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon"
    href="data:image/png;base64,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">
  <title>PHP Hotel</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <h1>PHP Hotel</h1>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>