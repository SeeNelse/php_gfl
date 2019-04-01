<?php

function addFunc(iWorkData $object, $key, $val)
{
  return $object->saveData($key, $val);
}

function getFunc(iWorkData $object, $key)
{
  return $object->getData($key);
}

function deleteFunc(iWorkData $object, $key)
{
  return $object->deleteData($key);
}
