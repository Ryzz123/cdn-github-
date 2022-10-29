<?php
$title = "Belajar PHP WEB";
$array =[
  [
   "name" => "Febri Ananda Lubis",
   "umur" => "18",
   "url" => "https://source.unsplash.com/1000x600?computer"
  ],
  [
   "name" => "M Izzu Firdaus",
   "umur" => "21",
   "url" => "https://source.unsplash.com/1000x600?sports"
  ],
  [
    "name" => "Riski Firmansyah",
    "umur" => "19",
    "url" => "https://source.unsplash.com/1000x600?anime"
  ],
    [
    "name" => "Budi Santoso",
    "umur" => "22",
    "url" => "https://source.unsplash.com/1000x600?food"
  ],
    [
    "name" => "Rangga Septian",
    "umur" => "19",
    "url" => "https://source.unsplash.com/1000x600?naruto"
  ]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
</head>
<body>
  <div class="container pt-3">
    <div class="row">
        <?php foreach ($array as $data) : ?>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="card mb-4 bg-dark">
              <div class="card-head text-center text-white"><?= $data["name"] ?></div>
              <div class="card-body">
                <img style="width: 100%;" src="<?= $data["url"] ?>" alt="gambar">
                <p class="card-title text-white"><?= $data["umur"] ?></p>
                <p class="text-white card-content">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique saepe harum laboriosam veritatis quo ad, reprehenderit, ab facilis sunt, debitis suscipit expedita voluptatem quae qui aliquam autem dolorum eum maiores vitae soluta, ducimus quia eveniet. Praesentium voluptas doloremque, voluptates dolorum reiciendis consequuntur, vero repellendus dolores commodi nulla non voluptatibus laborum.
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card bg-dark">
            <div class="card-head text-white text-center">Source code</div>
            <div class="card-body">
              <img style="width: 100%;" src="https://i.ibb.co/WGk7TBk/Untitled.jpg" alt="">
            </div>
          </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>