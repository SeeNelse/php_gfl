<?php

class Model
{

  public function __construct()
  {
    $this->name = $_POST['first-last'];
    $this->email = $_POST['email'];
    $this->select = $_POST['select'];
    $this->textarea = $_POST['textarea'];
    $this->placeholderArr = [];
  }

  public function getArray()
  {
    return array(
      '%TITLE%' => 'Contact Form',
      '%ERRORS%' => 'Empty field',
      '%SELECT_NONE%' => 'Please select',
      '%SELECT_1%' => 'Subject 1',
      '%SELECT_2%' => 'Subject 2',
      '%SELECT_3%' => 'Subject 3',
      '%FORM_NAME%' => $_POST['first-last'],
      '%FORM_EMAIL%' => $_POST['email'],
      '%FORM_TEXTAREA%' => $_POST['textarea'],
      '%ERROR%' => 'ERROR!',
    );
  }

  public function checkForm()
  {
    if ($this->name && $this->email && $this->select && $this->textarea)
    {
      $this->name = $this->nameCheck($this->name);
      $this->email = $this->mailCheck($this->email);
      $this->select = $this->selectCheck($this->select);
      $this->textarea = $this->textareaCheck($this->textarea);
      if (!$this->name || !$this->email || !$this->select || !$this->textarea)
      {
        return false;
      }
      echo '<pre>'; echo var_export($_POST); echo'</pre>';
      $_POST = [];
      return true;
    }
    return false;
  }

  public function sendEmail()
  {
    // return mail()
  }

  private function cleaning($var) {
    $var = htmlspecialchars(stripslashes(strip_tags(trim($var))));
    return $var;
  }

  private function lengthCheck($var, $min, $max) {
    if (mb_strlen($var) < $min || mb_strlen($var) > $max) {
      return false;
    }
    return $var;
  }

  private function nameCheck($name) {
    $name = $this->cleaning($name);
    if (!$this->lengthCheck($name, 4, 30)) {
      return false;
    }
    $this->getArray()['%FORM_NAME%'] = $name;
    return $name;
  }

  private function mailCheck($mail) {
    $mail = $this->cleaning($mail);
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    if ($mail) {
      $this->getArray()['%FORM_EMAIL%'] = $mail;
      return $mail;
    } else {
      return false;
    }
  }

  private function selectCheck($select) {
    if ($select == 'Please select') {
      return false;
    }
    forEach($this->getArray() as $key => $item) {
      if (stristr($key, 'select')) {
        if ($select == $item) {
          return $select;
        }
      }
    }
    return false;
  }

  private function textareaCheck($textarea) {
    $textarea = $this->cleaning($textarea);
    if (!$this->lengthCheck($textarea, 1, 1000)) { // поставить 10, 1000
      return false;
    }
    $this->getArray()['%FORM_TEXTAREA%'] = $textarea;
    return $textarea;
  }

  // private function setCookies($arr) {
  //   setcookie('dataArray', serialize($arr), time()+10);
  //   // echo '<pre>'; echo var_export($_COOKIE); echo'</pre>';
  //   return true;
  // }
  
  // public function getCookies() {
  //   if ($_COOKIE['dataArray']) {
  //     $this->CookiesToArr();
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

  // private function CookiesToArr() {
  //   // unserialize($_COOKIE['dataArray']);
  //   if ($_COOKIE['dataArray']) {
  //     echo 1;
  //     return true;
  //   } else {
  //     echo 2;
  //     return false;
  //   }
  // }

}



