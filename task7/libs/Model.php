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
      '%SUCCESS_EMAIL%' => $_COOKIE["success_email"],
    ];
  }

  public function getArray()
  {
    return $this->placeholderArr; // !
  }

  public function checkForm()
  {
      $this->name = $this->nameCheck($this->name);
      $this->email = $this->mailCheck($this->email);
      $this->select = $this->selectCheck($this->select);
      $this->textarea = $this->textareaCheck($this->textarea);
      if (!$this->name || !$this->email || !$this->select || !$this->textarea)
      {
        return false;
      }
      $this->deleteValuesInArray();
      return true;
  }

  public function sendEmail()
  {
    $subject = 'Message from contact form'; //Загаловок сообщения
    $message = "
    First, Last name: $this->name \n
    E-mail: $this->email \n
    Subject: $this->select \n
    Message: $this->textarea";
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: <$this->email>\r\n";
    return mail(TO_Email, $subject, $message, $headers);
  }

  private function nameCheck($name) {
    $name = $this->cleaningValues($name);
    if (!$this->lengthCheck($name, 4, 30) || is_numeric($name) || !$name) {
      $this->placeholderArr['%ERROR_NAME%'] = 'Incorrect value';
      return false;
    }
    return $name;
  }

  private function mailCheck($mail) {
    $mail = $this->cleaningValues($mail);
    $mail = filter_var($mail, FILTER_VALIDATE_EMAIL);
    if ($mail) {
      return $mail;
    } else {
      $this->placeholderArr['%ERROR_EMAIL%'] = 'Incorrect value';
      return false;
    }
  }

  private function selectCheck($select) {
    
    if ($select == 'Please select' || !$select) {
      $this->placeholderArr['%ERROR_SELECT%'] = 'Incorrect value';
      return false;
    }
    forEach($this->getArray() as $key => $item) {
      if (stristr($key, 'select')) {
        if ($select == $item) {
          $this->placeholderArr[substr($key, 0, -1).'_selected%'] = 'selected';
          return $select;
        }
      }
    }
    return false;
  }

  private function textareaCheck($textarea) {
    $textarea = $this->cleaningValues($textarea);
    if (!$this->lengthCheck($textarea, 1, 1000)) { // поставить 10, 1000
      $this->placeholderArr['%ERROR_TEXTAREA%'] = 'Incorrect value';
      return false;
    }
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

  private function deleteValuesInArray() {
    $this->placeholderArr['%FORM_NAME%'] = '';
    $this->placeholderArr['%FORM_EMAIL%'] = '';
    $this->placeholderArr['%FORM_TEXTAREA%'] = '';
    $this->placeholderArr['%SELECT_1_selected%'] = '';
    $this->placeholderArr['%SELECT_2_selected%'] = '';
    $this->placeholderArr['%SELECT_3_selected%'] = '';
    setcookie('success_email', 'Message sent successfully!', time()+1);
    $_POST = [];
  }

}
