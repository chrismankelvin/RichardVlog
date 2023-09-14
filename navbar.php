<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="./inc/style.css">
  <link rel="stylesheet" href="./inc/static.css">
  <link rel="icon" type="image/svg+xml" href="./inc/images/logo.svg">


  <?php if (!$main_title) { ?>
    <title>
      Richard - Vlog1
    </title>
  <?php } else { ?>
    <title>
      <?php echo $main_title; ?>
    </title>
  <?php } ?>

</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">
      <a class="navbar-brand" href="./index.php">
        <img src="./inc/images/logo1.png" alt="REC Logo" width="50" height="50" class="d-inline-block align-top rounded-circle">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./service.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./meet.php">Meet</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>