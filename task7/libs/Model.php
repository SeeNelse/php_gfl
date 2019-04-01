<?php

class Model
{

  public function __construct()
  {
    $this->name = $_POST['first-last'];
    $this->email = $_POST['email'];
    $this->select = $_POST['select'];
    $this->textarea = $_POST['textarea'];

    $this->placeholderArr = [
      '%TITLE%' => 'Contact Form',
      '%ERRORS%' => 'Empty field',
      '%SELECT_NONE%' => 'Please select',
      '%SELECT_1%' => 'Subject 1',
      '%SELECT_2%' => 'Subject 2',
      '%SELECT_3%' => 'Subject 3',
      '%SELECT_1_selected%' => '',
      '%SELECT_2_selected%' => '',
      '%SELECT_3_selected%' => '',
      '%FORM_NAME%' => $this->name,
      '%FORM_EMAIL%' => $this->email,
      '%FORM_TEXTAREA%' => $this->textarea,
      '%ERROR_NAME%' => '',
      '%ERROR_EMAIL%' => '',
      '%ERROR_SELECT%' => '',
      '%ERROR_TEXTAREA%' => '',
    ];
  }

  public function getArray()
  {
    return $this->placeholderArr; // !
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

      $this->cleaningValuesInArray(); // !
      // $_POST = []; !
      return true;
    }
    return false;
  }

  public function sendEmail()
  {
    // return mail()
  }

  private function nameCheck($name) {
    $name = $this->cleaningValues($name);
    if (!$this->lengthCheck($name, 4, 30)) {
      return false;
    }
    $this->getArray()['%FORM_NAME%'] = $name;
    return $name;
  }

  private function mailCheck($mail) {
    $mail = $this->cleaningValues($mail);
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
    $textarea = $this->cleaningValues($textarea);
    if (!$this->lengthCheck($textarea, 1, 1000)) { // поставить 10, 1000
      return false;
    }
    $this->getArray()['%FORM_TEXTAREA%'] = $textarea;
    return $textarea;
  }

  private function cleaningValues($var) {
    $var = htmlspecialchars(stripslashes(strip_tags(trim($var))));
    return $var;
  }

  private function lengthCheck($var, $min, $max) {
    if (mb_strlen($var) < $min || mb_strlen($var) > $max) {
      return false;
    }
    return $var;
  }

  private function cleaningValuesInArray() {
    $this->placeholderArr['%FORM_NAME%'] = '';
    $this->placeholderArr['%FORM_EMAIL%'] = '';
    $this->placeholderArr['%FORM_TEXTAREA%'] = '';
  }

}
