<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Task 4</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12 mb-5">
        <h2>Mysql</h2>
        <div class="type">
          <h5>Insert:</h5>
          <p><?= $mysqlInsertQuery; ?></p>
          <h6>Result:</h6>
          <p class="text-success"><?= $mysqlInsertResult ?></p>
        </div>
        <div class="item">
          <h5>Select:</h5>
          <p><?= $mysqlSelectQuery; ?></p>
          <h6>Result:</h6>
          <p class="text-success"><?= var_dump($mysqlSelectResult); ?></p>
        </div>
        <div class="item">
          <h5>Update:</h5>
          <p><?= $mysqlUpdateQuery ?></p>
          <h6>Result:</h6>
          <p class="text-success"><?= $mysqlUpdateResult ?></p>
        </div>
        <div class="item">
          <h5>Select:</h5>
          <p><?= $mysqlSelectUpdateQuery; ?></p>
          <h6>Result:</h6>
          <p class="text-success"><?= var_dump($mysqlSelectUpdateResult); ?></p>
        </div>
        <div class="item">
          <h5>Delete:</h5>
          <p><?= $mysqlDeleteQuery ?></p>
          <h6>Result:</h6>
          <p class="text-success"><?= $mysqlDeleteResult ?></p>
        </div>
        <div class="item">
          <h5>Result Mysql:</h5>
          <p><?= $mysqlSelectMysqlQuery ?></p>
          <p class="text-danger"><?=$mysqlSelectMysqlResult; ?></p>
        </div>
      </div>
      <div class="col-12">
        <h2>Postgresql</h2>
        <div class="type">
          <div class="item">
            <h5>Insert:</h5>
            <p><?= $psqlClassInsertQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-success"><?= $psqlClassInsertQueryResult ?></p>
          </div>
          <div class="item">
            <h5>Select:</h5>
            <p><?= $psqlClassSelectQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-success"><?= var_dump($psqlClassSelectResult); ?></p>
          </div>
          <div class="item">
            <h5>Update:</h5>
            <p><?= $psqlClassUpdateQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-success"><?= $psqlClassUpdateResult ?></p>
          </div>
          <div class="item">
            <h5>Select:</h5>
            <p><?= $psqlClassSelectUpdateQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-success"><?= var_dump($psqlClassSelectUpdateResult); ?></p>
          </div>
          <div class="item">
            <h5>Delete:</h5>
            <p><?= $psqlClassDeleteQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-success"><?= $psqlClassDeleteResult ?></p>
          </div>
          <div class="item">
            <h5>Select:</h5>
            <p><?= $psqlClassSelectMysqlQuery; ?></p>
            <h6>Result:</h6>
            <p class="text-danger"><?= $psqlClassSelectMysqlResult; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>