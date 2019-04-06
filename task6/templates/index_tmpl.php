<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Task 6</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light justify-content-between bg-secondary">
    <h3 class="navbar-brand text-light">Task 6 - Band</h3>
    <a href="https://github.com/SeeNelse/gfl_php_tasks/tree/master/task6" target="_blank" class="navbar__github"><img src="img/GitHub-Logo.png" alt="github"></a>
  </nav>
  <div class="container mt-4">
    <div class="row">
      <div class="col-12 mb-5">
        <h4>Band name: <?= $weedeatherName ?></h4>
        <h5>Genre: <?= $weedeatherGenre ?></h5>
        <h5>Members:</h5>
        <?php 
          forEach($weedeatherMembers as $key => $item) {
            ?>
              <ul>
              <li>Name: <?= $item['name'] ?></li>
              <li>Role: <?= $item['type'] ?></li>
              <li>Instrument: <?= $item['instrument'] ?></li>
              <?php 
                if ($item['front'])
                {
                  ?>
                    <li>Frontman</li>
                  <?php
                }
              ?>
              </ul>
            <?php
          }
        ?>
      </div>
      <div class="col-12">
        <h4>Band name: <?= $zeppelinName ?></h4>
        <h5>Genre: <?= $zeppelinGenre ?></h5>
        <h5>Members:</h5>
        <?php 
          forEach($zeppelinMembers as $key => $item) {
            ?>
              <ul>
              <li>Name: <?= $item['name'] ?></li>
              <li>Role: <?= $item['type'] ?></li>
              <li>Instrument: <?= $item['instrument'] ?></li>
              <?php 
                if ($item['front'])
                {
                  ?>
                    <li>Frontman</li>
                  <?php
                }
              ?>
              </ul>
            <?php
          }
        ?>
      </div>
    </div>
  </div>
  <h5 class="footer__name">Student 8, Dovzhenko Vladislav</h5>
</body>
</html>