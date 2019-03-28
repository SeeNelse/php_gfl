<?php

function addFunc(iWorkData $object, $key, $val)
{
  $object->saveData($key, $val);
}

function getFunc(iWorkData $object, $key)
{
  $object->getData($key);
}

function deleteFunc(iWorkData $object, $key)
{
  $object->deleteData($key);
}

?>