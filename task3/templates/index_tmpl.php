<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task 3</title>
  <style>
    .container {
      width: 1000px;
      margin: 0 auto;
    }
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <?php if($objWrite->permCheck()) { ?>
  <div class="container">
    <div>
      <div>
        <h2>Изначальный файл:</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. In semper et ipsum vel porttitor.<br>
          Vestibulum convallis consequat laoreet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
          <br>
          Pellentesque non porta mauris. Nullam congue dolor in eleifend gravida. Aliquam tincidunt libero nunc, nec bibendum arcu lobortis sit amet.<br>
          Curabitur tristique urna in quam euismod, ut lacinia risus vestibulum.<br>
          <br>
          Sed sit amet cursus massa. Phasellus at aliquam justo. Duis nec tristique libero.<br>
          Praesent accumsan pulvinar dui, eu sagittis risus pretium a. Integer facilisis felis at blandit faucibus.<br>
          Morbi lacinia urna at pulvinar ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод setRow() - Замена строки</h2>
        <p>
          <?= $objWrite->setRow(1, 'Aliquam porttitor maximus magna, et pretium eros consequat nec.'); ?>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод setSymbol() - Замена буквы</h2>
        <p>
          <?= $objWrite->setSymbol(1, 2, 'B'); ?>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод getRow() - возврат строки</h2>
        <p>
          <?= $objRead->getRow(1); ?>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод getSymbol() - возврат символа</h2>
        <p>
          <?= $objRead->getSymbol(1, 2); ?>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод filePrint('row') - рендер файла построчно</h2>
        <p>
          <?= $objWrite->filePrint('row'); ?>
        </p>
      </div>
    </div>
    <div>
      <div>
        <h2>Метод filePrint('symb') - рендер файла побуквенно</h2>
        <p>
          <?= $objWrite->filePrint('symb'); ?>
        </p>
      </div>
    </div>
  </div>
  <?php } else { ?>
  <div class="container"><h2 class="error">Error - Permission denied</h2></div>
  <?php } ?>
</body>
</html>