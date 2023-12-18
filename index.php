<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
$count = 0;
?>




<table class="table">
  <thead>
    <tr>
        <?php foreach($hotels as $hotel){
            $count ++;
        }?>
      <th scope="col">HOTELS</th>
      <th scope="col"><?php echo $hotel["name"]; ?></th>
      <th scope="col"><?php echo $hotel["name"]; ?></th>
      <th scope="col"><?php echo $hotel["name"]; ?></th>
      <th scope="col"><?php echo $hotel["name"]; ?></th>
      <th scope="col"><?php echo $hotel["name"]; ?></th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php foreach($hotels as $hotel)?>
      <th scope="row">DESCRIPTION</th>
      <td><?php echo $hotel["description"]; ?></td>
      <td><?php echo $hotel["description"]; ?></td>
      <td><?php echo $hotel["description"]; ?></td>
      <td><?php echo $hotel["description"]; ?></td>
      <td><?php echo $hotel["description"]; ?></td>
    </tr>
    <tr>
    <?php foreach($hotels as $hotel)?>
      <th scope="row">PARKING</th>
      <td><?php echo $hotel["parking"]; ?></td>
      <td><?php echo $hotel["parking"]; ?></td>
      <td><?php echo $hotel["parking"]; ?></td>
      <td><?php echo $hotel["parking"]; ?></td>
      <td><?php echo $hotel["parking"]; ?></td>
    </tr>
    <tr>
    <?php foreach($hotels as $hotel)?>
      <th scope="row">VOTE</th>
      <td><?php echo $hotel["vote"]; ?></td>
      <td><?php echo $hotel["vote"]; ?></td>
      <td><?php echo $hotel["vote"]; ?></td>
      <td><?php echo $hotel["vote"]; ?></td>
      <td><?php echo $hotel["vote"]; ?></td>
    </tr>
    <tr>
    <?php foreach($hotels as $hotel)?>
      <th scope="row">DISTANCE TO CENTER</th>
      <td><?php echo $hotel["distance_to_center"]; ?></td>
      <td><?php echo $hotel["distance_to_center"]; ?></td>
      <td><?php echo $hotel["distance_to_center"]; ?></td>
      <td><?php echo $hotel["distance_to_center"]; ?></td>
      <td><?php echo $hotel["distance_to_center"]; ?></td>
    </tr>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</body>
</html>