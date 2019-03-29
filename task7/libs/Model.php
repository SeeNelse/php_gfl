<?php

class Model
{

  public function __construct()
  {
    $this->name = $_POST['first-last'];
    $this->email = $_POST['email'];
    $this->select = $_POST['select'];
    $this->textarea = $_POST['textarea'];
  }

  public function getArray()
  {
    return array('%TITLE%' => 'Contact Form', '%ERRORS%' => 'Empty field', '%SELECT_NONE%' => 'Please select', '%SELECT_1%' => 'Subject 1', '%SELECT_2%' => 'Subject 2', '%SELECT_3%' => 'Subject 3');
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
    if (!$this->lengthCheck($name, 5, 30)) {
      return false;
    }
    return $name;
  }

  private function mailCheck($mail) {
    $mail = $this->cleaning($mail);
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    return $mail;
  }

  private function selectCheck($select) {
    if ($select == 'Please select') {
      return false;
    }
    forEach($this->getArray() as $key => $item) {
      if (stristr($key, 'select')) {
        if ($select == $item) {
          return true;
        }
      }
    }
    return $select;
  }

  private function textareaCheck($textarea) {
    $textarea = $this->cleaning($textarea);
    if (!$this->lengthCheck($textarea, 10, 1000)) {
      return false;
    }
    return $textarea;
  }

}

