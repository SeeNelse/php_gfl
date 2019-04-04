<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Task 9</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light justify-content-between bg-secondary">
    <h3 class="navbar-brand text-light">Task 9 - HTML-helper</h3>
    <a href="https://github.com/SeeNelse/gfl_php_tasks/tree/master/task9" target="_blank" class="navbar__github"><img src="img/GitHub-Logo.png" alt="github"></a>
  </nav>
  <div class="container mt-4">
    <h2 class="mb-5">Result</h2>
    <div class="row">
      <div class="col-3">
        <h5 class="mb-3">Select multiple</h5>
        <?= $selectMulti; ?>
      </div>
      <div class="col-3">
        <h5 class="mb-3">Select</h5>
        <?= $selectRegular; ?>
      </div>
      <div class="col-6">
        <h5 class="mb-3">Table</h5>
        <?= $table; ?>
      </div>
      <div class="col-12 mt-4 mb-4">
        <h5 class="mb-3">Discription &lt;dl&gt;-&lt;dt&gt;-&lt;dd&gt;</h5>
        <?= $descr; ?>
      </div>
      <div class="col-3">
        <h5 class="mb-3">List &lt;ul&gt;</h5>
        <?= $listUl; ?>
      </div>
      <div class="col-3">
        <h5 class="mb-3">List &lt;ol&gt;</h5>
        <?= $listOl; ?>
      </div>
      <div class="col-3 flex-column d-flex">
        <h5 class="mb-3">Checkbox</h5>
        <?= $inputsCheck; ?>
      </div>
      <div class="col-3 flex-column d-flex">
        <h5 class="mb-3">Radio</h5>
        <?= $inputsRadio; ?>
      </div>
    </div>
  </div>
</body>
</html>