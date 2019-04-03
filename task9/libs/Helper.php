<?php

class Helper
{
  public function select($data, $type = 'multiple') 
  {
    if (!gettype($data == 'array')) 
    {
      return false;
    }
    forEach($data as $item) {
      $selectItem .= "<option>$item</option>";
    }
    if ($type)
    {
      return "<select $type>$selectItem</select>";
    } else {
      return "<select>$selectItem</select>";
    }
  }

  public function table($data) 
  {
    if (!gettype($data == 'array')) 
    {
      return false;
    }

    //thead
    forEach($data['thead'] as $itemTh) 
    {
      $thead .= "<th>$itemTh</th>";
    }
    $thead = "<thead><tr>$thead</tr></thead>";

    //tbody
    forEach($data['tbody'] as $itemTr) {
      $tbody .= "<tr>";
      forEach($itemTr as $itemTd) {
        $tbody .= "<td>$itemTd</td>";
      }
      $tbody .= "</tr>";
    }
    $tbody = "<tbody>$tbody</tbody>";

    //tfoot
    forEach($data['tfoot'] as $key => $itemTd) 
    {
      if (gettype($itemTd) == 'array')
      {
        $tfoot .= "<td $key = ".$itemTd[1].">".$itemTd[0]."</td>";
      } else {
        $tfoot .= "<td>$itemTd</td>";
      }
    }
    $tfoot = "<tfoot><tr>$tfoot</tr></tfoot>";
    return "<table>$thead $tbody $tfoot</table>";
  }

  public function lists($data, $type = 'ul') {
    if (!$type == 'ul' || !$type == 'ol' || !gettype($data == 'array'))
    {
      return false;
    }
    forEach($data as $item) {
      $listItem .= "<li>$item</li>";
    }
    return "<$type>$listItem</$type>";
  }

  public function descr($data) {
    if (!gettype($data == 'array'))
    {
      return false;
    }
    forEach($data as $key => $item) {
      $descrItem .= "<dt>$key</dt><dd>$item</dd>";
    }
    return "<dl>$descrItem</dl>";
  }

  public function inputs($data, $type = 'radio') {
    if (!gettype($data == 'array') || $type != 'radio' && $type != 'checkbox')
    {
      return false;
    }
    forEach($data as $item) {
      $inputsItem .= "<label><input name='test' type=$type /> $item</label>";
    }
    return $inputsItem;
  }
}
