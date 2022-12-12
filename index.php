<?php

// $paragraph = $_GET['newParagraph'];

$paragraph ='non Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, non omnis deleniti hic accusantium non corporis vitae, eveniet non necessitatibus reprehenderit porro blanditiis rem non fugit error. Fugiat ab reiciendis non facere nulla optio.';

$toCensure = $_GET['censure'];

$censored = ' *** ';

$testClass = "text-success";



?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main class="p-5">

  <!-- <form action="">
    <input type="text" name="newParagraph" placeholder="Inserisci paragrafo da analizzare">
  </form> -->

  <form action="" >
      <input class="w-100 p-2 text-primary mb-3" type="text" name="censure" placeholder="Inserisci parola da censurare">
  </form>

  <p class=" <?php echo $testClass ?>" >
    Lunghezza paragrafo:
    <?php echo strlen($paragraph) ?> 
    caratteri 
  </p>

  

  <p>
   <h5 class="d-inline">Paragrafo originale: </h5><?php echo $paragraph ?>
  </p>

  <p>
    <h5 class="d-inline">Paragrafo censurato :</h5> <?php echo str_replace($toCensure, $censored, $paragraph)?>
  </p>

    

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>